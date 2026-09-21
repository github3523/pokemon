<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ config('app.name', 'Laravel') }}</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        @livewireStyles
    </head>

    <body class="antialiased">
        <div style="display:flex;align-items:center;justify-content:center;min-height:100vh;font-family:sans-serif;">
            <div>
                <h5 id="pokcount" class="mb-6 text-center text-sm font-semibold uppercase tracking-[0.3em] text-slate-700 border-b-2 border-blue-600 pb-3">Pokemon Count</h5>
                <livewire:counter />
            </div>
        </div>

        @livewireScripts
    </body>
</html>
