<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use App\Repositories\IRepositories\{

	ISupplierRepository,

};

use App\Repositories\Eloquent\{

	SupplierRepository,

};

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
