@extends('layouts.app')
@section('content')
  <div class="container mx-auto py-3">
    <div class=" flex flex-col border shadow-sm rounded-md p-10">
      <div class="flex justify-between items-center mb-5 border-b-4 pb-2">
        <h1 class="bg-teal-500 p-3 capitalize text-white font-bold">Form Edit Jurusan</h1>
        <a href="{{ route('jurusan.index') }}" class="capitalize">back</a>
      </div>
      <form action="{{ route('jurusan.update', $jurusan->id) }}" method="post" class="flex flex-col items-start">
        @csrf
        @method('PATCH')
        <div class="flex w-full my-3">
          <label for="" class="w-96"> <span class="text-red-500"><sup>*</sup></span> Nama Jurusan</label>
          <div class="flex flex-col w-full">
            <input type="text" name="nama_jurusan" id="" class="border py-2 px-1"
              placeholder="Masukan Nama Jurusan" value="{{ $jurusan->nama_jurusan }}">
            @error('nama_jurusan')
              <x-invalid :message="$message" />
            @enderror
          </div>
        </div>

        <div class="flex w-full my-3">
          <label for="" class="w-96"> <span class="text-red-500"><sup>*</sup></span> Kapasitas Jurusan</label>
          <div class="flex flex-col w-full">
            <input type="number" name="kapasitas_jurusan" id="" class="border py-2 px-1"
              placeholder="Tentukan Kapasitas Jurusan" value="{{ $jurusan->kapasitas_jurusan }}">
            @error('kapasitas_jurusan')
              <x-invalid :message="$message" />
            @enderror
          </div>
        </div>

        <div class="flex w-full justify-end">
          <button type="submit"
            class="bg-gray-800 text-white px-2 py-3 w-40 transition-all hover:bg-gray-900 font-semibold rounded-sm">Save</button>
        </div>

      </form>
    </div>
  </div>
@endsection
