<?php

namespace App\Jobs;

use App\Mail\SendAdminInviteMail;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;

class SendMail implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    private $data;
    private $email;

    /**
     * Create a new job instance.
     *
     * @param $email
     * @param $data
     */
    public function __construct($email, $data)
    {
        $this->data = $data;
        $this->email = $email;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        Mail::to($this->email)->send(new SendAdminInviteMail($this->data));
    }
}
