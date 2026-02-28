<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\ProductService;

class ProductServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->singleton(ProductService::class, function ($app) {
            $products = [
                ['id' => 1, 'name' => 'Brocolli', 'category' => 'Vegetables'],
                ['id' => 2, 'name' => 'Squash', 'category' => 'Vegtables'],
                ['id' => 3, 'name' => 'Tuna', 'category' => 'Canned Foods']
            ];
            return new ProductService($products);
        });
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        view()->share('productKey', 'abc123');
    }
}
