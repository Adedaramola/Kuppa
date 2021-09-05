<x-guest-layout>
    <x-slot name="title">{{__('Forgot Password')}}</x-slot>
    <x-authentication-card>
        <h3 class="text-center uppercase font-semibold tracking-widest my-8">Reset your password</h3>
        <div class="mb-4 text-center text-sm">
            Type in your email address below and we'll send you an email with instructions on how to create a new password
        </div>
        <div class="flex justify-center mt-10">
            <div class="w-full max-w-sm">
                <form action="#" class="mb-4">
                    <div>
                        <x-label for="email" value="{{ __('Email address') }}" />
                        <input type="email" inputmode="email" id="email" name="email" class="block w-full mt-3 py-3 border border-gray-300 focus:ring-0 focus:border-black transition duration-150">
                    </div>
                    <div class="mt-6">
                        <button type="submit" class="block w-full uppercase text-sm tracking-widest bg-black text-white font-semibold py-4 text-center focus:outline-none">Reset password</button>
                    </div>
                </form>
            </div>
        </div>
    </x-authentication-card>
</x-guest-layout>
