@extends('main')

@section('content')
    <!-- <h1>This is from home.blade.php</h1> -->

    <div class="mx-auto" style="width: 55%;">
        <h2 class="mt-4 mx-auto px-3 py-1 bg-secondary text-white fw-normal">Book Detail</h1>
        <!-- <h1> test </h1> -->
        <div class="container">
            <div class="d-flex justify-content-center">
                <img src="/img/cover.jpg" class="card-img-top" alt="..." style="width: 80%;">
            </div>
            <h4 class ="mt-4 text-start fw-normal"> Title: {{$book->title}} </h4>
            <h6 class = "mt-4"> Author: {{$book->author}} </h6>
            <h6> Publisher: {{$book->publisher->name}} </h6>
            <h7> Year: {{$book->year}} </h7>
            <p> Synopsis: </p>
            <p class="mb-4">{{$book->synopsis}} </p>
        </div>

    </div>



@endsection
