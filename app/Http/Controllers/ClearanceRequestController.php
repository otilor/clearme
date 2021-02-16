<?php

namespace App\Http\Controllers;

use App\Models\ClearanceRequest;
use Illuminate\Http\Request;

class ClearanceRequestController extends Controller
{
    public function update(Request $request)
    {
        $clearanceRequest = ClearanceRequest::where('user_id', $request->student_id)
            ->first();

        $clearanceRequest->update(['is_cleared' => true]);

        notify()->success("Student {$clearanceRequest->user?->name} has been cleared");
        return back();
    }
    public function reject(Request $request)
    {
        $clearanceRequest = ClearanceRequest::where('user_id', $request->student_id)
            ->first();

        $clearanceRequest->update(['is_cleared' => false]);

        notify()->error("Student has been rejected");
        return back();
    }
}
