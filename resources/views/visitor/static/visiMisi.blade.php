@extends('template.base')
@section('title', 'Visi dan Misi PPID')
@section('content')
<div class="container">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('home')}}">Beranda</a></li>
            <li class="breadcrumb-item"><a href="#">PPID</a></li>
            <li class="breadcrumb-item"><a class="{{(request()->is('ppid/*')) ? 'text-secondary' : ''}}"
                    href="{{route('visiMisi')}}">Visi dan Misi PPID</a></li>
        </ol>
    </nav>

    <div class="row">
        <div class="col">
            <h1 class="fs-3 mb-3">Visi dan Misi PPID</h1>
            <ul>
                <li>
                    <h4 class="fs-5">Visi</h4>
                </li>
                <p>“ MEMBERIKAN PELAYANAN PUBLIK YANG “PASTI” (PROFESIONAL, AKUNTABEL,
                    SANTUN, TUNTAS DAN INNOVATIF) DALAM MENDUKUNG PELAKSANAAN TUGAS
                    DAN FUNGSI DPRD”</p>
                <li>
                    <h4 class="fs-5">Misi</h4>
                    <ol>
                        <li>Meningkatkan Kualitas Pengelolaan Layanan Informasi Publik </li>
                        <li>Meningkatkan Partisipasi Masyarakat dengan memberikan kemudahan dalam
                            mendapatkan akses terhadap informasi Publik
                        </li>
                        <li>Menjadikan DPRD Kabupaten Kapuas Hulu sebagai Badan Publik yang Informatif </li>

                    </ol>
                </li>
            </ul>


        </div>
    </div>
</div>

</div>

@endsection