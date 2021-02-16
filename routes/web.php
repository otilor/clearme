<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\InviteController;
use App\Http\Controllers\SectionalAdminController;
use App\Http\Controllers\Student\StudentController;
use App\Mail\SendAdminInviteMail;
use App\Models\User;
use Illuminate\Routing\Router;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;

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

Route::get('auto-login', function () {
    abort_unless(app()->environment('local'), 403);

    \auth()->login(User::where('email', 'admin@clearme.test')->first()->assignRole(['sectional_admin']));

    return redirect()->to('/');
})->name('dev-login');

/** @var Router $router */

$router->group(['middleware' => 'auth'], function () use ($router){
    $router->group(['prefix' => 'student', 'middleware' => ['auth', 'role:student']], function () use ($router) {
        $router->get('dashboard', [StudentController::class, 'dashboard'])->name('student.dashboard');
    });

    $router->group(['prefix' => 'admin', 'middleware' => ['auth', 'role:admin']], function () use ($router) {
        $router->get('dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
        $router->group(['prefix' => 'sections'], function () use ($router) {
            $router->get('{section}/invite', [InviteController::class, 'invite']);
            $router->post('{section}/invite', [InviteController::class, 'send']);
        });
    });

    $router->group(['prefix' => 'sectional_admin'], function () use ($router) {
        $router->get('/dashboard', [SectionalAdminController::class, 'dashboard'])->middleware(['auth', 'role:sectional_admin'])->name('sectional_admin.dashboard');
    });

    $router->group(['prefix' => 'clearance', 'middleware'], function () use ($router){
        $router->post('approve/{id}', [\App\Http\Controllers\ClearanceRequestController::class, 'update']);
        $router->post('reject/{id}', [\App\Http\Controllers\ClearanceRequestController::class, 'reject']);
    });

    $router->get('/dashboard', function () {
        if (Auth::user()->hasRole('admin')) {
            return redirect(\route('admin.dashboard'));
        }

        if (Auth::user()->hasRole('sectional_admin')) {
            return redirect(\route('sectional_admin.dashboard'));
        }
    });
});

Auth::routes(['register' => false]);
