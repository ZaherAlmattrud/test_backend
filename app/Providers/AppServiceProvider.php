<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use App\Repositories\IRepositories\ISupplierRepository;
use App\Repositories\Eloquent\SupplierRepository;

use App\Repositories\IRepositories\IProductRepository;
use App\Repositories\Eloquent\ProductRepository;

use App\Repositories\IRepositories\ICustomerRepository;
use App\Repositories\Eloquent\CustomerRepository;

use App\Repositories\IRepositories\IOrderRepository;
use App\Repositories\Eloquent\OrderRepository;

use App\Repositories\IRepositories\IOrderItemRepository;
use App\Repositories\Eloquent\OrderItemRepository;
 



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
        $this->app->bind(ISupplierRepository::class, SupplierRepository::class);

        $this->app->bind(IProductRepository::class, ProductRepository::class);

        $this->app->bind(ICustomerRepository::class, CustomerRepository::class);

        $this->app->bind(IOrderRepository::class, OrderRepository::class);

        $this->app->bind(IOrderItemRepository::class, OrderItemRepository::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
