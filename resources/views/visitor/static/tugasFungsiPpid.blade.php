@extends('template.base')
@section('title', 'Tugas Dan Fungsi PPID')
@section('content')
<div class="container">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('home')}}">Beranda</a></li>
            <li class="breadcrumb-item"><a href="#">PPID</a></li>
            <li class="breadcrumb-item"><a class="{{(request()->is('ppid/*')) ? 'text-secondary' : ''}}"
                    href="{{route('tugasFungsiPpid')}}">Tugas dan Fungsi PPID</a></li>
        </ol>
    </nav>

    <div class="row">
        <div class="col">
            <h1 class="fs-3 mb-3">Tugas dan Fungsi PPIP Pembantu Sekretariat</h1>
            <h2 class="fw-bold fs-5">Tugas PPID:</h2>
            <ol>
                <li>Mengkoordinasikan dan mengkonsolidasikan pengumpulan bahan informasi dandokumentas</li>
                <li>Menyimpan, mendokumentasikan, menyediakan dan memberikan pelayanan informasikepada publik</li>
                <li>elakukan verifikasi bahan informasi publik</li>
                <li>Melakukan pemutakhiran informasi dan dokumentasi</li>
                <li>Menyediakan informasi dan dokumentasi untuk diakses oleh masyarakat</li>
                <li>Melakukan inventarisasi informasi yang dikecualikan untuk disampaikan kepada PPID</li>

            </ol>
            <h2 class="fw-bold fs-5">Fungsi PPID:</h2>
            <ol>
                <li>Penghimpunan Informasi Publik pada masing-masing Bagian</li>
                <li>Penataan dan Penyimpanan informasi publik pada masing-masing Bagian.</li>
            </ol>
        </div>
    </div>
</div>

</div>

@endsection