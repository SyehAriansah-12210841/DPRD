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
            </div>
            <div class="row gy-2">

                <div class="col-lg-4 mx-auto">

                    <img src="/storage/{{$sekretariat->gambar}}" class="img-fluid d-block mx-auto rounded"
                        style="width: 25rem" alt="{{$sekretariat->nama}}">
                    <div class="mx-auto">
                        <p class="fs-3 text-center fw-bold">{{$sekretariat->nama}}</p>
                    </div>
                    <p class="d-block mx-auto btn btn-outline-success rounded-pill w-75 px-4 py-2 ">
                        {{$sekretariat->jabatan}}</p>

                </div>
                <div class="col-lg-3 ">
                    <p class="fs-4 fw-bold">Tempat & Tanggal Lahir</p>
                    <p class="fs-5">{{$sekretariat->tempat_lahir}}, {{$sekretariat->tanggal_lahir->format('d-m-Y')}}
                        ({{$sekretariat->tanggal_lahir->diffInYears()}} Tahun)</p>
                    <p class="fs-4 fw-bold">Alamat</p>
                    <p class="fs-5">{{$sekretariat->alamat}}</p>
                    <p class="fs-4 fw-bold">Pendidikan</p>
                    <p class="fs-5">{{$sekretariat->pendidikan}}</p>


                </div>


            </div>
            <h2 class="fs-3">Aksi</h2>
            <div>
                <a class="btn btn-success text-decoration-none"
                    href="{{route('sekretariat.edit', ['sekretariat' => $sekretariat->id])}}">Edit
                    Anggota Ini</a>
            </div>
        </main>
    </div>
</div>
@endsection