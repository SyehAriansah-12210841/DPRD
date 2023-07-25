@extends('template.base-dashboard')
@section('title', 'Tambah Dapil Baru')
@section('content')
<x-dashboard-icon />
<x-dashboard-topbar />
<div class="container-fluid">
    <div class="row">
        <x-dashboard-sidebar />
        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 ">
            <h2 class="mt-2 text-center">Tambah Dapil Baru</h2>
            <div class="p-2 mx-auto" style="max-width: 46rem">
                <form method="POST" action="{{route('dapil.store')}}">
                    @csrf
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror"
                            id="nama" aria-describedby="name" value="{{old('nama')}}">
                        @error('nama')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="daerah" class="form-label">Daerah</label>
                        <input type="text" name="daerah" class="form-control @error('daerah') is-invalid @enderror"
                            id="daerah" aria-describedby="name" value="{{old('daerah')}}">
                        @error('daerah')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-primary">Tambah</button>
                </form>
            </div>
        </main>
    </div>
</div>
@endsection