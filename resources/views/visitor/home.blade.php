@extends('template.base')
@section('title', 'Beranda')
@section('content')
<x-carousel />

<div class="container mt-3">
    <div class="row">
        <!-- Service Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center mx-auto pb-4 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                    <p class="section-title bg-white text-center text-primary px-3">Kepemimpiman</p>
                    <h1 class="mb-5">Kepemimpiman DRPD kapuas Hulu</h1>
                </div>

                {{-- ketua --}}
                @if ($ketua)
                <div class="row">
                    <div class="col-lg-3 col-md-6 pt-5 mx-auto wow fadeInUp">
                        <a href="/profil/{{$ketua->id}}">
                            <div class="card service-item d-flex h-100">
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
                <div class="row gy-5 gx-4">
                    @forelse ($wakil as $anggota)
                    <div class="col-lg-3 col-md-6 pt-5 mx-auto wow fadeInUp">
                        <a href="/profil/{{$anggota->id}}">
                            <div class="card service-item d-flex h-100">
                                <div class="overflow-hidden" style="max-height: 250px">
                                    <img src="/storage/{{$anggota->gambar}}" class="card-img-top" alt="...">
                                </div>

                                <div class="card-body">
                                    <h5 class="card-title text-center">{{$anggota->nama}}</h5>
                                    <p class="card-text text-center">
                                        {{$anggota->jabatan}} DPRD Kapuas Hulu</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    @empty

                    @endforelse


                </div>
                <a class="btn btn-secondary d-block rounded-pill mx-auto my-5" href="/profil/anggota">Lihat Semua
                    Anggota</a>
            </div>
        </div>
        <!-- Service End -->
    </div>
</div>
@endsection