@extends('layouts.main')
@section('content')
    <div class="container mx-auto px-4 pt-16">
        <div class="popular-movies">
            <h2 class="uppercase tracking-wider text-orange-500 text lg font-semibold"></h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">
    @foreach($user->movies as $movie)
        <div class="mt-8">
            <a href="{{route('movie.clicked', $movie->id)}}">
                <img src="/img/movies/{{$movie->image}}" alt="parasite" class="h-64 w-100">
            </a>
            <div class="mt-2">
                <a href="{{route('movie.clicked', $movie->id)}}" class="text-lg mt-2 hover:text-gray-300">{{$movie->name}}</a>
                <div class="flex items-center text-gray-400">
                    <a>გამოსვლის თარიღი: {{$movie->year}}</a>
                </div>
                <div class="text-gray-400 text-lg mt-2 hover:text-gray-100">
                    ჟანრი:@foreach($movie->tags as $tag)
                        <a href="{{route('genre', $tag->id)}}"> {{$tag->genre}}</a>
                    @endforeach

                </div>
            </div>
        </div>
    @endforeach
            </div>
        </div>
    </div>
@endsection
