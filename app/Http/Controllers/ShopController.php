<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Area;
use App\Models\Route;
use App\Models\Shop;

class ShopController extends Controller
{
    //

    public function index ()
    {
        // 1対多 親→子
        $shops = Area::find(1)->shops;

        // 親 <- 子
        $area = Shop::find(4)->area;

        // 多対多
        $routes = Shop::find(1)->routes()->get();
        // $shops = Route::find(1)->shops()->get();

        dd($shops, $area, $routes);
    }
}
