<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;
use App\Models\User;


class AuthController extends Controller
{
    public function login(){
        if(Auth::guard('doctor')->check()){
            return redirect()->route('profile');
        }else{

            if (Auth::check()) { // true sekalian session field di users nanti bisa dipanggil via Auth
                //Login Success
                return redirect()->route('home');
            }
            return view('user.login');
        }
        
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
        
        // Auth::attempt($data);
        // dd(Auth::attempt($data));
        
        
        if (Auth::guard('doctor')->attempt($data)) { // true sekalian session field di users nanti bisa dipanggil via Auth
            //Login Success
            
            return redirect()->route('profile');
            
  
        } else { 
            if(Auth::attempt($data)){
                
                return redirect()->route('home');
            }
            else{
                //Login Fail
            Session::flash('error', 'Email atau password salah');
            return redirect()->route('register');
            }
            // false
  
            // //Login Fail
            // Session::flash('error', 'Email atau password salah');
            // return redirect()->route('register');
        }
       
    
    }
    public function register(){
        return view('user.register');
    }
    public function pastregister(Request $request){
        $request->validate([
            'nama' => 'required',
            'tanggal_lahir' => 'required',
            'gender' => 'required',
            'email' => 'required',
            'alamat' => 'required',
            'telp' => 'required',
            'password' => 'required|confirmed',
        ]);
        
        
        $User = new User;
        $User->nama = $request->input('nama');
        $User->tanggal_lahir = $request->input('tanggal_lahir');
        $User->gender = $request->input('gender');
        $User->email = $request->input('email');
        $User->telp = $request->input('telp');
        $User->alamat = $request->input('alamat');
        $User->password = bcrypt($request->input('password'));
        $User->save();
        return redirect()->route('login');
    }
    public function logout()
    {
        Auth::logout(); // menghapus session yang aktif
        return redirect()->route('login');
    }

}
