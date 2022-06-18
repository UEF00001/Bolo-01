<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function p1()
    {
        return view('products.p1');
    }

    public function p2()
    {
        return view('products.p2');
    }

    public function p3()
    {
        return view('products.p3');
    }

    public function p4()
    {
        return view('products.p4');
    }

    public function about()
    {
        return view('about');
    }
    
    public function blog()
    {
        return view('blog');
    }

    public function cart()
    {
        return view('cart');
    }

    public function account()
    {
        return view('account');
    }

    public function genre()
    {
        return view('genre');
    }
    
}
