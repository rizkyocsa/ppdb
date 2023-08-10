<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\User;
use App\Models\Pendaftaran;
use App\Models\Role;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $user = Auth::user();
        // $pendaftaran = pendaftaran::all();

        $query = User::query();
        //  dd($query);
        $query->where('roles_id', 3);
        $query->orderBy('id');
        // dd($query);
        $users = $query->paginate(10);
        // dd($users);
        return view('user', compact('user','users'));
    }

    public function getData($id){
        // $user = user::role($id);
        $data = user::get()->where('id', 3);
        // $users = user::all();
        
        return response()->json($data);
    }

    public function update(Request $req){
        // $user = user::find($req->get('name'));
        // $user = user::get()->where('name', ($req->get('name')));

        // dd($user);  
        // dd($req->get('name'));  
        
        $validate =$req->validate([
            'name' =>'required',
            'email' =>'required',
        ]);

        $user -> name = $req->get('name');
        $user -> email = $req->get('email');

        $user->save();

        return redirect()-> route('admin.user');
    }
}
