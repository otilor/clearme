<?php


namespace App\Http\Controllers\Admin;


use App\Events\CreatedNewAdmin;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreNewUserRequest;
use App\Models\AdminsOnboarded;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

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
        // Delay job during database transaction
        DB::transaction(function () use($request){
            // Store the name of the new administrator in the database
            $userDetails = $this->user->createAdmin($request->validated());
            // Fire off an event that dictates that a new user has been created.
            AdminsOnboarded::create([
                'user_id' => Auth::id(),
                'is_onboarded' => true,
            ]);
            CreatedNewAdmin::dispatch($userDetails);
            toastr()->addNotification('success', "{$userDetails['user']->name} has been contacted via email");
        });
        return redirect(route('admin.dashboard'));
    }
}
