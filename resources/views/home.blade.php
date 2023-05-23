@extends('layout.app')

@section('content')
    <div class="container">
        <div class="row">
    @foreach ($comics as $comic)
        <div class="col-lg-4 col-md-6 col-sm-12">
            <div class="card mb-3">
                <img src="{{$comic['thumb']}}" alt="{{$comic['title']}}" class="card-image">

                <div class="card-body">
                    <h2 class="card-title">{{$comic['title']}}</h2>
                    {{-- <p class="card-description">{{$comic['description']}}</p> --}}
                    <p class="card-text">{{$comic['price']}}</p>
                </div>
            </div>
        </div>
    @endforeach
    </div>
</div>
@endsection
