@extends('template.base')
@section('title', 'Formulir Permohonan Online')
@section('content')
<div class="container">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('home')}}">Beranda</a></li>
            <li class="breadcrumb-item"><a href="#">PPID</a></li>
            <li class="breadcrumb-item"><a class="{{(request()->is('ppid/*')) ? 'text-secondary' : ''}}"
                    href="{{route('formulirPermohonanOnline')}}">Formulir Permohonan Online</a></li>
        </ol>
    </nav>

    <div class="row">
        <div class="col">
            <h1 class="fs-3 mb-3">Formulir Permohonan Online</h1>
            <ul>
                <li>
                    <a class="fs-3"
                        href="https://docs.google.com/forms/d/e/1FAIpQLSeJypd-gdb6J7Czq8n3qeoVnxebAmc-seB4l7BWuEWcfTxibA/viewform?usp=sf_link">Form
                        Permohonan Informasi Publik</a>
                </li>
                <li>
                    <a class="fs-3"
                        href="https://docs.google.com/forms/d/e/1FAIpQLSdIo-bFJ6R4LuaQWeS2ksKUKazj_GOVR730enr4aZU-6lNgTg/viewform?usp=sf_link">Form
                        Pengajuan Keberatan Atas Permohonan Informasi</a>
                </li>
            </ul>

        </div>
    </div>
</div>

</div>

@endsection