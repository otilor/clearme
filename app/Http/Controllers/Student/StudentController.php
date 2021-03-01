<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use App\Models\ClearanceRequest;
use App\Models\Section;
use App\Models\User;
use App\Pipelines\RetrieveUserDetails;
use Illuminate\Http\Request;
use Illuminate\Pipeline\Pipeline;
use Illuminate\Queue\Jobs\Job;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use JetBrains\PhpStorm\NoReturn;

class StudentController extends Controller
{

    public function dashboard()
    {
        $clearanceRequest = ClearanceRequest::where('student_id', auth()->id())->first();
//        dd($clearanceRequest->passed_phases);
        $data = [];

        foreach ($clearanceRequest->passed_phases as $phase) {
//            dump( Section::find($phase));
            array_push($data, ["{$phase}" => Section::find($phase)]);
        }

        $pipes = [
            RetrieveUserDetails::class
        ];

        $data = app(Pipeline::class)->send($clearanceRequest)->through($pipes)->then(function () {
            // perform any other logic.
        });

        return view('student.dashboard', compact('clearanceRequest'));
    }
}
