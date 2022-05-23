<?php

use App\Http\Controllers\Adnin\AdminController;
use App\Http\Controllers\Adnin\CategoryController;
use App\Http\Controllers\adnin\NewsController;
use App\Http\Controllers\adnin\sportsController;
use App\Http\Controllers\Adnin\StudentController;
use App\Models\StudentModel;
use Illuminate\Support\Facades\Route;

Route::get('/',[AdminController::class,'index']);

Route::get('student/add',[StudentController::class,'index'])->name('allstudent.index');
Route::get('student/all',[StudentController::class,'showStudent'])->name('student.index');
Route::post('store',[StudentController::class,'store'])->name('student.store');
Route::get('delete/{id}',[StudentController::class,'delete'])->name('student.delete');
Route::get('student/edit/{id}', [StudentController::class, 'Edit']);
Route::post('store/student/{id}', [StudentController::class, 'update']);
