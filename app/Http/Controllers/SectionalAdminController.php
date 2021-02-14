<?php


namespace App\Http\Controllers;


use App\Models\User;

class SectionalAdminController extends Controller
{
    public function dashboard()
    {
        $students = User::role('student')->get();
        return view('sectional_admin.dashboard', compact('students'));
    }
}
