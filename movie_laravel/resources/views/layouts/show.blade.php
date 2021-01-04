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
                    <div class="items-center text-gray-400 text-lg mt-2 hover:text-gray-100">
                        ჟანრი:@foreach($movie->tags as $tag)
                            <a href="{{route('genre', $tag->id)}}"> {{$tag->genre}} </a>
                        @endforeach
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
        <div class="container mx-auto px-4 pt-16">
            <div class="popular-movies">
                <h2 class="uppercase tracking-wider text-orange-500 text lg font-semibold"></h2>
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">
                    @foreach($actors as $actor)
                        <div class="mt-8">
                            <a
                                class="text-lg mt-2 hover:text-gray-100">{{$actor->actor}}
                            </a>
                            <a>
                                <img src="/img/actors/{{$actor->actor_image}}" class="h-64 w-100">
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
