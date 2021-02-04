<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendAdminInviteMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * @var $data
     */
    private $data;

    /**
     * Create a new message instance.
     *
     * @param $data
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('no-reply@clearme.test')->markdown('emails.invite-sectional-admin', ['data' => $this->data]);
    }
}
