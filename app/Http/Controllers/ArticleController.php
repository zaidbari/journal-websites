<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class ArticleController extends Controller
{
	public function currentIssue() : View
	{
		return view('pages.issues.index', ['title' => 'Current Issue']);
    }

	public function show( $article_id ) : View
	{
		return view('pages.issues.index', ['title' => 'Current Issue']);
	}
}
