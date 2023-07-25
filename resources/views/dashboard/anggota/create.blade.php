@extends('template.base-dashboard')
@section('title', 'Tambah Anggota')
@section('content')
<x-dashboard-icon />
<x-dashboard-topbar />
<div class="container-fluid">
    <div class="row">
        <x-dashboard-sidebar />
        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 ">
            <h2 class="mt-2 text-center">Tambah Anggota Baru</h2>
            <div class="p-2 mx-auto" style="max-width: 46rem">
                <form method="POST" action="{{route('anggota.store')}}" enctype="multipart/form-data">
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
                        <label for="tl" class="form-label">Tempat Lahir</label>
                        <input name="tempat_lahir" class="form-control @error('tempat_lahir') is-invalid @enderror"
                            id="tl" value="{{old('tempat_lahir')}}">
                        @error('tempat_lahir')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="ttl" class="form-label">Tanggal Lahir</label>
                        <input type="date" name="tanggal_lahir"
                            class="form-control @error('tanggal_lahir') is-invalid @enderror" id="ttl"
                            value="{{old('tanggal_lahir')}}">
                        @error('tanggal_lahir')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="alamat" class="form-label">Alamat</label>
                        <textarea name="alamat" class="form-control @error('alamat') is-invalid @enderror" id="alamat"
                            rows="3">{{old('alamat')}}</textarea>
                        @error('alamat')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="pendidikan" class="form-label">Pendidikan</label>
                        <input type="text" name="pendidikan"
                            class="form-control @error('pendidikan') is-invalid @enderror" id="pendidikan"
                            aria-describedby="name" value="{{old('pendidikan')}}">
                        @error('pendidikan')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="fraksi" class="form-label">Fraksi</label>
                        <input type="text" name="fraksi" class="form-control @error('fraksi') is-invalid @enderror"
                            id="fraksi" aria-describedby="name" value="{{old('fraksi')}}">
                        @error('fraksi')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="jabatan" class="form-label">Jabatan</label>
                        <input type="text" name="jabatan" class="form-control @error('jabatan') is-invalid @enderror"
                            id="jabatan" aria-describedby="name" value="{{old('jabatan')}}">
                        @error('jabatan')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="periode" class="form-label">Periode</label>
                        <input type="text" name="periode" class="form-control @error('periode') is-invalid @enderror"
                            id="periode" aria-describedby="name" value="{{old('pendidikan')}}">
                        @error('periode')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <select name="dapil_id" class="form-select @error('dapil_id') is-invalid @enderror"
                            aria-label="Default select example">
                            <option selected>Daerah Pilihan</option>
                            @foreach ($data as $dapil)
                            <option @if (old('dapil_id')==$dapil->id) selected @endif
                                value="{{$dapil->id}}">{{$dapil->nama}}</option>

                            @endforeach
                        </select>
                        @error('dapil_id')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                        @enderror
                    </div>
                    <div class="input-group mb-3">
                        <label class="input-group-text" for="gambar">Gambar</label>
                        <input type="file" name="gambar" class="form-control @error('gambar') is-invalid @enderror"
                            id="gambar">
                        @error('gambar')
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