<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Aspirasi;

class AspirasiController extends Controller
{
    public function create()
    {
        return view('aspirasi.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'topik' => 'required',
            'isi' => 'required',
            'email' => 'nullable|email',
            'nama' => 'nullable|string',
        ]);

        Aspirasi::create($request->all());

        return redirect()->back()->with('success', 'Aspirasi berhasil dikirim!');
    }

    public function index()
    {
        $aspirasi = Aspirasi::latest()->paginate(10);
        return view('aspirasi.index', compact('aspirasi'));
    }
}
