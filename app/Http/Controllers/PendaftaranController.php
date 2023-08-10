<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Pendaftaran;
use App\Models\User;

class PendaftaranController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        // $pendaftaran = pendaftaran::all();

        $query = pendaftaran::query();
        $query->orderBy('id');
        $pendaftaran = $query->paginate(10);

        return view('pendaftaran/pendaftaran', compact('user','pendaftaran'));
    }

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
        $pendaftaran -> jk = $req->get('jk');
        $pendaftaran -> agama = $req->get('agama');
        $pendaftaran -> no_hp = $req->get('no_hp');
        $pendaftaran -> alamat = $req->get('alamat');
        $pendaftaran -> nama_ayah = $req->get('nama_ayah');
        $pendaftaran -> pekerjaan_ayah = $req->get('pekerjaan_ayah');
        $pendaftaran -> nama_ibu = $req->get('nama_ibu');
        $pendaftaran -> pekerjaan_ibu = $req->get('pekerjaan_ibu');

        if($req->hasFile('foto_kk')){
            $extension = $req->file('foto_kk')->extension();
            $filename = 'fotoKK_'.time().'.'.$extension;
            $req->file('foto_kk')->storeAs('public/foto_KK_pendaftaran', $filename);

            $pendaftaran->foto_kk =  $filename;
        }

        $pendaftaran -> status =$req->get('status');
        $pendaftaran -> by_email =$req->get('byemail');
        
        $pendaftaran->save();

        // $notification =array(
        //     'message'=> 'Data registrasi berhasil ditambahkan', 
        //     'alert-type' =>'success'
        // );

        return redirect()-> route('home');
        // return redirect()-> route('home')->with ($notification);
    }

    public function getData($id){
        $pendaftaran = pendaftaran::find($id);
        
        return response()->json($pendaftaran);
    }

    public function update_pendaftaran(Request $req){
        $pendaftaran = pendaftaran::find($req->get('id'));
        // dd($pendaftaran);
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

        $pendaftaran -> nama_lengkap = $req->get('nama_lengkap');
        $pendaftaran -> tempat = $req->get('tempat');
        $pendaftaran -> tanggal = $req->get('tanggal');
        $pendaftaran -> jk = $req->get('jk');
        $pendaftaran -> agama = $req->get('agama');
        $pendaftaran -> no_hp = $req->get('no_hp');
        $pendaftaran -> alamat = $req->get('alamat');
        $pendaftaran -> nama_ayah = $req->get('nama_ayah');
        $pendaftaran -> pekerjaan_ayah = $req->get('pekerjaan_ayah');
        $pendaftaran -> nama_ibu = $req->get('nama_ibu');
        $pendaftaran -> pekerjaan_ibu = $req->get('pekerjaan_ibu');

        if($req->hasFile('foto_kk')){
            $extension = $req->file('foto_kk')->extension();
            $filename = 'fotoKK_'.time().'.'.$extension;
            $req->file('foto_kk')->storeAs('public/foto_KK_pendaftaran', $filename);

            
            $pendaftaran->foto_kk =  $filename;
        }
        
        $pendaftaran->save();

        return redirect()-> route('home');
    }
    
    public function status_pendaftaran(Request $req){
        $pendaftaran = pendaftaran::find($req->get('id'));

        $validate =$req->validate([
            'status' =>'required',
        ]);

        $pendaftaran->status = $req->get('status');

        $pendaftaran->save();

        return redirect()->route('admin.pendaftaran');
    }

}
