@extends('template.base-dashboard')
@section('title', 'Dasbor Daerah Pemilihan')
@section('content')
<x-dashboard-icon />
<x-dashboard-topbar />

{{-- Toast Flash Message --}}
@if(session()->has('status'))
<x-dashboard-toast>
    {{session()->get('status')}}
</x-dashboard-toast>
@endif

<div class="container-fluid">
    <div class="row">
        <x-dashboard-sidebar />
        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
            <div
                class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2">Daerah Pemilihan</h1>
                <a class="btn btn-outline-success" href="{{route('dapil.create')}}">Tambah</a>
            </div>


            <div class="table-responsive small">
                <table class="table table-striped table-sm">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Daerah</th>
                            <th scope="col">Jumlah Anggota</th>
                            <th scope="col">Aksi</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $key => $dapil)
                        <tr>
                            <td> {{ ($data->currentpage()-1) * $data->perpage() + $key + 1 }} </td>
                            <td>{{$dapil->nama}}</td>
                            <td>{{$dapil->daerah}}</td>
                            <td>{{$dapil->anggota->count()}}</td>
                            <td>
                                <a class="badge bg-success text-decoration-none"
                                    href="{{route('dapil.edit', ['dapil' => $dapil->id])}}">Edit</a>
                                <form class="d-inline" action="{{route('dapil.destroy', ['dapil' => $dapil->id])}}"
                                    method="post">
                                    @method('delete')
                                    @csrf
                                    <button class="badge bg-danger disable" type="submit">Hapus</button>
                                </form>
                            </td>
                        </tr>

                        @endforeach

                    </tbody>
                </table>
            </div>
            <div class="d-flex justify-content-center w-100 border">
                {{ $data->links() }}
            </div>
        </main>
    </div>
</div>
@endsection