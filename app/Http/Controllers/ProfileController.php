<?php


namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
use App\Http\Requests\StoreProfileRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    protected User $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function index()
    {
        return view('profile');
    }

    public function store(StoreProfileRequest $request)
    {
        $this->user->find(Auth::id())->profile->update($request->all());
        return "Done!";
    }
}
