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

        $clearanceRequest = $clearanceRequests->first();

        dd($clearanceRequest['payload']['status'][auth()->user()?->mySection->slug]);
        return view('sectional_admin.dashboard', compact('clearanceRequests'));
    }
}
