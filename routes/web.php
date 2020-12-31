<?php

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
    return view('welcome');
});

/** @var \Illuminate\Routing\Router $router */
$router->get('dashboard', fn()=> view('dashboard'));

$router->group(['prefix' => 'student', 'middleware' => ['auth', 'role:student']], function() use ($router){
    $router->get('dashboard', function () {
        return "Student dashboard";
    });
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
