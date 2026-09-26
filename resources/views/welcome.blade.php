<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ config('app.name', 'Laravel') }}</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@500;700&display=swap" rel="stylesheet">
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        @livewireStyles
    </head>

    <body class="antialiased bg-gradient-to-br from-yellow-300 via-amber-300 to-red-400">

        <div class="flex min-h-dvh flex-col items-center justify-center gap-4 px-4 py-8 font-fun">
            <div class="w-full max-w-sm overflow-hidden rounded-3xl border-4 border-slate-900 bg-white shadow-[8px_8px_0_0_#0f172a]">
                <div class="relative bg-red-500 px-6 pt-6 pb-10 text-center">
                    <h5 id="pokcount" class="text-2xl font-bold tracking-wide text-white drop-shadow-[2px_2px_0_#0f172a]">Pokemon Count</h5>
                    <div class="absolute inset-x-0 bottom-0 h-1 bg-slate-900"></div>
                    <div class="absolute left-1/2 bottom-0 size-12 -translate-x-1/2 translate-y-1/2 rounded-full border-4 border-slate-900 bg-white">
                        <div class="absolute inset-2 rounded-full border-4 border-slate-900 bg-white"></div>
                    </div>
                </div>
                <div class="px-6 pt-10 pb-6">
                    <livewire:counter />
                </div>
            </div>
            <a href="https://paypal.me/NTadesse330" target="_blank" rel="noopener noreferrer" class="text-xs text-slate-900/50 transition hover:text-slate-900/80 hover:underline">
                Enjoying this? Tip @NTadesse330 on PayPal
            </a>
        </div>

        @livewireScripts
    </body>

</html>
