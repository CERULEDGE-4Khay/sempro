@extends('layouts.app')
@section('content')

<div class="max-w-5xl mx-auto p-6 bg-white rounded-xl shadow mt-20">
  <h2 class="text-xl font-bold mb-4">Riwayat Absensi</h2>

  <form method="GET" class="mb-4 flex gap-2">
    <input type="date" name="tanggal" value="{{ request('tanggal') }}" class="border p-2 rounded">
    <button class="bg-blue-500 text-white px-3 py-2 rounded">Filter</button>
  </form>

  <table class="w-full text-left border">
    <thead class="bg-gray-100">
      <tr>
        <th class="p-2">Tanggal</th>
        <th class="p-2">Jam Masuk</th>
        <th class="p-2">Jam Keluar</th>
        <th class="p-2">Status</th>
      </tr>
    </thead>
    <tbody>
      @foreach($absensi as $a)
      <tr class="border-t">
        <td class="p-2">{{ $a->tanggal }}</td>
        <td class="p-2">{{ $a->jam_masuk }}</td>
        <td class="p-2">{{ $a->jam_keluar ?? '-' }}</td>
        <td class="p-2">{{ $a->status }}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection