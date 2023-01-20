<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function Mahasiswa(){
        $user = Auth::user();
        $mahasiswa = mahasiswa::all();
        return view('mahasiswa', compact('user', 'mahasiswa'));
    }

    public function submit_mahasiswa(Request $req){
        $validate = $req->validate([
            'NPM' => 'required',
            'nama' => 'required', 
            'kelas' => 'required',
            'angkatan' => 'required',
            'prodi' => 'required',
        ]);
        $mahasiswa = new mahasiswa;
        $mahasiswa->NPM = $req->get('NPM');
        $mahasiswa->nama = $req->get('nama');
        $mahasiswa->kelas = $req->get('kelas');
        $mahasiswa->angkatan = $req->get('angkatan');
        $mahasiswa->prodi = $req->get('prodi');

        $mahasiswa->save();

        $notification = array(
            'message' => 'Data Mahasiswa Berhasil Ditambahkan',
            'alert-type' => 'success'
        );

        return redirect()->route('admin.mahasiswa')->with($notification);
    }

    public function update_mahasiswa(Request $req){
        
        $mahasiswa = mahasiswa::find($req->get('id'));

        $validate = $req->validate([
        'NPM' => 'required',
        'nama' => 'required', 
        'kelas' => 'required',
        'angkatan' => 'required',
        'prodi' => 'required',
        ]);
        
        $mahasiswa = new mahasiswa;
        
        $mahasiswa->NPM = $req->get('NPM');
        $mahasiswa->nama = $req->get('nama');
        $mahasiswa->kelas = $req->get('kelas');
        $mahasiswa->angkatan = $req->get('angkatan');
        $mahasiswa->prodi = $req->get('prodi');

        $mahasiswa->save();

        $notification = array(
            'message' => 'Data Mahasiswa Berhasil Diubah',
            'alert-type' => 'success'
        );

        return redirect()->route('admin.mahasiswa')->with($notification);
    }

    public function delete_mahasiswa($id){
        
        $mahasiswa = mahasiswa::find($id);
        
        $mahasiswa->delete();

        $success = true;
        $message = "Data Mahasiswa Berhasil Dihapus";

        return response()->json([
            'success' => '$success',
            'message' => '$message',
        ]);
    }
}
