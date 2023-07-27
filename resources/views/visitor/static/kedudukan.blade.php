@extends('template.base')
@section('title', 'Kedudukan, Tugas Polok Serta Hak & Kewajiban')
@section('content')
<div class="container">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('home')}}">Beranda</a></li>
            <li class="breadcrumb-item active"><a class="{{(request()->is('profil/kedudukan')) ? 'text-secondary' : ''}}" href="{{route('kedudukan')}}">Kedudukan</a></li>
        </ol>
    </nav>
</div>
<div class="container my-5 px-5">
    <h1 class="fs-3 mb-3">Kedudukan, Tugas Pokok Serta Hak &amp; Kewajiban</h1>
    <img src="{{asset('/img/kedudukan.png')}}" class="img-fluid mx-auto d-block rounded my-3" alt="">
   <p>DPRD merupakan Lembaga Perwakilan Rakyat Daerah yang berkedudukan sebagai unsur penyelenggara Pemerintahan Daerah.</p>
   <p>Sebagai representasi rakyat, DPRD mempunyai fungsi Pembentukan Peraturan Daerah, Anggaran dan Pengawasan.</p>
   <p>DPRD mempunyai tugas dan wewenang :</p>

   <ol class="ms-3">
    <li>1.Membentuk Perda bersama Gubernur </li>
    <li>2.Membahas dan memberikan persetujuan Raperda mengenai APBD yang diajukan Gubernur </li>
    <li>3.Membahas dan memberikan persetujuan Raperda mengenai APBD yang diajukan Gubernur </li>
    <li>4.Membahas dan memberikan persetujuan Raperda mengenai APBD yang diajukan Gubernur </li>
    <li>5.Membahas dan memberikan persetujuan Raperda mengenai APBD yang diajukan Gubernur </li>
    <li>6.Membahas dan memberikan persetujuan Raperda mengenai APBD yang diajukan Gubernur </li>
    <li>7.Membahas dan memberikan persetujuan Raperda mengenai APBD yang diajukan Gubernur </li>
    <li>8.Membahas dan memberikan persetujuan Raperda mengenai APBD yang diajukan Gubernur </li>
    <li>9.Membahas dan memberikan persetujuan Raperda mengenai APBD yang diajukan Gubernur </li>
    <li>10.Membahas dan memberikan persetujuan Raperda mengenai APBD yang diajukan Gubernur </li>
    <li>11.Membahas dan memberikan persetujuan Raperda mengenai APBD yang diajukan Gubernur </li>


   </ol>

   <p>DPRD mempunyai hak interpelasi, angket dan menyatakan pendapat sedangkan anggota DPRD mempunyai hak mengajukan Raperda, mengajukan pertanyaan, menyampaikan usul dan pendapat, memimilih dan dipilih, membela diri, imunitas, mengikuti orientasi dan pendalaman tugas, hak protokoler, keuangan dan administratif serta mempunyai ruang kerja.</p>
   <p>Pimpinan dan anggota DPRD memperoleh kedudukan protokol dalam acara resmi dan mendapat penghormatan sesuai dengan penghormatan kepada pejabat pemerintah.</p>
</div>
@endsection