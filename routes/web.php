<?php

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
Route::get('backend/students/create',[App\Http\Controllers\StudentController::class,'create'])->name('backend.student.create');
Route::post('backend/students/store',[App\Http\Controllers\StudentController::class,'store'])->name('backend.student.store');

Route::get('backend/books/create',[App\Http\Controllers\BookController::class,'create'])->name('backend.book.create');
Route::post('backend/books/store',[App\Http\Controllers\BookController::class,'store'])->name('backend.book.store');

Route::get('backend/authors/create',[App\Http\Controllers\AuthorController::class,'create'])->name('backend.author.create');
Route::post('backend/authors/store',[App\Http\Controllers\AuthorController::class,'store'])->name('backend.author.store');

Route::get('backend/borrows/create',[App\Http\Controllers\BorrowsController::class,'create'])->name('backend.borrow.create');
Route::post('backend/borrows/store',[App\Http\Controllers\BorrowsController::class,'store'])->name('backend.borrow.store');

Route::get('backend/types/create',[App\Http\Controllers\TypeController::class,'create'])->name('backend.type.create');
Route::post('backend/types/store',[App\Http\Controllers\TypeController::class,'store'])->name('backend.type.store');
