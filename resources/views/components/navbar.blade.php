<!-- Navbar Start -->
<nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top px-4 px-lg-2">
    <a href="/" class="navbar-brand d-flex align-items-center">
        {{-- <h1 class="m-0">DPRD <span class="fs-5">Jawa Barat</span></h1> --}}
        <img src="{{asset('/img/logo.png')}}" style="height: 3rem" alt="DPRD kapuas hulu logo">
    </a>
    <button type="button" class="navbar-toggler me-0" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto p-4 p-lg-0">
            <a href="{{route('home')}}"
                class="nav-item nav-link {{(request()->is('/')) ? 'text-secondary' : ''}}">Beranda</a>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle {{(request()->is('profil/*')) ? 'text-secondary' : ''}}"
                    data-bs-toggle="dropdown">Profil</a>
                <div class="dropdown-menu bg-light m-0">
                    <a href="{{route('sejarah')}}" class="dropdown-item">Sejarah DPRD</a>
                    <a href="{{route('kedudukan')}}" class="dropdown-item mt-3">Kedudukan, Tugas Pokok, Hak &
                        Kewajiban</a>
                    <a href="{{route('pimpinan')}}" class="dropdown-item mt-3">Pimpinan DPRD</a>
                    <a href="{{route('all')}}" class="dropdown-item mt-3">Profil Anggota DPRD</a>
                    <a href="{{route('tataTertib')}}" class="dropdown-item mt-3">Tata Tertib DPRD</a>



                </div>
            </div>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle {{(request()->is('profil/*')) ? 'text-secondar' : ''}}"
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
                <a href="#" class="nav-link dropdown-toggle {{(request()->is('profil/*')) ? 'text-secondar' : ''}}"
                    data-bs-toggle="dropdown">Sekretariat</a>
                <div class="dropdown-menu bg-light m-0">
                    <a href="{{route('sejarahSekretariat')}}" class="dropdown-item">Sejarah Lembaga</a>
                    <a href="{{route('tupoksiSekretariat')}}" class="dropdown-item mt-3">Tugas, Pokok, dan Fungsi</a>
                    <a href="{{route('visimisiSekretariat')}}" class="dropdown-item mt-3">Visi Misi</a>
                    <a href="{{route('strukturOrganisasiSekretariat')}}" class="dropdown-item mt-3">Struktur
                        Organisasi</a>
                    <a href="{{route('anggotaSekretariat')}}" class="dropdown-item mt-3">Pejabat Struktural</a>
                </div>
            </div>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle {{(request()->is('profil/*')) ? 'text-secondar' : ''}}"
                    data-bs-toggle="dropdown">Informasi Publik</a>
                <div class="dropdown-menu bg-light m-0">
                    <a href="{{route('sejarah')}}" class="dropdown-item">Agenda</a>
                    <a href="{{route('kedudukan')}}" class="dropdown-item mt-3"></a>
                </div>
            </div>
            {{-- <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle {{(request()->is('profil/*')) ? 'text-secondar' : ''}}"
                    data-bs-toggle="dropdown">PPID</a>
                <div class="dropdown-menu bg-light m-0">
                    <a href="{{route('sejarah')}}" class="dropdown-item">Sejarah DPRD</a>
                    <a href="{{route('kedudukan')}}" class="dropdown-item mt-3">Kedudukan, Tugas Pokok, Hak &
                        Kewajiban</a>
                    <a href="{{route('pimpinan')}}" class="dropdown-item mt-3">Pimpinan DPRD</a>
                    <a href="{{route('all')}}" class="dropdown-item mt-3">Profil Anggota DPRD</a>
                    <a href="{{route('tataTertib')}}" class="dropdown-item mt-3">Tata Tertib DPRD</a>
                </div>
            </div> --}}
            <a href="/berita" class="nav-item nav-link">Berita</a>
            <a href="/berita" class="nav-item nav-link">JDIH</a>
        </div>

    </div>
    <div class="border-start ps-4 d-none d-lg-block">
        <button type="button" class="btn btn-sm p-0"><i class="fa fa-search"></i></button>
    </div>
    </div>
</nav>
<!-- Navbar End -->