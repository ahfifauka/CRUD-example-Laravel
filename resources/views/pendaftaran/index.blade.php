@extends('layouts.app')
@section('content')
  <x-card>
    <x-card-header>Data Pendaftaran</x-card-header>
    <x-card-content>
      <div class="grid grid-cols-12 gap-x-5">
        <div class="col-span-12 md:col-span-9">
          <table class="w-full">
            <thead class="bg-slate-200 h-10 border">
              <tr class="border">
                <th class="border border-white capitalize">nomor</th>
                <th class="border border-white capitalize">nama</th>
                <th class="border border-white capitalize">sekolah asal</th>
                <th class="border border-white capitalize">jurusan</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($pendaftarans as $index => $pendaftaran)
                <tr>
                  <td class="border text-center">{{ $index + 1 }}</td>
                  <td class="border px-3">{{ Str::ucfirst($pendaftaran->nama_lengkap) }}</td>
                  <td class="border px-3">{{ $pendaftaran->sekolah_asal }}</td>
                  <td class="border text-center">{{ $pendaftaran->jurusan }}</td>
                </tr>
              @endforeach
            </tbody>
          </table>
          <div class="flex justify-center mt-10">
            {{ $pendaftarans->links() }}
          </div>
        </div>
        <div class="col-span-12 md:col-span-3 border p-1 h-fit">
          <h1 class="font-semibold">Informasi Pendaftar</h1>
          <p class="text-sm mt-3">Jumlah Pendaftar: {{ $total }}</p>
        </div>
      </div>
    </x-card-content>
  </x-card>
@endsection
