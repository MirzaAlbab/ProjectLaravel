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
            'NAMA' => 'required',
            'EMAIL' => 'required',
            'TANGGAL_LAHIR' => 'required',
            'PASSWORD' => 'required',
            'CONFIRMPASSWORD' => 'required',
            'ALAMAT' => 'required',
            'NO_TELP' => 'required',
            'JENIS_KELAMIN' => 'required',
        ]);
        $User = new User;
        $User->NAMA = $request->input('NAMA');
        $User->TANGGAL_LAHIR = $request->input('TANGGAL_LAHIR');
        $User->EMAIL = $request->input('EMAIL');
        $User->NO_TELP = $request->input('NO_TELP');
        $User->ALAMAT = $request->input('ALAMAT');
        $User->JENIS_KELAMIN = $request->input('JENIS_KELAMIN');
        $User->PASSWORD = bcrypt($request->input('PASSWORD'));
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
        User::where('ID_PASIEN', $user->ID_PASIEN)
                ->update([
                    'NAMA' => $request->NAMA,
                    'TANGGAL_LAHIR' => $request->TANGGAL_LAHIR,
                    'EMAIL' => $request->EMAIL,
                    'NO_TELP' => $request->NO_TELP,
                    'ALAMAT' => $request->ALAMAT,
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
        User::destroy($user->ID_PASIEN);
        return redirect('/user')->with('status', 'Data User Berhasil Dihapus');

    }
}
