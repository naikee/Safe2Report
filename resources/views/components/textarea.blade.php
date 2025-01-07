@props(['disabled' => false])

<textarea {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge([
    'class' =>
        'border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 shadow-sm w-full rounded-lg border border-stroke bg-transparent py-4 pl-6 pr-10 outline-none focus-visible:shadow-none',
]) !!}>{{ $slot }}</textarea>
