@extends('template.base')
@section('title', 'Struktur Organisasi')
@section('content')
<div class="container">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('home')}}">Beranda</a></li>
            <li class="breadcrumb-item"><a href="#">PPID</a></li>
            <li class="breadcrumb-item"><a class="{{(request()->is('ppid/*')) ? 'text-secondary' : ''}}"
                    href="{{route('strukturOrganisasi')}}">Struktur Organisasi</a></li>
        </ol>
    </nav>

    <div class="row">
        <div class="col">
            <h1 class="fs-3 mb-3">Struktur Organisasi</h1>
            <img src="{{asset('/img/struktur-organisasi.png')}}" alt="" class="img-fluid" srcset="">

        </div>
    </div>
</div>

</div>

@endsection