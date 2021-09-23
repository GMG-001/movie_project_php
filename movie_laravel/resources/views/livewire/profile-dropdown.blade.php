<div>
    <div class="relative mt-3 md:ml-0 absolute">
        <div class="rounded w-64 absolute">
            <div x-data="{ open: false }" class="ml-16">
                <button @click="open = true" type="" class="hover:text-gray-300">პროფილი</button>
                <div>
                    <ul x-show="open" @click.away="open = false">
                        <div>
                            @if($user->is_admin)
                                <a href="{{route('add_actor1')}}" class="hover:text-gray-300">მსახიობის დამატება</a><br>
                                <a href="{{route('add_movie')}}" class="hover:text-gray-300">ფილმის დამატება</a>
                            @endif
                        </div>
                        <a href="{{route('liked')}}" class="hover:text-gray-300">მოწონებული ფილმები</a><br>
                        <a href="{{route('logout')}}" class="hover:text-gray-300">გასვლა</a>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
