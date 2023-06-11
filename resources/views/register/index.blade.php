{{-- Start Load template dari file layout/index --}}

@extends('layout.indexlogin') 

{{-- End Load template dari file layout/index --}}

{{-- Mengisi section isi_konten di tempalte layout.index--}}
@section('isi_konten')
<link href="{{asset('assets/css/register.css')}}" rel="stylesheet">
<div class="login-form">
      <h3 class="text-center">Register</h3>
      <form action="{{ route('action.register') }}" method="POST">
        @csrf
        <div class="row">
            <div class="col-md-6">
              <label for="username">Fullname:</label>
              <input type="text" name="username" id="username" class="form-control" required>
            </div>

            <div class="col-md-6">
              <label for="gender">Gender:</label>
              <select class="form-select" name="gender" id="gender" aria-label="Default select example" required>
                <option disabled selected hidden>Please select gender</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
              </select>
            </div>

            <div class="col-md-6">
              <label for="profession">Profession:</label>
              <input type="text" name="profession" id="profession" class="form-control" required>
            </div>

            <div class="col-md-6">
              <label for="date">Date of Birth:</label>
              <input type="date" name="date" id="date" class="form-control" required>
            </div>

            <div class="col-md-6">
              <label for="address">Address:</label>
              <input type="text" name="address" id="address" class="form-control" required>
            </div>

            <div class="col-md-6">
              <label for="province">Province:</label>
              <select class="form-select" name="province" id="province" aria-label="Default select example" onchange="loadDataRegencies()" required>
                <option disabled selected hidden>Please select provinces</option>
                @foreach($provinsi as $item)
                  <option value="{{ $item->id }}">{{ $item->name }}</option>
                @endforeach
              </select>
            </div>

            <div class="col-md-6">
              <label for="institusi">Institusi:</label>
              <input type="text" name="institusi" id="institusi" class="form-control" required>
            </div>

            <div class="col-md-6">
              <label for="city">City:</label>
              <select class="form-select" name="city" id="city" aria-label="Default select example" required>
                <option disabled selected hidden>Please select city</option>
              </select>
            </div>            

            <div class="col-md-12">
              <label for="email">Email:</label>
              <input type="email" name="email" id="email" class="form-control" required>
            </div>

            <div class="col-md-12">
            <label for="password">Password:</label>
            <input type="password" name="password" id="password" class="form-control" required>
            </div>

            <div class="col-md-12">
              <label for="confirm_password">Konfirmasi Password:</label>
              <input type="password" name="confirm_password" id="confirm_password" class="form-control" required>
            </div>

            <div class="col-md-12 text-center">
              <br>
              <button type="submit" class="btn btn-danger">Register Account</button>
            </div>
            <br>
            <div class="col-md-12 text-center">
              <br>
              <label>Have account ?</label>
              <a href="{{url('/login')}}" target="nama_frame">Login</a>
            </div>
        </div>
    
      </form>
    </div>

    @include('register.jsFunction')

{{-- End Mengisi section isi_konten di tempalte layout.index--}}

@endsection