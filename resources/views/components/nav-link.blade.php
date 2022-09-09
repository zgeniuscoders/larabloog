@props(['active'])

@php
$classes = ($active ?? false)
            ? 'text-white'
            : 'text-gray-300';
@endphp

<li class="hover:text-white">
    <a {{ $attributes->merge(['class' => $classes]) }}>
        {{ $slot }}
    </a>
</li>
