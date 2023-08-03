@extends('template.base')
@section('title', 'Tugas Pokok Sekretariat DPRD')
@section('content')
<div class="container">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('home')}}">Beranda</a></li>
            <li class="breadcrumb-item"><a href="#">Sekretariat</a></li>
            <li class="breadcrumb-item"><a class="{{(request()->is('sekretariat/*')) ? 'text-secondary' : ''}}"
                    href="{{route('komisi')}}">Tugas Pokok dan Fungsi</a></li>
        </ol>
    </nav>

    <div class="row">
        <div class="col">
            <h1 class="fs-3 mb-3">Tugas Pokok dan Fungsi Sekretariat DPRD</h1>
            <h3 class="fs-5 fw-bold">A. Tugas Sekretariat DPRD</h3>
            <p>Sekretariat DPRD mempunyai tugas menyelenggarakan administrasi kesekretariatan, administrasi keuangan,
                mendukung pelaksanaan tugas dan fungsi DPRD, serta menyediakan dan mengoordinasikan tenaga ahli yang
                diperlukan oleh DPRD sesuai dengan kebutuhan.</p>
            <h3 class="fs-5 fw-bold">B. Fungsi Sekretariat DPRD</h3>
            <p>Dalam melaksanakan tugas pokok, Sekretariat DPRD mempunyai fungsi sebagai berikut :</p>
            <ol>
                <li>Penyelenggaraan administrasi kesekretariatan dan administrasi keuangan DPRD </li>
                <li>Penyelenggaraan rapat-rapat DPRD </li>
                <li>Penyediaan dan Pengoordinasian tenaga ahli yang diperlukan oleh DPRD</li>
                <li>Pengawasan dan pengendalian terhadap pelaksanaan kegiatan yang berkaitan dengan bidang tugasnya</li>
                <li>Penyampaian laporan yang berkaitan dengan bidang tugasnya secara periodik</li>
                <p>dan</p>
                <li>Pelaksanaan fungsi lain yang diserahkan oleh Bupati sesuai dengan tugas pokok dan fungsinya.</li>

            </ol>

        </div>
    </div>
</div>

</div>

@endsection