<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    function home(){
        return view('index');
    }
    function about(){
        return view('about',['nama' => 'Admin']);
    }
    
}
