<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="description" content="">
        <meta name="author" content="">

        <title>Volunteer</title>

        <!-- CSS FILES -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

        <link href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@100;300;400;600;700&display=swap" rel="stylesheet">

        <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">

        <link href="{{asset('assets/css/bootstrap-icons.css')}}" rel="stylesheet">

        <link href="{{asset('assets/css/owl.carousel.min.css')}}" rel="stylesheet">

        <link href="{{asset('assets/css/owl.theme.default.min.css')}}" rel="stylesheet">

        <link href="{{asset('assets/css/tooplate-gotto-job.css')}}" rel="stylesheet">
        
<!--

Tooplate 2134 Gotto Job

https://www.tooplate.com/view/2134-gotto-job

Bootstrap 5 HTML CSS Template

-->
    </head>
    
    <body id="top">

        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand d-flex align-items-center" href="index.html">
                    <img src="{{asset('assets/images/logo.png')}}" class="img-fluid logo-image">

                    <div class="d-flex flex-column">
                        <strong class="logo-text">Volunteer</strong>
                        <small class="logo-slogan">Online Job Portal</small>
                    </div>
                </a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav align-items-center ms-lg-5">
                        <li class="nav-item">
                            <a class="nav-link active" href="{{url('/')}}">Beranda</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{url('/about')}}">Tentang</a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarLightDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">Pages</a>

                            <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="navbarLightDropdownMenuLink">
                                <li><a class="dropdown-item" href="{{url('/job-listings')}}">Daftar Pekerjaan</a></li>

                                <li><a class="dropdown-item" href="{{url('/job-details')}}">Rincian pekerjaan</a></li>
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{url('/contact')}}">Kontak</a>
                        </li>

                        <li class="nav-item ms-lg-auto">
                            <a class="nav-link" href="{{url('/register')}}">Pendaftaran</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link custom-btn btn" href="{{url('/login')}}">Masuk</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <main>
            @yield('isi_konten')
        </main>

        <!-- JAVASCRIPT FILES -->
        <script src="{{asset('assets/js/jquery.min.js')}}"></script>
        <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
        <script src="{{asset('assets/js/counter.js')}}"></script>
        <script src="{{asset('assets/js/custom.js')}}"></script>

    </body>
</html>