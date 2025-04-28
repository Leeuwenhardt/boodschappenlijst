<?php

namespace App\Http\Controllers;
use App\Models\Comment;

use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Request $request) {
        $comment = new Comment();
        $comment-> name = $request->input('body');
        $comment->save();

        return view('articles.article');
    }
}
