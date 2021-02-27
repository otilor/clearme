<?php


namespace App\Http\Controllers;


use App\Models\User;
use Illuminate\Support\Arr;

class SectionalAdminController extends Controller
{
    public function dashboard()
    {
        $students = User::notRole(['admin', 'sectional_admin'])->get();
        return view('sectional_admin.dashboard', compact('students'));
    }
}
