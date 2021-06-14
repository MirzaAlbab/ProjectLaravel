<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AdminIndexController extends Controller
{
    public function dashboard(){
        Auth::user();
        return view('admin.dashboard');
    }
}
