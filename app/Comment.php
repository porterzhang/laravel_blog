<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    //批量赋值
    protected $fillable = ['nickname','email','website','content','article_id'];

    public function hasOneArticle()
    {
        return $this->hasOne('App\Article', 'id', 'article_id');
    }
}
