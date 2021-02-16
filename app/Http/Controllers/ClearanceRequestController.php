<?php

namespace App\Http\Controllers;

use App\Models\ClearanceRequest;
use Illuminate\Http\Request;

class ClearanceRequestController extends Controller
{
    public function update(Request $request)
    {
        $clearanceRequest = ClearanceRequest::where('user_id', $request->student_id)->get();
        return $clearanceRequest;
    }
}
