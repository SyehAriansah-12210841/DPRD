@extends('template.base')
@section('title', 'Komisi DPRD')
@section('content')
<div class="container">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('home')}}">Beranda</a></li>
            <li class="breadcrumb-item"><a href="{{route('komisi')}}">Komisi</a></li>
            <li class="breadcrumb-item"><a class="{{(request()->is('akd/*')) ? 'text-secondary' : ''}}"
                    href="{{request()->current}}">Komisi </a></li>
        </ol>
    </nav>
</div>
<div class="container my- ">
    @if (!empty($ketua))
    <div class="row  justify-content-center">
        <div class="col-8 col-sm-6 col-md-4 col-lg-3">
            <a href="/profil/{{$ketua->id}}">
                <div class="card  d-flex border-0 " style="">
                    <div class=" overflow-hidden" style="max-height: 400px">
                        <img src="/storage/{{$ketua->gambar}}" class="card-img-top rounded" alt="...">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title text-center">{{$ketua->nama}}</h5>
                        <p class="card-text d-block text-center btn btn-secondary rounded-pill">
                            {{$ketua->jabatan_komisi}}</p>
                    </div>
                </div>
            </a>
        </div>
    </div>
    @endif


    <div class="row  g-4 justify-content-center">
        @forelse ($subAnggota as $a)
        <div class="col-6 col-sm-6 col-md-4 col-lg-3">
            <a href="/profil/{{$a->id}}">
                <div class="card  border-0 " style="min-height: 330px">
                    <div class=" overflow-hidden" style="max-heigh: 400px">
                        <img src="/storage/{{$a->gambar}}" class="card-img-top rounded" alt="...">
                    </div>
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title text-center">{{$a->nama}}</h5>
                        <div class="mt-auto">
                            <p class="card-text d-block text-center btn btn-secondary rounded-pill">
                                {{$a->jabatan_komisi}}</p>
                        </div>
                    </div>
                </div>
            </a>
        </div>

        @empty

        @endforelse
    </div>
    <div class="my-5 bg-warning rounded py-1 mx-auto" style="max-width: 16rem">
        <h2 class="text-center text-white fs-4">Anggota</h2>
    </div>
    <div class="row  g-4 justify-content-center">
        @forelse ($anggota as $anggot)
        <div class="col-6 col-sm-6 col-md-4 col-lg-3">
            <a href="/profil/{{$anggot->id}}">
                <div class="card  border-0 " style="min-height: 330px">
                    <div class=" overflow-hidden" style="max-heigh: 400px">
                        <img src="/storage/{{$anggot->gambar}}" class="card-img-top rounded" alt="...">
                    </div>
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title text-center">{{$anggot->nama}}</h5>
                        <p class="card-text mt-auto d-block text-center btn btn-secondary rounded-pill">
                            {{$anggot->jabatan_komisi}}</p>
                    </div>
                </div>
            </a>
        </div>

        @empty

        @endforelse
    </div>

</div>
@endsection