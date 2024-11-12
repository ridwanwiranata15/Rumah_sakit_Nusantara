<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function post_register(Request $request){
       User::create([
        'name' => $request->nama,
        'email' => $request->email,
        'password' => Hash::make($request->password),
       ]);
       Admin::create([
        'nama_lengkap' => $request->nama,
        'nomor_telepon' => $request->telepon,
        'role' => 'admin',
        'status' => 'aktif'
       ]);
       return redirect()->back();
    }
    public function post_login(Request $request){
        if(Auth::attempt([
            'email' => $request->email,
            'password' => $request->password
        ])){
           return redirect()->route('admin.dokter');
        }else{
            return redirect()->back();
        }
    }
    public function logout(){
        Auth::logout();
        return redirect()->route('login');
    }
}
