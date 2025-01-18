@extends('main')

@section('content')
<!-- skibidi home content <br> -->

<div class="container">
    <span class="h3"> Top up balance</span>

    @auth
    <br>
    <span> Your current balance: Rp {{ number_format(Auth::user()->balance, 0, ',', '.') }}</span> <br>
    <div class="mb-4"><span> You currently have {{Auth::user()->points}} Points</span></div>
    <span> You can redeem points 10000 points for Rp 10.000 </span> <br>

    @if(session('success'))
    <div class="alert alert-success mt-3" role="alert">
        {{ session('success') }}
    </div>
    @endif

    <form method="POST" action="{{ route('redeem') }}">
        @csrf
        @if(Auth::user()->points >= 10000)
            You have enough points to redeem something <br>
            <button type="submit" class="btn btn-primary">Redeem Points</button>
        @else
            <div class="alert alert-dark mt-4">You do not have enough points.</div>
        @endif
    </form>
    @endauth

    @guest
    <div class="alert alert-danger mt-3" role="alert">
        You need to log in to redeem points.
    </div>
    @endguest

</div>


@endsection