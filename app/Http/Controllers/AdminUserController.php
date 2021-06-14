<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class AdminUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $User = \App\Models\User::all();
        return view('admin.user.users',['user'=> $User]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.user.tambahusers');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'email' => 'required',
            'tanggal_lahir' => 'required',
            'password' => 'required',
            'password_confirmation' => 'required',
            'alamat' => 'required',
            'telp' => 'required',
            'gender' => 'required',
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
        return redirect('/user')->with('status', 'Data User Berhasil Ditambahkan');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return view('admin.user.detailuser', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        
        return view('admin.user.edituser', ['user' => $user]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        User::where('id', $user->id)
                ->update([
                    'nama' => $request->nama,
                    'tanggal_lahir' => $request->tanggal_lahir,
                    'email' => $request->email,
                    'telp' => $request->telp,
                    'alamat' => $request->alamat,
                ]);
        return redirect('/user')->with('status', 'Data User Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        User::destroy($user->id);
        return redirect('/user')->with('status', 'Data User Berhasil Dihapus');

    }
}
