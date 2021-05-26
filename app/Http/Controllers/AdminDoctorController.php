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
            'NAMA' => 'required',
            'EMAIL' => 'required',
            'PASSWORD' => 'required',
            'CONFIRMPASSWORD' => 'required',
            'NO_TELP' => 'required',
            'JENIS_KELAMIN' => 'required',
        ]);
        $Doctor = new Doctor;
        $Doctor->NAMA = $request->input('NAMA');
        $Doctor->JENIS_KELAMIN = $request->input('JENIS_KELAMIN');
        $Doctor->EMAIL = $request->input('EMAIL');
        $Doctor->NO_TELP = $request->input('NO_TELP');
        $Doctor->SPESIALISASI = $request->input('SPESIALISASI');
        $Doctor->PASSWORD = bcrypt($request->input('PASSWORD'));
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
        Doctor::where('ID_DOKTER', $doctor->ID_DOKTER)
                ->update([
                    'NAMA' => $request->NAMA,
                    'EMAIL' => $request->EMAIL,
                    'NO_TELP' => $request->NO_TELP,
                    'SPESIALISASI' => $request->SPESIALISASI,
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
        Doctor::destroy($doctor->ID_DOKTER);
        return redirect('/doctor')->with('status', 'Data Dokter Berhasil Dihapus');

    }
}
