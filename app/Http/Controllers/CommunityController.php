<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MasterCategory;
use App\Models\Community;
use Auth;

class CommunityController extends Controller
{
    /** Fungsi untuk memuat index halaman community */
    public function index(){
        /** Mengambil data master category untuk select input buat komunitas */
        $kategori = MasterCategory::get();
        $data = [
            'kategori' => $kategori
        ];

        return view('community.index', $data);
    }

    public function simpanKomunitas(Request $request)
    {
        $user = Community::create([
            'name' => $request->post('nama-komunitas'),
            'description'    => $request->post('deskripsi'),
            'category' => $request->post('kategori'),
            'location' => $request->post('alamat'),
            'website'   => $request->post('website'),
            'telp'  => $request->post('telpon'),
            'email' => $request->post('email'),
            'user_id'   => Auth::user()->user_id
        ]);
       
        return response()->json(200);
    }
}
