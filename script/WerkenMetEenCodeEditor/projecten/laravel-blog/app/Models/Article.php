<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

Class Article extends Model {
    use HasFactory;
    protected $fillable = ['title', 'body'];

    public function category() {
        return $this->hasMany(Category::class);
    }

    public function comments() {
    return $this->HasMany(Comment::class);
    }
};