<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\type_products;
use App\Models\products;
use App\Cart;
use Session;

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
        view()->composer("buoi08.lop_header", function($view)
        {
            $phanloai = type_products::all();
            $view->with('phanloai',$phanloai);
        });

        view()->composer("buoi08.lop_header", function($view)
        {
            if(Session('cart'))
            {
                $oldCart = Session::get('cart');
                $cart    = new Cart($oldCart);
                $view->with(['cart' => Session::get('cart'),
                             'product_cart' => $cart->items,
                             'totalPrice' => $cart->totalPrice,
                             'totalQty' => $cart->totalQty]);
            }
        });

    }
}
