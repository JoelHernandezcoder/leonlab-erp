<x-app-layout>
    <x-forms.form method="POST" action="/clients">
        <div class="space-y-6">
            <x-forms.input label="Nombre" name="name" required />
            <x-forms.input label="País" name="country" required />
            <div class="text-center">
                <x-forms.button>Create Client</x-forms.button>
            </div>
        </div>
    </x-forms.form>
    <div class="ml-4">
        <x-action-button href="/clients">Client's List</x-action-button>
    </div>
</x-app-layout>
