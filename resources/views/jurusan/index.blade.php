@extends('layouts.app')
@section('content')
  <x-card>
    <x-card-header>Daftar jurusan</x-card-header>
    <x-card-content>
      <div class="pt-2 mb-3 flex justify-between items-center">
        <h1 class="text-gray-700">Halaman ini menyediakan data daftar jurusan yang tersedia</h1>
        <x-link-button url="jurusan.create" title="create data" type="base" />
      </div>
      <table class="w-full border">
        <thead class="bg-gray-200 h-10">
          <tr class="border">
            <th class="border border-white">#</th>
            <th class="border border-white">Nama Jurusan</th>
            <th class="border border-white">Kode Jurusan</th>
            <th class="border border-white">Kapasitas</th>
            <th class="border border-white">Opsi</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($jurusans as $index => $jurusan)
            <tr class="border">
              <td class="border text-center">{{ $index + 1 }} </td>
              <td class="border text-center">{{ $jurusan->nama_jurusan }}</td>
              <td class="border text-center">{{ $jurusan->kode_jurusan }}</td>
              <td class="border text-center">{{ $jurusan->kapasitas_jurusan }} Siswa</td>
              <td class="border text-center">
                <div class="flex gap-x-2 items-center justify-center">
                  <x-link-button url="jurusan.edit" :params="$jurusan->id" title="edit" type="primary" />
                  <form action="{{ route('jurusan.destroy', $jurusan->id) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit" onclick="return confirm('Hapus data ini ?')"
                      class="capitalize text-white bg-red-500 py-2 px-3 rounded-md">delete</button>
                  </form>
                </div>
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </x-card-content>
  </x-card>
@endsection
