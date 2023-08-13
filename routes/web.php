<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TaskController;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/tasks/create', [TaskController::class, 'create'])->name('task.create');
    Route::get('/tasks', [TaskController::class, 'index'])->name('tasks.index');
    Route::get('/tasks-all', [TaskController::class, 'index_all'])->name('task');
    Route::get('/tasks-complete', [TaskController::class, 'index_complete'])->name('task.complete');
    Route::get('/tasks-incomplete', [TaskController::class, 'index_incomplete'])->name('task.incomplete');
    Route::post('/tasks-store', [TaskController::class, 'store'])->name('tasks.store');
    Route::get('/tasks-edit/{id}', [TaskController::class, 'edit'])->name('tasks.edit');
    Route::get('/tasks-update/{id}', [TaskController::class, 'update'])->name('tasks.update');

});



require __DIR__.'/auth.php';
