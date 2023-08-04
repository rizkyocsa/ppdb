<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
// use App\Models\Registrasi;
use App\Models\Pendaftaran;

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
        $pendaftaran = pendaftaran::all();
        return view('home', compact('user','pendaftaran'));
    }
}
