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

    @auth
    @if (!auth()->user()->hasVerifiedEmail())
    <div class="fixed z-10 bottom-5 inset-x-0 w-full px-4">
        <div class="relative flex items-center w-full mx-auto max-w-md border border-black bg-white px-4 py-3">
            <div class="text-sm">Please check <strong>{{ auth()->user()->email }}</strong> for an email verification
                link.</div>
            <x-button-link class="ml-4">{{ __('open') }}</x-button-link>
        </div>
    </div>
    @endif
    @endauth
    @livewireScripts
</body>

</html>
