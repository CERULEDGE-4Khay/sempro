@extends('layouts.admin')
@section('content')

<table class="min-w-full border">
  <thead>
    <tr>
      <th>User</th>
      <th>Tanggal</th>
      <th>Status</th>
    </tr>
  </thead>
  <tbody class="text-center">
    @foreach($absensi as $a)
      <tr>
        <td>{{ $a->user->name }}</td>
        <td>{{ $a->tanggal }}</td>
        <td>{{ ucfirst($a->status) }}</td>
      </tr>
    @endforeach
  </tbody>
</table>
@endsection