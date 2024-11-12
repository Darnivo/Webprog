@extends('main')


@section('content')


    <!-- <div class="mx-auto text-center" style="width: 80%;">
        <h1 class="lead"> yes</h1>
    </div> -->

    <div class="container mx-auto mt-3" style="width: 80%;">

    <h1 class="h1 text-center display-5">{{$posts[0]->category->name}} Posts<h1>
    <hr class="border border-black opacity-100 mb-4 mt-1">

        @foreach ($posts as $post)
            <div class="card mb-3 mx-auto" style="max-width: 90vw;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <!-- <img src='/img/hero.jpeg' class="img-fluid rounded-start" alt="..."> -->
                        <img src="{{url($post->imageUrl)}}" class="img-fluid rounded-start" alt="..." style="height: 100%; width: auto; object-fit: cover;">
                    </div>

                    <div class="col-md-8">
                        <div class="card-body">
                            <!-- <span class="badge acc p-2 px-3">{{$post->category->name}}</span> -->
                            <h4 class="my-1 card-title fw-bold">{{$post->title}}</h5>
                            <!-- {{$post->id}} -->
                            <p class="fs-5">{{$post->published_at}}</p>
                            <h6 class="mb-4 fw-light">{{ Str::limit($post->content, 200, '...') }}</h6>
                            <div class="d-flex justify-content-end">
                                <a data-mdb-ripple-init class="btn acc2 text-white fw-bold p-2" href="{{url('post/'.$post->id)}}" role="button">Read More</a>
                                <!-- <button href="post/{id}" type="button" class="btn acc2 text-white fw-bold p-2">Read More</button> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>


@endsection