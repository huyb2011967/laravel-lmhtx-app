<?php

namespace App\Providers;

use App\Models\Article;
use App\Models\Category;
use App\Models\CategoryGroup;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\View as FacadesView;
use Illuminate\Support\ServiceProvider;

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
    public function boot()
    {
        DB::listen(function ($query) {
            Log::info($query->sql);
            Log::info($query->bindings);
        });

        FacadesView::composer('client.header', function ($view) {
            $categoryGroups = CategoryGroup::all();
            $view->with('categoryGroups', $categoryGroups);
        });

        // FacadesView::composer('client.layout.page', function ($view) {
        //     $category = Category::all();
        //     $view->with('categoryGroups', $category);
        // });

        FacadesView::composer('client.sidebar', function ($view) {
            $articles = Article::all();
            $view->with('articles', $articles);
        });

        FacadesView::composer('client.slider1', function ($view) {
            $articles = Article::all();
            $view->with('articles', $articles);
        });

    }
}
