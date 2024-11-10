@extends('main')

@section('content')
    <!-- <h1>This is from home.blade.php</h1> -->

    <div class="mx-auto" style="width: 55%;">
        <h2 class="mt-4 mx-auto px-3 py-1 bg-secondary text-white fw-normal">Book List</h1>
        <!-- <h1> test </h1> -->
        
        <div class="row g-3 mt-2 mb-4" id="filterable-cards">
            @foreach ($books as $book)
                <div class="col-3">
                    <div class="card" style="width:auto; min-height: 70vh;">
                        <img src="/img/cover.jpg" class="card-img-top" alt="...">
                        <div class="card-body d-flex flex-column">
                            <div>
                                <h5 class="card-title">{{$book->title}}</h5>
                                <h6> by </h6>
                                <p class="card-text">{{$book->author}}</p>
                            </div>
                            <a href="{{url('bookDetail/'.$book->id)}}" class="btn btn-primary mt-auto align-self-start">Detail</a>
                        </div>
                    </div>
                </div>
            @endforeach 
        </div>

    </div>



@endsection
