<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;
use App\Models\User;


class OtentikasiController extends Controller
{
    public function login(){
        if (Auth::check()) { // true sekalian session field di users nanti bisa dipanggil via Auth
            //Login Success
            return redirect()->route('admin');
        }
        return view('user.login');
        
    }
    public function pastlogin(Request $request){
        $rules = [
            'email'                 => 'required|email',
            'password'              => 'required|string'
        ];
  
        $messages = [
            'email.required'        => 'Email wajib diisi',
            'email.email'           => 'Email tidak valid',
            'password.required'     => 'Password wajib diisi',
            'password.string'       => 'Password harus berupa string'
        ];
  
        $validator = Validator::make($request->all(), $rules, $messages);
  
        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput($request->all);
        }
  
        $data = [
            'email'     => $request->input('email'),
            'password'  => $request->input('password'),
        ];
        
        Auth::attempt($data);
        
        if (Auth::check()) { // true sekalian session field di users nanti bisa dipanggil via Auth
            //Login Success
            
            return redirect()->route('admin');
  
        } else { // false
  
            //Login Fail
            Session::flash('error', 'Email atau password salah');
            return redirect()->route('register');
        }
       
    
    }
    public function register(){
        return view('user.register');
    }
    public function pastregister(Request $request){
        $request->validate([
            'nama' => 'required',
            'tanggal_lahir' => 'required',
            'email' => 'required',
            'alamat' => 'required',
            'telp' => 'required',
            'gender' => 'required',
            'password' => 'required|confirmed',
        ]);
        User::create([
            'nama' => $request['nama'],
            'tanggal_lahir' => $request['tanggal_lahir'],
            'email' => $request['email'],
            'telp' => $request['telp'],
            'alamat' => $request['alamat'],
            'gender' => $request['gender'],
            'password' => Hash::make($request['password']),
        ]);
        return redirect()->route('login');
    }
    public function logout()
    {
        Auth::logout(); // menghapus session yang aktif
        return redirect()->route('login');
    }

}
