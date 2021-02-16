<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClearanceRequestController extends Controller
{
    public function update(Request $request)
    {
        return $request->all();
    }
}
