@if (!current_user() || !$article->isLikedBy(current_user()))
    <form method="POST"
          action="/articles/{{ $article->slug }}/like"
    >
        @csrf

        <button type="submit"
                class="px-2 py-1 text-sm flex items-center text-green-500 border border-green-500 rounded-sm hover:bg-green-500 group">
            <svg class="w-3 fill-current group-hover:text-white" viewBox="0 0 24 24">
                <path
                    d="M12 4.248c-3.148-5.402-12-3.825-12 2.944 0 4.661 5.571 9.427 12 15.808 6.43-6.381 12-11.147 12-15.808 0-6.792-8.875-8.306-12-2.944z"/>
            </svg>
            <div class="ml-1 group-hover:text-white">{{ $article->likes ?? 0 }}</div>
        </button>

    </form>
@else
    <form method="POST"
          action="/articles/{{ $article->slug }}/like"
    >
        @csrf
        @method('DELETE')

        <button type="submit"
                class="px-2 py-1 text-sm flex items-center text-white border border-green-500 rounded-sm hover:bg-green-600 bg-green-500 group">
            <svg class="w-3 fill-current" viewBox="0 0 24 24">
                <path
                    d="M12 4.248c-3.148-5.402-12-3.825-12 2.944 0 4.661 5.571 9.427 12 15.808 6.43-6.381 12-11.147 12-15.808 0-6.792-8.875-8.306-12-2.944z"/>
            </svg>
            <div class="ml-1">{{ $article->likes ?? 0 }}</div>
        </button>

    </form>
@endif
