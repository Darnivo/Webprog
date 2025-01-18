<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\ProductCategory;

class ProductController extends Controller
{
    public function showProducts(){
        $products = Product::paginate(6);
        $numberOfProducts = Product::count();

        return view('home')->with([
            'products' => $products,
            'numberOfProducts' => $numberOfProducts
        ]);
    }

    public function showProductsOfCategory($id){
        $products = Product::where('category_id', $id)->get();
        $numberOfProducts = $products->count();

        return view('category')->with([
            'products' => $products,
            'numberOfProducts' => $numberOfProducts
        ]);
    }

    public function showProduct($id){
        $product = Product::find($id);

        return view('product')->with([
            'product' => $product
        ]);
    }
    public function purchaseProduct(Request $request, $id){
        $product = Product::find($id);
        $user = $request->user();
        $quantity = $request->quantity ?? 1;
        $totalPrice = $product->price * $quantity;

        if($user->balance < $totalPrice){
            return back()->withErrors([
                'error' => 'You do not have enough balance to purchase this product.'
            ]);
        }

        $user->balance -= $totalPrice;
        $user->points += $totalPrice/100;
        $user->save();

        $product->stock -= $quantity;
        $product->save();

        // Create purchase without user_id
        $user->purchases()->create([
            'customer_id' => $user->id,   // use customer_id, not user_id
            'product_id' => $product->id,
            'quantity' => $quantity
        ]);

        return redirect()->route('product', $product->id)->with([
            'success' => 'Product purchased., You gained ' . $totalPrice/100 . ' points.'
        ]);
    }
    


    public function showUploadForm(){
        $categories = ProductCategory::all();

        return view('uploadProduct')->with([
            'categories' => $categories
        ]);
    }
    public function uploadProduct(Request $request){
        $request->validate([
            'name' => 'required|string| max:255',
            'category_id' => 'required|numeric',
            'price' => 'required|numeric|min:1000|max:200000',
            'stock' => 'required|numeric',
            'image' => 'required|image'
        ]);

        $imagePath = 'storage/' . $request->file('image')->storeAs(
            'img/products', 
            uniqid() . '.' . $request->file('image')->extension(), 
            'public'
        );
        
        Product::create([
            'name' => $request->name,
            'category_id' => $request->category_id,
            'price' => $request->price,
            'stock' => $request->stock,
            'imageURL' => $imagePath
        ]);

        return back()->with([
            'success' => 'Product uploaded.'
        ]);

    }



    public function searchProduct(Request $request){


        $keyword = $request->query('keyword');
        $products = Product::where('name', 'like', '%' . $keyword . '%')->get();
        $numberOfProducts = $products->count();

        return view('search')->with([
            'products' => $products,
            'numberOfProducts' => $numberOfProducts,
            'keyword' => $keyword
        ]);
    }

}
