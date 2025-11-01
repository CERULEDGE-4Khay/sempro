@extends('layouts.admin')

@section('content')
<div class="p-6 bg-white rounded-xl shadow-md">
    <h2 class="text-xl font-bold mb-4">Daftar Pengajuan Izin / Sakit</h2>

    @if(session('success'))
        <div class="p-3 mb-4 text-green-700 bg-green-100 rounded">
            {{ session('success') }}
        </div>
    @endif

    <table class="w-full border border-gray-200">
        <thead class="bg-gray-100">
            <tr>
                <th class="p-2 text-left">Nama</th>
                <th class="p-2 text-left">Tanggal</th>
                <th class="p-2 text-left">Jenis</th>
                <th class="p-2 text-left">Keterangan</th>
                <th class="p-2 text-left">Status</th>
                <th class="p-2 text-left">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($izins as $izin)
            <tr class="border-t">
                <td class="p-2">{{ $izin->user->name }}</td>
                <td class="p-2">{{ $izin->tanggal }}</td>
                <td class="p-2">{{ ucfirst($izin->jenis) }}</td>
                <td class="p-2">{{ $izin->keterangan }}</td>
                <td class="p-2">
                    <span class="px-2 py-1 text-sm rounded
                        @if($izin->status == 'Disetujui') bg-green-100 text-green-800
                        @elseif($izin->status == 'Ditolak') bg-red-100 text-red-800
                        @else bg-yellow-100 text-yellow-800
                        @endif">
                        {{ $izin->status }}
                    </span>
                </td>
                <td class="p-2 flex gap-2">
                    @if($izin->status == 'pending')
                        <form action="{{ route('admin.izin.approve', $izin->id) }}" method="POST">
                            @csrf
                            <button class="px-3 py-1 bg-green-500 text-slate-800 rounded">Setujui</button>
                        </form>
                        <form action="{{ route('admin.izin.reject', $izin->id) }}" method="POST">
                            @csrf
                            <button class="px-3 py-1 bg-red-500 text-slate-800 rounded">Tolak</button>
                        </form>
                    @else
                        <span class="text-gray-500 italic">Sudah diproses</span>
                    @endif
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
