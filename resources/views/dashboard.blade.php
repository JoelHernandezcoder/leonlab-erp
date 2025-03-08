<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-2xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-4 text-gray-900 dark:text-gray-100">
                    <x-menu-button image="resources/images/client.png" link="/clients" text="Clients" />
                    <x-menu-button image="resources/images/medication.png" link="/medications" text="Medications" />
                    <x-menu-button image="resources/images/employer.png" link="/employees" text="Employees" />
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
