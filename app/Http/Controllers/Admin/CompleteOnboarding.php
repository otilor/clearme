<?php


namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;

class CompleteOnboarding extends Controller
{
    public function index()
    {
        return view('admin.complete-onboarding');
    }
}
