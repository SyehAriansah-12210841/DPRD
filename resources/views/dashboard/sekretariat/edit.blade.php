@extends('template.base-dashboard')
@section('title', 'Ubah Anggota Sekretariat')
@section('content')
<x-dashboard-icon />
<x-dashboard-topbar />
<div class="container-fluid">
    <div class="row">
        <x-dashboard-sidebar />
        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 ">
            <h2 class="mt-2 text-center">Ubah Anggota Sekretariat</h2>
            <div class="p-2 mx-auto" style="max-width: 46rem">
                <form method="POST" action="{{route('sekretariat.update',['sekretariat' => $sekretariat->id])}}"
                    enctype="multipart/form-data">
                    @csrf
                    @method('patch')
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror"
                            id="nama" aria-describedby="name"
                            value="{{old('nama') ? old('nama') : $sekretariat->nama}}">
                        @error('nama')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="tl" class="form-label">Tempat Lahir</label>
                        <input name="tempat_lahir" class="form-control @error('tempat_lahir') is-invalid @enderror"
                            id="tl" value="{{old('tempat_lahir') ? old('tempat_lahir') : $sekretariat->tempat_lahir}}">
                        @error('tempat_lahir')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="ttl" class="form-label">Tanggal Lahir</label>
                        <input name="tanggal_lahir" class="form-control @error('tanggal_lahir') is-invalid @enderror"
                            type="date" id="ttl" value="{{old('tanggal_lahir') ? old('tanggal_lahir') :
                            $sekretariat->tanggal_lahir->format('Y-m-d')}}">
                        @error('tanggal_lahir')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="alamat" class="form-label">Alamat</label>
                        <textarea name="alamat" class="form-control @error('alamat') is-invalid @enderror" id="alamat"
                            rows="3">{{old('alamat') ? old('alamat') : $sekretariat->alamat}}</textarea>
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
                            aria-describedby="name"
                            value="{{old('pendidikan') ? old('pendidikan') : $sekretariat->pendidikan}}"
                            placeholder="cth: Doktor, Sarjana">
                        @error('pendidikan')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="jabatan" class="form-label">Jabatan</label>
                        <input type="text" name="jabatan" class="form-control @error('jabatan') is-invalid @enderror"
                            id="jabatan" aria-describedby="name"
                            value="{{old('jabatan') ? old('jabatan') : $sekretariat->jabatan}}"
                            placeholder="cth: Sekretaris, Pejabat Fungsional">
                        @error('jabatan')
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
                    <button type="submit" class="btn btn-primary">Ubah</button>
                </form>
            </div>
        </main>
    </div>
</div>
@endsection