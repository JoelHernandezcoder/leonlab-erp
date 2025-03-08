<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ $employer->first_name }} {{ $employer->last_name }}
        </h2>
    </x-slot>
    <div class="space-y-6 mt-4">
        <p class="dark:text-white text-lg mx-8 mt-4 text-blue-800">Gender: {{$employer->gender}}</p>
        <p class="dark:text-white text-lg mx-8 mt-4 text-blue-800">Address: {{$employer->address}}</p>
        <p class="dark:text-white text-lg mx-8 mt-4 text-blue-800">Meal: {{$employer->meal_option}}</p>
        <p class="dark:text-white text-lg mx-8 mt-4 text-blue-800">Role: {{$employer->role}}</p>
        <p class="dark:text-white text-lg mx-8 mt-4 text-blue-800">Seniority: {{$employer->seniority}}</p>
        <p class="dark:text-white text-lg mx-8 mt-4 text-blue-800">Salary: {{$employer->salary}}</p>
        <p class="dark:text-white text-lg mx-8 mt-4 text-blue-800">Start Date: {{$employer->start_date}}</p>

        <h1 class="dark:text-white mx-8 mt-4 font-bold text-xl">Production Line</h1>
        <ul>
                <p class="dark:text-white text-lg mx-8 mt-4 text-blue-800">{{ $employer->line}}</p>
        </ul>

        <x-forms.divider/>

        <div class="ml-4">
            <x-action-button href="/employees">Employees's List</x-action-button>
        </div>

        <x-forms.divider/>

        <form method="POST" action="{{$employer->id}}">
            @csrf
            @method('DELETE')
            <div class="text-end mx-4">
                <x-danger-button>Delete Employer</x-danger-button>
            </div>
        </form>
    </div>
</x-app-layout>
