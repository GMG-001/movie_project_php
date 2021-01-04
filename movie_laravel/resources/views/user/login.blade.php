@extends('layouts.main')
@section('content')
    <div class="bg-gray-800  text-white mx-64">
        <div class="cox-header with-border">
        </div>
        <form method="GET" enctype="multipart/form-data" action="{{route('user_login')}}">
            <div class="box-body">
                <div class="form-group">
                    <input type="text" class="bg-gray-700 rounded-full w-64 px-4 py-1" placeholder="მიუთითეთ ემაილი" name="email">
                </div>
                <div class="form-group">
                    <input type="password" class="bg-gray-700 rounded-full w-64 px-4 py-1" placeholder="მიუთითეთ პაროლი" name="password">
                </div>
            </div>
            <input type="hidden" name="_token" id="csrf_token" value="{{csrf_token()}}">
            <div class="box-footer">
                <button type="submit" class="btn btn-primary mx-32">ავტორიზაცია</button>
                <button class="btn btn-primary mx-32"><a href="{{route('registration')}}">რეგისტრაცია</a></button>
            </div>
        </form>
    </div>
@endsection
