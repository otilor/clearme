<?php


namespace App\Http\Controllers;


use App\Models\User;

class SectionalAdminController extends Controller
{
    public function dashboard()
    {
        $students = User::role('student')->get()->load('clearanceRequest');
        return view('sectional_admin.dashboard', compact('students'));
    }
}
