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
        $section_id = $request->section_id;
        // TODO: add tests
        DB::transaction(function () use ($section_id, $request){
            AdminInvite::create([
                'section_id' => $section_id,
                'status' => AdminInvite::PENDING
            ]);

            $unhashedPassword = Str::random(8);

            $user = User::create(['name' => 'Administrator', 'email' => $request->email, 'password' => bcrypt($unhashedPassword)])?->assignRole('sectional_admin');

            Section::find($section_id)->update(['user_id' => $user->id]);

            dispatch(new SendMail($request->email, (object)['user' => $user, 'unhashedPassword' => $unhashedPassword, 'section' => Section::find($section_id)]));

            notify('success')->success("Contacted {$request->email} via mail");
        });

        return redirect(route('admin.dashboard'));
    }
}
