<?php

namespace App\Http\Controllers;

use App\Models\Article;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::orderByDesc('created_at')->paginate(10);
        return view('home', compact('articles'));
    }

    public function feed()
    {
        $articles = auth()->user()->feed();
        return view('home', compact('articles'));
    }
}
