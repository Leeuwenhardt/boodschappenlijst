<?php

namespace App\Http\Controllers;
use App\Models\Comment;
Use App\Http\Requests\StoreCommentRequest;

class CommentController extends Controller
{
    public function store(StoreCommentRequest $request) {
        $validated = $request->validated();
        Comment::create($validated);

        return view('articles.article');
    }
}
