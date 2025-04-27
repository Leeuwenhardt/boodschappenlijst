<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

Class Article extends Model {
    use HasFactory;
    protected $fillable = ['title', 'body', 'category_id'];

    public function category() {
        return $this->belongsTo(Category::class);
    }

    public function comment() {
    return $this->HasMany(Comment::class);
    }
};