<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAnggotaRequest;
use App\Http\Requests\UpdateAnggotaRequest;
use App\Models\Anggota;
use App\Models\Dapil;
use Illuminate\Support\Facades\Storage;

class AnggotaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Anggota::latest()->paginate(15)->withQueryString();
        return view('dashboard.anggota.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = Dapil::all();
        return view('dashboard.anggota.create', compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAnggotaRequest $request)
    {
        $data = $request->validated();
        $data['gambar'] = $request->file('gambar')->store('uploads');
        Anggota::create($data);
        return redirect('/admin/anggota')->with('status', 'Data Berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Anggota $anggota)
    {
        return view('dashboard.anggota.show', compact('anggota'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Anggota $anggota)
    {
        $data = Dapil::all();
        return view('dashboard.anggota.edit', compact('anggota', 'data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAnggotaRequest $request, Anggota $anggota)
    {
        $data = $request->validated();
        if ($request->hasFile('gambar')) {
            Storage::delete($anggota->gambar);
            $data['gambar'] = $request->file('gambar')->store('uploads');
        }
        $anggota->update($data);
        return redirect('/admin/anggota')->with('status', 'Data Berhasil diperbaharui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Anggota $anggota)
    {
        Storage::delete($anggota->gambar);
        $anggota->deleteOrFail();
        return back()->with('status', 'Data berhasil dihapus');
    }
}
