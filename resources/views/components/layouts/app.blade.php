<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>{{ $title ?? 'Page Title' }}</title>
        {{-- <link href="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.css" rel="stylesheet" /> --}}
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        @livewireStyles
    </head>
    <body class="bg-slate-200 dark:bg-slate-800">
        <livewire:partials.navbar />
        <main class="" >
            {{ $slot }}
        </main>
        <livewire:partials.footer />
        @livewireScripts
        {{-- <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script> --}}
        {{-- <script data-navigate-once>
            document.addEventListener('livewire:navigated', () => {
                // Initialize Flowbite components after navigation
                setTimeout(() => {
                    initFlowbite();
                }, 100);
            });
        </script> --}}
    </body>
</html>
