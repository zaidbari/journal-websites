<?php

namespace App\View\Components\Default;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Navbar extends Component
{
	public function __construct() { }

	public function render() : View
	{
		return view('components.default.navbar');
	}
}
