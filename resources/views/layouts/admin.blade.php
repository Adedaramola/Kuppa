<!DOCTYPE html>
<html lang="{{ str_replace('_','-',app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ config('app.name','Bambuu') }} | Vendor</title>

    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    @livewireStyles

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>
</head>

<body class="font-sans antialiased">
    <div class="min-h-screen flex">
        <x-admin-sidebar />
        <main role="main" class="min-h-screen w-full flex-1">
            <x-admin-header />
            {{ $slot }}
        </main>
    </div>
    @livewireScripts
</body>

</html>
