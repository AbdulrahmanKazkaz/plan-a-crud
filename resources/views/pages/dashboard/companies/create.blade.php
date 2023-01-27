<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Create a New Company
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <form method="POST" enctype="multipart/form-data" action="{{ route('companies.store') }}">
                @csrf
                <!-- Name -->
                <div class="mt-4">
                    <x-input-label for="name" :value="__('Name')" />
                    <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" required
                        autofocus />
                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                </div>

                <!-- Email -->
                <div class="mt-4">
                    <x-input-label for="email" :value="__('Email')" />
                    <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" autofocus />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <!-- Logo -->
                <div class="mt-4">
                    <x-input-label for="email" :value="__('Logo')" />
                    <input
                        class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                        id="logo" type="file" name="logo">
                    <x-input-error :messages="$errors->get('logo')" class="mt-2" />
                </div>

                <!-- Website -->
                <div class="mt-4">
                    <x-input-label for="website" :value="__('Website')" />
                    <x-text-input id="website" class="block mt-1 w-full" type="text" name="website" autofocus />
                    <x-input-error :messages="$errors->get('website')" class="mt-2" />
                </div>
                <div class="flex items-center justify-end mt-4">
                    <x-primary-button class="ml-3">
                        {{ __('Save') }}
                    </x-primary-button>
                </div>

            </form>
        </div>
    </div>
</x-app-layout>
