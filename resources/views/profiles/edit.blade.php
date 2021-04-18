<x-app-layout>
    <div class="flex flex-col sm:justify-center items-center pt-6 sm:pt-0">
        <div class="flex flex-col items-center justify-center">
            <h1 class="text-4xl mt-4 mb-2">Your Settings</h1>
        </div>

        <x-validation-errors class="mt-4" :errors="$errors"></x-validation-errors>

        <div class="w-1/2 mt-2 px-6 py-4">
            <form method="POST" action="{{ route('settings') }}">
                @csrf
                @method('PATCH')

                <div>
                    <x-label for="image" :value="__('URL of profile picture')"/>

                    <x-input id="image" class="block mt-1 w-full" type="url" name="image"
                             :value="current_user()->image"/>
                </div>

                <div class="mt-4">
                    <x-label for="username" :value="__('Username')"/>

                    <x-input id="username" class="block mt-1 w-full" type="text" name="username"
                             :value="current_user()->username" required/>
                </div>

                <div class="mt-4">
                    <x-label for="bio" :value="__('Short bio about you')"/>

                    <x-textarea id="bio" class="block mt-1 w-full" name="bio"
                                rows="7">{{ current_user()->bio }}</x-textarea>
                </div>

                <div class="mt-4">
                    <x-label for="email" :value="__('Email')"/>

                    <x-input id="email" class="block mt-1 w-full" type="email" name="email"
                             :value="current_user()->email"
                             required
                    />
                </div>

                <div class="mt-4">
                    <x-label for="password" :value="__('New Password')"/>

                    <x-input id="password" class="block mt-1 w-full"
                             type="password"
                             name="password"
                    />
                </div>

                <div class="flex items-center justify-end mt-4">
                    <x-button class="ml-3">
                        {{ __('Update Settings') }}
                    </x-button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
