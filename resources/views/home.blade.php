<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title','Laravel')</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>
<body>
    @include('partials.header')
    <main>
        <h1>Lista Fumetti</h1>

        <div class="card-container">
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
    </main>
</body>
</html>
