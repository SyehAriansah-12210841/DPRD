@extends('template.base')
@section('title', 'Semua Anggota Daerah Pemilihan')
@section('content')
<div class="container">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('home')}}">Beranda</a></li>
            <li class="breadcrumb-item"><a class="{{(request()->is('profil/anggota')) ? 'text-secondary' : ''}}"
                    href="{{route('all')}}">Anggota</a></li>
        </ol>
    </nav>
</div>
<div class="container my-5 px-5">
    <h1 class="fs-3 mb-3">Pejabat Struktural</h1>
    @forelse ($data as $dapil)
    <h2 class="text-center fs-4 mt-3">{{$dapil->nama}}</h2>
    <h3 class="text-center fs-6 bg-secondary rounded-pill py-2 px-4 mb-3 ">{{$dapil->daerah}}</h3>

    <div class="row mx-2 g-4 justify-content-center">
        @forelse ($dapil->anggota as $anggota)
        <div class="col-6 col-sm-6 col-md-4 col-lg-3">
            <a href="/profil/{{$anggota->id}}">
                <div class="card  d-flex border-0 " style="max-widt: 200px">
                    <div class=" overflow-hidden" style="max-heig: 400px">
                        <img src="/storage/{{$anggota->gambar}}" class="card-img-top" alt="...">

                    </div>
                    <div class="card-body">
                        <h5 class="card-title text-center">{{$anggota->nama}}</h5>
                        <p class="card-text text-center">
                            {{$anggota->jabatan}}</p>
                    </div>
                </div>
            </a>
        </div>
        @empty

        @endforelse
    </div>
    @empty

    @endforelse

</div>
@endsection