<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class ArticleController extends Controller
{
    public function list()
    {
        $articles = Article::all();
        return view('articles.list')->with([
            'articles' => $articles
        ]);
    }
}
