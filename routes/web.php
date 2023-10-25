<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProjectsController;
use Illuminate\Support\Facades\Route;
use App\Models\Projects;
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

    $projects = Projects::all();

    return view('index' , ['projects' => $projects] );
});

Route::get('/dashboard', function () {

    $projects = Projects::all();

    return view('dashboard', ['projects' => $projects]);
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/projects', [ProjectsController::class, 'show'])->name('projects.show');
    Route::get('/create-project', [ProjectsController::class, 'create'])->name('projects.create');
    Route::post('/store-project', [ProjectsController::class, 'Store'])->name('projects.store');
    Route::get('/view-project/{id}', [ProjectsController::class, 'view'])->name('projects.view');
});

require __DIR__.'/auth.php';
