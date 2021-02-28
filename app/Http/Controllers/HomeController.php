<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index()
    {
        return view('index');
    }

    // public function home()
    // {
    //     return view('home');
    // }

    // public function product(){
    //     return view('product');
    // }

    // public function news($tittle){
    //     return view('news', ['tittle'=>$tittle]);
    // }

    // public function program(){
    //     return view('program');
    // }

    // public function about(){
    //     return view('about-us');
    // }

    // public function contact(){
    //     return view('contact-us');
    // }

    //praktikum 2
    public function about(){
            return view('about');
        }
    
    public function contact(){
            return view('contact');
        }
    public function services(){
            return view('services');
        }


}
