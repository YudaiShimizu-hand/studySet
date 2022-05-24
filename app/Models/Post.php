<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;


class Post extends Model
{
    use HasFactory;
    protected $fillable = [
            'title',
            'day',
            'time',
            'score',
            'body',
            'user_id'
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    protected static function boot()
    {
        parent::boot();
        //保存時にuser_idをログインユーザーに設定
        self::saving(function($post){
            $post->user_id = \Auth::id();
        });
    }
}
