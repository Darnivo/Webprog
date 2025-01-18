@extends('main')

@section('content')
<!-- skibidi home content <br> -->

<div class="container">
    <span class="h3"> Top up balance</span>

    @auth
    <span> Your current balance: Rp {{ number_format(Auth::user()->balance, 0, ',', '.') }}</span>

    @if(session('success'))
    <div class="alert alert-success mt-3" role="alert">
        {{ session('success') }}
    </div>
    @endif

    <form method="POST" action="{{ route('topup') }}">
        @csrf
        <div class="mb-3">
            <label for="amount" class="form-label">Amount to top up (1k to 1Mill):</label>
            <input type="number" class="form-control" id="amount" name="amount" required>
            @error('amount')
            <div class="text-danger mt-2">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Top up</button>
    </form>
    @endauth

    @guest
    <div class="alert alert-danger mt-3" role="alert">
        You need to log in to top up your balance.
    </div>
    @endguest

</div>


@endsection