<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Feedback;
use Illuminate\Support\Facades\Auth;

class FeedbackController extends Controller
{
    public function index() {
    $feedbacks = Feedback::where('user_id', Auth::id())->latest()->get();
    return view('feedback', compact('feedbacks'));
    }

    public function store(Request $request) {
        $request->validate(['pesan' => 'required']);
        Feedback::create([
            'user_id' => Auth::id(),
            'tanggal' => now(),
            'pesan' => $request->pesan
        ]);
        return back()->with('success', 'Feedback tersimpan!');
    }
}
