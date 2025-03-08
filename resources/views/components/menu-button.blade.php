<div class="dark:bg-gray-900/50 my-2 bg-gray-200/50 rounded-md w-full flex items-center justify-start p-4">
    <div class="w-20 flex justify-center">
        <img class="w-20 h-20" src="{{ Vite::asset($image) }}" alt="{{ $text }}">
    </div>

    <div class="ml-auto">
        <x-action-button href="{{ $link }}">{{ $text }}</x-action-button>
    </div>
</div>
