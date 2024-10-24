<?php
use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

Route::get('tasks/chart', [TaskController::class, 'chart'])->name('tasks.chart');
Route::resource('tasks', TaskController::class);
Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', function () {
    return view('home');
});
