@extends('layouts.main')
@section('content')
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
@endsection
