<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Inventory Management')</title>
    
    @vite(['resources/js/main.js', 'resources/sass/app.scss'])
</head>
<body>
    <div id="app">
        @include('components.navbar')

        <main class="container py-4">
            @yield('content')
        </main>

        @include('components.footer')
    </div>

    @stack('scripts')
</body>
</html>