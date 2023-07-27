<?php

namespace App\Http\Controllers;

use App\Models\Anggota;
use App\Models\Sekretariat;
use App\Models\Fraksi;
use Illuminate\Contracts\Database\Eloquent\Builder;

class VisitorHomeController extends Controller
{
    public function home()
    {
        $ketua = Anggota::where('jabatan', 'like', '%ketua%')->first();
        $wakil = Anggota::where('jabatan', 'like', '%wakil%')->get();
        return view('visitor.home', compact('ketua', 'wakil'));
    }

    public function sejarah()
    {
        return view('visitor.sejarah');
    }
    public function kedudukan()
    {
        return view('visitor.kedudukan');
    }
    public function pimpinan()
    {
        $ketua = Anggota::where('jabatan', 'like', '%ketua%')->first();
        $wakil = Anggota::where('jabatan', 'like', '%wakil%')->get();
        return view('visitor.pimpinan', compact('ketua', 'wakil'));
    }
    public function tataTertib()
    {
        return view('visitor.tataTertib');
    }
    public function komisi()
    {
        return view('visitor.komisi');
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
}
