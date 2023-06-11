<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Provinces;
use App\Models\Regencies;

class IndexController extends Controller
{
    /** Fungsi untuk memuat tampilan awal web */
    public function index(){
        return view('index.index');
    }

    //fungsi untuk memuat tampilan halaman about
    public function about(){
        return view('about.index'); 
    }

     //fungsi untuk memuat tampilan halaman contact
    public function contact(){
        return view('contact.index'); 
    }

    //fungsi untuk memuat tampilan halaman job-listings
    public function job_listings(){
        return view('job-listings.index'); 
    }

    //fungsi untuk memuat tampilan halaman job-details
    public function job_details(){
        return view('job-details.index'); 
    }

     //fungsi untuk memuat tampilan halaman login
    public function login(){
        return view('login.index'); 
    }

    //fungsi untuk memuat tampilan halaman register
     public function register(){

        /** Mengambil data dari tabel province **/
        $provinsi = Provinces::select('*')->get();
        $data = ['provinsi' => $provinsi];
        
        return view('register.index')->with($data); 
    }

    //fungsi untuk memuat data kota berdasarkan provinsi yang dipilih
    public function getDataRegencies(Request $request){
        $province_id = $request->province_id;

        /** Mengambil data dari tabel regencies **/
        $regencies = Regencies::select('*')
                    ->where('province_id', $province_id)
                    ->get();
        
        return response()->json($regencies); 
    }
}