@extends('layouts.main')
@section('content')
    <div class="movie-info border-b border-gray-800">
        <div class="container mx-auto px-4 py-16 flex">
            <img src="/img/movies/{{$movie->image}}" class="h-64 w-100">
            <div class="ml-24 mx-32">
                <h2 class="text-4xl font-semibold text-gray-400">{{$movie->name}}</h2>
                <div class="mt-2">
                    <div class="flex items-center text-gray-400">
                        <a>გამოშვების წელი: {{$movie->year}}</a>
                    </div>
                    <div class="flex items-center text-gray-400">
                        <a>ჟანრი: {{$movie->genre}}</a>
                    </div>
                    <div class="flex items-center text-gray-400">
                        <a>ხანგრძლიობა: {{$movie->duration}}</a>
                    </div>
                    <div class="flex items-center text-gray-400">
                        <a>გახმოვანება: {{$movie->sound}}</a>
                    </div>
                    <div class="flex items-center text-gray-400">
                        <a>რეჟისორი: {{$movie->director}}</a>
                    </div>
                    <div class="flex items-center text-gray-400">
                        <a>მსახიობები: {{$movie->in_the_cast}}</a>
                    </div>
                    <h1 class="text-gray-400">აღწერა</h1>
                    <p class="text-gray-300 mt-8">
                      მოკლე აღწერა: {{$movie->description}}
                    </p>
                    <div class="flex items-center mt-12">
                        <iframe src="http://www.file.ge/player/playerjs.html?file={{$movie->movie_link}}"
                                typ="text/html" allowfullscreen="" style="border: medium none;" width="444" height="340" frameborder="0">
                        </iframe>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="movie-cast border-b border-gray-800"></div>
    <div class="container mx-auto px-4 py-16">
        <h2 class="text-4xl font-semibold">cast</h2>
    </div>
@endsection
