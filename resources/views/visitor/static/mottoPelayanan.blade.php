@extends('template.base')
@section('title', 'Motto Pelayanan')
@section('content')
<div class="container">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('home')}}">Beranda</a></li>
            <li class="breadcrumb-item"><a href="#">Pelayanan dan Informasi</a></li>
            <li class="breadcrumb-item"><a class="{{(request()->is('pelayanan-informasi/*')) ? 'text-secondary' : ''}}"
                    href="{{route('mottoPelayanan')}}">Motto Pelayanan</a></li>
        </ol>
    </nav>

    <div class="row">
        <div class="col">
            <h1 class="fs-3 mb-3">Motto Pelayanan</h1>
            <p class="fs-5 fw-bold">Sekretariat DPRD Kapuas Hulu Melayani Dengan <span
                    class="fs-3 fw-bold">"PASTI"</span></p>
            <ol>
                <li class="fs-4">Prosedural</li>
                <li class="fs-4">Antisipatif</li>
                <li class="fs-4">Santun</li>
                <li class="fs-4">Tuntas</li>
                <li class="fs-4">Inovatif</li>
            </ol>


        </div>
    </div>
</div>

</div>

@endsection