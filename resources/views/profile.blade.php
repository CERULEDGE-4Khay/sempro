@extends('layouts.app')
@section('content')

<div class="max-w-3xl mx-auto p-6 bg-white rounded-xl shadow mt-20">
  <h2 class="text-2xl font-bold mb-4">Profil Saya</h2>

  <form action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="grid grid-cols-2 gap-4">
      <div>
        <label class="block mb-2">Nama</label>
        <input type="text" disabled value="{{ $magang->nama ?? $user->name }}" class="w-full p-2 border rounded bg-gray-100">
      </div>
      <div>
        <label class="block mb-2">Email</label>
        <input type="text" disabled value="{{ $magang->email ?? $user->email }}" class="w-full p-2 border rounded bg-gray-100">
      </div>
      <div>
        <label class="block mb-2">Telepon</label>
        <input type="text" name="telepon" value="{{ $magang->telepon ?? '' }}" class="w-full p-2 border rounded">
      </div>
      <div>
        <label class="block mb-2">Universitas</label>
        <input type="text" name="universitas" value="{{ $magang->universitas ?? '' }}" class="w-full p-2 border rounded">
      </div>
      <div>
        <label class="block mb-2">Jurusan</label>
        <input type="text" name="jurusan" value="{{ $magang->jurusan ?? '' }}" class="w-full p-2 border rounded">
      </div>
      <div>
        <label class="block mb-2">Ruangan</label>
        <input type="text" disabled value="{{ $magang->ruangan ?? 'Belum ditempatkan' }}" class="w-full p-2 border rounded bg-gray-100">
      </div>
     <div>
        <label class="block mb-2">Status Magang</label>
        @if($magang)
          <span class="
            px-3 py-1 rounded text-sm
            @if($magang->status == 'aktif') bg-green-100 text-green-900
            @elseif($magang->status == 'pending') bg-yellow-100 text-yellow-900
            @else bg-gray-100 text-gray-800
            @endif
          ">
            {{ ucfirst($magang->status) }}
          </span>
        @else
          <span class="px-3 py-1 rounded text-sm bg-gray-100 text-gray-800">
            Belum Diketahui
          </span>
        @endif
      </div>

      <div>
        <label class="block mb-2">Alamat</label>
        <textarea name="alamat" class="w-full p-2 border rounded">{{ $magang->alamat ?? '' }}</textarea>
      </div>
      <div class="col-span-2">
        <label class="block mb-2">Foto Profil</label>
        <input type="file" name="foto" class="w-full">
        @if($user->foto)
          <img src="{{ asset('storage/'.$user->foto) }}" class="w-24 h-24 rounded-full mt-2" alt="Foto Profil">
        @endif
      </div>
    </div>
    <button class="mt-4 bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Simpan</button>
  </form>
</div>

@endsection