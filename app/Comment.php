<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{

    protected $fillable = ['comment'];

    public function comment_table()
    {
        return $this->morphTo();
    }

    public function commentObj()
    {
        return $this->morphTo('comment_table');
    }
}
