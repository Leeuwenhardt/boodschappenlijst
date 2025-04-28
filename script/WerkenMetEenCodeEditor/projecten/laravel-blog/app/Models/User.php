<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class User extends Model
{
    use HasFactory;
    protected $fillable = ['username', 'password'];

    public function article() {
        return $this->belongsTo(Article::class);
    }

    // public function comment() {
    // return $this->HasMany(Comment::class);
    // }
}
