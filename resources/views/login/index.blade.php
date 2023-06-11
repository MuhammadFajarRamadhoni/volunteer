{{-- Start Load template dari file layout/index --}}

@extends('layout.indexlogin') 

{{-- End Load template dari file layout/index --}}

{{-- Mengisi section isi_konten di tempalte layout.index--}}
@section('isi_konten')
<link href="{{asset('assets/css/login.css')}}" rel="stylesheet">
<div class="login-form">
      <h3>Login</h3>
      @if(session('error'))
      <div class="alert alert-danger">
          <b>Opps!</b> {{session('error')}}
      </div>
      @endif
      <form action="{{ route('actionlogin') }}" method="post">
        @csrf
            <div class="col-md-12">
                <label>Email</label>
                <input type="email" name="email" class="form-control" placeholder="Email" required="">
            </div>
            
            <div class="col-md-12">
                <label>Password</label>
                <input type="password" name="password" class="form-control" placeholder="Password" required="">
            </div>
            <br>
            <button type="submit" class="btn btn-danger">Log In</button>
            <div class="col-md-12 text-center">
              
              <label>Punya akun?</label>
              <a href="{{url('/register')}}" target="nama_frame">Register</a>
            </div>

        </form>
    
      </form>
    </div>
{{-- End Mengisi section isi_konten di tempalte layout.index--}}

@endsection