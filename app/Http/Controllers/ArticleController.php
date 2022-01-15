<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Illuminate\View\View;

class ArticleController extends Controller
{
	public function currentIssue() : View
	{
		$data = Http::get(env('API_URL') . 'issues/current/articles')->json('data');
		$title = "Current Issue";
		return view('pages.issues.index', compact('data', 'title'));
    }
	public function latestIssue() : View
	{
		$data = Http::get(env('API_URL') . 'articles')->json('data');
		$title = "Latest Articles (online)";
		return view('pages.issues.index', compact('data', 'title'));
    }

	public function show( $article_id ) : View
	{
		$data = Http::get(env('API_URL') . 'articles/' . $article_id . '/show')->json('data');

		$title = $data['title'];
		return view('pages.article.show', compact('title', 'data'));
	}
}
