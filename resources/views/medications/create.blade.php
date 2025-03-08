<x-app-layout>
    <x-forms.form method="POST" action="/medications">
        <div class="space-y-6">
            <x-forms.input label="Name" name="name" required />
            <x-forms.input label="Price" name="price" required />
            <x-forms.input label="Description" name="description" required />
            <x-forms.input label="Photo Url" name="photo" required />
            <div class="text-center">
                <x-forms.button>Create Medication</x-forms.button>
            </div>
        </div>
    </x-forms.form>
    <div class="ml-4">
        <x-action-button href="/medications">Medication's List</x-action-button>
    </div>
</x-app-layout>
