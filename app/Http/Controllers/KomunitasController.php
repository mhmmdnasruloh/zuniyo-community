<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Komunitas;

class KomunitasController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search');

        $komunitas = Komunitas::when($search, function ($query, $search) {
            return $query->where('nama', 'like', "%$search%")
                         ->orWhere('universitas', 'like', "%$search%");
        })->latest()->paginate(5);

        return view('komunitas.index', compact('komunitas', 'search'));
    }

    public function create()
    {
        return view('komunitas.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|max:255',
            'deskripsi' => 'nullable',
            'universitas' => 'nullable|max:255',
            'logo' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $data = $request->except('logo');

        if ($request->hasFile('logo')) {
            $data['logo'] = $request->file('logo')->store('logos', 'public');
        }

        Komunitas::create($data);

        return redirect()->route('komunitas.index')->with('success', 'Komunitas berhasil ditambahkan!');
    }
}
