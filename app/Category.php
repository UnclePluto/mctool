<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Article;

class Category extends Model
{

    protected $table = 'categories';

    public function hasManyArticles()
    {
        return $this->hasMany(Article::class, 'category_id', 'id');
    }


}
