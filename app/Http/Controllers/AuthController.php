<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register(){
        return view ('register');
    }
    public function end(){
        
        return view ('welcome');
    }
    public function end_post(request $request){
        // dd($request->all());
        $nama = $request['nama'];
       $belakang = $request['belakang'];
    //    return  $nama;

        return view ('welcome', compact('nama','belakang'));
        
        
    }
}
