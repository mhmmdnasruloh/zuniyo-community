<?php

namespace App\Http\Controllers;

use App\Models\Komunitas;
use Illuminate\Http\Request;

class KomunitasController extends Controller
{
    public function index()
    {
        $komunitas = Komunitas::all();
        return view('komunitas.index', compact('komunitas'));
    }
}
