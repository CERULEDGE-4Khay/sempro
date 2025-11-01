@extends('layouts.admin')

@section('content')
<div class="p-6 bg-white rounded-xl shadow-md">
    <h2 class="text-xl font-bold mb-4">Catatan / Feedback dari Anak Magang</h2>

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
                <th class="p-2 text-left">Isi Feedback</th>
                <th class="p-2 text-left">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($feedbacks as $feedback)
            <tr class="border-t">
                <td class="p-2">{{ $feedback->user->name }}</td>
                <td class="p-2">{{ $feedback->created_at->format('d M Y') }}</td>
                <td class="p-2">{{ $feedback->pesan }}</td>
                <td class="p-2">
                    <form action="{{ route('admin.feedback.destroy', $feedback->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="px-3 py-1 bg-red-500 text-white rounded">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
