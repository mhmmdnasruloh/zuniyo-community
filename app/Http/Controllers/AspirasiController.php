<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Aspirasi;

class AspirasiController extends Controller
{
    // Form publik untuk mengirim aspirasi
    public function create()
    {
        return view('aspirasi.create');
    }

    // Simpan aspirasi ke database
    public function store(Request $request)
    {
        $request->validate([
            'topik' => 'required|string|max:255',
            'isi' => 'required|string',
            'email' => 'nullable|email',
            'nama' => 'nullable|string|max:255',
        ]);

        Aspirasi::create($request->only(['nama', 'email', 'topik', 'isi']));

        return redirect()->back()->with('success', 'Aspirasi berhasil dikirim!');
    }

    // Tampilkan daftar aspirasi (admin)
    public function index()
    {
        $aspirasi = Aspirasi::latest()->paginate(10);
        return view('aspirasi.index', compact('aspirasi'));
    }

    // Detail aspirasi tertentu (opsional)
    public function show($id)
    {
        $aspirasi = Aspirasi::findOrFail($id);
        return view('aspirasi.show', compact('aspirasi'));
    }

    // Hapus aspirasi (admin)
    public function destroy($id)
    {
        $aspirasi = Aspirasi::findOrFail($id);
        $aspirasi->delete();

        return redirect()->route('aspirasi.index')->with('success', 'Aspirasi berhasil dihapus!');
    }
}
