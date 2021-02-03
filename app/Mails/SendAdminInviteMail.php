<?php


namespace App\Mails;


use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendAdminInviteMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     *
     * Create a new message instance
     *
     */
    public function __construct()
    {
        //
    }


    /**
     * Build a new message
     *
     * @return $this
     */
    public function build()
    {
        //
    }

}
