<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MainController;

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
// Home Pubblic All Contents
Route::get('/', [MainController::class, 'home'])
    ->name('home');

// Logged Private All Contents
Route::get('/logged', [MainController::class, 'logged'])
    ->middleware(['auth', 'verified'])
    ->name('logged');

// Show Public Single Content
Route::get('/project/show/{project}', [MainController::class, 'projectShow'])
    ->name('project.show');

// Show Logged Private Single Content
Route::get('/logged/project/show/{project}', [MainController::class, 'loggedProjectShow'])
    ->name('loggedProject.show');

// Delete Project For Public and Private
Route::get('/logged/project/delete/{project}', [MainController::class, 'projectDelete'])
    ->name('project.delete');

// Create Logged Private Single Content
Route::get('/logged/project/create', [MainController::class, 'projectCreate'])
    ->name('project.create');

// Store Single Content for Public and Private
Route::post('/logged/project/create/store/', [MainController::class, 'projectStore'])
    ->name('project.store');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';