@extends('layouts.app')
@section('content')

<div class="max-w-3xl mx-auto bg-white p-6 rounded shadow">
  <h2 class="text-xl font-bold mb-3">Catatan Harian</h2>
  <form method="POST" action="{{ route('feedback.store') }}">
    @csrf
    <textarea name="pesan" class="border rounded w-full p-2" placeholder="Apa yang kamu kerjakan hari ini?"></textarea>
    <button class="bg-blue-600 text-white px-3 py-2 rounded mt-2">Simpan</button>
  </form>
  <hr class="my-3">
  <h3 class="font-semibold">Riwayat Feedback</h3>
  <ul>
    @foreach($feedbacks as $f)
      <li class="text-gray-600">{{ $f->tanggal }}: {{ $f->pesan }}</li>
    @endforeach
  </ul>
</div>
@endsection