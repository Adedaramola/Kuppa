<x-guest-layout>
    <x-slot name="title">{{__('Join Kuppa')}}</x-slot>
    <x-authentication-card>
        <h3 class="text-center uppercase font-semibold tracking-widest my-10">Sign up with</h3>
        <div class="flex items-center justify-center">
            <x-button-link class="mx-2">
                <span>Google</span>
            </x-button-link>
            <x-button-link class="mx-2">
                <span>Facebook</span>
            </x-button-link>
        </div>
        <div class="mx-auto mb-4 mt-5 text-center text-sm max-w-lg">
            Signing up with social is super quick. No extra passwords to remember - no brain fail. Don't worry, we'd
            never share any of your data or post anything on your behalf
        </div>
        <h3 class="text-center uppercase font-semibold tracking-widest my-10">Or sign up with email</h3>
        <div class="flex justify-center">
            <div class="w-full max-w-sm">
                <form action="{{ route('register') }}" method="POST" class="mb-4">
                    @csrf
                    <div>
                        <x-label for="email" value="{{ __('Email address') }}" />
                        <input type="email" inputmode="email" id="email" name="email"
                            class="block w-full mt-3 py-3 border border-gray-300 focus:ring-0 focus:border-black transition duration-150 @error('email') {{'border-red-500'}} @enderror">
                        @error('email')
                            <small class="text-xs text-red-500">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="mt-5">
                        <x-label for="firstname" value="{{ __('Firstname') }}" />
                        <input type="text" id="firstname" name="firstname"
                            class="block w-full mt-3 py-3 border border-gray-300 focus:ring-0 focus:border-black transition duration-150 @error('firstname') {{'border-red-500'}} @enderror">
                        @error('firstname')
                            <small class="text-xs text-red-500">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="mt-5">
                        <x-label for="lastname" value="{{ __('Lastname') }}" />
                        <input type="text" id="lastname" name="lastname"
                            class="block w-full mt-3 py-3 border border-gray-300 focus:ring-0 focus:border-black transition duration-150 @error('lastname') {{'border-red-500'}} @enderror">
                        @error('lastname')
                            <small class="text-xs text-red-500">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="mt-5">
                        <x-label for="password" value="{{ __('Password') }}" />
                        <input type="password" id="password" name="password"
                            class="block w-full mt-3 py-3 border border-gray-300 focus:ring-0 focus:border-black transition duration-150 @error('password') {{'border-red-500'}} @enderror">
                        <small class="text-gray-500">Must be 10 or more characters</small>
                    </div>
                    <div class="flex justify-between items-start mt-5">
                        <span class="text-sm text-gray-600 mr-3">Would you like to receive email notifications on new
                            arrivals in the store?</span>
                        <input type="checkbox" class="p-2 focus:ring-0 focus:border-black border-gray-300"
                            name="subscribe" id="subscribe">
                    </div>
                    <div class="mt-5 text-sm text-gray-600">By creating your account, you agree to our <a href="#"
                            class="pb-1 border-b border-gray-500">Terms and Conditions</a> & <a href="#" class="pb-1 border-b border-gray-500">Privacy
                            Policy</a></div>
                    <div class="mt-6">
                        <button
                            class="block w-full uppercase text-sm tracking-widest bg-black text-white font-semibold py-4 text-center focus:outline-none">Join
                            Kuppa</button>
                    </div>
                </form>
            </div>
        </div>
    </x-authentication-card>
</x-guest-layout>
