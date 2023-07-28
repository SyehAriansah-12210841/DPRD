@extends('template.base')
@section('title', $fraksi->nama)
@section('content')
<div class="container">
</div>
<div class="container my-">
    <div class="py-3 px-5 bg-danger mb-3">
        <h1 class="fs-3 text-center text-white my-auto">{{$fraksi->nama}}</h1>
    </div>

    @if (!empty($ketua))
    <div class="row justify-content-center">
        <div class="col-8 col-sm-6 col-md-4 col-lg-3">
            <a href="/profil/{{$ketua->id}}">
                <div class="card d-flex border-0">
                    <div class="overflow-hidden" style="max-height: 400px">
                        <img src="/storage/{{$ketua->gambar}}" class="card-img-top rounded" alt="{{$ketua->nama}}">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title text-center">{{$ketua->nama}}</h5>
                        <p class="card-text d-block text-center btn btn-secondary rounded-pill">
                            {{$ketua->jabatan_fraksi}}</p>
                    </div>
                </div>
            </a>
        </div>
    </div>
    @endif

    <div class="row g-1 justify-content-center">
        @forelse ($subAnggota as $anggota)
        <div class="col-6 col-sm-6 col-md-4 col-lg-3">
            <a href="/profil/{{$anggota->id}}">
                <div class="card border-0 " style="min-height: 330px">
                    <div class="overflow-hidden">
                        <img src="/storage/{{$anggota->gambar}}" class="card-img-top rounded" alt="{{$anggota->nama}}">
                    </div>
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title text-center">{{$anggota->nama}}</h5>
                        <div class="mt-auto">
                            <p class="card-text d-block text-center btn btn-secondary rounded-pill">
                                {{$anggota->jabatan_fraksi}}</p>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        @empty

        @endforelse
    </div>
    <div class="my-5 bg-warning rounded py-1 mx-auto" style="max-width: 16rem">
        <h2 class="text-center text-white fs-4">Anggota</h2>
    </div>
    <div class="row g-4 justify-content-center">
        @forelse ($jabatAnggota as $anggota)
        <div class="col-6 col-sm-6 col-md-4 col-lg-3">
            <a href="/profil/{{$anggota->id}}">
                <div class="card  border-0 " style="min-height: 330px">
                    <div class=" overflow-hidden">
                        <img src="/storage/{{$anggota->gambar}}" class="card-img-top rounded" alt="{{$anggota->nama}}">
                    </div>
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title text-center">{{$anggota->nama}}</h5>
                        <p class="card-text mt-auto d-block text-center btn btn-secondary rounded-pill">
                            {{$anggota->jabatan_fraksi}}</p>
                    </div>
                </div>
            </a>
        </div>

        @empty

        @endforelse
    </div>

</div>
@endsection