<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{
	public function index() : View
	{
		$title = "Home";
		$data = Http::get(config('journal.api_url') . 'home')->json('data');
		$articles = $data['articles'];

		return view('pages.home.index', compact('title', 'data', 'articles'));
    }

}
