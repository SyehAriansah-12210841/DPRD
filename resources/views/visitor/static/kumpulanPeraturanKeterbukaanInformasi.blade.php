@extends('template.base')
@section('title', 'Kumpulan Peraturan Keterbukaan Informasi')
@section('content')
<div class="container">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('home')}}">Beranda</a></li>
            <li class="breadcrumb-item"><a href="#">PPID</a></li>
            <li class="breadcrumb-item"><a class="{{(request()->is('ppid/*')) ? 'text-secondary' : ''}}"
                    href="{{route('kumpulanPeraturanKeterbukaanInformasi')}}">kumpulan Peraturan Keterbukaan
                    Informasi</a></li>
        </ol>
    </nav>

    <div class="row">
        <div class="col">
            <h1 class="fs-3 mb-3">Kumpulan Peraturan Keterbukaan Informasi</h1>

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
                        <td>UU Nomor 14 Tahun 2008 Tentang KIP</td>
                        <td>
                            <a href="{{asset('/storage/documents/1.-UU-Nomor-14-Tahun-2008-Tentang-KIP.pdf')}}"
                                class="btn btn-primary">Unduh</a>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>PP No.61 Tahun 2010 tentang Pelaksanaan UU No. 14 Tahun 2008 tentang Keterbukaan Informasi
                            Publik</td>
                        <td>
                            <a href="{{asset('/storage/documents/2.-PP-No.61-Tahun-2010-tentang-Pelaksanaan-UU-No.-14-Tahun-2008-tentang-Keterbukaan-Informasi-Publik.pdf')}}"
                                class="btn btn-primary">Unduh</a>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Permendagri No.3 Tahun 2017 tentang Pedoman Pengelolaan Pelayanan Informasi dan Dokumentasi
                        </td>
                        <td>
                            <a href="{{asset('/storage/documents/3.-Permendagri-No.3-Tahun-2017-tentang-Pedoman-Pengelolaan-Pelayanan-Informasi-dan-Dokumentasi.pdf')}}"
                                class="btn btn-primary">Unduh</a>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">4</th>
                        <td>Peraturan Komisi Informasi Nomor 1 Tahun 2013 tentang Penyelesaian Sengketa Informasi Publik
                        </td>
                        <td>
                            <a href="{{asset('/storage/documents/4.-Peraturan-Komisi-Informasi-Nomor-1-Tahun-2013-tentang-Penyelesaian-Sengketa-Informasi-Publik.pdf')}}"
                                class="btn btn-primary">Unduh</a>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">5</th>
                        <td>Peraturan Komisi Informasi Nomor 1 Tahun 2010 tentang Standar Layanan Informasi Publik
                        </td>
                        <td>
                            <a href="{{asset('/storage/documents/5.-Peraturan-Komisi-Informasi-Nomor-1-Tahun-2010-tentang-Standar-Layanan-Informasi-Publik.pdf')}}"
                                class="btn btn-primary">Unduh</a>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">6</th>
                        <td>KEPUTUSAN BUPATI NO 54 TENTANG PENETAPAN PPID
                        </td>
                        <td>
                            <a href="{{asset('/storage/documents/6.-KEPUTUSAN-BUPATI-NO-54-TENTANG-PENETAPAN-PPID.pdf')}}"
                                class="btn btn-primary">Unduh</a>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">7</th>
                        <td>SK PETUGAS FRONT OFFICE
                        </td>
                        <td>
                            <a href="{{asset('/storage/documents/8.-SK-PETUGAS-FRONT-OFFICE.pdf')}}"
                                class="btn btn-primary">Unduh</a>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">8</th>
                        <td>
                            SK STANDAR BIAYA PEROLEHAN INFORMASI
                        </td>
                        <td>
                            <a href="{{asset('/storage/documents/SK-STANDAR-BIAYA-PEROLEHAN-INFORMASI.pdf')}}"
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