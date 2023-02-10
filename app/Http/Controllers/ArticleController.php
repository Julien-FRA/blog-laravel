<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function getArticles() 
    {
        $articles = Article::paginate(4);
        return view('articles', ['listeArticles' => $articles]);
    }

    public function showArticle($slug)
    {
        $article = Article::where('slug', $slug)->firstOrFail();
        return view('article', ['article' => $article]);
    }
}
