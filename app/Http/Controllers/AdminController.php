<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Magang;
use App\Models\Absensi;

class AdminController extends Controller
{
public function index()
    {
        // --- Statistik untuk card ---
        $totalUser = Magang::count();
        $totalMasuk = Absensi::whereNotNull('jam_masuk')->count();
        $totalTidakMasuk = Absensi::whereNull('jam_masuk')->count();
        $totalKeluar = Magang::where('status', 'non aktif')->count();


        // --- Data tabel magang ---
        $daftarMagang = Magang::orderBy('created_at', 'desc')->get();

        return view('admin.dashboard', compact(
            'totalUser',
            'totalMasuk',
            'totalTidakMasuk',
            'totalKeluar',
            'daftarMagang'
        ));
    }

    public function absensi() {
    $absensi = Absensi::with('user')->latest()->get();
    return view('admin.absensi', compact('absensi'));
    }

}
