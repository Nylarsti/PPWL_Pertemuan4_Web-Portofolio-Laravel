<?php

use App\Http\Controllers\ProjectController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/education', function () {
    return view('education');
})->name('education');

Route::get('/projects', function () {
    return view('projects');
})->name('projects');

Route::get('/projects', [ProjectController::class, 'index'])->name('projects');
Route::get('/projects/create', [ProjectController::class, 'create'])->name('project.create');
Route::post('/projects', [ProjectController::class, 'store'])->name('project.store');
Route::get('/projects/{id}', [ProjectController::class, 'show'])->name('project.show');
Route::get('/projects/{id}/edit', [ProjectController::class, 'edit'])->name('project.edit');
Route::put('/projects/{id}', [ProjectController::class, 'update'])->name('project.update');
Route::delete('/projects/{id}', [ProjectController::class, 'destroy'])->name('project.destroy');