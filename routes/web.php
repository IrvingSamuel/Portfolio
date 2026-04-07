<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\GitHubController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/api/github-stats', [GitHubController::class, 'stats']);
Route::post('/contact', [ContactController::class, 'send'])->name('contact.send');
