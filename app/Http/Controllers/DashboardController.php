<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Absensi;

class DashboardController extends Controller
{
    public function index()
    {
        $user = Auth::user();

        $absensis = Absensi::where('user_id', $user->id)
                    ->orderBy('tanggal', 'desc')
                    ->take(10)
                    ->get();

        if($user->role === 'Admin') {
            return redirect()->route('admin.dashboard');
        }

        return view('dashboard', compact('user', 'absensis'));
    }

    public function adminDashboard()
    {
        return view('admin.dashboard');
    }
}
