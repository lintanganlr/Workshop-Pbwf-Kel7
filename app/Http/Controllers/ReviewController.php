<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Review; // Sesuaikan dengan model yang tepat
use App\Models\Pembayaran;
use App\Models\User;

class ReviewController extends Controller
{
    public function index()
    {
        $reviews = Review::all(); // Mendapatkan daftar users

        return view('review.index', compact('reviews'));
    }

    public function create()
    {
        $users = User::all(); // Mendapatkan daftar users
        $pembayarans = Pembayaran::all(); // Mendapatkan daftar pembayaran

        return view('review.create', compact('users', 'pembayarans'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'id_pembayaran' => 'required',
            'rating' => 'required',
            'ulasan' => 'required',
        ]);
    
        // Simpan ulasan ke dalam database
        Review::create($validatedData);
    
        // Redirect ke halaman tertentu setelah ulasan disimpan
        return redirect()->route('review.index')->with('success', 'Ulasan berhasil ditambahkan!');
    }
    
    
    public function createReview($paymentId)
{
    $payment = Pembayaran::findOrFail($paymentId);

    return view('review.create', compact('payment'));
}



}
