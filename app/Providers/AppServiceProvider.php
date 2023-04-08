<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\Order;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Auth;



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
        Paginator::defaultView('vendor.pagination.bootstrap-4');

        $basketSize = 0;

        View::composer('*', function (\Illuminate\View\View $view) {
            return $view
                ->with('categories', Category::all());
        });

        View::composer('*', function (\Illuminate\View\View $view) use ($basketSize) {
            // Using Closure based composers...
            $id = Auth::id();
            if ($id) {
                $currentOrder = Order::getCurrentOrder($id);
                if ($currentOrder) {
                    $basketSize = sizeof($currentOrder->products);
                }
            }

            return $view
                ->with('basketSize', $basketSize);
        });

    }
}
