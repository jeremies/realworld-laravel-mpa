<x-app-layout>
    <div class="flex flex-col items-center justify-center py-10 bg-gray-200 space-y-2 px-24">
        <img class="w-28 h-28 rounded-full"
             src="https://hips.hearstapps.com/hmg-prod.s3.amazonaws.com/images/avatar-2-1583234102.jpg?resize=768:*"/>
        <h1 class="text-2xl font-bold">{{ $user->username }}</h1>
        <p class="w-1/3 text-sm text-gray-500 text-center">{{ $user->bio }}</p>
        <div class="w-full flex items-center justify-end">
            @if(current_user() && current_user()->is($user))
                <a href="#"
                   class="flex items-center space-x-1 text-sm border border-gray-500 text-gray-500 rounded py-1 px-2 hover:bg-gray-300">
                    <svg class="w-3 fill-current" viewBox="0 0 24 24">
                        <path
                            d="M24 13.616v-3.232c-1.651-.587-2.694-.752-3.219-2.019v-.001c-.527-1.271.1-2.134.847-3.707l-2.285-2.285c-1.561.742-2.433 1.375-3.707.847h-.001c-1.269-.526-1.435-1.576-2.019-3.219h-3.232c-.582 1.635-.749 2.692-2.019 3.219h-.001c-1.271.528-2.132-.098-3.707-.847l-2.285 2.285c.745 1.568 1.375 2.434.847 3.707-.527 1.271-1.584 1.438-3.219 2.02v3.232c1.632.58 2.692.749 3.219 2.019.53 1.282-.114 2.166-.847 3.707l2.285 2.286c1.562-.743 2.434-1.375 3.707-.847h.001c1.27.526 1.436 1.579 2.019 3.219h3.232c.582-1.636.75-2.69 2.027-3.222h.001c1.262-.524 2.12.101 3.698.851l2.285-2.286c-.744-1.563-1.375-2.433-.848-3.706.527-1.271 1.588-1.44 3.221-2.021zm-12 2.384c-2.209 0-4-1.791-4-4s1.791-4 4-4 4 1.791 4 4-1.791 4-4 4z"/>
                    </svg>
                    <div>Edit Profile Settings</div>
                </a>
            @else
                <x-follow-button :user="$user"></x-follow-button>
            @endif
        </div>
    </div>

    <div class="py-12">
        <div class="max-w-7xl mx-auto px-24">
            @include('_timeline')
        </div>
    </div>
</x-app-layout>
