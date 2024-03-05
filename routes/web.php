<?php

use App\Http\Controllers\EmployeController;
use App\Http\Controllers\TacheController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::controller(EmployeController::class)->group(function () {
    Route::get('/employe', 'index');
    Route::get('/employe/create', 'create');
    Route::get('/employe/{id}', 'show');
    Route::get('/employe/{id}/edit', 'edit');
    Route::post('/employe', 'store');
    Route::patch('/employe/{id}', 'update');
    Route::delete('/employe/{id}', 'destroy');
});

//Route::resource('/employes',EmployeController::class);

Route::controller(TacheController::class)->group(function () {
    Route::get('/tache', 'index');
    Route::get('/tache/create', 'create');
    Route::get('/tache/{id}', 'show');
    Route::get('/tache/{id}/edit', 'edit');
    Route::post('/tache', 'store');
    Route::patch('/tache/{id}', 'update');
    Route::delete('/tache/{id}', 'destroy');
    });
    