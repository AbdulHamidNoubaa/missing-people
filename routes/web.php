<?php

use App\Http\Controllers\Missing_peopleController;
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
Route::get('/', [Missing_peopleController::class, 'index1'])->name('index');

Route::get('/missing_people/create', [Missing_peopleController::class, 'create'])->name('missing_people.create');

Auth::routes();


    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('auth');
    Route::get('/missing_people', [Missing_peopleController::class, 'index'])->name('missing_people.index')->middleware('auth');
    Route::post('/missing_people', [Missing_peopleController::class, 'store'])->name('missing_people.store');
    Route::get('/missing_people/{id}', [Missing_peopleController::class, 'show'])->name('missing_people.show')->middleware('auth');
    Route::get('/missing_people/{id}/edit', [Missing_peopleController::class, 'edit'])->name('missing_people.edit')->middleware('auth');
    Route::get('missing_people/delete/{id}', [Missing_peopleController::class,'delete'])->name('missing_people.delete')->middleware('auth');

