<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ HomeController::class, 'index']);
Route::get('/current-issue', [ ArticleController::class, 'currentIssue'])->name('current');
Route::get('/latest-articles', [ HomeController::class, 'index'])->name('latest');
Route::get('/archives', [ HomeController::class, 'index'])->name('archives');

Route::get('/page/{slug}', [ArticleController::class, 'show'])->where('slug', '.*')->name('page');

Route::get( '/'. env('JOURNAL_DOI') . '-{article_id}', [ArticleController::class, 'show'])
	->whereNumber('article_id')
	->name('article');
