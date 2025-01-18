@extends('main')

@section('content')
<!-- skibidi home content <br> -->

<div class="container">
    <div class="h1">{{$product->name}} <br></div>
    <div class="h5 mb-4">Part of {{$product->productCategory->category_name}}</div>
    <img src="{{url($product->imageURL)}}" class="img-fluid" style="height: 200px; width: 50%; object-fit: cover;" alt="..."><br>
    

    Available stock = {{$product->stock}}<br>
    Price per unit = Rp {{number_format($product->price,0,'.',',')}}<br>

    Purchase product
    @if($product->stock == 0)
        <div class="alert alert-danger mt-3" role="alert">
            Product is out of stock.
        </div>
    @else
        @auth
        Your current balance = Rp {{number_format(Auth::user()->balance,0,'.',',')}}<br>
        @if(session('success'))
            <div class="alert alert-success mt-3">
            {{ session('success') }}
            </div>
        @endif
        @error('error')
            <div class="alert alert-danger mt-3">
            {{ $message }}
            </div>
        @enderror
        <form action="{{ route('product.purchase', ['id' => $product->id]) }}" method="post">
            @csrf
            <input type="number" name="quantity" id="quantity" min="1" max="{{$product->stock}}" value="1">
            <button type="submit" class="btn btn-primary">Purchase</button>
        </form>
        @endauth
    @endif

    @guest
    <div class="alert alert-danger mt-3" role="alert">
        You need to log in to purchase items.
    </div>
    @endguest
</div>

@endsection