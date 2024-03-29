<?php

namespace App\Http\Controllers;

use App\Models\ClearanceRequest;
use Illuminate\Http\Request;

class ClearanceRequestController extends Controller
{
    public function __construct(public ClearanceRequest $clearanceRequest) {}

    public function update(Request $request)
    {

        $currentSection = auth()->user()->mySection->slug;

        $clearanceRequest = $this->clearanceRequest->where('student_id', $request->student_id)->first();
        $clonedClearanceRequest = clone $clearanceRequest;

        $clearanceRequest->forceFill(["payload->status->{$currentSection}" => ClearanceRequest::APPROVED ])->save();

        notify()->success("{$clonedClearanceRequest->student->name} has been cleared");
        return back();
    }

    public function reject(Request $request)
    {
        $currentSection = auth()->user()->mySection->slug;

        $clearanceRequest = $this->clearanceRequest->where('student_id', $request->student_id)->first();
        $clonedClearanceRequest = clone $clearanceRequest;

        $clearanceRequest->forceFill(["payload->status->{$currentSection}" => ClearanceRequest::DECLINED ])->save();

        notify()->success("{$clonedClearanceRequest->student->name} has been declined clearance");
        return back();
    }
}
