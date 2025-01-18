@extends('main')

<!-- (name) Name of product		> text box 
(category_id) Category of product	> dropdown menu
(price) Price				> number
(stock) Stock				> number
(imageURL) Image			> image upload, rename and then store in 	 -->

@section('content')
<div class="container w-50">
    <h2 class="text-center">Insert new product</h1>

        @if(session('success'))
        <div class="alert alert-success mt-3">
            {{ session('success') }}
        </div>
        @endif

        <form method="POST" action="{{ route('upload.submit') }}" enctype="multipart/form-data">
            @csrf
            <!-- Name of product -->
            <div class="">
                <label for="name" class="form-label fs-5">Name of product:</label>
                <input type="text" id="name" name="name" class="form-control" required value="{{ old('name') }}">
                @error('name')
                <div class="text-danger mt-2">{{ $message }}</div>
                @enderror
            </div>
            <!-- Category of product -->
            <div class="mt-3">
                <label for="category_id" class="form-label fs-5">Category of product:</label>
                <select id="category_id" name="category_id" class="form-select" required>
                    <option value="">Select category</option>
                    @foreach ($categories as $category)
                    <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }}>
                        {{ $category->category_name }}
                    </option>
                    @endforeach
                </select>
                @error('category_id')
                <div class="text-danger mt-2">{{ $message }}</div>
                @enderror
            </div>

            <!-- Price & stock -->
            <div class="mt-3">
                <div class="row">
                    <div class="col">
                        <label for="price" class="form-label fs-5">Price:</label>
                        <input type="number" id="price" name="price" class="form-control" required value="{{ old('price') }}">
                        @error('price')
                        <div class="text-danger mt-2">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col">
                        <label for="stock" class="form-label fs-5">Stock:</label>
                        <input type="number" id="stock" name="stock" class="form-control" required value="{{ old('stock') }}">
                        @error('stock')
                        <div class="text-danger mt-2">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </div>

            <!-- Image -->
            <div class="mt-3">
                <label for="image" class="form-label fs-5">Image:</label>
                <input type="file" id="image" name="image" class="form-control" required accept="image/*">
                @error('image')
                <div class="text-danger mt-2">{{ $message }}</div>
                @enderror
            </div>

            <!-- Submit button -->
            <div class="text-center mt-2">
                <button type="submit" class="btn btn-primary fw-bold px-4 fs-5 mt-4">Insert</button>
            </div>



        </form>


</div>
@endsection