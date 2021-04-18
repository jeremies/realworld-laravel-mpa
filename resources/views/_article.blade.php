<div class="py-8 border-b border-b-gray-400">
    <div class="flex items-center justify-between">
        <div class="flex items-center">
            <a href="#">
                <img class="w-10 h-10 rounded-full"
                     src="{{ $article->user->getImage() }}"/>
            </a>
            <div class="ml-2">
                <a href="{{ $article->user->path() }}"
                   class="text-green-500 hover:underline">{{ $article->user->username }}</a>
                <div class="-mt-1 text-xs text-gray-400">{{ $article->created_at->format('j F, Y') }}</div>
            </div>
        </div>
        <x-like-button :article="$article"/>
    </div>

    <a href="#">
        <div class="mt-4 text-xl font-bold">
            {{ $article->title }}
        </div>

        <div class="text-sm text-gray-400">{{ $article->description }}</div>
    </a>

    <a href="#">
        <div class="mt-4 text-xs text-gray-400">
            Read more...
        </div>
    </a>
</div>
