<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Absensi;
use Carbon\Carbon;

class AbsensiController extends Controller
{
    public function absenMasuk(Request $request)
    {
        $user = Auth::user();
        $tanggal = Carbon::today()->toDateString(); // format 'Y-m-d'

        // cek pakai whereDate agar aman bila kolom 'tanggal' bertipe date/datetime
        $existing = Absensi::where('user_id', $user->id)
                            ->whereDate('tanggal', $tanggal)
                            ->first();

        if ($existing) {
            return back()->with('error', 'Kamu sudah absen hari ini.');
        }

        $now = Carbon::now()->format('H:i:s');
        $lokasi = $request->input('lokasi');
        $status = $now > '08:00:00' ? 'terlambat' : 'masuk';

        Absensi::create([
            'user_id'      => $user->id,
            'tanggal'      => $tanggal,
            'jam_masuk'    => $now,
            'lokasi_masuk' => $lokasi,
            'status'       => $status
        ]);

        return back()->with('success', 'Absen masuk berhasil!');
    }

    public function absenKeluar(Request $request)
    {
        $user = Auth::user();
        $tanggal = Carbon::today()->toDateString();

        $absen = Absensi::where('user_id', $user->id)
                        ->whereDate('tanggal', $tanggal)
                        ->first();

        if (!$absen) {
            return back()->with('error', 'Kamu belum absen masuk.');
        }

        // Jika sudah absen keluar sebelumnya, beri info
        if ($absen->jam_keluar !== null) {
            return back()->with('error', 'Kamu sudah melakukan absen keluar hari ini.');
        }

        $absen->update([
            'jam_keluar'    => Carbon::now()->format('H:i:s'),
            'lokasi_keluar' => $request->input('lokasi')
        ]);

        return back()->with('success', 'Absen keluar berhasil!');
    }
}
