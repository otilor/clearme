<?php

namespace App\Listeners;

use App\Mail\NewAccountEmailVerificationMail;
use Illuminate\Contracts\Queue\ShouldBeEncrypted;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;
use Illuminate\Contracts\Queue\UsesEncryption;

class SendNewAccountEmailVerificationNotification implements ShouldQueue, ShouldBeEncrypted
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle($event)
    {
        Mail::to('gabrielfemi799@gmail.com')->send(new NewAccountEmailVerificationMail($event->userDetails));
    }
}
