<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Article;

class Website extends Model
{
    protected $table = 'websites';

    // many-to-many: articles 和 websites 的中间表 article_website包含article_id,website_id
    public function articles()
    {
        return $this->belongsToMany(Article::class); // 中间表: article_website
    }
}
