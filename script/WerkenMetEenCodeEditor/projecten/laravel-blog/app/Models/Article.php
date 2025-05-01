<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

Class Article extends Model {
    use HasFactory;
    protected $fillable = ['title', 'body', 'user_id'];

    // TODO :: verbeteren
    public function category() {
        return $this->belongsToMany(Category::class, 'article_category', 'article_id', 'category_id');
    }

    public function user() {
        return $this->belongsTo(User::class);
    }

    // public function comment() {
    // return $this->HasMany(Comment::class);
    // }
};