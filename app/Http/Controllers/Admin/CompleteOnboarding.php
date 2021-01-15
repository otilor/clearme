<?php


namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;

class CompleteOnboarding extends Controller
{
    public function index()
    {
        return view('admin.complete-onboarding');
    }

    public function store()
    {
        ray('Successfully done!');
        // Store the name of the new administrator in the database
        // Send them a mail with their email and password.
        // Tell the creator of the action that a mail has been forwarded to the new administrator.
    }
}
