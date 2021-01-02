<?php


namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
use App\Http\Requests\StoreProfileRequest;

class ProfileController extends Controller
{
    public function index()
    {
        return view('profile');
    }

    public function store(StoreProfileRequest $request)
    {
        //
    }
}
