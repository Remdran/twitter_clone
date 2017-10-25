<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tweet extends Model {

    public function replies()
    {
        return $this->hasMany(Reply::class);
    }

    public function owner()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
