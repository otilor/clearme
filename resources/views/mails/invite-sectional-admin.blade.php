@component('mail::message')
    # Admin Invite

    You have been invited as an administrator

    @component('mail::button', ['url' => $url ?? ''])
        Login
    @endcomponent


    You can use the following credentials to login:
    Username: femi
    Password: password
    Thanks,<br>
    {{ config('app.name') }}
@endcomponent
