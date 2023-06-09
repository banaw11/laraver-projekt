<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("A system that allows you to manage software licenses in your company. A very helpful program whose capabilities will be appreciated by all administrators. License storage has never been so easy and secure. Log in and collect all your licenses in one place. The program offers simplicity and functionality!") }}
                    <p>A system that allows you to manage software licenses in your company. A very helpful program whose capabilities will be appreciated by all administrators. License storage has never been so easy and secure. Log in and collect all your licenses in one place. The program offers simplicity and functionality</p>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
