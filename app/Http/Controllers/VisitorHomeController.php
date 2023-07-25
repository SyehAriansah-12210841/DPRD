<?php

namespace App\Http\Controllers;

use App\Models\Anggota;

class VisitorHomeController extends Controller
{
    public function home()
    {
        $ketua = Anggota::where('jabatan', 'like', '%ketua%')->first();
        $wakil = Anggota::where('jabatan', 'like', '%wakil%')->get();

        return view('visitor.home', compact('ketua', 'wakil'));
    }

    public function sejarah(){
        return view('visitor.sejarah');
    }
    public function kedudukan(){
        return view('visitor.kedudukan');
    }public function pimpinan(){
        $ketua = Anggota::where('jabatan', 'like', '%ketua%')->first();
        $wakil = Anggota::where('jabatan', 'like', '%wakil%')->get();
        return view('visitor.pimpinan', compact('ketua', 'wakil'));
    }public function tataTertib(){
        return view('visitor.tataTertib');
    }
    public function komisi(){
        return view('visitor.komisi');
    }
    public function BadanMusyawarah(){
        return view('visitor.BadanMusyawarah');
    }
    public function BadanAnggaran(){
        return view('visitor.BadanAnggaran');
    }
    public function BadanPembentukanPerda(){
        return view('visitor.BadanPembentukanPerda');
    }
    public function BadanKehormatan(){
        return view('visitor.BadanKehormatan');
    }
}

