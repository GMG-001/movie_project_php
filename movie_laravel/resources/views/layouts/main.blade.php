<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{csrf_token()}}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

    <title>movie app</title>
    <!-- style -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <livewire:styles />
</head>
<body class="font-sans bg-gray-900 text-white">
<nav class="border-b border-gray-800">
    <div class="container mx-auto px-4 flex flex-col md:flex-row items-center justify-between px-4 py-6">
        <ul class="flex flex-col sm:flex-row items-center">
            <li>
                <a href="#">
                </a>
            </li>
            <li class="ml-16">
                <a href="{{route('movie.all')}}" class="hover:text-gray-300">ფილმები</a>
            </li>
            <li class="ml-16">
                <a href="{{route('show_actor')}}" class="hover:text-gray-300">მსახიობები</a>
            </li>
        </ul>
        @if (Route::has('user_login'))
            @auth()
                <ul>
                    <li class="ml-36">
                        <a href="{{route('user_page')}}" class="hover:text-gray-300">ჩემი გვერდი</a>
                    </li>
                </ul>
            @else
                <ul>
                    <li class="ml-36">
                        <a href="{{route('Login')}}" class="hover:text-gray-300">ავტორიზაცია</a>
                    </li>
                </ul>
            @endauth
                @endif



        <livewire:search-dropdown></livewire:search-dropdown>
    </div>
</nav>
@yield('content')
<livewire:scripts />
</body>
</html>
