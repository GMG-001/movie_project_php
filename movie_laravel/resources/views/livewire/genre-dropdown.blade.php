<div class="relative mt-3 md:ml-0 absolute">
    <div class="absolute bg-gray-800 rounded w-64 mt-4">
        <div x-data="{ open: false }" class="ml-16">
            <button @click="open = true" type="" class="hover:text-gray-300">ჟანრები</button>
            <div>
                <ul x-show="open" @click.away="open = false">
                    @foreach($genre as $tag)
                        <li> <a href="{{route('genre', $tag->id)}}"> {{$tag->genre}}</a></li>
                    @endforeach
                </ul>

            </div>
        </div>
    </div>
</div>
