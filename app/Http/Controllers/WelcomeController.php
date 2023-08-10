<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
class WelcomeController extends Controller
{
    public function index()
    {
        $pengumuman = Post::all()->first();

        return view('welcome', compact('pengumuman'));
    }
}
