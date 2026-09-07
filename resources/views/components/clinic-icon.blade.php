@props(['name', 'size' => '1em'])

<svg
    {{ $attributes->merge(['width' => $size, 'height' => $size]) }}
    viewBox="0 0 24 24"
    fill="none"
    stroke="currentColor"
    stroke-width="1.8"
    stroke-linecap="round"
    stroke-linejoin="round"
    aria-hidden="true"
>
    @switch($name)
        @case('paw')
            <path d="M8.5 10.5c-2.2 0-4.5 1.8-4.5 4.2 0 1.7 1.1 2.8 2.7 2.8 1.3 0 2.1-.8 3.3-.8s2 .8 3.3.8c1.6 0 2.7-1.1 2.7-2.8 0-2.4-2.3-4.2-4.5-4.2-1.1 0-1.9.5-2.5.5s-1.4-.5-2.5-.5Z" />
            <path d="M6.2 8.3c-1.2-.2-2-1.4-1.8-2.7.2-1.2 1.2-2 2.3-1.8 1.2.2 2 1.4 1.8 2.7-.2 1.2-1.2 2-2.3 1.8Z" />
            <path d="M17.8 8.3c1.2-.2 2-1.4 1.8-2.7-.2-1.2-1.2-2-2.3-1.8-1.2.2-2 1.4-1.8 2.7.2 1.2 1.2 2 2.3 1.8Z" />
            <path d="M10.2 5.8c-.8-1-.6-2.4.3-3.1.9-.8 2.3-.5 3.1.5.8 1 .6 2.4-.3 3.1-.9.8-2.3.5-3.1-.5Z" />
            @break
        @case('calendar')
            <rect x="3" y="4.5" width="18" height="16" rx="2" />
            <path d="M16 2.5v4M8 2.5v4M3 9.5h18" />
            <path d="M8 13h.01M12 13h.01M16 13h.01M8 17h.01M12 17h.01" />
            @break
        @case('clipboard')
            <path d="M9 5h6M9 3h6a1 1 0 0 1 1 1v2H8V4a1 1 0 0 1 1-1Z" />
            <rect x="5" y="5" width="14" height="16" rx="2" />
            <path d="M8 11h8M8 15h6" />
            @break
        @case('user')
            <circle cx="12" cy="8" r="3.5" />
            <path d="M5 21a7 7 0 0 1 14 0" />
            @break
        @case('lock')
            <rect x="5" y="10" width="14" height="11" rx="2" />
            <path d="M8 10V7a4 4 0 0 1 8 0v3M12 14v3" />
            @break
        @case('syringe')
            <path d="m14 4 6 6M17 1l6 6M13 5 4 14l6 6 9-9M4 14l-3-3M10 20l3 3M7 11l6 6" />
            @break
        @case('scissors')
            <circle cx="6" cy="6" r="2.5" />
            <circle cx="6" cy="18" r="2.5" />
            <path d="m8 7 12 10M8 17 20 7" />
            @break
        @case('mail')
            <rect x="3" y="5" width="18" height="14" rx="2" />
            <path d="m4 7 8 6 8-6" />
            @break
        @case('phone')
            <path d="M6.5 3h3l1.5 4-2 1.5a15 15 0 0 0 6.5 6.5l1.5-2 4 1.5v3c0 1.1-.9 2-2 2C10.2 19.5 4.5 13.8 4.5 6c0-1.7.9-3 2-3Z" />
            @break
    @endswitch
</svg>