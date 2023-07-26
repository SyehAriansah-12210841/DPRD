@extends('template.base')
@section('title', 'Profil ' . $sekretariat->nama)
@section('content')
<div class="container">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Beranda</a></li>
            <li class="breadcrumb-item"><a href="/sekretariat">Sekretariat</a></li>
            <li class="breadcrumb-item active" aria-current="page"><span
                    class="{{(request()->is('profil/*')) ? 'text-secondary' : ''}}">Profil</span></li>


        </ol>
    </nav>
</div>
<div class="container my-5">
    <div class="row gx-2">
        <div class="col-lg-4 mx-auto ">
            <img src="/storage/{{$sekretariat->gambar}}" class="img-fluid d-block mx-auto rounded" style="width: 25rem"
                alt="{{$sekretariat->nama}}">
            <div class="mx-auto">
                <p class="fs-3 text-center fw-bold">{{$sekretariat->nama}}</p>
            </div>
            <p class="d-block mx-auto btn btn-outline-success rounded-pill w-75 px-4 py-2 ">{{$sekretariat->jabatan}}
            </p>

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
</div>
@endsection