<?php

namespace App\View\Components\Default;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ArticleList extends Component
{
	public array $articles = [];

	public function __construct($articles)
	{
		$this->articles = $articles;
	}

	public function render() : View
    {
        return view('components.default.article-list');
    }
}
