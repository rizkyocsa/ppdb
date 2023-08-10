<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
// use App\Models\Registrasi;
use App\Models\Pendaftaran;
use App\Models\Post;

class HomeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $user = Auth::user();
        // $registrasi = Registrasi::all();
        // $guru = Post::all()->where('kategori', 'guru');
        $daftar = Pendaftaran::all()->count();
        $users = User::all()->count();
        $lulus = User::all()->where('status', 'lulus')->count();
        $pendaftaran = pendaftaran::all();
        return view('home', compact('user', 'pendaftaran', 'users', 'daftar', 'lulus'));
    }
}
