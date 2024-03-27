<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('layouts.components.head')
    </head>
    <body class="bg-slate-950 font-sans text-slate-50 antialiased bg-repeat bg-center" style="background-image:url({{ asset('/img/dots.svg') }})">
        <livewire:flash-messages.show />

        <div class="flex min-h-screen flex-col font-welcome">
            <main class="flex-grow">
                <div class="fixed right-0">
                    @if (! request()->routeIs('welcome'))
                        @include('layouts.navigation')
                    @endif
                </div>

                <div class="flex min-h-screen flex-col items-center justify-center">
                    {{ $slot }}
                </div>
            </main>

            @include('components.footer')
        </div>
        @livewireScriptConfig
    </body>
</html>
