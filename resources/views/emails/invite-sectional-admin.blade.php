@component('mail::message')
# Admin Invite

You have been invited as an administrator of the {{ $data->section->name }} section on ClearMe.

Login using the following details

Username: {{ $data->user->email }}<br>
Password: {{ $data->unhashedPassword }}

@component('mail::button', ['url' => env('APP_URL')])
Login
@endcomponent

Thanks,<br>
{{ __('Gabriel from ClearMe') }}
@endcomponent
