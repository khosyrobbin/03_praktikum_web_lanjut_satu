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
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function home()
    {
        return view('home');
    }

    public function product(){
        return view('product');
    }

    public function news($tittle){
        return view('news', ['tittle'=>$tittle]);
    }

    public function program(){
        return view('program');
    }

    public function about(){
        return view('about-us');
    }

    public function contact(){
        return view('contact-us');
    }

}
