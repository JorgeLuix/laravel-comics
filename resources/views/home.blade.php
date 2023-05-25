@extends('layout.app')

@section('content')
    <div class="container text-center">
        <div class="row">
            @foreach ($comics as $comic)
            <div class="col-12 col-md-6 col-lg-2 mb-4">
                <div class="jc-card">
                    <img src="{{$comic['thumb']}}" alt="{{$comic['title']}}" class="">

                    <div class="cards-body">
                        <h2 class="card-title">{{$comic['title']}}</h2>
                        {{-- <p class="card-description">{{$comic['description']}}</p> --}}
                        <div class="price-play">
                        <p class="card-text">{{$comic['price']}}</p>
                        </div>
                    </div>
                </div>
            </div>

            @endforeach
        </div>
        <button class="text-uppercase btn btn-primary">load more</button>
    </div>
@endsection

<style lang="scss">
    /* .card-container {
  display: flex;
  justify-content: center;
  text-align: center
 } */
    .jc-card {
      width: 100%;
      transition: all ease 0.4s;
      border-radius: 5px;

      .cards-body {
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        padding: 1rem;
        color: white;
      }
      .card-title {
        font-size: 1rem;
        font-weight: bold;
        margin-bottom: 0.5rem;
        white-space: wrap;
        overflow: hidden;
        text-overflow: ellipsis;
        text-align: center;
      }

      .price {
        font-size: 1.2rem;
        font-weight: bold;
        text-align: center;
      }

    }
    .jc-card:hover{
        cursor: pointer;
        background-color:  #252525;
      }
      .jc-card img{
        width: 100%;
        border-radius: 8px;
        padding-top: 8px;
      }
      .price-play {
        position: relative;
      }
      .price{
        position: absolute;
        right: 10px;
        bottom: 10px;
        padding: 18px;
        background-color: #99E32D;
        border-radius: 100%;
        opacity: 0;
        transition: all ease 0.4s;
      }
      .jc-card:hover .price-play .price{
        opacity: 1;
        transform: translateY(-20px);
      }
    </style>
