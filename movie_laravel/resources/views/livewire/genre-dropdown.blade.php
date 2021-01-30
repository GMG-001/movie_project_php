<div class="relative mt-3 md:ml-0 absolute">
    <div class="rounded w-64 absolute">
        <div x-data="{ open: false }" class="ml-16">
            <button @click="open = true" type="" class="hover:text-gray-300">ჟანრები</button>
            <div>
                <ul x-show="open" @click.away="open = false">
                    @foreach($genre as $tag)
                        <a href="{{route('genre', $tag->id)}}"> {{$tag->genre}}</a>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>
