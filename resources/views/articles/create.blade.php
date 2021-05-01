<x-app-layout>
    <div class="flex flex-col sm:justify-center items-center pt-6 sm:pt-0">
        <x-validation-errors class="mt-4" :errors="$errors"></x-validation-errors>

        <div class="w-9/12 mt-2 px-6 py-4">
            <form method="POST" action="{{ route('articles.store') }}">
                @csrf

                <div>
                    <x-label for="title" :value="__('Article Title')"/>

                    <x-input id="title" class="block mt-1 w-full" type="text" name="title"/>
                </div>

                <div class="mt-4">
                    <x-label for="description" :value="__('What\'s this article about')"/>

                    <x-input id="description" class="block mt-1 w-full" type="text" name="description"/>
                </div>

                <div class="mt-4">
                    <x-label for="body" :value="__('Write your article (in markdown)')"/>

                    <x-textarea id="body" class="block mt-1 w-full" name="body"
                                rows="7"></x-textarea>
                </div>

                <div class="flex items-center justify-end mt-4">
                    <x-button class="ml-3">
                        {{ __('Publish Article') }}
                    </x-button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
