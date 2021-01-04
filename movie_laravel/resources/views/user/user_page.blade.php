@extends('layouts.main')
@section('content')
    <div>
        <div>
            @if($user->is_admin)
                <a href="{{route('add_movie')}}" class="hover:text-gray-300">ფილმის დამატება</a>
            @endif
        </div>
        <a href="{{route('liked')}}" class="hover:text-gray-300">მოწონებული ფილმები</a><br>
        <a href="{{route('logout')}}" class="hover:text-gray-300">გასვლა</a>

    </div>
@endsection
