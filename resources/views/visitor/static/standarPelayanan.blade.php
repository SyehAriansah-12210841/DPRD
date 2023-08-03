@extends('template.base')
@section('title', 'Standar Pelayanan')
@section('content')
<div class="container">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('home')}}">Beranda</a></li>
            <li class="breadcrumb-item"><a href="#">PPID</a></li>
            <li class="breadcrumb-item"><a class="{{(request()->is('ppid/*')) ? 'text-secondary' : ''}}"
                    href="{{route('standarPelayanan')}}">Standar Pelayanan</a></li>
        </ol>
    </nav>

    <div class="row">
        <div class="col">
            <h1 class="fs-3 mb-3">Standar Pelayanan</h1>
            <div id="pdf" class="w-100 vh-100"></div>
            <script src="/js/pdfobject.min.js"></script>
            <script>
                PDFObject.embed("/storage/documents/SK-STANDAR-PELAYANAN-SET-DPRD.pdf", "#pdf");
            </script>

        </div>
    </div>
</div>

</div>

@endsection