<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Item extends Model {
    protected $fillable = ['name', 'description'];
    use HasFactory;
    public function category() {
        return $this->belongsTo(Category::class);
    }
}
