
    <div class="p-6">
        <h1 class="text-2xl font-bold">Laporan Absensi</h1>

        <form method="GET" class="flex space-x-2 mt-4">
            <input type="number" name="bulan" value="{{ $bulan }}" class="border px-2 py-1 rounded">
            <input type="number" name="tahun" value="{{ $tahun }}" class="border px-2 py-1 rounded">
            <button class="bg-blue-600 text-white px-4 py-1 rounded">Filter</button>
        </form>

        <table class="table-auto w-full mt-4 border">
            <thead class="bg-gray-100">
                <tr>
                    <th>Nama</th>
                    <th>Tanggal</th>
                    <th>Jam Masuk</th>
                    <th>Jam Pulang</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                @foreach($laporan as $l)
                <tr class="border">
                    <td>{{ $l->magang->nama }}</td>
                    <td>{{ $l->tanggal }}</td>
                    <td>{{ $l->jam_masuk }}</td>
                    <td>{{ $l->jam_pulang }}</td>
                    <td>{{ ucfirst($l->status) }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

