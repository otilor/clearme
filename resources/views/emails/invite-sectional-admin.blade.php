@component('mail::message')
# Admin Invite

You have been invited as an administrator on ClearMe.

Login using the following details

Username: {{ __('gabriel@gmail.com') }}<br>
Password: {{ __('fja#md@mf12') }}

@component('mail::button', ['url' => env('APP_URL') . '/login'])
Login
@endcomponent

Thanks,<br>
{{ __('Gabriel from ClearMe') }}
@endcomponent
