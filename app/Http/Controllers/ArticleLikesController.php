<?php

namespace App\Http\Controllers;

use App\Models\Article;

class ArticleLikesController extends Controller
{
    public function store(Article $article)
    {
        $article->like(current_user());

        return back();
    }

    public function destroy(Article $article)
    {
        $article->dislike(current_user());

        return back();
    }
}
