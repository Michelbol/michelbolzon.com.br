<?php

use App\Http\Controllers\BiosController;
use App\Http\Controllers\CurriculumController;
use Illuminate\Support\Facades\Route;

Route::get('/', [CurriculumController::class, 'curriculum'])->name('curriculum');
Route::post('/contact', [CurriculumController::class, 'contact'])->name('contact');
Route::get('/bios', [BiosController::class, 'index'])->name('bios.index');
