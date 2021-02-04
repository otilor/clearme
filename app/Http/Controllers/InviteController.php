<?php


namespace App\Http\Controllers;


use App\Http\Requests\SendAdminInviteMailRequest;
use App\Mail\SendAdminInviteMail;
use App\Models\AdminInvite;
use App\Models\Section;
use App\Models\User;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

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


        $unhashedPassword = Str::random(8);

        $user = User::create(['name' => 'Administrator', 'email' => $request->email, 'password' => bcrypt($unhashedPassword)]);
        $data = (object)['user' => $user, 'unhashedPassword' => $unhashedPassword];

        Mail::to($request->email)->send(new SendAdminInviteMail($data));

        notify('success')->success("Contacted {$request->email} via mail");

        return redirect(route('admin.dashboard'));
    }
}
