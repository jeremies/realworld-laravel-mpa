<x-app-layout>

    @guest
        <div class="flex flex-col items-center justify-center py-10 bg-green-500 text-white">
            <h1 class="text-5xl font-bold">conduit</h1>
            <div class="text-2xl mt-4">A place to share your knowledge.</div>
        </div>
    @endguest

    <div class="py-12">
        <div class="max-w-7xl mx-auto px-20 flex">
            <div class="w-3/4">
                <div class="space-x-8 -my-px ml-10 flex">
                    @auth
                        <x-nav-link :href="route('feed')" :active="request()->routeIs('feed')">
                            Your Feed
                        </x-nav-link>
                    @endauth
                    <x-nav-link :href="route('global')" :active="request()->routeIs('global')">
                        Global Feed
                    </x-nav-link>
                </div>

                @include('_timeline')
            </div>
            <div class="w-1/4">
                <div class="ml-4 bg-gray-200 p-3">
                    <h3>Popular tags</h3>
                    <div class="text-xs flex items-center flex-wrap">
                        <a href="#" class="bg-gray-500 hover:bg-gray-600 text-white rounded-full px-2 py-1 mt-2 mr-2">hola</a>
                        <a href="#" class="bg-gray-500 hover:bg-gray-600 text-white rounded-full px-2 py-1 mt-2 mr-2">hola</a>
                        <a href="#" class="bg-gray-500 hover:bg-gray-600 text-white rounded-full px-2 py-1 mt-2 mr-2">hola</a>
                        <a href="#" class="bg-gray-500 hover:bg-gray-600 text-white rounded-full px-2 py-1 mt-2 mr-2">hola</a>
                        <a href="#" class="bg-gray-500 hover:bg-gray-600 text-white rounded-full px-2 py-1 mt-2 mr-2">hola</a>
                        <a href="#" class="bg-gray-500 hover:bg-gray-600 text-white rounded-full px-2 py-1 mt-2 mr-2">hola</a>
                        <a href="#" class="bg-gray-500 hover:bg-gray-600 text-white rounded-full px-2 py-1 mt-2 mr-2">hola</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
