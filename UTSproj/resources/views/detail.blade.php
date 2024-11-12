@extends('main')


@section('content')

<!-- <div class="flex-fill" style="background-color: #E4E4E4FF;">
    <div class="d-flex flex-fill my-auto mx-5" style="background-color: #FFFFFFFF;">
        yes
    </div>    
</div> -->

<div class="d-flex flex-column flex-fill">
    <!-- Main Content Area -->
    <div class="d-flex flex-fill justify-content-center" style="background-color:#E1DEE3;">
        <div class="d-flex w-100">
            <!-- Left Column -->
            <div class="flex-grow-1">
                <!-- Left content here -->
            </div>

            <!-- Center Column (Main column, stretching to fill the space) -->
            <div class="flex-grow-2 bg-white py-2" style="width: 70%;">
                <div class="mx-4 mt-2">
                    <h1 class="h1">{{$post->title}}<h1>
                    <!-- <h4 class="h5 fw-lighter">Posted {{$post->published_at}} | By {{$post->author}}<h2> -->
                    
                    <div class="d-flex justify-content-between align-items-center">
                        <h4 class="h5 fw-lighter">Posted {{$post->published_at}} | By {{$post->author}}</h4>
                        <span class="badge acc me-3 p-2 fs-6">{{$post->category->name}}</span>
                    </div>
                    <div class="mt-3 mx-auto" style="width: 75%;">
                        <img src="{{url($post->imageUrl)}}" class="img-fluid" alt="..." style="min-width: 100%; max-height:60vh; object-fit: cover;">
                    </div>

                    <hr class="border border-2 opacity-100">

                    <p class=" h4 fw-light">{{$post->content}}</p>

                    <div class="d-flex justify-content-end">
                        <a data-mdb-ripple-init class="btn acc2 text-white fw-bold p-2 mt-3 mb-1" href="/" role="button">Go home</a>
                    </div>

                </div>
            </div>

            <!-- Right Column -->
            <div class="flex-grow-1">
                <!-- Right content here -->
            </div>
        </div>
    </div>
</div>




@endsection