@extends('template.base')
@section('title', 'Visi dan Misi Bupati')
@section('content')
<div class="container">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('home')}}">Beranda</a></li>
            <li class="breadcrumb-item"><a href="#">Pelayanan dan Informasi</a></li>
            <li class="breadcrumb-item"><a class="{{(request()->is('pelayanan-informasi/*')) ? 'text-secondary' : ''}}"
                    href="{{route('visiMisiBupati')}}">Visi dan Misi Bupati</a></li>
        </ol>
    </nav>

    <div class="row">
        <div class="col">
            <h1 class="fs-3 mb-3">Visi dan Misi Bupati</h1>
            <h3 class="fs-5 fw-bold">Visi Dan Misi Pemerintah Kabupaten Kapuas Hulu</h3>
            <ul>
                <li>
                    <h4 class="fs-5">Visi</h4>
                </li>
                <p>“ MENUJU KAPUAS HULU YANG LEBIH SEJAHTERA, BERDAYA SAING DAN HARMONIS ”</p>
                <li>
                    <h4 class="fs-5">Misi</h4>
                    <ol>
                        <li>MEMPERKUAT TATA KELOLA KEPEMERINTAHAN YANG BAIK DAN BERSIH; </li>
                        <li>MEMPERKUAT PERTUMBUHAN EKONOMI YANG BERTUMPU PADA SUMBER DAYA DAERAH YANG BERKELANJUTAN
                        </li>
                        <li>MENINGKATKAN LAYANAN INFRASTRUKTUR DASAR DENGAN MEMPERHATIKAN KELESTARIAN LINGKUNGAN</li>

                    </ol>
                </li>
            </ul>


        </div>
    </div>
</div>

</div>

@endsection