<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;

class HeheController extends Controller
{
    public function index(Request $request)
    {
       //$request->query('id')
       //$request->input('id')

       //$hasil = Mahasiswa::find('3022110704');
       //return $hasil->id;
        //return view('hehe', ['id' => 10]);

       // $mhs = new Mahasiswa;
       // $mhs->id = '302211000';
       // $mhs->save();
        $all_mahasiswa = Mahasiswa::get();
        return view(
            'daftar',
            ['all_mahasiswa' => $all_mahasiswa]
            );
    }


    public function show($id){
        $mhs = Mahasiswa::findOrfail($id);
        return view ('hehe', ['mhs' => $mhs]);
    }
}
