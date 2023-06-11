<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use Session;
use App\Mail\MailSend;
use App\Models\Provinces;
use App\Models\User;

class RegisterController extends Controller
{
    public function register()
    {
        $provinsi=Provinces::get();
        return view('register.index',['provinsi'=>$provinsi]); 

    }
    
    public function actionregister(Request $request)
    {
        /** Menyimpan data user berdasarkan form register */
        $password = $request->post('password');
        $hashed_password = Hash::make($password);

        $user = User::create([
            'full_name' => $request->post('username'),
            'gender'    => $request->post('gender'),
            'profession' => $request->post('profession'),
            'date_birth' => $request->post('date'),
            'address'   => $request->post('date'),
            'province'  => $request->post('province'),
            'institusi' => $request->post('institusi'),
            'city'      => $request->post('city'),
            'e_mail'    => $request->post('email'),
            'password'  => $hashed_password
        ]);
        Session::put('register', 'success');
        return redirect('login');

        /*
        $str = Str::random(100);

        $user = User::create([
            'email' => $request->email,
            'username' => $request->username,
            'password' => Hash::make($request->password),
            'role' => $request->role,
            'verify_key' => $str
        ]);

        $details = [
            'username' => $request->username,
            'role' => $request->role,
            'website' => 'www.ayongoding.com',
            'datetime' => date('Y-m-d H:i:s'),
            'url' => request()->getHttpHost().'/register/verify/'.$str
        ];

        Mail::to($request->email)->send(new MailSend($details));

        Session::flash('message', 'Link verifikasi telah dikrim ke Email Anda. Silahkan Cek Email Anda untuk Mengaktifkan Akun');
        return redirect('register');
        */
    }
    
    public function verify($verify_key)
    {
        $keyCheck = User::select('verify_key')
                    ->where('verify_key', $verify_key)
                    ->exists();
        
        if ($keyCheck) {
            $user = User::where('verify_key', $verify_key)
            ->update([
                'active' => 1
            ]);
            
            return "Verifikasi Berhasil. Akun Anda sudah aktif.";
        }else{
            return "Key tidak valid!";
        }
    }
}