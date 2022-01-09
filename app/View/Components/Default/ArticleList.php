<?php

namespace App\View\Components\Default;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ArticleList extends Component
{
	public array $articles = [];
	public string $type = "";

	public function __construct($articles, $type)
	{
		$this->articles = $articles;
		$this->type = $type;
	}

	public function render() : View
    {
        return view('components.default.article-list');
    }
}
