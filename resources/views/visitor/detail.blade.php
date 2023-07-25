@extends('template.base')
@section('title', 'Profil ' . $anggota->nama)
@section('content')
<div class="container">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Beranda</a></li>
            <li class="breadcrumb-item"><a href="/profil/anggota">Anggota</a></li>
            <li class="breadcrumb-item active" aria-current="page"><span class="{{(request()->is('profil/*')) ? 'text-secondary' : ''}}">Profil</span></li>
            

        </ol>
    </nav>
</div>
<div class="container my-5">
    <div class="row gx-2">
        <div class="col-lg-4 mx-auto ">
            <img src="/storage/{{$anggota->gambar}}" class="img-fluid d-block mx-auto rounded" style="width: 25rem"
                alt="{{$anggota->nama}}">
            <div class="mx-auto">
                <p class="fs-3 text-center fw-bold">{{$anggota->nama}}</p>
            </div>
            <p class="d-block mx-auto btn btn-outline-success rounded-pill w-75 px-4 py-2 ">{{$anggota->jabatan}}</p>

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
</div>
@endsection