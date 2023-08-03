@extends('template.base')
@section('title', 'Struktur Organisasi Sekretariat')
@section('content')
<div class="container">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('home')}}">Beranda</a></li>
            <li class="breadcrumb-item"><a href="#">Sekretariat</a></li>
            <li class="breadcrumb-item"><a class="{{(request()->is('sekretariat/*')) ? 'text-secondary' : ''}}"
                    href="{{route('skppid')}}">Struktur Organisasi Sekretariat</a></li>
        </ol>
    </nav>

    <div class="row">
        <div class="col">
            <h1 class="fs-3 mb-3">Struktur Organisasi Sekretariat</h1>
            <a href="{{asset('/img/struktur-organisasi-sekretariat.png')}}">
                <img src="{{asset('/img/struktur-organisasi-sekretariat.png')}}" class="img-fluid" alt="">
            </a>
        </div>

    </div>
</div>
</div>

</div>

@endsection