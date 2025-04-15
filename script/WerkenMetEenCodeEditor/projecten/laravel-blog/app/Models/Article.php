<?php

namespace App\Models;
use Illuminate\Support\Arr;
use Illuminate\Database\Eloquent\Model;

// class Article extends Model
// {
//     public function category() {
//         return $this->hasMany(Category::class);
//     }
// }

Class Article {
    public static function all() {
        return [
            [
            'id' => 1,
            'title' => 'lopus',
            'description' => 'ipum',
            ],
    ];
    }

    public static function find(int $id): array {
        return Arr::first(static::all(), fn($article) => $article['id'] == $id);

        if (! $article) {
            abort(404);
        }
    }
};