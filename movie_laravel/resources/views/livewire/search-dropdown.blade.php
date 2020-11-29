<div class="relative mt-3 md:ml-0">
    <div class="relative">
        <input wire:model.debounce.500ms="search" type="text" class="bg-gray-800 rounded-full w-64 px-4 py-1" name="search" placeholder="search">
    </div>
    @if(strlen($search)>=1)
    <div class="absolute bg-gray-800 text-sm rounded w-64 mt-4">
        @if($searchResults->count()>0)
        <ul>
            @foreach($searchResults as $result)
            <li class="border-b border-gray-700">
                <a href="{{route('movie.clicked', $result->id)}}" class="black hover:bg-gray-700 px-3 py-3 flex items-center">
                    <img src="/img/movies/{{$result['image']}}" alt="poster" class="w-64">
                    <span class="ml-4">{{$result['name']}}</span>
                </a>
            </li>
            @endforeach
        </ul>
        @else
            <div class="px-3 py-3">ფილმი ვერ მოიძებნა</div>
        @endif
    </div>
    @endif
</div>
