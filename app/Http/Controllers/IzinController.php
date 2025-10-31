<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Izin;
use Illuminate\Support\Facades\Auth;

class IzinController extends Controller
{
    public function index() {
    $izins = Izin::where('user_id', Auth::id())->latest()->get();
    return view('izin', compact('izins'));
    }

    public function store(Request $request) {
        $data = $request->validate([
            'tanggal' => 'required|date',
            'jenis' => 'required',
            'keterangan' => 'nullable|string',
            'lampiran' => 'nullable|file|mimes:pdf,jpg,png|max:2048',
        ]);

        if ($request->hasFile('lampiran')) {
            $data['lampiran'] = $request->file('lampiran')->store('izin', 'public');
        }

        $data['user_id'] = Auth::id();
        Izin::create($data);

        return back()->with('success', 'Pengajuan izin berhasil dikirim!');
    }
}
