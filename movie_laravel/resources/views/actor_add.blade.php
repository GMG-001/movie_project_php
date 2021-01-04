@extends('layouts.main')
@section('content')
    <div class="bg-gray-800  text-white mx-64">
        <div class="cox-header with-border">
            <h3 class="box-title mx-32">ფილმის დამატება</h3>
        </div>
        <form method="POST" enctype="multipart/form-data" action="{{route('add_actor')}}">
            <div class="box-body">
                <div class="form-group">
                    <input type="text" class="bg-gray-700 rounded-full w-64 px-4 py-1" placeholder="name" name="actor">
                </div>
                <div class="form-group">
                    <input type="file" multiple class="bg-gray-700 rounded-full w-64 px-4 py-1" name="actor_image">
                </div>
            </div>
            <input type="hidden" name="_token" id="csrf_token" value="{{csrf_token()}}">
            <div class="box-footer">
                <button type="submit" class="btn btn-primary mx-32">დამატება</button>
            </div>
        </form>
    </div>
@endsection
