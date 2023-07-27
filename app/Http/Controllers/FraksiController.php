<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreFraksiRequest;
use App\Http\Requests\UpdateFraksiRequest;
use App\Models\Fraksi;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class FraksiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Fraksi::latest()->paginate(15)->withQueryString();
        return view('dashboard.fraksi.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.fraksi.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreFraksiRequest $request)
    {
        $data = $request->validated();
        $data['slug'] = Str::slug($request->input('nama'));
        Fraksi::create($data);
        return redirect('/admin/fraksi')->with('status', 'Data berhasil ditambah');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Fraksi $fraksi)
    {
        return view('dashboard.fraksi.edit', compact('fraksi'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateFraksiRequest $request, Fraksi $fraksi)
    {
        $data = $request->validated();
        $fraksi->update($data);
        return redirect('/admin/fraksi')->with('status', 'Data berhasil diperbaharui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Fraksi $fraksi)
    {
        try {
            $fraksi->delete();
            return back()->with('status', 'Data berhasil dihapus');
        } catch (\Throwable $th) {
            return back()->with('status', 'Data gagal dihapus');
        }
    }
}
