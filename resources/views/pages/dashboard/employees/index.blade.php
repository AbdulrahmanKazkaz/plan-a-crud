<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Employees List
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex items-center justify-end mt-4">
                <a class="bg-indigo-500 mb-3 hover:bg-indigo-800 text-white font-bold py-2 px-4 rounded"
                    href="{{ route('employees.create') }}">
                    Add Employee
                </a>
            </div>
            <livewire:employee-data-table />
        </div>
    </div>
</x-app-layout>
