<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Website;

class Article extends Model
{
    protected $table = 'articles';

    // one-to-many
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id'); // articles.user_id
    }

    // many-to-many
    public function websites()
    {
        return $this->belongsToMany(Website::class); // 中间表: article_website
    }
}
