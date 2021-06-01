<?php

namespace App\Http\Controllers;
use App\Models\Doctor;
use Illuminate\Http\Request;

class AdminDoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Doctor = \App\Models\Doctor::all();
        return view('admin.doctor.doctors',['doctor'=> $Doctor]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.doctor.tambahdoctors');
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
            'password' => 'required',
            'password_confirmation' => 'required',
            'telp' => 'required',
            'jenis_kelamin' => 'required',
        ]);
        $Doctor = new Doctor;
        $Doctor->nama = $request->input('nama');
        $Doctor->jenis_kelamin = $request->input('gender');
        $Doctor->email = $request->input('email');
        $Doctor->telp = $request->input('telp');
        $Doctor->spesialisasi = $request->input('spesialisasi');
        $Doctor->password = bcrypt($request->input('password'));
        $Doctor->save();
        return redirect('/doctor')->with('status', 'Data Dokter Berhasil Ditambahkan');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Doctor $doctor)
    {
        return view('admin.doctor.detaildoctor', compact('doctor'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Doctor $doctor)
    {
        
        return view('admin.doctor.editdoctor', ['doctor' => $doctor]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Doctor $doctor)
    {
        Doctor::where('id_dokter', $doctor->id)
                ->update([
                    'nama' => $request->nama,
                    'email' => $request->email,
                    'telp' => $request->telp,
                    'spesialisasi' => $request->spesialisasi,
                ]);
        return redirect('/doctor')->with('status', 'Data Dokter Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Doctor $doctor)
    {
        Doctor::destroy($doctor->id);
        return redirect('/doctor')->with('status', 'Data Dokter Berhasil Dihapus');

    }
}
