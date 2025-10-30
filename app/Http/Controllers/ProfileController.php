<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Magang;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{

    public function index() {
        $user = Auth::user();
        $magang = $user->magang ?? null;
        return view('profile', compact('user', 'magang'));
    }

    public function update(Request $request) {
        $request->validate([
            'telepon' => 'nullable|string',
            'universitas' => 'nullable|string',
            'jurusan' => 'nullable|string',
            'alamat' => 'nullable|string',
            'foto' => 'nullable|image|mimes:jpg,png,jpeg|max:2048',
        ]);

        $user = Auth::user();
        $magang = $user->magang;

        if ($request->hasFile('foto')) {
            $user->foto = $request->file('foto')->store('profile', 'public');
            $user->save();
        }

        if ($magang) {
            $magang->update($request->only(['telepon', 'universitas', 'jurusan', 'alamat']));
        }

        return back()->with('success', 'Profil berhasil diperbarui!');
    }

}
