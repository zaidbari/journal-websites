<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{
	public function index() : View
	{
		$title = "Home";
		$data = Http::get(env('API_URL') . 'home')->json('data');

		$articles = $data['articles'];
		return view('pages.home.index', compact('title', 'data', 'articles'));
    }

}
