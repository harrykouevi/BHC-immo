<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;

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
        Collection::macro('paginate', function ($perPage, $pageName = 'page') {
            $page = Paginator::resolveCurrentPage($pageName);

            // Get the items for the current page
            $items = $this->forPage($page, $perPage);

            // Return a new LengthAwarePaginator instance
            return new LengthAwarePaginator(
                $items,
                $this->count(),
                $perPage,
                $page,
                [
                    'path' => Paginator::resolveCurrentPath(),
                    'pageName' => $pageName,
                ]
            );
        });
    }
}
