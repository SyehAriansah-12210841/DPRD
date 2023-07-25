<?php

namespace App\Http\Controllers;

use App\Models\Anggota;
use App\Models\Dapil;
use Illuminate\Http\Request;

class VisitorAnggotaController extends Controller
{
    public function index()
    {
        $data = Dapil::with('anggota')->get();
        return view('visitor.dapil', compact('data'));
    }
    public function show(Anggota $anggota)
    {
        return view('visitor.detail', compact('anggota'));
    }
}
