<!-- Navbar Start -->
<nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top px-4 px-lg-5">
    <a href="/" class="navbar-brand d-flex align-items-center">
        {{-- <h1 class="m-0">DPRD <span class="fs-5">Jawa Barat</span></h1> --}}
        <img src="{{asset('/img/logo.png')}}" style="height: 3rem" alt="DPRD kapuas hulu logo">
    </a>
    <button type="button" class="navbar-toggler me-0" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto p-4 p-lg-0">
            <a href="{{route('home')}}" class="nav-item nav-link {{(request()->is('/')) ? 'text-secondary' : ''}}">Beranda</a>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle {{(request()->is('profil/*')) ? 'text-secondary' : ''}}" data-bs-toggle="dropdown">Profil DPRD</a>
                <div class="dropdown-menu bg-light m-0">
                    <a href="{{route('sejarah')}}" class="dropdown-item">Sejarah DPRD</a>
                    <a href="{{route('kedudukan')}}" class="dropdown-item mt-3">Kedudukan, Tugas Pokok, Hak & Kewajiban</a>
                    <a href="{{route('pimpinan')}}" class="dropdown-item mt-3">Pimpinan DPRD</a>
                    <a href="{{route('all')}}" class="dropdown-item mt-3">Profil Anggota DPRD</a>
                    <a href="{{route('tataTertib')}}" class="dropdown-item mt-3">Tata Tertib DPRD</a>



                </div>
            </div>
            <a href="/berita" class="nav-item nav-link">Berita</a> 
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle {{(request()->is('profil/*')) ? 'text-secondar' : ''}}" data-bs-toggle="dropdown">AKD</a>
                <div class="dropdown-menu bg-light m-0">
                    <a href="{{route('komisi')}}" class="dropdown-item">Komisi</a>
                    <a href="{{route('BadanMusyawarah')}}" class="dropdown-item mt-3">BadanMusyawarah</a>
                    <a href="{{route('BadanAnggaran')}}" class="dropdown-item mt-3">BadanAnggaran</a>
                    <a href="{{route('BadanPembentukanPerda')}}" class="dropdown-item mt-3">BadanPembentukanPerda</a>
                    <a href="{{route('BadanKehormatan')}}" class="dropdown-item mt-3">BadanKehormatan</a>
                </div>
            </div>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle {{(request()->is('profil/*')) ? 'text-secondar' : ''}}" data-bs-toggle="dropdown">Fraksi</a>
                <div class="dropdown-menu bg-light m-0">
                    <a href="{{route('sejarah')}}" class="dropdown-item">Sejarah DPRD</a>
                    <a href="{{route('kedudukan')}}" class="dropdown-item mt-3">Kedudukan, Tugas Pokok, Hak & Kewajiban</a>
                    <a href="{{route('pimpinan')}}" class="dropdown-item mt-3">Pimpinan DPRD</a>
                    <a href="{{route('all')}}" class="dropdown-item mt-3">Profil Anggota DPRD</a>
                    <a href="{{route('tataTertib')}}" class="dropdown-item mt-3">Tata Tertib DPRD</a>
                </div>
            </div>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle {{(request()->is('profil/*')) ? 'text-secondar' : ''}}" data-bs-toggle="dropdown">sekretariat</a>
                <div class="dropdown-menu bg-light m-0">
                    <a href="{{route('sejarah')}}" class="dropdown-item">Sejarah DPRD</a>
                    <a href="{{route('kedudukan')}}" class="dropdown-item mt-3">Kedudukan, Tugas Pokok, Hak & Kewajiban</a>
                    <a href="{{route('pimpinan')}}" class="dropdown-item mt-3">Pimpinan DPRD</a>
                    <a href="{{route('all')}}" class="dropdown-item mt-3">Profil Anggota DPRD</a>
                    <a href="{{route('tataTertib')}}" class="dropdown-item mt-3">Tata Tertib DPRD</a>
                </div>
            </div>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle {{(request()->is('profil/*')) ? 'text-secondar' : ''}}" data-bs-toggle="dropdown">Informasi Publik</a>
                <div class="dropdown-menu bg-light m-0">
                    <a href="{{route('sejarah')}}" class="dropdown-item">Sejarah DPRD</a>
                    <a href="{{route('kedudukan')}}" class="dropdown-item mt-3">Kedudukan, Tugas Pokok, Hak & Kewajiban</a>
                    <a href="{{route('pimpinan')}}" class="dropdown-item mt-3">Pimpinan DPRD</a>
                    <a href="{{route('all')}}" class="dropdown-item mt-3">Profil Anggota DPRD</a>
                    <a href="{{route('tataTertib')}}" class="dropdown-item mt-3">Tata Tertib DPRD</a>
                </div>
            </div>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle {{(request()->is('profil/*')) ? 'text-secondar' : ''}}" data-bs-toggle="dropdown">PPID</a>
                <div class="dropdown-menu bg-light m-0">
                    <a href="{{route('sejarah')}}" class="dropdown-item">Sejarah DPRD</a>
                    <a href="{{route('kedudukan')}}" class="dropdown-item mt-3">Kedudukan, Tugas Pokok, Hak & Kewajiban</a>
                    <a href="{{route('pimpinan')}}" class="dropdown-item mt-3">Pimpinan DPRD</a>
                    <a href="{{route('all')}}" class="dropdown-item mt-3">Profil Anggota DPRD</a>
                    <a href="{{route('tataTertib')}}" class="dropdown-item mt-3">Tata Tertib DPRD</a>
                </div>
            </div>
            <a href="/berita" class="nav-item nav-link">JDIH</a>
        </div>
            
        </div>
        <div class="border-start ps-4 d-none d-lg-block">
            <button type="button" class="btn btn-sm p-0"><i class="fa fa-search"></i></button>
        </div>
    </div>
</nav>
<!-- Navbar End -->