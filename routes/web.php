<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

route::get('/home',[StudentController::class,'index'])->name('home');
route::get('/form',[StudentController::class,'create'])->name('create');
route::post('/store',[StudentController::class,'store'])->name('store');
route::get('/show/{id}',[StudentController::class,'show'])->name('show');
route::delete('/destroy/{id}',[StudentController::class,'destroy'])->name('destroy');
route::get('/edit/{id}',[StudentController::class,'edit'])->name('edit');
route::post('/update/{id}',[StudentController::class,'update'])->name('update');
route::delete('/destroy/{id}',[StudentController::class,'destroy'])->name('destroy');