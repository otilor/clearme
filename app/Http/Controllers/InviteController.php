<?php


namespace App\Http\Controllers;


use App\Http\Requests\SendAdminInviteMailRequest;
use App\Mail\SendAdminInviteMail;
use App\Models\AdminInvite;
use App\Models\Section;
use Illuminate\Support\Facades\Mail;

class InviteController extends Controller
{
    public function invite(Section $section)
    {
        return view('admin.invite', compact('section'));
    }

    public function send(SendAdminInviteMailRequest $request)
    {
        AdminInvite::create([
            'section_id' => $request->section_id,
            'status' => AdminInvite::PENDING
        ]);

        Mail::to($request->email)->send(new SendAdminInviteMail());

        notify('success')->success("Contacted {$request->email} via mail");

        return redirect(route('admin.dashboard'));
    }
}
