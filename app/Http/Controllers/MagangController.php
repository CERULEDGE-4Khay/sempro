<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Magang;
class MagangController extends Controller
{
    public function index()
    {
        $magangs = Magang::all();
        return view('admin.magang.index', compact('magangs'));
    }

    public function create()
    {
        return view('admin.magang.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'email' => 'required|unique:magang,email',
            'asal' => 'required',
            'tgl_mulai' => 'required|date',
            'tgl_selesai' => 'required|date',
        ]);
        Magang::create($request->all());
        return redirect()->route('admin.magang.index')->with('success', 'Data berhasil ditambahkan');
    }

    public function edit(Magang $magang)
    {
        return view('admin.magang.edit', compact('magang'));
    }

    public function update(Request $request, Magang $magang)
    {
        $request->validate(['nama' => 'required']);
        $magang->update($request->all());
        return redirect()->route('admin.magang.index')->with('success', 'Data berhasil diupdate');
    }

    public function show(Magang $magang)
    {
        return view('admin.magang.show', compact('magang'));
    }

    public function destroy(Magang $magang)
    {
        $magang->delete();
        return redirect()->route('admin.magang.index')->with('success', 'Data berhasil dihapus');
    }

    public function updateStatus(Request $request, $id)
    {
    $magang = Magang::findOrFail($id);
    $magang->status = $request->status;
    $magang->save();
    return back()->with('success', 'Status magang diperbarui');
    }

}
