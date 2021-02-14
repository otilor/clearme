<?php


namespace App\Http\Controllers;


use App\Http\Requests\SendAdminInviteMailRequest;
use App\Jobs\SendMail;
use App\Models\AdminInvite;
use App\Models\Section;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class InviteController extends Controller
{
    public function invite(Section $section)
    {
        return view('admin.invite', compact('section'));
    }

    public function send(SendAdminInviteMailRequest $request)
    {
        DB::transaction(function () {
            AdminInvite::create([
                'section_id' => $section_id,
                'status' => AdminInvite::PENDING
            ]);

            $user = User::create(['name' => 'Administrator', 'email' => $request->email, 'password' => bcrypt($unhashedPassword)]);

            $unhashedPassword = Str::random(8);

            // Assign role to user
            $user->assignRole('sectional_admin');

            $data = (object)['user' => $user, 'unhashedPassword' => $unhashedPassword, 'section' => Section::find($request->section_id)];

            dispatch(new SendMail($request->email, $data));

            notify('success')->success("Contacted {$request->email} via mail");

            return redirect(route('admin.dashboard'));
        });
        // TODO: add tests
    }
}
