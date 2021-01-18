<?php


namespace App\Http\Controllers\Admin;


use App\Events\CreatedNewAdmin;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreNewUserRequest;
use App\Models\User;

class CompleteOnboardingController extends Controller
{
    /**
     * @var User
     */
    private User $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function index()
    {
        return view('admin.complete-onboarding');
    }

    public function store(StoreNewUserRequest $request)
    {
        // Store the name of the new administrator in the database
        $userDetails = $this->user->createAdmin($request->validated());
        // Fire off an event that dictates that a new user has been created.
        CreatedNewAdmin::dispatch($userDetails);
        toastr()->addNotification('success', "{$userDetails['user']->name} has been contacted via email");
        return back();
    }
}
