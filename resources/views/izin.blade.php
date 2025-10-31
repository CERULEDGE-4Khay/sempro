@extends('layouts.app')
@section('content')

<div class="max-w-3xl mx-auto p-6 bg-white rounded-xl shadow mt-20">
    <h2 class="text-xl font-bold mb-4">Pengajuan Izin / Sakit</h2>

    <form action="{{ route('izin.store') }}" method="POST" enctype="multipart/form-data" class="space-y-3">
        @csrf
    <input type="date" name="tanggal" required class="border p-2 rounded w-full">
    <select name="jenis" class="border p-2 rounded w-full">
        <option value="izin">Izin</option>
      <option value="sakit">Sakit</option>
    </select>
    <textarea name="keterangan" placeholder="Keterangan..." class="border p-2 rounded w-full"></textarea>
    <input type="file" name="lampiran" class="w-full">
    <button class="bg-blue-600 text-white px-4 py-2 rounded">Kirim</button>
</form>

<hr class="my-4">
<h3 class="font-semibold">Riwayat Pengajuan</h3>
  <ul>
      @foreach($izins as $izin)
      <li>{{ $izin->tanggal }} - {{ $izin->jenis }} ({{ $izin->status }})</li>
      @endforeach
    </ul>
</div>
@endsection