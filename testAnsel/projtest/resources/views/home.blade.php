@extends('main')


@section('content')
    <h1 class="text-center">Welcome to the home page</h1>
    <br>

    <div class="mx-auto" style="width: 80%;">
        <h1> this is inside </h1>

        <div class="row g-3 mt-2 mb-4" id="filterable-cards">
        @foreach($NGR as $tst)
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">{{$tst->{'Movie Name'} }}</h5>
                <p class="card-text">Movie rating = {{$tst->Rating}}/5</p>
                <p class="card-text">{{$tst -> {'Release-date'} }}</p>
            </div>
        </div>

        @endforeach
        </div>
    </div>

@endsection