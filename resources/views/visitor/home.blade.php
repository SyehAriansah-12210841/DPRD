@extends('template.base')
@section('title', 'Dewan Perwakilan Rakyat Daerah Kapuas Hulu')
@section('content')
<x-carousel />


<!-- Service Start -->
<div class="container-xxl py-5 ">
    <div class="container">
        <div class="text-center mx-auto pb-4 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
            <p class="section-title bg-white text-center text-primary px-3">Kepemimpiman</p>
            <h1 class="mb-5">Kepemimpiman DRPD Kapuas Hulu</h1>
        </div>

        {{-- ketua --}}
        @if ($ketua)
        <div class="row">
            <div class="col-8 col-lg-3 col-md-6 pt-5 mx-auto wow fadeInUp">
                <a href="/profil/{{$ketua->id}}">
                    <div class="card service-item border-0 d-flex h-100">
                        <div class="overflow-hidden">
                            <img src="/storage/{{$ketua->gambar}}" class="card-img-top" alt="...">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title text-center">{{$ketua->nama}}</h5>
                            <p class="card-text text-center fw-bold">
                                {{$ketua->jabatan}} DPRD Kapuas Hulu</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        @endif

        {{-- wakil ketua --}}
        <div class="row gy-2 gx-2">
            @forelse ($wakil as $anggota)
            <div class=" col-6 col-lg-3 col-md-6 pt-3 mx-auto wow fadeInUp">
                <a href="/profil/{{$anggota->id}}">
                    <div class="card service-item border-0 d-flex h-100">
                        <div class="overflow-hidden">
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
        <a class="btn btn-secondary d-block rounded-pill mx-auto my-5" href="/profil/anggota">Lihat Semua
            Anggota</a>
    </div>
</div>
<!-- Service End -->

{{-- visi misi --}}
<div class="container mt-3">
    <h1 class="text-center ">Visi Dan Misi</h1>
    <div class="row">
        <div class="col col-lg-4 wow fadeInUp">
            <div class="card mb-3 border-0 hover-bg rounded" style="min-width: 340px;">
                <div class="card-body">
                    <h5 class="card-title text-center text-secondary">Harmonis</h5>
                    <p class="card-text">Mewujudkan Masyarakat Kapuas Hulu yang Harmonis Dalam Kerukunan
                        Kehidupan Beragama, Budaya dan Keamanan</p>
                </div>
            </div>
        </div>

        <div class="col col-lg-4 wow fadeInUp">
            <div class="card mb-3 border-0 hover-bg rounded" style="min-width: 340px;">
                <div class="card-body">
                    <h5 class="card-title text-center text-secondary">Energik</h5>
                    <p class="card-text">Mewujudkan Kapuas Hulu yang Kreatif Menuju Desa Mandiri,
                        Pengembangan Aktifitas Ekonomi yang Adil dan Pro Rakyat serta Ramah
                        Investasi.
                    </p>
                </div>
            </div>
        </div>

        <div class="col col-lg-4 wow fadeInUp">
            <div class="card mb-3 border-0 hover-bg rounded" style="min-width: 340px;">
                <div class="card-body">
                    <h5 class="card-title text-center text-secondary">Amanah</h5>
                    <p class="card-text">Mewujudkan Kapuas Hulu yang Berbudaya Mandiri, Cerdas dan
                        Inovatif Dalam Meningkatkan Kualitas dan Mutu Pendidikan yang Memiliki Daya
                        Saing</p>
                </div>
            </div>
        </div>

        <div class="col col-lg-4 wow fadeInUp">
            <div class="card mb-3 border-0 hover-bg rounded" style="min-width: 340px;">

                <div class="card-body">
                    <h5 class="card-title text-center text-secondary">Berdaya Saing</h5>
                    <p class="card-text">Mewujudkan Tata Kelola Pemerintahan yang Bersih, Berwibawa
                        dan
                        Tersedianya Infrastruktur Publik yang Berbasis Transparansi, Responsibilitas
                        dan
                        Akuntabilitas</p>
                </div>
            </div>
        </div>

        <div class="col col-lg-4 wow fadeInUp">
            <div class="card mb-3 border-0 hover-bg rounded" style="min-width: 340px;">

                <div class="card-body">
                    <h5 class="card-title text-center text-secondary">Terampil</h5>
                    <p class="card-text">Mewujudkan Kapuas Hulu yang Sejahtera Dalam Pelayanan
                        Kesehatan
                        Dasar yang Bermutu Bagi Masyarakat.</p>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- visi misi --}}
</div>
</div>
@endsection