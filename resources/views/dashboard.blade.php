@extends('layouts.app')

@section('content')
<div class="max-w-3xl mx-auto bg-white/90 backdrop-blur-md p-8 rounded-2xl shadow-xl mt-20">
    <div class="flex justify-between items-center mb-6">
        <div>
            <h2 class="text-2xl font-bold text-gray-800">Halo, {{ $user->name }}</h2>
            <p class="font-semibold text-sm text-shadow-2xs mb-5 text-gray-700">Selamat pagi {{ $user->name }}! siap jalani magang hari ini? Semangat!</p>
        </div>
        <img src="{{ asset('image/avatar1.avif') }}" alt="Avatar" class="w-12 h-12 rounded-full border-2 border-blue-400">
    </div>
    <div class="p-0.5 bg-gray-900 mb-4"></div>
    <p class="mb-6 text-gray-600">📍 Ruangan:
        <span class="px-3 py-1 bg-blue-100 text-blue-800 text-sm rounded">
        {{ $magang->ruangan ?? 'Belum Ditempatkan' }}
        </span>
    </p>

    {{-- Waktu Realtime --}}
    <div class="text-center mb-8">
        <h3 class="text-4xl font-mono font-bold text-blue-700" id="clock">00:00:00</h3>
        <p class="text-sm text-gray-500 mt-1">Waktu saat ini</p>
    </div>

    {{-- Tombol Absen --}}
    <div class="flex flex-col md:flex-row gap-4 justify-center mb-6">
        <form id="formMasuk" method="POST" action="{{ route('absen.masuk') }}">
            @csrf
            <input type="hidden" name="lokasi" id="lokasiMasuk">
            <button type="submit" id="btnMasuk"
                class="flex items-center justify-center gap-2 bg-blue-600 hover:bg-blue-700 text-white font-semibold px-8 py-3 rounded-xl shadow-md transition">
                <i class="fas fa-sign-in-alt"></i> Absen Masuk
            </button>
        </form>

        <form id="formKeluar" method="POST" action="{{ route('absen.keluar') }}">
            @csrf
            <input type="hidden" name="lokasi" id="lokasiKeluar">
            <button type="submit" id="btnKeluar"
                class="flex items-center justify-center gap-2 bg-red-500 hover:bg-red-600 text-white font-semibold px-8 py-3 rounded-xl shadow-md transition disabled:opacity-50 disabled:cursor-not-allowed">
                <i class="fas fa-sign-out-alt"></i> Absen Keluar
            </button>
        </form>
    </div>

    {{-- Notifikasi --}}
    @if(session('success'))
        <div class="bg-green-100 text-green-700 p-3 rounded mb-4">{{ session('success') }}</div>
    @elseif(session('error'))
        <div class="bg-red-100 text-red-700 p-3 rounded mb-4">{{ session('error') }}</div>
    @endif

    {{-- Riwayat Absensi --}}
    <h3 class="text-lg font-bold mb-3 text-gray-800">Riwayat Absensi Terakhir</h3>
    <table class="w-full text-sm border border-gray-200 rounded-lg overflow-hidden">
        <thead>
            <tr class="bg-gray-100 text-gray-700">
                <th class="p-2 text-left">Tanggal</th>
                <th class="p-2 text-left">Jam Masuk</th>
                <th class="p-2 text-left">Jam Keluar</th>
                <th class="p-2 text-left">Status</th>
            </tr>
        </thead>
        <tbody>
            @forelse($absensis as $absensi)
                <tr class="border-t hover:bg-gray-50 transition">
                    <td class="p-2">{{ $absensi->tanggal }}</td>
                    <td class="p-2">{{ $absensi->jam_masuk ?? '-' }}</td>
                    <td class="p-2">{{ $absensi->jam_keluar ?? '-' }}</td>
                    <td class="p-2 font-semibold
                        {{ $absensi->status == 'masuk' ? 'text-green-600' : ($absensi->status == 'terlambat' ? 'text-yellow-600' : 'text-red-600') }}">
                        {{ $absensi->status }}
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="4" class="text-center p-4 text-gray-500">Belum ada data absensi</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>

<div class="max-w-3xl mx-auto bg-white/90 backdrop-blur-md p-8 rounded-2xl shadow-xl mt-6">
    <div>

    </div>
</div>

<script>
// 🕒 Realtime Clock
function updateClock() {
    const now = new Date();
    const h = String(now.getHours()).padStart(2, '0');
    const m = String(now.getMinutes()).padStart(2, '0');
    const s = String(now.getSeconds()).padStart(2, '0');
    document.getElementById('clock').textContent = `${h}:${m}:${s}`;
}
setInterval(updateClock, 1000);
updateClock();

// 📍 Ambil lokasi otomatis
function getLocation(idInput) {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition((pos) => {
            const coords = pos.coords.latitude + ',' + pos.coords.longitude;
            document.getElementById(idInput).value = coords;
        }, () => {
            alert('Gagal mendapatkan lokasi. Pastikan GPS aktif.');
        });
    } else {
        alert('Browser tidak mendukung geolokasi.');
    }
}
getLocation('lokasiMasuk');
getLocation('lokasiKeluar');

// 🚫 Disable Absen Keluar jika belum Absen Masuk hari ini
const hasAbsenMasuk = @json($absensis->where('tanggal', now()->format('Y-m-d'))->first()?->jam_masuk != null);
const btnKeluar = document.getElementById('btnKeluar');

if (!hasAbsenMasuk) {
    btnKeluar.disabled = true;
} else {
    btnKeluar.disabled = false;
}
</script>

@endsection
