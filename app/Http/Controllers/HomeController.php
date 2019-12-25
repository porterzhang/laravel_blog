<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//        return view('home');
//$product = Product::where([])->orderBy('created_at','desc')->skip($pos)->take($limit)->get();
        return view('home')->withArticles(\App\Article::where([])->orderBy("updated_at",'desc')->get());
    }
}
