<?php

namespace App\Providers;

use App\Models\Article;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Model::preventLazyLoading();

        Gate::define('show-article', function (User $user, Article $article) {
            return $article->user->is($user);
        });

        Gate::define('edit-article', function (User $user, Article $article) {
            return $article->user->is($user);
        });

        Gate::define('destroy-article', function (User $user, Article $article) {
            return $article->user->is($user);
        });
    }
}
