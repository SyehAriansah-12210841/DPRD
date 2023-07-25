@extends('template.base-dashboard')
@section('title', 'Detail Anggota')
@section('content')
<x-dashboard-icon />
<x-dashboard-topbar />

<div class="container-fluid">
    <div class="row">
        <x-dashboard-sidebar />
        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
            <div
                class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2">Detail Anggota</h1>
                <a class="btn btn-outline-success" href="/admin/anggota/create">Tambah</a>
            </div>
            <div class="row gy-2">

                <div class="col-lg-4 mx-auto">

                    <img src="/storage/{{$anggota->gambar}}" class="img-fluid d-block mx-auto rounded"
                        style="width: 25rem" alt="{{$anggota->nama}}">
                    <div class="mx-auto">
                        <p class="fs-3 text-center fw-bold">{{$anggota->nama}}</p>
                    </div>
                    <p class="d-block mx-auto btn btn-outline-success rounded-pill w-75 px-4 py-2 ">
                        {{$anggota->jabatan}}</p>

                </div>
                <div class="col-lg-3 ">
                    <p class="fs-4 fw-bold">Tempat & Tanggal Lahir</p>
                    <p class="fs-5">{{$anggota->tempat_lahir}}, {{$anggota->tanggal_lahir->format('d-m-Y')}}
                        ({{$anggota->tanggal_lahir->diffInYears()}} Tahun)</p>
                    <p class="fs-4 fw-bold">Alamat</p>
                    <p class="fs-5">{{$anggota->alamat}}</p>
                    <p class="fs-4 fw-bold">Pendidikan</p>
                    <p class="fs-5">{{$anggota->pendidikan}}</p>
                    <p class="fs-4 fw-bold">Fraksi</p>
                    <p class="fs-5">{{$anggota->fraksi}}</p>


                </div>
                <div class="col-lg-3 ">
                    <p class="fs-4 fw-bold">Jabatan</p>
                    <p class="fs-5">{{$anggota->jabatan}}</p>
                    <p class="fs-4 fw-bold">Periode</p>
                    <p class="fs-5">{{$anggota->periode}}</p>
                    <p class="fs-4 fw-bold">Daerah Pemilihan</p>
                    <p class="fs-4">{{$anggota->dapil->nama}}</p>
                    <p class="fs-5">{{$anggota->dapil->daerah}}</p>
                </div>

            </div>
            <h2 class="fs-3">Aksi</h2>
            <div>
                <a class="btn btn-success text-decoration-none"
                    href="{{route('anggota.edit', ['anggota' => $anggota->id])}}">Edit
                    Anggota Ini</a>
            </div>
        </main>
    </div>
</div>
@endsection