<!-- <?php

// namespace App\Http\Controllers;

// use Illuminate\Http\Request;
use App\Models\Magang;
// class MagangController extends Controller
// {
//     public function index()
//     {
//         $magangs = Magang::all();
//         return view('magang.index', compact('magangs'));
//     }

//     public function create()
//     {
//         return view('magang.create');
//     }

//     public function store(Request $request)
//     {
//         $request->validate([
//             'nama' => 'required',
//             'email' => 'required|unique:magang,email',
//             'asal' => 'required',
//             'tgl_mulai' => 'required|date',
//             'tgl_selesai' => 'required|date',
//         ]);
//         Magang::create($request->all());
//         return redirect()->route('magang.index')->with('success', 'Data berhasil ditambahkan');
//     }

//     public function edit(Magang $magang)
//     {
//         return view('magang.edit', compact('magang'));
//     }

//     public function update(Request $request, Magang $magang)
//     {
//         $request->validate(['nama' => 'required']);
//         $magang->update($request->all());
//         return redirect()->route('magang.index')->with('success', 'Data berhasil diupdate');
//     }

//     public function destroy(Magang $magang)
//     {
//         $magang->delete();
//         return redirect()->route('magang.index')->with('success', 'Data berhasil dihapus');
//     }
// }
