<!-- Navbar Start -->
<nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top px-4 px-lg-2 shadow mb-2">
    <a href="/" class="navbar-brand d-flex align-items-center me-5">
        <img src="{{asset('/img/logo.png')}}" style="height: 3rem" alt="DPRD kapuas hulu logo">
    </a>
    <button type="button" class="navbar-toggler me-0" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-5 p-4 p-lg-0">
            <a href="{{route('home')}}"
                class="nav-item nav-link {{(request()->is('/')) ? 'text-secondary' : ''}}">Beranda</a>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle {{(request()->is('profil/*')) ? 'text-secondary' : ''}}"
                    data-bs-toggle="dropdown">Profil</a>
                <div class="dropdown-menu bg-light m-0">

                    <a href="{{route('pimpinan')}}" class="dropdown-item mt-3">Pimpinan DPRD</a>
                    <a href="{{route('all')}}" class="dropdown-item mt-3">Profil Anggota DPRD</a>

                </div>
            </div>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle {{(request()->is('akd/*')) ? 'text-secondary' : ''}}"
                    data-bs-toggle="dropdown">AKD</a>
                <div class="dropdown-menu bg-light m-0">
                    <a href="{{route('komisi')}}" class="dropdown-item">Komisi</a>
                    <a href="{{route('badanMusyawarah')}}" class="dropdown-item mt-3">Badan Musyawarah</a>
                    <a href="{{route('badanAnggaran')}}" class="dropdown-item mt-3">Badan Anggaran</a>
                    <a href="{{route('badanPembentukanPerda')}}" class="dropdown-item mt-3">Badan Pembentukan Perda</a>
                    <a href="{{route('badanKehormatan')}}" class="dropdown-item mt-3">Badan Kehormatan</a>
                </div>
            </div>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle {{(request()->is('ppid/*')) ? 'text-secondary' : ''}}"
                    data-bs-toggle="dropdown">PPID</a>
                <div class="dropdown-menu bg-light m-0">
                    <a href="{{route('profilSingkatPpid')}}" class="dropdown-item">Profil Singkat PPID</a>
                    <a href="{{route('skppid')}}" class="dropdown-item mt-3">SK PPID SETWAN</a>
                    <a href="{{route('visiMisi')}}" class="dropdown-item mt-3">Visi Misi PPID</a>
                    <a href="{{route('tugasFungsiPpid')}}" class="dropdown-item mt-3">Tugas dan Fungsi PPID</a>
                    <a href="{{route('standarPelayanan')}}" class="dropdown-item mt-3">Standar Pelayanan</a>
                    <a href="{{route('strukturOrganisasi')}}" class="dropdown-item mt-3">Struktur Organisasi PPID</a>
                    <a href="{{route('jadwalPelayanan')}}" class="dropdown-item mt-3">Jadwal Pelayanan PPID</a>
                    <a href="{{route('maklumatPelayananPpid')}}" class="dropdown-item mt-3">Maklumat Pelayanan PPID</a>
                    <a href="{{route('kumpulanPeraturanKeterbukaanInformasi')}}" class="dropdown-item mt-3">Kumpulan
                        Peraturan &amp; Keterbukaan Informasi</a>
                    <a href="{{route('dokumenSop')}}" class="dropdown-item mt-3">Dokumen SOP</a>
                    <a href="{{route('formulirPermohonan')}}" class="dropdown-item mt-3">Formulir Permohonan</a>
                    <a href="{{route('daftarInformasiPublik')}}" class="dropdown-item mt-3">Daftar Informasi Publik</a>
                    <a href="{{route('formulirPermohonanOnline')}}" class="dropdown-item mt-3">Formulir Permohonan
                        Online</a>





                </div>
            </div>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle {{(request()->is('fraksi/*')) ? 'text-secondary' : ''}}"
                    data-bs-toggle="dropdown">Fraksi</a>
                <div class="dropdown-menu bg-light m-0">
                    @if(!empty($fraksiBar))
                    @forelse ($fraksiBar as $fraksi)
                    <a href="{{route('fraksiDetail', ['fraksi' => $fraksi->slug])}}"
                        class="dropdown-item mt-3">{{$fraksi->nama}}</a>
                    @empty

                    @endforelse
                    @endif
                </div>
            </div>

            <div class="nav-item dropdown">
                <a href="#"
                    class="nav-link dropdown-toggle {{(request()->is('sekretariat/*')) ? 'text-secondary' : ''}}"
                    data-bs-toggle="dropdown">Sekretariat</a>
                <div class="dropdown-menu bg-light m-0">
                    <a href="{{route('tupoksiSekretariat')}}" class="dropdown-item mt-3">Tugas, Pokok, dan Fungsi</a>
                    {{-- <a href="{{route('visimisiSekretariat')}}" class="dropdown-item mt-3">Visi Misi</a> --}}
                    <a href="{{route('anggotaSekretariat')}}" class="dropdown-item mt-3">Pejabat Struktural</a>
                    <a href="{{route('strukturOrganisasiSekretariat')}}" class="dropdown-item mt-3">Struktur
                        Organisasi</a>

                </div>
            </div>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle {{(request()->is('profil/*')) ? 'text-secondar' : ''}}"
                    data-bs-toggle="dropdown">Informasi dan Pelayanan Publik</a>
                <div class="dropdown-menu bg-light m-0">
                    <a href="https://ppid.kapuashulukab.go.id/" class="dropdown-item">PPID Kapuas Hulu</a>
                    <a href="https://www.lapor.go.id/instansi/sekretariat-dprd-kabupaten-kapuas-hulu"
                        class="dropdown-item mt-3">E-LAPOR</a>
                    <a href="{{route('visiMisiBupati')}}" class="dropdown-item mt-3">Visi dan Misi Bupati</a>
                    <a href="{{route('mottoPelayanan')}}" class="dropdown-item mt-3">Motto dan Pelayanan</a>
                    <a href="https://id.scribd.com/document/512673124/Sk-Standar-Pelayanan"
                        class="dropdown-item mt-3">Alur Pelayanan Publik</a>
                    <a href="{{route('maklumatPelayanan')}}" class="dropdown-item mt-3">Maklumat Pelayanan</a>
                </div>
            </div>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle {{(request()->is('dokumen/*')) ? 'text-secondar' : ''}}"
                    data-bs-toggle="dropdown">Dokumen</a>
                <div class="dropdown-menu bg-light m-0">
                    <a href="https://dprd-kapuashulukab.jdihn.go.id/" class="dropdown-item">Produk Hukum</a>
                    <a href="http://ppid.kapuashulukab.go.id/front/dokumen/detail/300070430"
                        class="dropdown-item mt-3">Rencana Aksi</a>
                    <a href="https://id.scribd.com/document/512665672/7-Dokumentasi-Rapat-Internal-Ppid-Set-Dprd-2021"
                        class="dropdown-item mt-3">Dokumentasi</a>
                    <a href="http://ppid.kapuashulukab.go.id/front/dokumen/detail/300107328"
                        class="dropdown-item mt-3">RKA</a>
                    <a href="" class="dropdown-item mt-3">LHKPN DPRD</a>
                    <a href="http://ppid.kapuashulukab.go.id/front/dokumen/detail/300070422"
                        class="dropdown-item mt-3">IKU</a>
                    <a href="http://ppid.kapuashulukab.go.id/front/dokumen/detail/300101382"
                        class="dropdown-item mt-3">PERJANKIN</a>
                    <a href="http://ppid.kapuashulukab.go.id/front/dokumen/detail/300042897"
                        class="dropdown-item mt-3">RENSTRA</a>
                    <a href="http://ppid.kapuashulukab.go.id/front/dokumen/detail/300101379"
                        class="dropdown-item mt-3">Laporan Kinerja</a>
                    <a href="http://ppid.kapuashulukab.go.id/front/dokumen/detail/300107304"
                        class="dropdown-item mt-3">Asset</a>
                    <a href="http://ppid.kapuashulukab.go.id/front/dokumen/detail/300107284"
                        class="dropdown-item mt-3">Keuangan</a>





                </div>
            </div>

        </div>

    </div>
    {{-- <div class="border-start ps-4 d-none d-lg-block">
        <button type="button" class="btn btn-sm p-0"><i class="fa fa-search"></i></button>
    </div> --}}
    </div>
</nav>
<!-- Navbar End -->