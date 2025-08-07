<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kontribusi;
use Illuminate\Support\Facades\Mail;
use App\Mail\KontribusiMasukMail;

class KontribusiController extends Controller
{
    // ini Form publik le
    public function create()
    {
        return view('kontribusi.create');
    }

    //  kontribusi
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'judul' => 'required',
            'isi' => 'required',
            'email' => 'nullable|email',
            'jenis' => 'nullable|string'
        ]);

        $kontribusi = Kontribusi::create($request->all());

        // Kirim email hanya jika user isi email
        if ($kontribusi->email) {
            Mail::to($kontribusi->email)->send(new KontribusiMasukMail($kontribusi));
        }

        return redirect()->back()->with('success', 'Kontribusi berhasil dikirim! Email notifikasi juga dikirim jika kamu isi email.');
    }

    // Tampilkan daftar kontribusi (admin)
    public function index()
    {
        $kontribusi = Kontribusi::latest()->paginate(10);
        return view('kontribusi.index', compact('kontribusi'));
    }
}
