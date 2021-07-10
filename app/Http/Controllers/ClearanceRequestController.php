<?php

namespace App\Http\Controllers;

use App\Models\ClearanceRequest;
use Illuminate\Http\Request;

class ClearanceRequestController extends Controller
{
    private string $slug;

    public function __construct(public ClearanceRequest $clearanceRequest)
    {
        $this->slug = auth()->user()->mySection->slug;
    }

    public function update(Request $request)
    {
        $clearanceRequest = $this->clearanceRequest->where('student_id', $request->student_id)->first();
        $clonedClearanceRequest = clone $clearanceRequest;

        $clearanceRequest->forceFill(["payload->status->{$this->slug}" => ClearanceRequest::APPROVED ])->save();

        notify()->success("{$clonedClearanceRequest->student->name} has been cleared");
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
