@props(['href'])
<a href="{{ $href }}" {{ $attributes->merge(['class' => 'font-bold rounded-md p-2 bg-blue-800 inline-block text-white hover:bg-blue-900 transition-colors']) }}>
    {{ $slot }}
</a>
