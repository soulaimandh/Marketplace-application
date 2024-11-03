<?php

namespace App\Http\Controllers\Visitor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        return view('pages.visitor.pages.welcome');
    }

    public function categories()
    {
        return view('pages.visitor.pages.categories');
    }

    public function blog()
    {
        return view('pages.visitor.pages.blog');
    }

    public function post()
    {
        return view('pages.visitor.pages.post');
    }
    public function contact()
    {
        return view('pages.visitor.pages.contact');
    }
    public function hmizat_admar()
    {
        return view('pages.visitor.pages.hmizat-admar');
    }
    
    public function search()
    {
        return view('pages.visitor.pages.search');
    }

    public function how_to_start(){
        return view('pages.visitor.pages.how-to-start');
    }
    public function product_details()
    {
        return view('pages.visitor.pages.product-details');
    }
    public function all_products()
    {
        return view('pages.visitor.pages.all-products');
    }

    
}