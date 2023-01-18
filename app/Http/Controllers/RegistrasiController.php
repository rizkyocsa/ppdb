<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistrasiController extends Controller
{
    public function registrasi(){
        $user = Auth::user();
        $registrasi =Registrasi::all();
        return view('registrasi', compact('user', 'registrasi'));
    }
    public function submit_registrasi(Request $req){
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
            'message'=> 'Data registrasi berhasil ditambahkan', 
            'alert-type' =>'success'
        );
        return redirect()-> route('admin.registrasi')->with ($notification);
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

