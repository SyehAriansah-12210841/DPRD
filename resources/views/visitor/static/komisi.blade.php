@extends('template.base')
@section('title', 'Komisi DPRD')
@section('content')
<div class="container">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('home')}}">Beranda</a></li>
            <li class="breadcrumb-item"><a class="{{(request()->is('komisi')) ? 'text-secondary' : ''}}"
                    href="{{route('komisi')}}">Komisi</a></li>
        </ol>
    </nav>
</div>

<div class="container">
    <div class="row">
        <div class="col">
            <div class="card mb-3 mx-auto p-3" style="max-width: 740px;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="{{asset('img/pertanyaan.svg')}}" class="img-fluid w-100 rounded-start" alt="komisi">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title fw-bold">Apa Itu Komisi DPRD Kapuas Hulu?</h5>
                            <p class="card-text">Komisi merupakan alat kelengkapan DPRD yang bersifat tetap dan dibentuk
                                oleh DPRD pada awal masa jabatan keanggotaan DPRD. Setiap anggota DPRD kecuali pimpinan
                                DPRD wajib menjadi anggota salah satu komisi.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-center mt-5">
        <div class="col-6 col-md-3">
            <a href="/akd/komisi/komisi-a">
                <div class="card border-0" style="width: 18re;">
                    <img src="{{asset('/img/komisi-a.png')}}" class="card-img-top mx-auto" style="max-width: 100px;"
                        alt="...">
                    <div class="card-body">
                        <p class="card-title fw-bold text-center">Komisi A</p>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-6 col-md-3">
            <a href="/akd/komisi/komisi-b">
                <div class="card border-0" style="width: 18re;">
                    <img src="{{asset('/img/komisi-b.png')}}" class="card-img-top mx-auto" style="max-width: 100px;"
                        alt="...">
                    <div class="card-body">
                        <p class="card-title fw-bold text-center">Komisi B</p>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-6 col-md-3">
            <a href="/akd/komisi/komisi-c">
                <div class="card border-0" style="width: 18re;">
                    <img src="{{asset('/img/komisi-c.png')}}" class="card-img-top mx-auto" style="max-width: 100px;"
                        alt="...">
                    <div class="card-body">
                        <p class="card-title fw-bold text-center">Komisi C</p>
                    </div>
                </div>
            </a>
        </div>

    </div>
</div>

@endsection