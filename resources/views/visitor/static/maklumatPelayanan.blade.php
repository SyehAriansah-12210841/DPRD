@extends('template.base')
@section('title', 'Maklumat Pelayanan')
@section('content')
<div class="container">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('home')}}">Beranda</a></li>
            <li class="breadcrumb-item"><a href="#">Pelayanan dan Informasi</a></li>
            <li class="breadcrumb-item"><a class="{{(request()->is('pelayanan-informasi/*')) ? 'text-secondary' : ''}}"
                    href="{{route('maklumatPelayanan')}}">Maklumat Pelayanan</a></li>
        </ol>
    </nav>

    <div class="row">
        <div class="col">
            <h1 class="fs-3 mb-3">Maklumat Pelayanan</h1>
            <p class="fs-4 text-center fw-bold">Dengan ini, Kami Menyatakan Sanggup Menyelengarakan Pelayanan Sesuai
                Standar Pelayanan Yang
                Telah
                Ditetapkan dan Apabila Tidak Menepati Janji Ini, Kami Siap Menerima Sanksi Sesui Peraturan Perundang -
                Undangan Yang Berlaku</p>

        </div>
    </div>
</div>

</div>

@endsection