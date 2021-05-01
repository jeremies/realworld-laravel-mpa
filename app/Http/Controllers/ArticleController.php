<?php

namespace App\Http\Controllers;

use App\Models\Article;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::withLikes()->orderByDesc('created_at')->paginate(10);
        return view('home', compact('articles'));
    }

    public function feed()
    {
        $articles = auth()->user()->feed();
        return view('home', compact('articles'));
    }

    public function create()
    {
        return view('articles.create');
    }

    public function store()
    {
        $attributes = request()->validate([
            'title' => 'required|max:200',
            'description' => 'required|max:500',
            'body' => 'required'
        ]);

        $attributes['user_id'] = auth()->id();

        Article::create($attributes);

        return redirect()->route('TODO');

    }
}
