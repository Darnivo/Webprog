@extends('main')


@section('content')
    <h1 class="text-center">Welcome to the by loc page</h1>
    <h1 class="display-3">{{$res[0]->Location}}</h1>

    <div class="row g-3 mt-2 mb-4" id="filterable-cards">
        @foreach($res as $tst)
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">{{$tst->{'Movie Name'} }}</h5>
                <p class="card-text">Movie rating = {{$tst->Rating}}/5</p>
                <p class="card-text">{{$tst -> {'Release-date'} }}</p>
            </div>
        </div>
        @endforeach
@endsection
