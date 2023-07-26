<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAnggotaSekretariatRequest;
use App\Http\Requests\UpdateAnggotaSekretariatRequest;
use App\Models\Sekretariat;
use Illuminate\Support\Facades\Storage;

class SekretariatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Sekretariat::latest()->paginate(20)->withQueryString();
        return view('dashboard.sekretariat.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.sekretariat.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAnggotaSekretariatRequest $request)
    {
        $data = $request->validated();
        $data['gambar'] = $request->file('gambar')->store('uploads');
        Sekretariat::create($data);
        return redirect('/admin/sekretariat')->with('status', 'Data Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Sekretariat $sekretariat)
    {
        return view('dashboard.sekretariat.show', compact('sekretariat'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Sekretariat $sekretariat)
    {
        return view('dashboard.sekretariat.edit', compact('sekretariat'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAnggotaSekretariatRequest $request, Sekretariat $sekretariat)
    {
        $data = $request->validated();
        if ($request->hasFile('gambar')) {
            Storage::delete($sekretariat->gambar);
            $data['gambar'] = $request->file('gambar')->store('uploads');
        }
        $sekretariat->update($data);
        return redirect('/admin/sekretariat')->with('status', 'Data Berhasil diperbaharui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Sekretariat $sekretariat)
    {
        Storage::delete($sekretariat->gambar);
        $sekretariat->deleteOrFail();
        return back()->with('status', 'Data berhasil dihapus');
    }
}
