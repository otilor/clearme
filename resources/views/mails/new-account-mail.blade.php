@component('mail::message')
# Account Created!

A new account has been created for you.
This action was initiated by test@gmail.com


@component('mail::panel')
    <strong>Username:</strong> danny<br>
    <strong>Password:</strong> Jadfj23/SJ;
@endcomponent
@component('mail::button', ['url' => 'http://clearme.test/login'])
    Login
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
