<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\GitHubController;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $githubStats = Cache::get('github-stats')
        ?? Cache::get('github-stats:last-good')
        ?? [];

    return view('welcome', [
        'yearsOfExperience' => now()->year - 2021,
        'totalRepos' => $githubStats['total_repos'] ?? $githubStats['public_repos'] ?? 40,
        'maxYearlyContributions' => $githubStats['max_yearly_contributions'] ?? 1000,
    ]);
});

Route::get('/api/github-stats', [GitHubController::class, 'stats']);
Route::post('/contact', [ContactController::class, 'send'])->name('contact.send');
