<?php

namespace App\Http\Controllers;
use App\Models\Article;
Use App\Models\Category;
use App\Http\Requests\StoreArticleRequest;
use App\Http\Requests\UpdateArticleRequest;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Auth;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $articles = Article::with('category')->get();
        return view('overview', compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('articles.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreArticleRequest $request, Article $article)
    {
        // validate incoming request
        $validated = $request->validated();
        $validated['user_id'] = Auth::id();

        // update using requests
        $article = Article::create($validated);

        // add category
        if ($validated['category_id']) {
            $article->category()->attach($validated['category_id']);
          }


        return redirect()->route('articles.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Article $article)
    {
        // Gate::authorize('show-article', $article);
        
        return view('articles.article', ['article' => $article]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Article $article)
    {
        // Gate::authorize('edit-article', $article);
        $article->load('category');
        $categories = Category::all();
        return view('articles.edit', compact('article', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateArticleRequest $request, Article $article)
    {
        $validated = $request->validated();

        // update using requests
        $article->update($validated);

        // categories update
        $article->category()->sync($validated['category_id'] ?? []);

        return redirect()->route('articles.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Article $article)
    {
        Gate::authorize('destroy-article', $article);

        if ($article) {
            $article->delete();
        }
        return redirect()->route('articles.index');
    }

    public function myArticles() {
        // auth the user
        $user = Auth::user();

        // get user article
        if ($user) {
            $articles = Article::where('user_id', $user->id)->latest()->get();
        }

        return view('articles.userArticle', ['articles' => $articles]);
    }
}
