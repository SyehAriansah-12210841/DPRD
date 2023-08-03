@extends('template.base')
@section('title', 'Jadwal Pelayanan')
@section('content')
<div class="container">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('home')}}">Beranda</a></li>
            <li class="breadcrumb-item"><a href="#">Pelayanan dan Informasi</a></li>
            <li class="breadcrumb-item"><a class="{{(request()->is('ppid/*')) ? 'text-secondary' : ''}}"
                    href="{{route('jadwalPelayanan')}}">Jadwal Pelayanan</a></li>
        </ol>
    </nav>

    <div class="row">
        <div class="col">
            <h1 class="fs-3 mb-3">Jadwal Pelayanan PPID</h1>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">Hari</th>
                        <th scope="col">Jam</th>
                        <th scope="col">Istirahat</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">Senin</th>
                        <td>08.00 - 15.00 WIB</td>
                        <td>12.00 - 12.50 WIB</td>
                    </tr>
                    <tr>
                        <th scope="row">Selasa</th>
                        <td>08.00 - 15.00 WIB</td>
                        <td>12.00 - 12.50 WIB</td>
                    </tr>
                    <tr>
                        <th scope="row">Rabu</th>
                        <td>08.00 - 15.00 WIB</td>
                        <td>12.00 - 12.50 WIB</td>
                    </tr>
                    <tr>
                        <th scope="row">Kamis</th>
                        <td>08.00 - 15.00 WIB</td>
                        <td>12.00 - 12.50 WIB</td>
                    </tr>
                    <tr>
                        <th scope="row">Jumat</th>
                        <td>08.00 - 15.00 WIB</td>
                        <td>13.30 - 12.50 WIB</td>
                    </tr>
                    <tr>
                        <th scope="row">Sabtu - Minggu dan Hari Besar</th>
                        <td colspan="2" class="text-center">Libur</td>
                    </tr>

                </tbody>
            </table>


        </div>
    </div>
</div>

</div>

@endsection