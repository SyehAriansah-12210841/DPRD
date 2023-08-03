@extends('template.base')
@section('title', 'Profil Singkat PPID')
@section('content')
<div class="container">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('home')}}">Beranda</a></li>
            <li class="breadcrumb-item"><a href="#">PPID</a></li>
            <li class="breadcrumb-item"><a class="{{(request()->is('ppid/*')) ? 'text-secondary' : ''}}"
                    href="{{route('profilSingkatPpid')}}">Profil Singkat PPID</a></li>
        </ol>
    </nav>

    <div class="row">
        <div class="col">
            <h1 class="fs-3 mb-3">Profil Singkat PPID</h1>
            <p>Pada Tahun 2021 telah di bentuk Pejabat Pengelola Informasi dan Dokumentasi
                (PPID) Pembantu dilingkungan Sekretariat Dewan Perwakilan Rakyat Daerah Kabupaten
                Kapuas Hulu melalui Surat Keputusan Sekretaris Dewan Perwakilan Rakyat Daerah Nomor
                17 tanggal 01 April 2021 tentang Pembentukan Tim Pejabat Pengelola Informasi dan
                Dokumentasi (PPID) Pembantu.</p>
            <p>Pembentukan Pejabat Pengelola Informasi dan Dokumentasi (PPID) Pembantu
                tersebut mengacu kepada Undang-Undang Nomor 14 Tahun 2008 tentang Keterbukaan
                Informasi Publik yang merupakan wujud dari Penyelenggara Layanan Publik untuk terbuka
                dan transparan serta untuk memenuhi Hak Publik memperoleh dan mencari informasi
                melalui media yang tersedia dan dijamin oleh Undang-Undang.</p>
            <p>Sebagai Organisasi Perangkat Daerah yang melaksanakan dukungan terhadap
                tugas dan fungsi DPRD, Sekretariat Dewan Perwakilan Rakyat Daerah Kabupaten Kapuas
                Hulu Memiliki Kewajiban untuk membuka akses masyarakat terhadap informasi publik yang
                berkaitan dengan tugas dan fungsi badan publik tersebut. Baik yang berkenaan dengan
                tugas dan fungsi Sekretariat Dewan Perwakilan Rakyat Daerah Kabupaten Kapuas Hulu
                maupun Tugas dan Fungsi Dewan Perwakilan Rakyat Daerah.</p>


        </div>
    </div>
</div>

</div>

@endsection