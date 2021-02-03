<?php


namespace App\Http\Controllers;


use App\Models\Section;

class InviteController extends Controller
{
    public function invite($id)
    {
        $section = Section::find($id);
        return view('admin.invite', compact('section'));
    }

    public function send() : void
    {
        // send invite to proposed admin.
    }
}
