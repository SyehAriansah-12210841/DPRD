@extends('template.base')
@section('title', 'Dokumen SOP')
@section('content')
<div class="container">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('home')}}">Beranda</a></li>
            <li class="breadcrumb-item"><a href="#">PPID</a></li>
            <li class="breadcrumb-item"><a class="{{(request()->is('ppid/*')) ? 'text-secondary' : ''}}"
                    href="{{route('formulirPermohonan')}}">Dokumen SOP</a></li>
        </ol>
    </nav>

    <div class="row">
        <div class="col">
            <h1 class="fs-3 mb-3">Dokumen</h1>
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama Dokumen</th>
                            <th scope="col">Jenis</th>
                            <th scope="col">Link Unduhan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>SOP Pengelolaan Permohonan Informasi</td>
                            <td>SOP PPID</td>
                            <td>
                                <a href="{{asset('/storage/documents/sop/12.-SOP-PENGELOLAAN-PERMOHONAN-INFORMASI.pdf')}}"
                                    class="btn btn-primary">Unduh</a>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>SOP Pengelolaan Keberatan Informasi</td>
                            <td>SOP PPID</td>
                            <td>
                                <a href="{{asset('/storage/documents/sop/13.-SOP-PENGELOLAAN-KEBERATAN-INFORMASI.pdf')}}"
                                    class="btn btn-primary">Unduh</a>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>SOP Penanganan Sengketa Informasi Publik</td>
                            <td>SOP PPID</td>
                            <td>
                                <a href="{{asset('/storage/documents/sop/14.-SOP-PENANGANAN-SENGKETA-INFORMASI-PUBLIK.pdf')}}"
                                    class="btn btn-primary">Unduh</a>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">4</th>
                            <td>SOP Pengelolaan Daftar Informasi Publik</td>
                            <td>SOP PPID</td>
                            <td>
                                <a href="{{asset('/storage/documents/sop/15.-SOP-PENGELOLAAN-DAFTAR-INFORMASI-PUBLIK.pdf')}}"
                                    class="btn btn-primary">Unduh</a>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">5</th>
                            <td>SOP Pengujian Konsekuensi IP</td>
                            <td>SOP PPID</td>
                            <td>
                                <a href="{{asset('/storage/documents/sop/16.-SOP-PENGUJIAN-KONSEKUENSI-IP.pdf')}}"
                                    class="btn btn-primary">Unduh</a>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">6</th>
                            <td>SOP Pendokumentasian Informasi Publik</td>
                            <td>SOP PPID</td>
                            <td>
                                <a href="{{asset('/storage/documents/sop/17.-SOP-PENDOKUMENTASIAN-INFORMASI-PUBLIK.pdf')}}"
                                    class="btn btn-primary">Unduh</a>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">7</th>
                            <td>SOP Pendokumentasian Informasi Yang Dikecualikan</td>
                            <td>SOP PPID</td>
                            <td>
                                <a href="{{asset('/storage/documents/sop/18.-SOP-PENDOKUMENTASIAN-INFORMASI-YG-DIKECUALIKAN.pdf')}}"
                                    class="btn btn-primary">Unduh</a>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">8</th>
                            <td>SOP Tata Cara Pengaduan Penyalahgunaan Wewenang</td>
                            <td>SOP PPID</td>
                            <td>
                                <a href="{{asset('/storage/documents/sop/18.-SOP-TATA-CARA-PENGADUAN-PENYALAHGUNAAN-WEWENANG.pdf')}}"
                                    class="btn btn-primary">Unduh</a>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">9</th>
                            <td>SOP LS Belanja Barang dan Jasa</td>
                            <td>SOP Pengelolaan Keuangan</td>
                            <td>
                                <a href="{{asset('/storage/documents/sop/28.-SOP-LS-BELANJA-BARANG-JASA.pdf')}}"
                                    class="btn btn-primary">Unduh</a>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">10</th>
                            <td>SOP Pembayaran Melalui UP</td>
                            <td>SOP Pengelolaan Keuangan</td>
                            <td>
                                <a href="{{asset('/storage/documents/sop/29.-SOP-PEMBAYARAN-MELALUI-UP.pdf')}}"
                                    class="btn btn-primary">Unduh</a>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">11</th>
                            <td>SOP Belanja Gaji DPRD dan Sekretariat DPRD</td>
                            <td>SOP Pengelolaan Keuangan</td>
                            <td>
                                {{-- <a href="{{asset('/storage/documents/sop/')}}" class="btn btn-primary">Unduh</a>
                                --}}
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">12</th>
                            <td>SOP Penyusuan DPA</td>
                            <td>SOP Pengelolaan Keuangan</td>
                            <td>
                                {{-- <a href="{{asset('/storage/documents/sop/')}}" class="btn btn-primary">Unduh</a>
                                --}}
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">13</th>
                            <td>SOP Penyusunan DPPA</td>
                            <td>SOP Pengelolaan Keuangan</td>
                            <td>
                                <a href="{{asset('/storage/documents/sop/39.-SOP-PENYUSUNAN-DPPA.pdf')}}"
                                    class="btn btn-primary">Unduh</a>
                            </td>
                        </tr>

                        <tr>
                            <th scope="row">14</th>
                            <td>SOP Penyesuaian Ijazah</td>
                            <td>SOP Pengelolaan Kepegawaian</td>
                            <td>
                                <a href="{{asset('/storage/documents/sop/3.-SOP-PENYESUAIAN-IJAZAH.pdf')}}"
                                    class="btn btn-primary">Unduh</a>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">15</th>
                            <td>SOP Kenaikan Pangkat</td>
                            <td>SOP Pengelolaan Kepegawaian</td>
                            <td>
                                <a href="{{asset('/storage/documents/sop/4.-SOP-KENAIKAN-PANGKAT.pdf')}}"
                                    class="btn btn-primary">Unduh</a>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">16</th>
                            <td>SOP Gaji Berkala</td>
                            <td>SOP Pengelolaan Kepegawaian</td>
                            <td>
                                <a href="{{asset('/storage/documents/sop/5.-SOP-GAJI-BERKALA.pdf')}}"
                                    class="btn btn-primary">Unduh</a>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">17</th>
                            <td>SOP Pengelolaan Absensi PNS</td>
                            <td>SOP Pengelolaan Kepegawaian</td>
                            <td>
                                <a href="{{asset('/storage/documents/sop/21.-SOP-PENGELOLAAN-ABSENSI-PNS.pdf')}}"
                                    class="btn btn-primary">Unduh</a>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">18</th>
                            <td>SOP Permohonan Cuti PNS</td>
                            <td>SOP Pengelolaan Kepegawaian</td>
                            <td>
                                <a href="{{asset('/storage/documents/sop/22.-SOP-PERMOHONAN-CUTI-PNS.pdf')}}"
                                    class="btn btn-primary">Unduh</a>
                            </td>
                        </tr>

                        <tr>
                            <th scope="row">19</th>
                            <td>SOP Surat Masuk</td>
                            <td>SOP Pengelolaan Administrasi</td>
                            <td>
                                <a href="{{asset('/storage/documents/sop/1.-SOP-SURAT-MASUK.pdf')}}"
                                    class="btn btn-primary">Unduh</a>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">20</th>
                            <td>SOP Surat Keluar</td>
                            <td>SOP Pengelolaan Administrasi</td>
                            <td>
                                <a href="{{asset('/storage/documents/sop/2.-SOP-SURAT-KELUAR.pdf')}}"
                                    class="btn btn-primary">Unduh</a>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">21</th>
                            <td>SOP Pengelolaan Naskah Dinas</td>
                            <td>SOP Pengelolaan Administrasi</td>
                            <td>
                                <a href="{{asset('/storage/documents/sop/19.-SOP-PENGELOLAAN-NASKAH-DINAS.pdf')}}"
                                    class="btn btn-primary">Unduh</a>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">22</th>
                            <td>SOP Penatausahaan Pimpinan DPRD</td>
                            <td>SOP Pengelolaan Administrasi</td>
                            <td>
                                <a href="{{asset('/storage/documents/sop/20.-SOP-PENATAUSAHAAN-PIMPINAN-DPRD.pdf')}}"
                                    class="btn btn-primary">Unduh</a>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">23</th>
                            <td>SOP Fas. Risalah Rapat</td>
                            <td>SOP Pengelolaan Administrasi</td>
                            <td>
                                <a href="{{asset('/storage/documents/sop/32.-SOP-FAS.-RISALAH-RAPAT.pdf')}}"
                                    class="btn btn-primary">Unduh</a>
                            </td>
                        </tr>

                        <tr>
                            <th scope="row">24</th>
                            <td>SOP Penyediaan Konsumsi Rapat</td>
                            <td>SOP Pengelolaan Organisasi</td>
                            <td>
                                <a href="{{asset('/storage/documents/sop/6.-SOP-PENYEDIAAN-KONSUMSI-RAPAT.pdf')}}"
                                    class="btn btn-primary">Unduh</a>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">25</th>
                            <td>SOP Pelayanan Pimpinan</td>
                            <td>SOP Pengelolaan Organisasi</td>
                            <td>
                                <a href="{{asset('/storage/documents/sop/7.-SOP-PELAYANAN-PIMPINAN.pdf')}}"
                                    class="btn btn-primary">Unduh</a>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">26</th>
                            <td>SOP Pelayanan Tamu DPRD</td>
                            <td>SOP Pengelolaan Organisasi</td>
                            <td>
                                <a href="{{asset('/storage/documents/sop/8.-SOP-PELAYANAN-TAMU-DPRD.pdf')}}"
                                    class="btn btn-primary">Unduh</a>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">27</th>
                            <td>SOP Pelayanan Tamu Publik</td>
                            <td>SOP Pengelolaan Organisasi</td>
                            <td>
                                <a href="{{asset('/storage/documents/sop/9.-SOP-PELAYANAN-TAMU-PUBLIK.pdf')}}"
                                    class="btn btn-primary">Unduh</a>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">28</th>
                            <td>SOP Pelayanan Rumah Tangga</td>
                            <td>SOP Pengelolaan Organisasi</td>
                            <td>
                                <a href="{{asset('/storage/documents/sop/10.-SOP-PELAYANAN-RUMAH-TANGGA.pdf')}}"
                                    class="btn btn-primary">Unduh</a>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">29</th>
                            <td>SOP Pengendialian SARPRAS Rapat</td>
                            <td>SOP Pengelolaan Organisasi</td>
                            <td>
                                <a href="{{asset('/storage/documents/sop/11.-SOP-PENGENDALIAN-SARPRAS-RAPAT.pdf')}}"
                                    class="btn btn-primary">Unduh</a>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">30</th>
                            <td>SOP Pemeliharaan Kendaraan Dinas</td>
                            <td>SOP Pengelolaan Organisasi</td>
                            <td>
                                <a href="{{asset('/storage/documents/sop/12.-SOP-PEMELIHARAAN-KENDARAAN-DINAS.pdf')}}"
                                    class="btn btn-primary">Unduh</a>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">31</th>
                            <td>SOP Pengadaan Barang Pakai Habis</td>
                            <td>SOP Pengelolaan Organisasi</td>
                            <td>
                                <a href="{{asset('/storage/documents/sop/13.-SOP-PENGADAAN-BARANG-PAKAI-HABIS.pdf')}}"
                                    class="btn btn-primary">Unduh</a>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">32</th>
                            <td>SOP Peminjaman Barang Inventaris</td>
                            <td>SOP Pengelolaan Organisasi</td>
                            <td>
                                <a href="{{asset('/storage/documents/sop/14.-SOP-PEMINJAMAN-BARANG-INVENTARIS.pdf')}}"
                                    class="btn btn-primary">Unduh</a>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">33</th>
                            <td>SOP Rancangan Produk Hukum</td>
                            <td>SOP Pengelolaan Organisasi</td>
                            <td>
                                <a href="{{asset('/storage/documents/sop/15.-SOP-FAS.-RANCANGAN-PRODUK-HUKUM.pdf')}}"
                                    class="btn btn-primary">Unduh</a>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">34</th>
                            <td>SOP FAS RAPERDA Usul Inisiatif</td>
                            <td>SOP Pengelolaan Organisasi</td>
                            <td>
                                <a href="{{asset('/storage/documents/sop/16.-SOP-FAS.-RAPERDA-USUL-INISIATIF.pdf')}}"
                                    class="btn btn-primary">Unduh</a>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">35</th>
                            <td>SOP FAS PROG PER PERDA</td>
                            <td>SOP Pengelolaan Organisasi</td>
                            <td>
                                <a href="{{asset('/storage/documents/sop/17.-SOP-FAS.-PROG-PER-PERDA.pdf')}}"
                                    class="btn btn-primary">Unduh</a>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">36</th>
                            <td>SOP FAS Pembahasan Rancangan PERDA</td>
                            <td>SOP Pengelolaan Organisasi</td>
                            <td>
                                <a href="{{asset('/storage/documents/sop/18.-SOP-FAS-PEMBAHASAN-RANC.-PERDA.pdf')}}"
                                    class="btn btn-primary">Unduh</a>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">37</th>
                            <td>SOP Penyajian Info Pada Etalase</td>
                            <td>SOP Pengelolaan Organisasi</td>
                            <td>
                                <a href="{{asset('/storage/documents/sop/23.-SOP-PENYAJIAN-INFO-PADA-ETALASE.pdf')}}"
                                    class="btn btn-primary">Unduh</a>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">38</th>
                            <td>SOP Kegiatan Peliputan</td>
                            <td>SOP Pengelolaan Organisasi</td>
                            <td>
                                <a href="{{asset('/storage/documents/sop/24.-SOP-KEGIATAN-PELIPUTAN.pdf')}}"
                                    class="btn btn-primary">Unduh</a>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">39</th>
                            <td>SOP Penambahan Subdomain Website</td>
                            <td>SOP Pengelolaan Organisasi</td>
                            <td>
                                <a href="{{asset('/storage/documents/sop/25.-SOP-PENAMBAHAN-SUB-DOMAIN-WEBSITE.pdf')}}"
                                    class="btn btn-primary">Unduh</a>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">40</th>
                            <td>SOP Update Konten Website</td>
                            <td>SOP Pengelolaan Organisasi</td>
                            <td>
                                <a href="{{asset('/storage/documents/sop/26.-SOP-UPDATE-KONTEN-WEBSITE.pdf')}}"
                                    class="btn btn-primary">Unduh</a>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">41</th>
                            <td>SOP Upload Berita Website</td>
                            <td>SOP Pengelolaan Organisasi</td>
                            <td>
                                <a href="{{asset('/storage/documents/sop/27.-SOP-UPLOAD-BERITA-WEBSITE.pdf')}}"
                                    class="btn btn-primary">Unduh</a>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">42</th>
                            <td>SOP FAS Rancangan Jadwal BANMUS</td>
                            <td>SOP Pengelolaan Organisasi</td>
                            <td>
                                <a href="{{asset('/storage/documents/sop/31.-SOP-FAS.-RANCANGAN-JADWAL-BANMUS.pdf')}}"
                                    class="btn btn-primary">Unduh</a>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">43</th>
                            <td>SOP FAS Rapat AKD</td>
                            <td>SOP Pengelolaan Organisasi</td>
                            <td>
                                <a href="{{asset('/storage/documents/sop/33.-SOP-FAS.-RAPAT-AKD.pdf')}}"
                                    class="btn btn-primary">Unduh</a>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">44</th>
                            <td>SOP FAS Rapat Rapat</td>
                            <td>SOP Pengelolaan Organisasi</td>
                            <td>
                                <a href="{{asset('/storage/documents/sop/34.-SOP-FAS.-RAPAT-RAPAT.pdf')}}"
                                    class="btn btn-primary">Unduh</a>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">45</th>
                            <td>SOP Pelaksanaan Reses DPRD</td>
                            <td>SOP Pengelolaan Organisasi</td>
                            <td>
                                <a href="{{asset('/storage/documents/sop/35.-SOP-PELAKSANAAN-RESES-DPRD.pdf')}}"
                                    class="btn btn-primary">Unduh</a>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">46</th>
                            <td>SOP Penyusunan RESTRA</td>
                            <td>SOP Pengelolaan Organisasi</td>
                            <td>
                                <a href="{{asset('/storage/documents/sop/36.-SOP-PENYUSUNAN-RENSTRA.pdf')}}"
                                    class="btn btn-primary">Unduh</a>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">47</th>
                            <td>SOP Penyusunan RENJA</td>
                            <td>SOP Pengelolaan Organisasi</td>
                            <td>
                                <a href="{{asset('/storage/documents/sop/37.-SOP-PENYUSUNAN-RENJA.pdf')}}"
                                    class="btn btn-primary">Unduh</a>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">48</th>
                            <td>SOP Penyusunan Perjanjian Kinerja</td>
                            <td>SOP Pengelolaan Organisasi</td>
                            <td>
                                <a href="{{asset('/storage/documents/sop/40.-SOP-PENYUSUNAN-PERJANJIAN-KINERJA.pdf')}}"
                                    class="btn btn-primary">Unduh</a>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">49</th>
                            <td>SOP Penyusunan LAKIP</td>
                            <td>SOP Pengelolaan Organisasi</td>
                            <td>
                                <a href="{{asset('/storage/documents/sop/41.-SOP-PENYUSUNAN-LAKIP.pdf')}}"
                                    class="btn btn-primary">Unduh</a>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">50</th>
                            <td>SOP Pemeliharaan dan Perawatan Aset</td>
                            <td>SOP Pengelolaan Organisasi</td>
                            <td>
                                <a href="{{asset('/storage/documents/sop/42.-SOP-PEMELIHARAAN-DAN-PERAWATAN-ASET.pdf')}}"
                                    class="btn btn-primary">Unduh</a>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">51</th>
                            <td>SOP Pengadaan Barang Inventaris</td>
                            <td>SOP Pengelolaan Organisasi</td>
                            <td>
                                <a href="{{asset('/storage/documents/sop/43.-SOP-PENGADAAN-BARANG-INVENTARIS.pdf')}}"
                                    class="btn btn-primary">Unduh</a>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">52</th>
                            <td>SOP Aduan Aspirasi Masyarakat</td>
                            <td>SOP Pengelolaan Organisasi</td>
                            <td>
                                <a href="{{asset('/storage/documents/sop/44.-SOP-ADUAN-ASPIRASI-MASYARAKAT.pdf')}}"
                                    class="btn btn-primary">Unduh</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

</div>

@endsection