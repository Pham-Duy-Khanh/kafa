<?php

namespace App\Providers;
use App\Banner;
use App\Blog;
use App\Product;
use App\Store;
use App\StoreCate;
use Illuminate\Support\Facades\View;
use App\Category;
use App\Helper\CartHelper;
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
        $cart = new CartHelper();
        View::composer('*',function ($view){
            $view->with([
//               'category'=>DB::table('categories')->paginate(1),
                'cart' =>new CartHelper()
            ]);
            $view->with('banner', Banner::where('status',0)->get());
//            $view->with('storecate', StoreCate::all());
//            $view->with('category', Category::all());
//            $view->with('store', Store::all());
//            $view->with('blog',Blog::all());
//            $view->with('blog', Blog::orderBy('id', 'DESC')->get());
//            $view->with('product',Product::all());
//            $view->with('product', Product::where('status',0)->orderby('id','DESC')->paginate(12));

             });


    }
}
