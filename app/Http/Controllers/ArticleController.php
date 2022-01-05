<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class ArticleController extends Controller
{
	public function currentIssue() : View
	{
		return view('pages.issues.index', ['title' => 'Current Issue']);
    }
}
