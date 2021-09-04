<x-guest-layout>
    <x-slot name="title">{{__('Sign in')}}</x-slot>
    <x-authentication-card>
        <div class="flex justify-center mt-10">
            <div class="w-full max-w-sm">
                <form action="#" class="mb-4">
                    <div>
                        <x-label for="email" value="{{ __('Email address') }}" />
                        <input type="email" id="email" name="email" class="block w-full mt-3 py-3 border border-gray-500">
                    </div>
                    <div class="mt-5">
                        <x-label for="password" value="{{ __('Password') }}" />
                        <input type="password" id="password" name="password" class="block w-full mt-3 py-3 border border-gray-500">
                    </div>
                    <div class="mt-6">
                        <button type="submit" class="block w-full uppercase text-sm tracking-widest bg-black text-white font-semibold py-4 text-center focus:outline-none">Sign in</button>
                    </div>
                </form>
                <div class="text-center mt-5">
                    <a href="#" class="underline text-sm">Forgot password?</a>
                </div>
                <h3 class="text-center uppercase font-semibold tracking-widest my-10">Or sign in with</h3>
                <div class="flex items-center justify-center mb-5">
                    <x-button-link class="mx-2">
                        <span>Google</span>
                    </x-button-link>
                    <x-button-link class="mx-2">
                        <span>Facebook</span>
                    </x-button-link>
                </div>
            </div>
        </div>
    </x-authentication-card>
</x-guest-layout>
