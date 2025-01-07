@props(['active'])

@php
    $classes =
        ($active ?? false)
            ? 'group relative flex items-center p-3 bg-green-800 text-sm font-medium leading-5 text-green-200 focus:outline-none focus:bg-green-800 transition duration-150 ease-in-out'
            : 'group relative flex items-center p-3 border-b-2 border-transparent text-sm font-medium leading-5 text-green-500 hover:text-green-300 hover:bg-green-800 focus:outline-none focus:text-green-300 focus:bg-green-800 transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
