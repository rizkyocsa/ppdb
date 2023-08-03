<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illmuinate\Support\Facades\Storage;
use App\Models\Registrasi;
use App\Models\Mahasiswa;
use PDF;

class RegistrasiController extends Controller
{
    public function index(){
        $user = Auth::user();
        $registrasi = Registrasi::all();
        $total = Registrasi::all()->count();
        return view('registrasi/registrasi', compact('user', 'registrasi','total'));
    }

    public function form_registrasi(){
        $user = Auth::user();
        $registrasi = Registrasi::all();
        return view('registrasi/create', compact('user', 'registrasi'));
    }

    public function submit_registrasi(Request $req){

        $validate =$req->validate([
            'name' =>'required',
            'asal_sekolah' =>'required',
            'minat_jurusan' =>'required',
            'nilaiUN' =>'required',
            'photo' =>'required',
            'status' =>'required',
            'byemail' =>'required',
        ]);

        $registrasi = new registrasi;
        $registrasi -> name =$req->get('name');
        $registrasi -> asal_sekolah =$req->get('asal_sekolah');
        $registrasi -> minat_jurusan =$req->get('minat_jurusan');

        if($req->hasFile('nilaiUN')){
            $extension = $req->file('nilaiUN')->extension();
            $filename = 'nilaiUN_'.time().'.'.$extension;
            $req->file('nilaiUN')->storeAs('public/nilaiUN_regisrasi', $filename);

            $registrasi->nilaiUN =  $filename;
        }

        if($req->hasFile('photo')){
            $extension = $req->file('photo')->extension();
            $filename = 'photo_'.time().'.'.$extension;
            $req->file('photo')->storeAs('public/photo', $filename);

            $registrasi->photo =  $filename;
        }

        $registrasi -> status =$req->get('status');
        $registrasi -> byemail =$req->get('byemail');

        $registrasi->save();

        // $notification =array(
        //     'message'=> 'Data registrasi berhasil ditambahkan', 
        //     'alert-type' =>'success'
        // );

        return redirect()-> route('home');
        // return redirect()-> route('home')->with ($notification);
    }
    
    public function getData($id){
        $registrasi = Registrasi::find($id);

        return response()->json($registrasi);
    }

    public function lolos_registrasi(Request $req){
        $registrasi = Registrasi::find($req->get('id'));

        $validate =$req->validate([
            'status' =>'required',
        ]);

        $registrasi->status = $req->get('status');

        $registrasi->save();

        $validate =$req->validate([
            'NPM' =>'required',
            'name' =>'required',
            'byemail' =>'required',
        ]);

        $mahasiswa = new Mahasiswa;
        $mahasiswa->NPM  = $req->get('name');
        $mahasiswa->name  = $req->get('name');
        $mahasiswa->byemail  = $req->get('byemail');
        $mahasiswa->save();

        return redirect()->route('admin.registrasi');
    }

    public function update_registrasi(Request $req){
        $registrasi= Registrasi::find($req->get('id'));

        $validate =$req->validate([
            'nama_depan' =>'required',
            'nama_belakang' =>'required',
            'alamat' =>'required',
            'tanggal_lahir' =>'required',
        ]);
    
        $registrasi = new registrasi;
        $registrasi -> nama_depan =$req->get('nama_depan');
        $registrasi -> nama_belakang =$req->get('nama_belakang');
        $registrasi -> alamat =$req->get('alamat');
        $registrasi -> tanggal_lahir =$req->get('tanggal_lahir');

        $registrasi->save();

        $notification =array(
        'message'=> 'Data registrasi berhasil diubah', 
        'alert-type' =>'success'
    );
    return redirect()-> route('admin.registrasi')->with ($notification);
   }

   public function delete_registrasi($id){
    $registrasi= Registrasi::find($id);

    $registrasi->delete();
    $success = true;
    $message ="Data buku berhasil dihapus";

    return response()->json([
        'success'=>$success,
        'registrasi'=> $message,
    ]);
}
}

