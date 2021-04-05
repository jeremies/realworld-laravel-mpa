<form method="POST"
      action="{{ route('follow', $user->username) }}"
>
    @csrf

    <button type="submit"
            class="flex items-center space-x-1 text-sm border border-gray-500 text-gray-500 rounded py-1 px-2 hover:bg-gray-300"
    >
        <svg class="w-3 fill-current text-gray-500" viewBox="0 0 24 24">
            <path d="M24 10h-10v-10h-4v10h-10v4h10v10h4v-10h10z"/>
        </svg>
        &nbsp;
        @if (current_user())
            {{ current_user()->following($user) ? "Unfollow {$user->username}" : "Follow {$user->username}" }}
        @else
            Follow {{ $user->username }}
        @endif
    </button>
</form>
