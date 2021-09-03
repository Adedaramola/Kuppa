@component('mail::message')
New device signed in to {{ $request->email }}

Your Bambuu Account was just signed in to your account. You're getting this email to make sure it was you.

If this wasn't you, click the button to reset your password.

@component('mail::button', ['url' => ''])
Reset Password
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
