<?php


namespace App\Http\Controllers;


use App\Models\Section;

class InviteController extends Controller
{
    public function invite(Section $section)
    {
        return view('admin.invite', compact('section'));
    }

    public function send() : void
    {
        // send invite to proposed admin.
    }
}
