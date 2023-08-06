<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illmuinate\Support\Facades\Storage;

use App\Models\Post;

class PostController extends Controller
{
    public function guru()
    {
        $user = Auth::user();

        $query = post::query();
        $query->where('kategori', 'guru');
        $query->orderBy('id');
        $guru = $query->paginate(10);

        return view('post/guru', compact('user','guru'));
    }
}
