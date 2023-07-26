@extends('template.base-dashboard')
@section('title', 'Ubah Daerah Pemilihan')
@section('content')
<x-dashboard-icon />
<x-dashboard-topbar />
<div class="container-fluid">
    <div class="row">
        <x-dashboard-sidebar />
        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 ">
            <h2 class="mt-2 text-center">Ubah Fraksi</h2>
            <div class="p-2 mx-auto" style="max-width: 46rem">
                <form method="POST" action="{{route('fraksi.update', ['fraksi' => $fraksi->id])}}"
                    enctype="multipart/form-data">
                    @csrf
                    @method('patch')
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror"
                            id="nama" aria-describedby="name" value="{{old('nama') ? old('nama') : $fraksi->nama}}">
                        @error('nama')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                        @enderror
                    </div>


                    <button type="submit" class="btn btn-primary">Ubah</button>
                </form>
            </div>
        </main>
    </div>
</div>
@endsection