@extends('main')

@section('content')
<div class="container w-50">
    <h2 class="text-center">Make an account</h1>

        <form method="POST" action="{{ route('register') }}">
            @csrf
            <!-- username -->
            <div class="">
                <label for="username" class="form-label fs-4">Username:</label>
                <input type="text" id="username" name="username" class="form-control" required value="{{ old('username') }}">
                @error('username')
                <div class="text-danger mt-2">{{ $message }}</div>
                @enderror
            </div>

            <!-- pw -->
            <div class="">
                <label for="password" class="form-label fs-4">Password:</label>
                <div class="input-group">
                    <input type="password" id="password" name="password" class="form-control" required>
                </div>
                @error('password')
                <div class="text-danger mt-2">{{ $message }}</div>
                @enderror
            </div>

            <!-- button -->
            <div class="text-center mt-2">
                <button type="submit" class="btn btn-primary fw-bold px-4 fs-5 mt-4">Register</button>
            </div>
            
            <!-- error msgs -->
            @if($errors->has('error'))
            <div class="text-danger mt-3">{{ $errors->first('error') }}</div>
            @endif

        </form>


</div>
@endsection