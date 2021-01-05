@extends('layouts.main')

@section('content')
    <div class="container mx-auto px-4 pt-16">
        <div class="popular-movies">
            <h2 class="uppercase tracking-wider text-orange-500 text lg font-semibold"></h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">
                @foreach($movies as $movie)
                <div class="mt-8 movie">
                    <a href="{{route('movie.clicked', $movie->id)}}">
                        <img src="/img/movies/{{$movie->image}}" class="h-64 w-100">
                    </a>
                    <div class="mt-2">
                        <a href="{{route('movie.clicked', $movie->id)}}" class="text-lg mt-2 hover:text-gray-100">{{$movie->name}}</a>
                        <div class="flex items-center text-gray-400 hover:text-gray-100">
                            <a>გამოსვლის თარიღი: {{$movie->year}}</a>
                        </div>
                        <div class="text-gray-400 text-lg mt-2 hover:text-gray-100">
                            ჟანრი:@foreach($movie->tags as $tag)
                                <a href="{{route('genre', $tag->id)}}"> {{$tag->genre}}</a>
                            @endforeach
                        </div>
                        @can('update',$movie)
                            <div class="text-gray-400 text-lg mt-2 hover:text-gray-100">
                                <a href="{{route('update', $movie->id)}}" class="underline text-gray-900 dark:text-white">
                                    <i class="text-gray-400 text-lg mt-2 hover:text-gray-100">edit</i>
                                </a>
                                    <button type="submit" class="fa fa-trash btn-delete text-gray-400 text-lg mt-2 hover:text-gray-100" url="{{route('delete',$movie->id)}}"></button>
                            </div>
                        @endcan
                        @if(Auth::user())
                            <div>
                                <a href="{{route('like',$movie->id)}}" class="fa fa-thumbs-up text-gray-400 text-lg mt-2 hover:text-gray-100"></a>
                            </div>
                        @endif
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <script type="text/javascript">
        $(document).ready(function (){
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $(document).on('click', '.btn-delete', function (e){
                e.preventDefault();
                $this=$(this);
                $.ajax({
                    type: 'DELETE',
                    url: $this.attr('url'),
                    success: function (){
                        $this.closest('.movie').remove()
                    }
                });
            });
        });

    </script>
@endsection
