<?php

use App\Http\Controllers\CurriculumController;
use Illuminate\Support\Facades\Route;

Route::get('/', [CurriculumController::class, 'curriculum'])->name('curriculum');
Route::post('/contact', [CurriculumController::class, 'contact'])->name('contact');
