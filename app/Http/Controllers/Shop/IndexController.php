<?php

namespace App\Http\Controllers\Shop;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexController extends Controller
{
       public function shops()
    {
        return view('pages.shop.pages.shops');
    }
    public function shop()
    {
        return view('pages.shop.pages.shop');
    }

    public function show_shops(){
        return view('pages.shop.pages.show-shops');
    }
}
