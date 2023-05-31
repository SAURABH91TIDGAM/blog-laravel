@props(['active' => false])

    @php
        $classes = "block text-left px-3 text-sm leading-6 hover:bg-blue-500 focus:bg-blue-500 hover:text-white focus:test-white";
        if ($active) {
                $classes = 'block text-left px-3 bg-blue-500 text-white';
            }
    @endphp


<a {{ $attributes(['class' => $classes]) }}
    >{{ $slot }}</a>