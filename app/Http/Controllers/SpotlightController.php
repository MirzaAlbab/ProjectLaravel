<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SpotlightController extends Controller
{
    function index(){
        return view ('user.spotlight');
    }
}
