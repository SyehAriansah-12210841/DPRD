@extends('template.base')
@section('title', 'Pejabat Struktural ')
@section('content')
<div class="container">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('home')}}">Beranda</a></li>
            <li class="breadcrumb-item active"><a class="{{(request()->is('profil/pimpinan')) ? 'text-secondary' : ''}}"
                    href="{{route('pimpinan')}}">Pimpinan</a></li>
        </ol>
    </nav>
</div>

<div class="container mt-4">
    <div class="text-center mx-auto pb-4 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
        <p class="section-title bg-white text-center  text-primary px-3">Pejabat Struktural</p>
        <!-- <h1 class="mb-5">Kepemimpiman DRPD kapuas Hulu</h1> -->
    </div>

    {{-- ketua --}}
    @if ($ketua)
    <div class="row">
        <div class="col-8 col-lg-3 col-md-6 pt-5 mx-auto wow fadeInUp">
            <a href="/profil/{{$ketua->id}}">
                <div class="card service-item border-0 d-flex h-100">
                    <div class="overflow-hidden" style="max-height: 250px">
                        <img src="/storage/{{$ketua->gambar}}" class="card-img-top" alt="...">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title text-center">{{$ketua->nama}}</h5>
                        <p class="card-text text-center fw-bold">
                            {{$ketua->jabatan}} DPRD kapuas Hulu</p>
                    </div>
                </div>
            </a>
        </div>
    </div>
    @endif

    {{-- wakil ketua --}}
    <div class="row gy-1 gx-2">
        @forelse ($wakil as $anggota)
        <div class="col-6 col-lg-3 col-md-6 pt-5 mx-auto wow fadeInUp">
            <a href="/profil/{{$anggota->id}}">
                <div class="card service-item border-0 d-flex h-100">
                    <div class="overflow-hidden" style="max-height: 250px">
                        <img src="/storage/{{$anggota->gambar}}" class="card-img-top" alt="...">
                    </div>

                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title text-center">{{$anggota->nama}}</h5>
                        <div class="mt-auto">
                            <p class="card-text text-center">
                                {{$anggota->jabatan}} DPRD Kapuas Hulu</p>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        @empty

        @endforelse


    </div>


</div @endsection