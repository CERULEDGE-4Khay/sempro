@extends('layouts.admin')
@section('content') 
 
 <div class="p-6">
        <h1 class="text-2xl font-bold mb-4">Data Anak Magang</h1>
        <a href="{{ route('magang.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded">+ Tambah</a>
        <table class="table-auto w-full mt-4 border">
            <thead class="bg-gray-100">
                <tr>
                    <th class="px-4 py-2">Nama</th>
                    <th>Email</th>
                    <th>Asal</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($magangs as $m)
                <tr class="border">
                    <td class="px-4 py-2">{{ $m->nama }}</td>
                    <td>{{ $m->email }}</td>
                    <td>{{ $m->asal }}</td>
                    <td>{{ $m->status }}</td>
                    <td>
                        <a href="{{ route('magang.edit', $m->id) }}" class="text-blue-600">Edit</a> |
                        <form action="{{ route('magang.destroy', $m->id) }}" method="POST" class="inline">
                            @csrf @method('DELETE')
                            <button onclick="return confirm('Hapus data ini?')" class="text-red-600">Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    @foreach($magangs as $magang)
    <form action="{{ route('admin.magang.status', $magang->id) }}" method="POST">
        @csrf
        <select name="status" onchange="this.form.submit()">
            <option value="pending" {{ $magang->status == 'pending' ? 'selected' : '' }}>Pending</option>
            <option value="aktif" {{ $magang->status == 'aktif' ? 'selected' : '' }}>Aktif</option>
            <option value="non aktif" {{ $magang->status == 'non aktif' ? 'selected' : '' }}>Non Aktif</option>
        </select>
    </form>
    @endforeach
@endsection