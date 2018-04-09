<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    public function comments(){
        return $this->hasMany(Comment::class);
    }

    public function category() {
        return $this->belongsTo(Category::class);
    }

    public function user() {
        return $this->belongsTo(User::class);
    }
}
