@extends('main')

@section('content')
<!-- skibidi home content <br> -->

<div class="container">
    <div class="row">
        <div class="col-12 mb-3 h3 ">
            Total number of products = {{ $numberOfProducts }}
        </div>
    </div>
    <div class="row">
        @foreach ($products as $product)
        <div class="col-md-3 mb-4 d-flex justify-content-center">
            <div class="card w-100">
                <img src="{{ url($product->imageURL) }}" class="card-img-top" style="height: 200px; width: 100%; object-fit: cover;" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{$product->name}} {{$product->id}}</h5>
                    <p class="card-text">
                        {{$product->productCategory->category_name}}<br>
                        Price = {{$product->price}} <br>
                        Stock = {{$product->stock}}
                    </p>
                    <a href="{{route('product', $product->id)}}" class="btn btn-primary">Product detail</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

<nav aria-label="Page navigation" class="mt-3 ms-auto d-flex justify-content-end">
    {{ $products->links('pagination::bootstrap-5') }}
</nav>


@endsection