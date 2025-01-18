@extends('main')

@section('content')
<div class="container w-50">
    <h2 class="text-center">Log in to your account</h1>

        <form method="POST" action="{{ route('login') }}">
            @csrf
            <!-- Username Input -->
            <div class="">
                <label for="username" class="form-label fs-5">Username:</label>
                <input type="text" id="username" name="username" class="form-control" required value="{{ old('username') }}">
                @error('username')
                <div class="text-danger mt-2">{{ $message }}</div>
                @enderror
            </div>

            <!-- Password Input -->
            <div class="mt-3">
                <label for="password" class="form-label fs-5">Password:</label>
                <input type="password" id="password" name="password" class="form-control" required>
                @error('password')
                <div class="text-danger mt-2">{{ $message }}</div>
                @enderror
            </div>

            <!-- General error message -->
            @if($errors->has('error'))
            <div class="text-danger mt-2">{{ $errors->first('error') }}</div>
            @endif

            <!-- Submit Button -->
            <div class="text-center mt-2">
                <button type="submit" class="btn btn-primary fw-bold px-4 fs-5 mt-4">Login</button>
            </div>

        </form>


</div>
@endsection