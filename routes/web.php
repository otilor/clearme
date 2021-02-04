<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\InviteController;
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

/** @var Router $router */

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


$router->get('/dashboard', function () {
    if (Auth::user()->hasRole('admin')) {
        return redirect(\route('admin.dashboard'));
    }
})->middleware(['auth']);


Auth::routes(['register' => false]);
