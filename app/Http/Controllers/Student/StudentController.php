<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use App\Models\ClearanceRequest;
use App\Models\Section;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function dashboard()
    {
        $clearanceRequest = ClearanceRequest::where('student_id', auth()->id())->first();
        return view('student.dashboard', compact('clearanceRequest'));
    }
}
