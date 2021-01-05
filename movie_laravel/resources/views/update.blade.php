@extends('layouts.main')
@section('content')
    <div class="bg-gray-800  text-white mx-64">
        <div class="cox-header with-border">
            <h3 class="box-title mx-32">ფილმის დამატება</h3>
        </div>
        <form method="POST" enctype="multipart/form-data" action="{{route('update_save',$movie->id)}}">
            @method('PUT')
            <div class="box-body">
                <div class="form-group">
                    <input type="text" class="bg-gray-700 rounded-full w-64 px-4 py-1" placeholder="name" name="name" value="{{old('name', $movie->name)}}">
                </div>
                <div class="form-group">
                    <input type="text" class="bg-gray-700 rounded-full w-64 px-4 py-1" placeholder="year" name="year" value="{{old('year', $movie->year)}}">
                </div>
                <div class="form-group">
                    <input type="text" class="bg-gray-700 rounded-full w-64 px-4 py-1" placeholder="duration" name="duration" value="{{old('duration', $movie->duration)}}">
                </div>
                <div class="form-group">
                    <input type="text" class="bg-gray-700 rounded-full w-64 px-4 py-1" placeholder="sound" name="sound" value="{{old('sound', $movie->sound)}}">
                </div>
                <div class="form-group">
                    <input type="text" class="bg-gray-700 rounded-full w-64 px-4 py-1" placeholder="director" name="director" value="{{old('director', $movie->director)}}">
                </div>
                <div class="form-group">
                    <input type="text" class="bg-gray-700 rounded-full w-64 px-4 py-1" placeholder="in_the_cast" name="in_the_cast" value="{{old('in_the_cast', $movie->in_the_cast)}}">
                </div>
                <div class="form-group">
                    <input type="text" class="bg-gray-700 rounded-full w-64 px-4 py-1" placeholder="description" name="description" value="{{old('description', $movie->description)}}">
                </div>
                <div class="form-group">
                    <input type="text" class="bg-gray-700 rounded-full w-64 px-4 py-1" placeholder="movie_link" name="movie_link" value="{{old('movie_link', $movie->movie_link)}}">
                </div>
                <div class="form-group">
                    <input type="file" multiple class="bg-gray-700 rounded-full w-64 px-4 py-1" name="image" value="{{old('image', $movie->image)}}">
                </div>
            </div>
{{--            <div class="form-group">--}}
{{--                <select name="genres[]" class="bg-gray-700 w-64 px-4 py-1"  id="" multiple>--}}
{{--                    @foreach($tags as $tag)--}}
{{--                        <option value="{{$tag->id}}">{{$tag->genre}}</option>--}}
{{--                    @endforeach--}}
{{--                </select>--}}
{{--            </div>--}}
            <input type="hidden" name="_token" id="csrf_token" value="{{csrf_token()}}">
            <div class="box-footer">
                <button type="submit" class="btn btn-primary mx-32">დამატება</button>
            </div>
        </form>
    </div>
@endsection
