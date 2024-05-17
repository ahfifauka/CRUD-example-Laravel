<?php

namespace App\Http\Controllers;

use App\Models\Pendaftaran;
use App\Http\Requests\StorePendaftaranRequest;
use App\Http\Requests\UpdatePendaftaranRequest;
use App\Models\Jurusan;

class PendaftaranController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pendaftarans = Pendaftaran::orderBy('id', 'desc')->paginate(15);
        $total = Pendaftaran::count();
        $data = [
            "pendaftarans"  => $pendaftarans,
            "total"  => $total
        ];
        return view('pendaftaran.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $jurusans = Jurusan::all();
        $data = [
            "jurusans"  => $jurusans
        ];
        return view('pendaftaran.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePendaftaranRequest $request)
    {
        $jurusan = Jurusan::where('nama_jurusan', $request->jurusan)->first();
        $kapasitasJurusan = $jurusan->kapasitas_jurusan;

        $jumlahPendaftar = Pendaftaran::where('jurusan', $request->jurusan)->count();

        if ($kapasitasJurusan < $jumlahPendaftar) {
            return redirect()->route('pendaftaran.index');
        }

        $siswa = Pendaftaran::create($request->all());
        return redirect()->route('pendaftaran.index')->with('success', $siswa->nama_lengkap . " Berhasil didaftarkan dalam jurusan " . $siswa->jurusan);
    }

    /**
     * Display the specified resource.
     */
    public function show(Pendaftaran $pendaftaran)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pendaftaran $pendaftaran)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePendaftaranRequest $request, Pendaftaran $pendaftaran)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pendaftaran $pendaftaran)
    {
        //
    }
}
