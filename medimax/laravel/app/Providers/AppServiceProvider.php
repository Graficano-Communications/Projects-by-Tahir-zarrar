<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\Category;
use Illuminate\Support\Facades\Cache;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $categories = Cache::remember('categories', now()->addMinutes(60), function () {
            return Category::select('id', 'name')
                ->with(['subcategories' => function ($query) {
                    $query->where('status', 'public')->select('id', 'name', 'category_id');
                }])
                ->where('status', 'public')
                ->get();
        });

        View::share('categories', $categories);
    }
}
