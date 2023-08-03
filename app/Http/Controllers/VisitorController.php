<?php

namespace App\Http\Controllers;

use App\Models\Anggota;
use App\Models\Sekretariat;
use App\Models\Fraksi;
use Illuminate\Contracts\Database\Eloquent\Builder;
use Illuminate\Support\Str;

class VisitorController extends Controller
{
    // Halaman Statis
    public function komisi()
    {
        return view('visitor.static.komisi');
    }
    public function tupoksiSekretariat()
    {
        return view('visitor.static.tupoksiSekretariat');
    }
    public function strukturOrganisasiSekretariat()
    {
        return view('visitor.static.strukturOrganisasiSekretariat');
    }
    // informasi
    public function visiMisiBupati()
    {
        return view('visitor.static.visiMisiBupati');
    }
    public function mottoPelayanan()
    {
        return view('visitor.static.mottoPelayanan');
    }
    public function maklumatPelayanan()
    {
        return view('visitor.static.maklumatPelayanan');
    }

    // ppid
    public function profilSingkatPpid()
    {
        return view('visitor.static.profilSingkatPpid');
    }
    public function skppid()
    {
        return view('visitor.static.skppid');
    }
    public function visiMisi()
    {
        return view('visitor.static.visiMisi');
    }
    public function tugasFungsiPpid()
    {
        return view('visitor.static.tugasFungsiPpid');
    }
    public function standarPelayanan()
    {
        return view('visitor.static.standarPelayanan');
    }
    public function strukturOrganisasi()
    {
        return view('visitor.static.strukturOrganisasi');
    }
    public function jadwalPelayanan()
    {
        return view('visitor.static.jadwalPelayanan');
    }
    public function maklumatPelayananPpid()
    {
        return view('visitor.static.maklumatPelayanan');
    }
    public function kumpulanPeraturanKeterbukaanInformasi()
    {
        return view('visitor.static.kumpulanPeraturanKeterbukaanInformasi');
    }
    public function dokumenSop()
    {
        return view('visitor.static.dokumenSop');
    }
    public function formulirPermohonan()
    {
        return view('visitor.static.formulirPermohonan');
    }
    public function daftarInformasiPublik()
    {
        return view('visitor.static.daftarInformasiPublik');
    }
    public function formulirPermohonanOnline()
    {
        return view('visitor.static.formulirPermohonanOnline');
    }

