<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>movie app</title>
    <!-- style -->
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
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
                <a href="{{route('movie.all')}}" class="hover:text-gray-300">movie</a>
            </li>
            <li class="ml-16">
                <a href="#" class="hover:text-gray-300">Tv show</a>
            </li>
            <li class="ml-16">
                <a href="#" class="hover:text-gray-300">Actors</a>
            </li>
        </ul>
        <div class="flex items-center">
            <div class="relative">
                <input type="text" class="bg-gray-800 rounded-full w-64 px-4 py-1" placeholder="search">
            </div>
        </div>
    </div>
</nav>
@yield('content')
</body>
</html>
