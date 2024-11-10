@extends('main')

@section('content')
    <!-- <h1>This is from publisher.blade.php</h1> -->
    <div class= "container">
    <div class="row g-3 mt-2 mb-4" id="filterable-cards">
            @foreach ($publishers as $publisher)
                <div class="col-4">
                    <div class="card" style="width:auto;">
                        <div class="card-body d-flex flex-column">
                            <div>
                                <h5 class="card-title">{{$publisher->name}}</h5>
                                <!-- <h6> by </h6> -->
                                <p class="card-text">{{$publisher->phone}}</p>
                                <a href="{{url('publisherdetail/'.$publisher->id)}}" class="btn btn-primary">Detail</a>
                            </div>
                            
                        </div>
                    </div>
                </div>
            @endforeach 
        </div>
    </div> 

@endsection
