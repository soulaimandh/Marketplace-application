<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Wishlist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IndexController extends Controller
{
    public function forum()
    {
        return view('pages.client.pages.forum');
    }

    public function question()
    {
        return view('pages.client.pages.question');
    }

    public function add_question()
    {
        return view('pages.client.pages.add-question');
    }

    public function wishlist()
    {
        $products = Wishlist::where('user_id',Auth::id())->get();
        return view('pages.client.pages.wishlist',compact('products'));
    }

    public function premuim_products(){
        return view('pages.client.pages.premuim-products');
    }

}
