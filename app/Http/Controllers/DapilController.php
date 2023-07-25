<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreDapilRequest;
use App\Http\Requests\UpdateDapilRequest;
use App\Models\Dapil;

class DapilController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Dapil::latest()->paginate(15)->withQueryString();
        return view('dashboard.dapil.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.dapil.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreDapilRequest $request)
    {
        Dapil::create($request->validated());
        return redirect('/admin/dapil')->with('status', 'Data berhasil ditambahkan');
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Dapil $dapil)
    {
        return view('dashboard.dapil.edit', compact('dapil'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateDapilRequest $request, Dapil $dapil)
    {
        $dapil->update($request->validated());
        return redirect('/admin/dapil')->with('status', 'Data berhasil diperbaharui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Dapil $dapil)
    {
        try {
            $dapil->delete();
            return back()->with('status', 'Data berhasil dihapus');
        } catch (\Throwable $th) {
            return back()->with('status', 'Data gagal dihapus');
        }
    }
}
