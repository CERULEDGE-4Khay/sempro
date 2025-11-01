<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Izin;
use Illuminate\Http\Request;

class IzinController extends Controller
{
    public function index()
    {
        // Ambil semua pengajuan izin dari user
        $izins = Izin::with('user')->latest()->get();
        return view('admin.izin.index', compact('izins'));
    }

    public function approve($id)
    {
        $izin = Izin::findOrFail($id);
        $izin->status = 'Disetujui';
        $izin->save();

        return redirect()->back()->with('success', 'Pengajuan izin telah disetujui.');
    }

    public function reject($id)
    {
        $izin = Izin::findOrFail($id);
        $izin->status = 'Ditolak';
        $izin->save();

        return redirect()->back()->with('success', 'Pengajuan izin telah ditolak.');
    }
}