    // Halaman Dinamis
    public function home()
    {
        $ketua = Anggota::where('jabatan', 'like', '%ketua%')->first();
        $wakil = Anggota::where('jabatan', 'like', '%wakil%')->get();
        return view('visitor.home', compact('ketua', 'wakil'));
    }
    public function pimpinan()
    {
        $ketua = Anggota::where('jabatan', 'like', '%ketua%')->first();
        $wakil = Anggota::where('jabatan', 'like', '%wakil%')->get();
        return view('visitor.pimpinan', compact('ketua', 'wakil'));
    }
    public function badanMusyawarah()
    {
        $title = 'Badan Musyawarah';
        $jabatAnggota = Anggota::where('badan_akd', 'like', '%musyawarah%')->where('jabatan_akd', 'like', '%anggota%')->get();
        $ketua = Anggota::where('badan_akd', 'like', '%musyawarah%')->where('jabatan_akd', 'like', '%ketua%')->first();
        $subAnggota = Anggota::where('badan_akd', 'like', '%musyawarah%')->where(function (Builder $query) {
            $query->where('jabatan_akd', 'like', '%sekretaris%')->orWhere('jabatan_akd', 'like', '%bendahara%')->orWhere('jabatan_akd', 'like', '%wakil%');
        })->get();
        return view('visitor.akd', compact('jabatAnggota', 'subAnggota', 'ketua', 'title'));
    }
    public function badanAnggaran()
    {
        $title = 'Badan Anggaran';
        $jabatAnggota = Anggota::where('badan_akd', 'like', '%anggaran%')->where('jabatan_akd', 'like', '%anggota%')->get();
        $ketua = Anggota::where('badan_akd', 'like', '%anggaran%')->where('jabatan_akd', 'like', '%ketua%')->first();
        $subAnggota = Anggota::where('badan_akd', 'like', '%anggaran%')->where(function (Builder $query) {
            $query->where('jabatan_akd', 'like', '%sekretaris%')->orWhere('jabatan_akd', 'like', '%bendahara%')->orWhere('jabatan_akd', 'like', '%wakil%');
        })->get();
        return view('visitor.akd', compact('jabatAnggota', 'subAnggota', 'ketua', 'title'));
    }
    public function badanPembentukanPerda()
    {
        $title = 'Badan Pembentukan Perda';
        $jabatAnggota = Anggota::where('badan_akd', 'like', '%pembentukan perda%')->where('jabatan_akd', 'like', '%anggota%')->get();
        $ketua = Anggota::where('badan_akd', 'like', '%pembentukan perda%')->where('jabatan_akd', 'like', '%ketua%')->first();
        $subAnggota = Anggota::where('badan_akd', 'like', '%pembentukan perda%')->where(function (Builder $query) {
            $query->where('jabatan_akd', 'like', '%sekretaris%')->orWhere('jabatan_akd', 'like', '%bendahara%')->orWhere('jabatan_akd', 'like', '%wakil%');
        })->get();
        return view('visitor.akd', compact('jabatAnggota', 'subAnggota', 'ketua', 'title'));
    }
    public function badanKehormatan()
    {
        $title = 'Badan Kehormatan';
        $jabatAnggota = Anggota::where('badan_akd', 'like', '%kehormatan%')->where('jabatan_akd', 'like', '%anggota%')->get();
        $ketua = Anggota::where('badan_akd', 'like', '%kehormatan%')->where('jabatan_akd', 'like', '%ketua%')->first();
        $subAnggota = Anggota::where('badan_akd', 'like', '%kehormatan%')->where(function (Builder $query) {
            $query->where('jabatan_akd', 'like', '%sekretaris%')->orWhere('jabatan_akd', 'like', '%bendahara%')->orWhere('jabatan_akd', 'like', '%wakil%');
        })->get();
        return view('visitor.akd', compact('jabatAnggota', 'subAnggota', 'ketua', 'title'));
    }
    public function fraksiDetail(Fraksi $fraksi)
    {
        $jabatAnggota = $fraksi->anggota()->where('jabatan_fraksi', 'like', '%anggota%')->get();
        $ketua = $fraksi->anggota()->where('jabatan_fraksi', 'like', '%ketua%')->first();
        $subAnggota = $fraksi->anggota()->where('jabatan_fraksi', 'like', '%wakil%')->orWhere('jabatan_fraksi', 'like', '%sekretaris%')->orWhere('jabatan_fraksi', 'like', '%bendahara%')->get();
        return view('visitor.fraksiDetail', compact('fraksi', 'jabatAnggota', 'subAnggota', 'ketua'));
    }

    public function anggotaSekretariat()
    {
        $sekretaris = Sekretariat::where('jabatan', 'like', '%sekretaris%')->first();
        $subAnggota = Sekretariat::where('jabatan', 'not like', '%sekretaris%')->get();
        return view('visitor.anggotaSekretariat', compact('subAnggota', 'sekretaris'));
    }
    public function sekretariatDetail($id)
    {
        $sekretariat = Sekretariat::find($id);
        return view('visitor.sekretariatDetail', compact('sekretariat'));
    }
    public function komisiDetail($komisi)
    {
        $anggota = Anggota::where('komisi', 'like', '%' . Str::replace('-', ' ', $komisi) . '%')->where('jabatan_komisi', 'like', '%anggota%')->get();
        $ketua = Anggota::where('komisi', 'like', '%' . Str::replace('-', ' ', $komisi) . '%')->where('jabatan_komisi', 'like', '%ketua%')->first();
        $subAnggota = Anggota::where('komisi', 'like', '%' . Str::replace('-', ' ', $komisi) . '%')->where(function (Builder $query) {
            $query->where('jabatan_komisi', 'like', '%sekretaris%')->orWhere('jabatan_komisi', 'like', '%wakil%');
        })->get();
        return view('visitor.komisiDetail', compact('anggota', 'ketua', 'subAnggota'));
    }
}
