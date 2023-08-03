@extends('template.base')
@section('title', 'Formulir Permohonan')
@section('content')
<div class="container">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('home')}}">Beranda</a></li>
            <li class="breadcrumb-item"><a href="#">PPID</a></li>
            <li class="breadcrumb-item"><a class="{{(request()->is('ppid/*')) ? 'text-secondary' : ''}}"
                    href="{{route('formulirPermohonan')}}">Formulir Permohonan</a></li>
        </ol>
    </nav>

    <div class="row">
        <div class="col">
            <h1 class="fs-3 mb-3">Formulir</h1>

            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama Dokumen</th>
                        <th scope="col">Link Unduhan</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Formulir Permohonan Informasi Publik</td>
                        <td>
                            <a href="{{asset('/storage/documents/FORMULIR-PERMOHONAN-INFORMASI-PUBLIK.pdf')}}"
                                class="btn btn-primary">Unduh</a>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Formulir Bukti Penerimaan Keberatan Permohonan Informasi</td>
                        <td>
                            <a href="{{asset('/storage/documents/FORM-BUKTI-PENERIMAAN-KEBERATAN-PERMOHONAN-INFORMASI.pdf')}}"
                                class="btn btn-primary">Unduh</a>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Buku Register Permohonan Informasi Publik</td>
                        <td>
                            <a href="{{asset('/storage/documents/BUKU-REGISTER-PERMOHONAN-INFORMASI-PUBLIK.pdf')}}"
                                class="btn btn-primary">Unduh</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

</div>

@endsection