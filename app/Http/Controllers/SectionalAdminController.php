<?php


namespace App\Http\Controllers;


use App\Models\User;
use Doctrine\Common\Cache\Cache;
use Illuminate\Support\Arr;

class SectionalAdminController extends Controller
{
    public function dashboard()
    {
        $students = User::notRole(['admin', 'sectional_admin'])->paginate(20);
        return view('sectional_admin.dashboard', compact('students'));
    }
}
