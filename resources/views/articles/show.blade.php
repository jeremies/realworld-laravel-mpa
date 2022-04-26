<x-app-layout>
    <div class="bg-gray-800 pl-24 py-8">
        <h1 class="text-5xl text-white pb-8 font-bold">{{ $article->title }}</h1>

        <div>
            <div class="flex items-center">
                <a href="{{ $article->user->path() }}">
                    <img class="w-10 h-10 rounded-full"
                         src="{{ $article->user->image }}"/>
                </a>
                <div class="ml-2 mr-4">
                    <a href="{{ $article->user->path() }}"
                       class="text-white hover:underline">{{ $article->user->username }}</a>
                    <div class="-mt-1 text-xs text-gray-400">{{ $article->created_at->format('j F, Y') }}</div>
                </div>
                <a href="#"
                   class="flex items-center space-x-1 text-sm border border-gray-400 text-gray-400 rounded py-1 px-2 hover:bg-gray-400 hover:text-white">
                    <svg class="w-3 fill-current" viewBox="0 0 24 24">
                        <path
                            d="M7.127 22.562l-7.127 1.438 1.438-7.128 5.689 5.69zm1.414-1.414l11.228-11.225-5.69-5.692-11.227 11.227 5.689 5.69zm9.768-21.148l-2.816 2.817 5.691 5.691 2.816-2.819-5.691-5.689z"/>
                    </svg>
                    <div>Edit Article</div>
                </a>
            </div>
        </div>
    </div>

</x-app-layout>
