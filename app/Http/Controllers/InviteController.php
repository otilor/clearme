<?php


namespace App\Http\Controllers;


use App\Http\Requests\SendAdminInviteMailRequest;
use App\Mail\SendAdminInviteMail;
use App\Models\Section;
use Illuminate\Support\Facades\Mail;

class InviteController extends Controller
{
    public function invite(Section $section)
    {
        return view('admin.invite', compact('section'));
    }

    public function send(SendAdminInviteMailRequest $request) : void
    {
        Mail::to($request->email)->send(new SendAdminInviteMail());
    }
}
