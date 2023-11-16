<?php

namespace App\Http\Controllers;

use App\Models\pembayaran;
use App\Models\petugas;
use App\Models\siswa;
use Illuminate\Http\Request;

class Admincontroller extends Controller
{
    public function dashboard(){
        return view('admin.dashboard');
    }
    public function adminlogin(){
        return view('admin.login');
    }
    public function cekadminlogin(Request $request){
        $p = new petugas();
        if($p->where('username',$request->input('username'))->where('password',$request->input('password')) ->exists()){
         $petugas = $p->first();
            session(['petugas'=>$petugas]);
         return redirect('/');
        }
        return back()->with('pesan','username dan password belum terdaftar kakak');
    } 
    public function datasiswa(){
        $m = new siswa();
        return view('admin.datasiswa',['data'=>$m->all()]);
    }
    public function cekDatasiswa(Request $request){
        $m = new Siswa();
        $cek = $request->validate([
            'nisn'=>'required|max:16',
            'nis'=>'unique',
            'nama'=>'required|min:5',
            'id_kelas'=>'unique',
            'alamat'=>'unique',
            'no_telp'=>'unique',
            'id_spp'=>'unique'
        ]);
        $m->create($request->all());
        return back();
    }
    public function datapetugas(){
        return view('admin.datapetugas');
    }

    public function transaksi(){
        return view('admin.transaksi');
    }

    public function datakelas(){
        return view('admin.datakelas');
    }

    public function dataspp(){
        return view('admin.dataspp');
    }

    public function histori(){
        $m = new Siswa();
        return view('admin.histori',['data'=>$m->all()]);
    }
    public function cekhistoriAdmin(Request $request){
        $m = new pembayaran();
        $cek = $request->validate([
            'id_petugas'=>'required',
            'nisn'=>'unique',
            'tgl_bayar'=>'unique',
            'bulan_dibayar'=>'unique',
            'tahun_dibayar'=>'unique',
            'id_spp'=>'unique',
            'jumlah_bayar'=>'unique'
        ]);
        $m->create($request->all());
        return back();
    }
}
