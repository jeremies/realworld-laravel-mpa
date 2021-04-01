<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto px-20 flex">
            <div class="w-3/4">
                <div class="py-8 border-b border-b-gray-400">
                    <div class="flex items-center justify-between">
                        <div class="flex items-center">
                            <a href="#">
                                <img class="w-10 h-10 rounded-full" src="https://hips.hearstapps.com/hmg-prod.s3.amazonaws.com/images/avatar-2-1583234102.jpg?resize=768:*"/>
                            </a>
                            <div class="ml-2">
                                <a href="#" class="text-green-500 hover:underline">User</a>
                                <div class="-mt-1 text-xs text-gray-400">March 28, 2021</div>
                            </div>
                        </div>
                        <a href="#" class="px-2 py-1 text-sm flex items-center text-green-500 border border-green-500 rounded-sm hover:bg-green-500 group">
                            <span class="iconify group-hover:text-white" data-icon="ion-heart" data-inline="false"></span>
                            <div class="ml-1 group-hover:text-white">0</div>
                        </a>
                    </div>

                    <a href="#">
                        <div class="mt-4 text-xl font-bold">
                            New Article
                        </div>

                        <div class="text-sm text-gray-400">Content</div>
                    </a>

                    <a href="#">
                        <div class="mt-4 text-xs text-gray-400">
                            Read more...
                        </div>
                    </a>
                </div>
                <div class="py-8 border-b border-b-gray-400">
                    <div class="flex items-center justify-between">
                        <div class="flex items-center">
                            <a href="#">
                                <img class="w-10 h-10 rounded-full" src="https://hips.hearstapps.com/hmg-prod.s3.amazonaws.com/images/avatar-2-1583234102.jpg?resize=768:*"/>
                            </a>
                            <div class="ml-2">
                                <a href="#" class="text-green-500 hover:underline">User</a>
                                <div class="-mt-1 text-xs text-gray-400">March 28, 2021</div>
                            </div>
                        </div>
                        <a href="#" class="px-2 py-1 text-sm flex items-center text-green-500 border border-green-500 rounded-sm hover:bg-green-500 group">
                            <span class="iconify group-hover:text-white" data-icon="ion-heart" data-inline="false"></span>
                            <div class="ml-1 group-hover:text-white">0</div>
                        </a>
                    </div>

                    <a href="#">
                        <div class="mt-4 text-xl font-bold">
                            New Article
                        </div>

                        <div class="text-sm text-gray-400">Content</div>
                    </a>

                    <a href="#">
                        <div class="mt-4 text-xs text-gray-400">
                            Read more...
                        </div>
                    </a>
                </div>
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
