@props(['active'])

@php
$classes = ($active ?? false)
            ? 'border-b-2 border-transparent border-indigo-700 leading-5 text-white focus:outline-none focus:border-indigo-700 transition duration-150 ease-in-out hover:bg-blue-800 p-2'
            : 'border-b-2 border-transparent hover:border-indigo-700 leading-5 text-white focus:outline-none focus:border-indigo-700 transition duration-150 ease-in-out hover:bg-blue-800 p-2';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
