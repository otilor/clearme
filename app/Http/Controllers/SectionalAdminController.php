<?php


namespace App\Http\Controllers;


use App\Models\ClearanceRequest;
use App\Models\User;
use Doctrine\Common\Cache\Cache;
use Illuminate\Support\Arr;

class SectionalAdminController extends Controller
{
    public function dashboard()
    {
        $clearanceRequests = ClearanceRequest::all();

        return view('sectional_admin.dashboard', compact('clearanceRequests'));
    }
}
