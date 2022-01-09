<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ HomeController::class, 'index']);
Route::get('/current-issue', [ ArticleController::class, 'currentIssue'])->name('current');
Route::get('/latest-articles', [ HomeController::class, 'index'])->name('latest');
Route::get('/archives', [ HomeController::class, 'index'])->name('archives');

Route::get('/page/{slug}', [ArticleController::class, 'show'])->where('slug', '.*');

Route::get('/{doi}', [ArticleController::class, 'show'])->where('doi', '.*');
