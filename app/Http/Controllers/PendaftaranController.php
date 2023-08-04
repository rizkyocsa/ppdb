<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Pendaftaran;

class PendaftaranController extends Controller
{
    public function form_pendaftaran(){
        $user = Auth::user();
        $pendaftaran = pendaftaran::all();
        return view('pendaftaran/create', compact('user', 'pendaftaran'));
    }

    public function submit_pendaftaran(Request $req){

        $validate =$req->validate([
            'nama_lengkap' =>'required',
            'tempat' =>'required',
            'tanggal' =>'required',
            'jk' =>'required',
            'agama' =>'required',
            'no_hp' =>'required',
            'alamat' =>'required',
            'status' =>'required',
            'byemail' =>'required',
        ]);

        $pendaftaran = new pendaftaran;
        $pendaftaran -> nama_lengkap = $req->get('nama_lengkap');
        $pendaftaran -> tempat = $req->get('tempat');
        $pendaftaran -> tanggal = $req->get('tanggal');
        // $pendaftaran -> tanggal = date('Y-m-d');
        $pendaftaran -> jk = $req->get('jk');
        $pendaftaran -> agama = $req->get('agama');
        $pendaftaran -> no_hp = $req->get('no_hp');
        $pendaftaran -> alamat = $req->get('alamat');
        $pendaftaran -> nama_ayah = $req->get('nama_ayah');
        $pendaftaran -> pekerjaan_ayah = $req->get('pekerjaan_ayah');
        $pendaftaran -> nama_ibu = $req->get('nama_ibu');
        $pendaftaran -> pekerjaan_ibu = $req->get('pekerjaan_ibu');

        $pendaftaran -> status =$req->get('status');
        $pendaftaran -> by_email =$req->get('byemail');
        
        // dd($pendaftaran);
        $pendaftaran->save();

        // $notification =array(
        //     'message'=> 'Data registrasi berhasil ditambahkan', 
        //     'alert-type' =>'success'
        // );

        return redirect()-> route('home');
        // return redirect()-> route('home')->with ($notification);
    }


}
