<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel Comics</title>

        {{-- Includiamo gli assets con la direttiva @vite --}}
        @vite('resources/js/app.js')
    </head>
    <body>
        <div class="container text-center">
            <header>
                HEADER
            </header>
        </div>

        <main>
            @yield('content')
        </main>
        <div class="container text-center">
            <footer>
                FOOTER
            </footer>
        </div>
    </body>
</html>
