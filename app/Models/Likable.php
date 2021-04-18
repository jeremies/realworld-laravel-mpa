<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;

trait Likable
{
    public function scopeWithLikes(Builder $query)
    {
        $query->leftJoinSub(
            'select article_id, sum(liked) likes from likes group by article_id',
            'likes',
            'likes.article_id',
            'articles.id'
        );
    }

    public function isLikedBy(User $user)
    {
        return (bool)$user->likes
            ->where('article_id', $this->id)
            ->where('liked', true)
            ->count();
    }

    public function likes()
    {
        return $this->hasMany(Like::class);
    }

    public function dislike($user = null)
    {
        return $this->like($user, false);
    }

    public function like($user = null, $liked = true)
    {
        $this->likes()->updateOrCreate(
            [
                'user_id' => $user ? $user->id : auth()->id(),
            ],
            [
                'liked' => $liked,
            ]
        );
    }
}
