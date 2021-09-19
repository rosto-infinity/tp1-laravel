<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    function home(){
        return view('home');
    }
    function propos(){
        return view('propos');
    }
    function contact(){
        return view('contact');
    }
}
