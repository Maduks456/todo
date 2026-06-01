<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ToDoController;
use App\Http\Controllers\DiaryController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionController;
Route::get('/', function () {
    return view('welcome');
});
Route::get('/why', function () {
    return view('why');
})->middleware("guest");
Route::get('/iphone', function () {
    return view('iphone');
})->middleware("auth");
Route::get('/todos', [ToDoController::class, 'index'])->middleware("auth");
Route::get('/todos/create', [ToDoController::class, 'create'])->middleware("auth");
Route::post('/todos', [ToDoController::class, 'store'])->middleware("auth");
Route::delete('/todos/{todo}/delete', [ToDoController::class, 'destroy'])->middleware("auth");
Route::get('/todos/{todo}', [ToDoController::class, 'show'])->middleware("auth");
Route::get('/todos/{todo}/edit', [ToDoController::class, 'edit'])->middleware("auth");
Route::put('/todos/{todo}', [ToDoController::class, 'update'])->middleware("auth");

Route::get('/diaries', [DiaryController::class, 'index'])->middleware("auth");
Route::get('/diaries/create', [DiaryController::class, 'create'])->middleware("auth");
Route::post('/diaries', [DiaryController::class, 'store'])->middleware("auth");
Route::delete('/diaries/{diary}/delete', [DiaryController::class, 'destroy'])->middleware("auth");
Route::get('/diaries/{diary}', [DiaryController::class, 'show'])->middleware("auth");
Route::get('/diaries/{diary}/edit', [DiaryController::class, 'edit'])->middleware("auth");
Route::put('/diaries/{diary}', [DiaryController::class, 'update'])->middleware("auth");

Route::get('/register', [RegisterController::class, "create"])->middleware("guest");
Route::post('/register', [RegisterController::class, 'store'])->middleware("guest");
Route::post('/logout', [SessionController::class, 'destroy'])->middleware("auth");
Route::get('/login', [SessionController::class, 'create'])->name("login");
Route::post('/login', [SessionController::class, 'store'])->middleware("guest");
