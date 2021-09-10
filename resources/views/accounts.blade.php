<div class="relative hidden ml-6 md:inline-flex">
    <x-dropdown align="right" width="60">
        <x-slot name="trigger">
            <button type="button" class="focus:outline-none">
                <x-ik-user class="w-7 mt-1 text-black" />
            </button>
        </x-slot>
        <x-slot name="content">
            <div class="w-60">
                @guest
                <div class="flex flex-col items-center text-center px-4 py-3">
                    <x-button-link href="{{route('login')}}" class="w-full mb-2">{{ __('Sign in') }}</x-button-link>
                    <x-button-link href="{{route('register')}}" class="w-full bg-black text-white border-none">
                        {{ __('Register') }}</x-button-link>
                </div>
                @endguest
                @auth
                <div class="border-t border-gray-100"></div>

                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-dropdown-link href="{{ route('logout') }}"
                             onclick="event.preventDefault();
                                    this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-dropdown-link>
                </form>
                @endauth
            </div>
        </x-slot>
    </x-dropdown>
</div>
