<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kontribusi;

class KontribusiController extends Controller
{
    // Form publik
    public function create()
    {
        return view('kontribusi.create');
    }

    // Simpan kontribusi
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'judul' => 'required',
            'isi' => 'required',
            'email' => 'nullable|email',
        ]);

        Kontribusi::create($request->all());

        return redirect()->back()->with('success', 'Kontribusi berhasil dikirim!');
    }

    // Tampilkan daftar kontribusi (admin)
    public function index()
    {
        $kontribusi = Kontribusi::latest()->paginate(10);
        return view('kontribusi.index', compact('kontribusi'));
    }
}
