<x-app-layout>
    <div class="flex flex-col items-center justify-center py-10 bg-gray-200 space-y-2 px-24">
        <img class="w-28 h-28 rounded-full"
             src="https://hips.hearstapps.com/hmg-prod.s3.amazonaws.com/images/avatar-2-1583234102.jpg?resize=768:*"/>
        <h1 class="text-2xl font-bold">{{ $user->username }}</h1>
        <div class="w-full flex items-center justify-end">
            <a href="#"
               class="flex items-center space-x-1 text-sm border border-gray-500 text-gray-500 rounded py-1 px-2 hover:bg-gray-300">
                <span class="iconify" data-icon="ei-gear" data-inline="false"></span>
                <div>Edit Profile Settings</div>
            </a>
        </div>
    </div>

    <div class="py-12">
        <div class="max-w-7xl mx-auto px-24">
            @include('_timeline')
        </div>
    </div>
</x-app-layout>
