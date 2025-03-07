<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Clients
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <h1 class="dark:text-white mx-8 mt-4 font-bold text-xl">List</h1>
                <ul class="flex flex-col">
                    @foreach ($client ?? [] as $client)
                        <a href="#" class="dark:text-white/50 mx-8 mt-4 text-blue-800">{{ $client->id }}). {{ $client->name }} from {{ $client->country }}</a>
                    @endforeach
                </ul>
                <x-forms.divider/>
                <h1 class="dark:text-white mx-8 mt-4 font-bold text-xl">Sales</h1>
                <ul>
                    @foreach ($sales as $sale)
                        <a href="#" class="dark:text-white/50 mx-8 mt-4 text-blue-800">{{ $sale->details }}</a>
                    @endforeach
                </ul>
                <x-forms.divider/>
                <div class="text-center">
                    <x-action-button href="/clients/create" >Create Client</x-action-button>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

