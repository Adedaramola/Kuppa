<div class="relative hidden ml-6 md:inline-flex">
    <x-dropdown align="right" width="48">
        <x-slot name="trigger">
            <button type="button" class="focus:outline-none">
                <x-icons.user class="w-6 text-black" />
            </button>
        </x-slot>
        <x-slot name="content">
            @guest
                <div class="flex flex-col items-center text-center px-4 py-3">
                    <x-button-link href="{{route('login')}}" class="w-full mb-2">{{ __('Sign in') }}</x-button-link>
                    <x-button-link href="{{route('register')}}" class="w-full bg-black text-white border-none">{{ __('Register') }}</x-button-link>
                </div>
            @endguest
        </x-slot>
    </x-dropdown>
</div>
