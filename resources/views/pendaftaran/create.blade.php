@extends('layouts.app')
@section('content')
  <x-card>
    <x-card-header>Form Pendaftaran</x-card-header>
    <x-card-content>
      <form action="{{ route('pendaftaran.store') }}" method="POST" class="w-full">
        @csrf

        <div class="my-2 flex">
          <label for="" class="capitalize w-72">nama lengkap</label>
          <div class="flex flex-col w-full">
            <input
              class="border-2 p-2 w-full @error('nama_lengkap')
                border-red-500/80
            @enderror "
              type="text" name="nama_lengkap" id="nama_lengkap" placeholder="Nama lengkap"
              value="{{ old('nama_lengkap') }}">
            @error('nama_lengkap')
              <small class="text-red-500">{{ $message }}</small>
            @enderror
          </div>
        </div>

        <div class="my-2 flex">
          <label for="" class="capitalize w-72">sekolah asal</label>
          <div class="flex flex-col w-full">
            <input
              class="border-2 p-2 w-full @error('sekolah_asal')
                border-red-500
            @enderror "
              type="text" name="sekolah_asal" id="sekolah_asal" placeholder="Sekolah asal"
              value="{{ old('sekolah_asal') }}">
            @error('sekolah_asal')
              <small class="text-red-500">{{ $message }}</small>
            @enderror
          </div>
        </div>

        <div class="my-2 flex">
          <label for="" class="capitalize w-72">alamat</label>
          <div class="flex flex-col w-full">
            <textarea name="alamat"
              class="border-2 w-full p-2 @error('alamat')
                border-red-500
            @enderror " id="alamat"
              cols="30" rows="10" placeholder="Alamat lengkap">{{ old('alamat') }}</textarea>
            @error('alamat')
              <small class="text-red-500">{{ $message }}</small>
            @enderror
          </div>
        </div>

        <div class="my-2 flex">
          <label for="" class="capitalize w-72">Jurusan</label>
          <div class="flex flex-col w-full">
            <select name="jurusan" id=""
              class="border-2 p-2 @error('jurusan')
                border-red-500
            @enderror w-full">
              <option value="" class="p-2">Pilih Jurusan</option>
              @foreach ($jurusans as $jurusan)
                <option class="p-2" value="{{ $jurusan->nama_jurusan }}">{{ $jurusan->nama_jurusan }}</option>
              @endforeach
            </select>
            @error('jurusan')
              <small class="text-red-500">{{ $message }}</small>
            @enderror
          </div>
        </div>
        <button
          class="bg-teal-800 text-white p-2 w-24 transition-all hover:bg-teal-900 font-semibold rounded-sm capitalize float-end">save</button>
      </form>
    </x-card-content>
  </x-card>
@endsection
