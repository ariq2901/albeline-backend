<?php

namespace App\Providers;

use Illuminate\Support\Facades\Blade;
use App\Http\Resources\ListCollection;
use App\Http\Resources\ListResource;
use App\Http\Resources\ProductByCategoryCollection;
use App\Http\Resources\ProductByCategoryResources;
use Illuminate\Auth\Notifications\ResetPassword;
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

        ResetPassword::createUrlUsing(function ($notifiable, $token) {
            return "http://172.16.1.154/password/reset/{$token}/{$notifiable->getEmailForPasswordReset()}";
        });

        ListResource::withoutWrapping();
        ListCollection::withoutWrapping();
        ProductByCategoryResources::withoutWrapping();
        ProductByCategoryCollection::withoutWrapping();
    }
}
