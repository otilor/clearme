<?php


namespace App\Http\Controllers;


class InviteController extends Controller
{
    public function invite()
    {
        return view('admin.invite');
    }

    public function send() : void
    {
        // send invite to proposed admin.
    }
}
