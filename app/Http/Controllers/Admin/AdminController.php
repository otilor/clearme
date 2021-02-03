<?php


namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use App\Models\Section;

class AdminController extends Controller
{
    public function dashboard()
    {
        $sections = Section::all();

        return view('admin.dashboard', compact('sections'));
    }
}
