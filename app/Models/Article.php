<?php

namespace App\Models;

use App\Models\Likable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;
    use Likable;

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
