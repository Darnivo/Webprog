@extends('main')


@section('content')


    <!-- <div class="mx-auto text-center" style="width: 80%;">
        <h1 class="lead"> yes</h1>
    </div> -->

    <div class="bg-image" style="background-image: url('/img/hero.jpeg');background-size: cover; min-height:20rem;">
        <div class="mask" style="background-color: rgba(0, 0, 0, 0.5);">

            <div class="d-flex flex-column h-100 ms-4">
                
                <div class="text-white flex-fill mt-2">
                    <div class="badge acc text-wrap mt-3 px-2 pt-2">
                        <p class="h6">Category</p>
                    </div>
                    <h1 class="mt-2">Post title</h1>
                    <h4 class="mb-3 fw-light">Text bla bla bla yes yes skibidi</h4>
                    <!-- <a data-mdb-ripple-init class="btn btn-outline-light btn-lg" href="#!" role="button">Call to action</a> -->
                </div>

                <div class="ms-auto me-4 text-white py-3 mb-2">
                    <a data-mdb-ripple-init class="btn btn-outline-light btn-lg" href="#!" role="button">Button</a>
                </div>
            </div>
        </div>
    </div>

    
    

    <div class="container mx-auto mt-3" style="width: 80%;">
        @foreach ($posts as $post)
            <div class="card mb-3 mx-auto" style="max-width: 90vw;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <!-- <img src='/img/hero.jpeg' class="img-fluid rounded-start" alt="..."> -->
                        <img src="{{url($post->imageUrl)}}" class="img-fluid rounded-start" alt="..." style="height: 100%; width: auto; object-fit: cover;">
                    </div>

                    <div class="col-md-8">
                        <div class="card-body">
                            <span class="badge acc p-2 px-3">{{$post->category->name}}</span>
                            <h4 class="my-1 card-title fw-bold">{{$post->title}}</h5>
                            <p class=>{{$post->published_at}}</p>
                            <h6 class="mb-4 fw-light">{{ Str::limit($post->content, 200, '...') }}</h6>
                            <div class="d-flex justify-content-end">
                                <button type="button" class="btn acc2 text-white fw-bold p-2">Read More</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach


        <nav aria-label="Page navigation" class="mt-3 me-5 ms-auto d-flex justify-content-end">
            {{ $posts->links('pagination::bootstrap-4') }}
        </nav>


    </div>


@endsection