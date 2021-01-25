<?php

namespace App\Providers;

use App\Interfaces\CategorieRepositoryInterface;
use App\Interfaces\ColorRepositoryInterface;
use App\Interfaces\OrderRepositoryInterface;
use App\Interfaces\PhotoRepositoryInterface;
use App\Interfaces\ProductRepositoryInterface;
use App\Interfaces\SizeRepositoryInterface;
use App\Interfaces\UserRepositoryInterface;
use App\Repositories\CategorieRepository;
use App\Repositories\ColorRepository;
use App\Repositories\OrderRepository;
use App\Repositories\PhotoRepository;
use App\Repositories\ProductRepository;
use App\Repositories\SizeRepository;
use App\Repositories\UserRepository;
use Illuminate\Support\ServiceProvider;

class RepositoriesServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->bind(UserRepositoryInterface::class,UserRepository::class);
        $this->app->bind(ProductRepositoryInterface::class,ProductRepository::class);
        $this->app->bind(SizeRepositoryInterface::class,SizeRepository::class);
        $this->app->bind(PhotoRepositoryInterface::class,PhotoRepository::class);
        $this->app->bind(OrderRepositoryInterface::class,OrderRepository::class);
        $this->app->bind(ColorRepositoryInterface::class,ColorRepository::class);
        $this->app->bind(CategorieRepositoryInterface::class,CategorieRepository::class);
    }
}
