<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Post;

class Post extends Model
{
    protected static function boot()
    {
        parent::boot();

        static::deleting(function ($post) {
            $post->comments()->delete();
        // ...
         });

    }

    protected $fillable = [
        'title','breif','body','image','user_id'
    ];

    public function user(){
        return $this -> belongsTo(User::class);
    }

    public function comments(){
        return $this -> hasMany(Comment::class);
    }
}
