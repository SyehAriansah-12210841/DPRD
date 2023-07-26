@extends('template.base')
@section('title', 'Sekretariat DPRD')
@section('content')
<div class="container">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('home')}}">Beranda</a></li>
            <li class="breadcrumb-item"><a class="{{(request()->is('sekretariat')) ? 'text-secondary' : ''}}"
                    href="{{route('all')}}">Sekretariat</a></li>
        </ol>
    </nav>
</div>
<div class="container my- ">
    <h1 class="fs-3 mb-5">Pejabat Struktural</h1>
    @if (!empty($sekretaris))
    <div class="row mb-5  justify-content-center">
        <div class="col-8 col-sm-6 col-md-4 col-lg-3">
            <a href="/sekretariat/{{$sekretaris->id}}">
                <div class="card  d-flex border-0 " style="">
                    <div class=" overflow-hidden" style="max-height: 400px">
                        <img src="/storage/{{$sekretaris->gambar}}" class="card-img-top rounded" alt="...">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title text-center">{{$sekretaris->nama}}</h5>
                        <p class="card-text d-block text-center btn btn-secondary rounded-pill">
                            {{$sekretaris->jabatan}}</p>
                    </div>
                </div>
            </a>
        </div>
    </div>
    @endif


    <div class="row mt-5 g-1 justify-content-center">
        @forelse ($subAnggota as $anggota)
        <div class="col-6 col-sm-6 col-md-4 col-lg-3">
            <a href="/sekretariat/{{$anggota->id}}">
                <div class="card  border-0 " style="min-height: 330px">
                    <div class=" overflow-hidden" style="max-heigh: 400px">
                        <img src="/storage/{{$anggota->gambar}}" class="card-img-top rounded" alt="...">
                    </div>
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title text-center">{{$anggota->nama}}</h5>
                        <div class="mt-auto">
                            <p class="card-text d-block text-center btn btn-secondary rounded-pill">
                                {{$anggota->jabatan}}</p>
                        </div>
                    </div>
                </div>
            </a>
        </div>

        @empty

        @endforelse
    </div>


</div>
@endsection