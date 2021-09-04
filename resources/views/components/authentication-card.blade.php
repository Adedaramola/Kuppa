<div class="min-h-screen flex flex-col sm:justify-center items-center pt-10">
    <div>
        <a href="#" class="uppercase text-2xl tracking-widest font-bold
        ">{{config('app.name')}}</a>
    </div>
    <div class="w-full sm:max-w-2xl mt-6 px-6 py-5 bg-white overflow-hidden">
        <div class="grid grid-cols-2 gap-5">
            <x-form-link href="{{route('register')}}" :active="request()->routeIs('register')">{{__('Join')}}</x-form-link>
            <x-form-link href="{{route('login')}}" :active="request()->routeIs('login')">{{__('Sign in')}}</x-form-link>
        </div>
        {{ $slot }}
    </div>
</div>
