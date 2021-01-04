@extends('layouts.main')

@section('content')
    <div class="container mx-auto px-4 pt-16">
        <div class="popular-movies">
            <h2 class="uppercase tracking-wider text-orange-500 text lg font-semibold"></h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">
                @foreach($movies as $movie)
                <div class="mt-8">
                    <a href="{{route('movie.clicked', $movie->id)}}">
                        <img src="/img/movies/{{$movie->image}}" class="h-64 w-100">
                    </a>
                    <div class="mt-2">
                        <a href="{{route('movie.clicked', $movie->id)}}" class="text-lg mt-2 hover:text-gray-100">{{$movie->name}}</a>
                        <div class="flex items-center text-gray-400">
                            <a>გამოსვლის თარიღი: {{$movie->year}}</a>
                        </div>
                        <div class="text-gray-400 text-lg mt-2 hover:text-gray-100">
                            ჟანრი:@foreach($movie->tags as $tag)
                                <a href="{{route('genre', $tag->id)}}"> {{$tag->genre}}</a>
                            @endforeach
                        </div>
                        @if(Auth::user())
                            <div>
                                <a href="{{route('like',$movie->id)}}" class="fa fa-thumbs-up"></a>
                            </div>
                        @endif
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
{{--    <script type="text/javascript">--}}
{{--        $(document).ready(function (){--}}
{{--            $.ajaxSetup({--}}
{{--                headers: {--}}
{{--                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')--}}
{{--                }--}}
{{--            });--}}
{{--            $(document).on('click', '.btn-like', function (e){--}}
{{--                e.preventDefault();--}}
{{--                $this=$(this);--}}
{{--                $.ajax({--}}
{{--                    type: 'POST',--}}
{{--                    url: $this.attr('url'),--}}
{{--                    success: function (){--}}
{{--                        $this.removeClass('fa-thumbs-up');--}}
{{--                        $this.addClass('fa-check');--}}
{{--                    }--}}
{{--                });--}}
{{--            });--}}

{{--            $(document).on('click', '.btn-liked', function (e){--}}
{{--                e.preventDefault();--}}
{{--                $this=$(this);--}}
{{--                $.ajax({--}}
{{--                    type: 'POST',--}}
{{--                    url: $this.attr('url'),--}}
{{--                    success: function (){--}}
{{--                        $this.removeClass('fa-check');--}}
{{--                        $this.addClass('fa-thumbs-up');--}}
{{--                    }--}}
{{--                });--}}
{{--            });--}}
{{--        });--}}

{{--    </script>--}}
@endsection
