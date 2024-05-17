<?php

namespace App\Http\Controllers;

use App\Models\Jurusan;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class JurusanController extends Controller
{
    public function index()
    {
        $data = [
            "jurusans" => Jurusan::all(),
        ];

        return view('jurusan.index', $data);
    }

    public function destroy($id)
    {
        $jurusan = Jurusan::find($id);
        $jurusan->delete();
        return redirect()->route('jurusan.index')->with('success', $jurusan->nama_jurusan . " berhasil dihapus");
    }

    public function create()
    {
        return view('jurusan.create');
    }

    public function edit($id)
    {
        $jurusan = Jurusan::find($id);
        $data = [
            "jurusan"   => $jurusan
        ];
        return view('jurusan.edit', $data);
    }

    public function store(Request $request)
    {
        $request->validate([
            "nama_jurusan"          => ['required', 'unique:jurusans,nama_jurusan'],
            "kapasitas_jurusan"     => ['required', 'numeric']
        ]);


        $kodeJurusan = Jurusan::kodeJurusan();
        $request['nama_jurusan'] = Str::upper($request->nama_jurusan);
        $request['kode_jurusan'] = $kodeJurusan;
        Jurusan::create($request->all());
        return redirect()->route('jurusan.index')->with('success', 'Jurusan baru berhasil ditambahkan');
    }

    public function update(Request $request, Jurusan $jurusan)
    {
        $jurusan->nama_jurusan = $request->nama_jurusan;
        $jurusan->kapasitas_jurusan = $request->kapasitas_jurusan;
        $jurusan->save();
        return redirect()->route('jurusan.index')->with('success', 'Data jurusan berhasil diupdate');
    }
}
