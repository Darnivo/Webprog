@extends('main')

@section('content')
    
    @if($posts->isEmpty())
        <div class="container mx-auto mt-3" style="width: 90%;">
            <h1 class="text-center display-3 my-3">No posts found that contains "{{ $searchTerm }}"</h1>
        </div>
    @else
        <ul>

        <div class="container mx-auto mt-3" style="width: 90%;">
            <h1 class="text-center display-3">Search Results for "{{ $searchTerm }}"</h1>
            <hr class="border border-black opacity-100">
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
                                <p class=>{{$post->published_at}}</p>
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
        </ul>
    @endif
@endsection
