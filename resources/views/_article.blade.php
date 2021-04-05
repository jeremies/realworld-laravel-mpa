<div class="py-8 border-b border-b-gray-400">
    <div class="flex items-center justify-between">
        <div class="flex items-center">
            <a href="#">
                <img class="w-10 h-10 rounded-full"
                     src="https://hips.hearstapps.com/hmg-prod.s3.amazonaws.com/images/avatar-2-1583234102.jpg?resize=768:*"/>
            </a>
            <div class="ml-2">
                <a href="{{ $article->user->path() }}"
                   class="text-green-500 hover:underline">{{ $article->user->username }}</a>
                <div class="-mt-1 text-xs text-gray-400">{{ $article->created_at->format('j F, Y') }}</div>
            </div>
        </div>
        <a href="#"
           class="px-2 py-1 text-sm flex items-center text-green-500 border border-green-500 rounded-sm hover:bg-green-500 group">
            <svg class="w-3 fill-current group-hover:text-white" viewBox="0 0 24 24">
                <path
                    d="M12 4.248c-3.148-5.402-12-3.825-12 2.944 0 4.661 5.571 9.427 12 15.808 6.43-6.381 12-11.147 12-15.808 0-6.792-8.875-8.306-12-2.944z"/>
            </svg>
            <div class="ml-1 group-hover:text-white">0</div>
        </a>
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
