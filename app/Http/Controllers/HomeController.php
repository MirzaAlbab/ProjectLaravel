<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     // $this->middleware('auth');
    //     $this->middleware('auth:doctor');
    // } 

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
    
    if(Auth::check()){
        $role = Auth::user()->role;
    }else{
        $role = Auth::guard('doctor')->user()->role;
    }
    
    if($role == "admin"){
        return redirect()->to('admin');
    } else if($role == "user"){
        return redirect()->to('');
    } else if ($role == "dokter") {
        return redirect()->to('/doctor/profile');
    }
    else{
        return redirect()->to('logout');
        
    }
         
    }
    
}
