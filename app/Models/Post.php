<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'posts';
    protected $fillable = ['user_id', 'content'];

    public function user()
    {
        return $this->belongsTo('App\Models\User', 'user_id');
    }
}
