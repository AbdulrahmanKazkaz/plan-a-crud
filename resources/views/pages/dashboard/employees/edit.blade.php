<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Update: {{ $employee->fullName }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <form method="POST" action="{{ route('employees.update', $employee) }}">
                @csrf
                @method('PUT')
                <!-- First Name -->
                <div class="mt-4">
                    <x-input-label for="first_name" :value="__('First Name')" />
                    <x-text-input id="first_name" value="{{ $employee->first_name }}" class="block mt-1 w-full"
                        type="text" name="first_name" required autofocus />
                    <x-input-error :messages="$errors->get('first_name')" class="mt-2" />
                </div>

                <!-- Last Name -->
                <div class="mt-4">
                    <x-input-label for="last_name" :value="__('Last Name')" />
                    <x-text-input id="last_name" value="{{ $employee->last_name }}" class="block mt-1 w-full"
                        type="text" name="last_name" required autofocus />
                    <x-input-error :messages="$errors->get('last_name')" class="mt-2" />
                </div>

                <!-- Email -->
                <div class="mt-4">
                    <x-input-label for="email" :value="__('Email')" />
                    <x-text-input id="email" value="{{ $employee->email }}" class="block mt-1 w-full" type="email"
                        name="email" autofocus />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <!-- Phone Number -->
                <div class="mt-4">
                    <x-input-label for="phone" :value="__('Phone')" />
                    <x-text-input id="phone" class="block mt-1 w-full" type="text" name="phone"
                        value="{{ $employee->phone }}" autofocus />
                    <x-input-error :messages="$errors->get('phone')" class="mt-2" />
                </div>

                <!-- Companies -->
                <div class="mt-4">
                    <select
                        class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm"
                        name="company_id" required>
                        @foreach ($companies as $company)
                            @if ($company->id == $employee->company_id)
                                <option value="{{ $company->id }}" selected>{{ $company->name }}</option>
                            @else
                                <option value="{{ $company->id }}">{{ $company->name }}</option>
                            @endif
                        @endforeach
                    </select>
                    <x-input-error :messages="$errors->get('company_id')" class="mt-2" />
                </div>

                <div class="flex items-center justify-end mt-4">
                    <x-primary-button class="ml-3">
                        {{ __('Update') }}
                    </x-primary-button>
                </div>

            </form>
        </div>
    </div>
</x-app-layout>
