<!DOCTYPE html>
<html lang="{{ str_replace('_','-',app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $title }} — {{ config('app.name','Bambuu') }}</title>

    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    @livewireStyles

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>
</head>

<body class="font-sans antialiased">
    <div x-data="{ isSidebarOpen: false }" class="min-h-screen flex flex-col">
        <x-navigation-menu />
        <main role="main" class="flex-1 flex mt-14 md:mt-16">
            <x-sidebar x-show="isSidebarOpen" />
            {{ $slot }}
        </main>
        @include('footer')
    </div>
    @livewireScripts
</body>

</html>
