<?php

use App\Http\Controllers\Admin\CompleteOnboardingController;
use App\Http\Controllers\InviteController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Student\StudentController;
use App\Mail\SendAdminInviteMail;
use Illuminate\Routing\Router;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', function () {
    return redirect('/dashboard');
})->middleware(['auth']);

/** @var Router $router */

$router->group(['prefix' => 'student', 'middleware' => ['auth', 'role:student']], function () use ($router) {
    $router->get('dashboard', [StudentController::class, 'dashboard'])->name('student.dashboard');
});

$router->get('mailable', fn () => new SendAdminInviteMail());

$router->get('/dashboard', function () {
    if (Auth::user()->hasRole('admin')) {
        return redirect(\route('admin.dashboard'));
    }
    echo "welcome  " . Auth::user()->roles;
})->middleware(['auth']);
// Automatic redirect;

Auth::routes(['register' => false]);
