@extends('main')

@section('content')
<!-- skibidi home content <br> -->

<div class="container">
    <div class="row">
        <div class="col-12 mb-3 h3 ">
            Found {{ $numberOfProducts }} Products with title containing "{{$keyword}}".
        </div>
    </div>
    <div class="row">
        @if($numberOfProducts == 0)
        <div class="col-12 mb-3 h3 ">
            No products found matching search term.
        @else
            @foreach ($products as $product)
            <div class="col-md-3 mb-4 d-flex justify-content-center">
                <div class="card w-100">
                    <img src="{{url($product->imageURL)}}" class="card-img-top" style="height: 200px; width: 100%; object-fit: cover;" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{$product->name}} {{$product->id}}</h5>
                        <p class="card-text">
                            Price = {{$product->price}} <br>
                            Stock = {{$product->stock}}
                        </p>
                        <a href="{{ url('product/' . $product->id) }}" class="btn btn-primary">Product detail</a>
                    </div>
                </div>
            </div>
            @endforeach
        @endif
    </div>
</div>

@endsection