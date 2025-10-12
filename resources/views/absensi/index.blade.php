<div class="p-6">
    <h1 class="text-2xl font-bold mb-4">Absensi Saya</h1>

    <form method="POST" action="{{ route('absensi.masuk') }}">
        @csrf
        <button class="bg-green-600 text-white px-4 py-2 rounded">Absen Masuk</button>
    </form>

    <form method="POST" action="{{ route('absensi.pulang') }}" class="mt-2">
        @csrf
        <button class="bg-red-600 text-white px-4 py-2 rounded">Absen Pulang</button>
    </form>

    <table class="table-auto w-full mt-4 border">
        <thead>
            <tr class="bg-gray-100">
                <th>Tanggal</th>
                <th>Jam Masuk</th>
                <th>Jam Pulang</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach($absensi as $a)
            <tr class="border">
                <td>{{ $a->tanggal }}</td>
                <td>{{ $a->jam_masuk }}</td>
                <td>{{ $a->jam_pulang }}</td>
                <td>{{ ucfirst($a->status) }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

