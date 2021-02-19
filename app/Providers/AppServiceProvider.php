<?php

namespace App\Providers;

use Illuminate\Support\Facades\Blade;
use App\Http\Resources\ListCollection;
use App\Http\Resources\ListResource;
use App\Http\Resources\ProductByCategoryCollection;
use App\Http\Resources\ProductByCategoryResources;
use Illuminate\Support\ServiceProvider;

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
        Blade::directive('currency', function ($expression) {
            return "Rp. <?php echo number_format($expression, 0, ',', '.'); ?>";
        });

        ListResource::withoutWrapping();
        ListCollection::withoutWrapping();
        ProductByCategoryResources::withoutWrapping();
        ProductByCategoryCollection::withoutWrapping();
    }
}
