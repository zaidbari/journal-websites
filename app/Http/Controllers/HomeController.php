<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;

class HomeController extends Controller
{
	public function index() : View
	{
		return view('pages.home.index', ['title' => 'Home', 'articles' => []]);
    }
}
