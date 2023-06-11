{{-- Start Load template dari file layout/index --}}

@extends('layout.index') 

{{-- End Load template dari file layout/index --}}

{{-- Mengisi section isi_konten di tempalte layout.index--}}
@section('isi_konten')

<section class="hero-section d-flex justify-content-center align-items-center">
    <div class="section-overlay"></div>

    <div class="container">
        <div class="row">

            <div class="col-lg-6 col-12 mb-5 mb-lg-0">
                <div class="hero-section-text mt-5">
                    <h1 class="hero-title text-white mt-4 mb-4">Hello <br> {{Auth::user()->full_name}} !</h1>
                    
                    <h6 class="text-white">Apakah Anda mencari komunitas impian Anda?</h6>

                    <h1 class="hero-title text-white mt-4 mb-4">Platform Daring. <br> Portal Komunitas Terbaik</h1>

                    <a href="#categories-section" class="custom-btn custom-border-btn btn">Telusuri Kategori</a>
                </div>
            </div>

            <div class="col-lg-6 col-12">
                <form class="custom-form hero-form" action="#" method="get" role="form">
                    <h3 class="text-white mb-3">Cari Komunitas impian Anda Temukan Komunitas</h3>

                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="input-group">
                                <span class="input-group-text" id="basic-addon1"><i class="bi-person custom-icon"></i></span>

                                <input type="text" name="job-title" id="job-title" class="form-control" placeholder="Categories" required>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="input-group">
                                <span class="input-group-text" id="basic-addon2"><i class="bi-geo-alt custom-icon"></i></span>

                                <input type="text" name="job-location" id="job-location" class="form-control" placeholder="Location" required>
                            </div>
                        </div>

                        <div class="col-lg-12 col-12">
                            <button type="submit" class="form-control">
                                Mencari Komunitas
                            </button>
                        </div>

                        <div class="col-12">
                            <div class="d-flex flex-wrap align-items-center mt-4 mt-lg-0">
                                <span class="text-white mb-lg-0 mb-md-0 me-2">Kata kunci populer:</span>

                                <div>
                                    <a href="job-listings.html" class="badge">Pendidikan</a>

                                    <a href="job-listings.html" class="badge">Sosial</a>

                                    <a href="job-listings.html" class="badge">Ekonomi</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>
</section>


<section class="categories-section section-padding" id="categories-section">
    <div class="container">
        <div class="row justify-content-center align-items-center">

            <div class="col-lg-12 col-12 text-center">
                <h2 class="mb-5">Telusuri menurut <span>Kategori</span></h2>
            </div>

            <div class="col-lg-2 col-md-4 col-6">
                <div class="categories-block">
                    <a href="#" class="d-flex flex-column justify-content-center align-items-center h-100">
                        <i class="categories-icon bi-book"></i>
                    
                        <small class="categories-block-title">Pendidikan</small>

                        <div class="categories-block-number d-flex flex-column justify-content-center align-items-center">
                            <span class="categories-block-number-text">320</span>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-lg-2 col-md-4 col-6">
                <div class="categories-block">
                    <a href="#" class="d-flex flex-column justify-content-center align-items-center h-100">
                        <i class="categories-icon bi-file-earmark-medical"></i>
                    
                        <small class="categories-block-title">Kesehatan</small>

                        <div class="categories-block-number d-flex flex-column justify-content-center align-items-center">
                            <span class="categories-block-number-text">180</span>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-lg-2 col-md-4 col-6">
                <div class="categories-block">
                    <a href="#" class="d-flex flex-column justify-content-center align-items-center h-100">
                        <i class="categories-icon bi-tree"></i>
                    
                        <small class="categories-block-title">Lingkugan</small>

                        <div class="categories-block-number d-flex flex-column justify-content-center align-items-center">
                            <span class="categories-block-number-text">340</span>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-lg-2 col-md-4 col-6">
                <div class="categories-block">
                    <a href="#" class="d-flex flex-column justify-content-center align-items-center h-100">
                        <i class="categories-icon bi-people"></i>
                    
                        <small class="categories-block-title">Sosial</small>

                        <div class="categories-block-number d-flex flex-column justify-content-center align-items-center">
                            <span class="categories-block-number-text">140</span>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-lg-2 col-md-4 col-6">
                <div class="categories-block">
                    <a href="#" class="d-flex flex-column justify-content-center align-items-center h-100">
                        <i class="categories-icon bi-currency-dollar"></i>
                    
                        <small class="categories-block-title">Ekonomi</small>

                        <div class="categories-block-number d-flex flex-column justify-content-center align-items-center">
                            <span class="categories-block-number-text">84</span>
                        </div>
                    </a>
                </div>
            </div>

        </div>
    </div>
</section>


<section class="about-section">
    <div class="container">
        <div class="row">

            <div class="col-lg-3 col-12">
                <div class="about-image-wrap custom-border-radius-start">
                    <img src="{{asset('assets/images/professional-asian-businesswoman-gray-blazer.jpg')}}" class="about-image custom-border-radius-start img-fluid" alt="">

                    <div class="about-info">
                        <h4 class="text-white mb-0 me-2">Wacana Team</h4>

                        <p class="text-white mb-0">Web designer</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-12">
                <div class="custom-text-block">
                    <h2 class="text-white mb-2">Perkenalan</h2>

                    <p class="text-white">Volunteer Community adalah sebuah situs yang bertujuan untuk mempertemukan para relawan dengan organisasi atau komunitas yang membutuhkan bantuan.

                        Melalui Komunitas Relawan, relawan dapat mengetahui informasi tentang organisasi atau komunitas yang membutuhkan bantuan, serta mengakses informasi tentang kegiatan relawan yang tersedia.</p>

                    <div class="custom-border-btn-wrap d-flex align-items-center mt-5">
                        <a href="about.html" class="custom-btn custom-border-btn btn me-4">Kenali kami</a>

                        <a href="#job-section" class="custom-link smoothscroll">Jelajahi Komunitas</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-12">
                <div class="instagram-block">
                    <img src="{{asset('assets/images/horizontal-shot-happy-mixed-race-females.jpg')}}" class="about-image custom-border-radius-end img-fluid" alt="">

                    <div class="instagram-block-text">
                        <a href="https://instagram.com/" class="custom-btn btn">
                            <i class="bi-instagram"></i>
                            @Gotto
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>


<section class="job-section job-featured-section section-padding" id="job-section">
    <div class="container">
        <div class="row">

            <div class="col-lg-6 col-12 text-center mx-auto mb-4">
                <h2>Rekomendasi Untuk Anda</h2>
            </div>

            <div class="col-lg-12 col-12">
                <div class="job-thumb d-flex">
                    <div class="job-image-wrap bg-white shadow-lg">
                        <img src="{{asset('assets/images/logos/google.png')}}" class="job-image img-fluid" alt="">
                    </div>

                    <div class="job-body d-flex flex-wrap flex-auto align-items-center ms-4">
                        <div class="mb-3">
                            <h4 class="job-title mb-lg-0">
                                <a href="job-details.html" class="job-title-link">Biru Voice 2023</a>
                            </h4>

                            <div class="d-flex flex-wrap align-items-center">
                                <p class="job-location mb-0">
                                    <i class="custom-icon bi-geo-alt me-1"></i>
                                    DKI Jakarta
                                </p>

                                <p class="job-date mb-0">
                                    <i class="custom-icon bi-clock me-1"></i>
                                    3 Bulan
                                </p>
                                <p class="job-price mb-0">
                                    <i class="custom-icon bi-bank me-1"></i>
                                    Pendidikan
                                </p>
                                <p class="job-price mb-0">
                                    <i class="custom-icon bi-calendar me-1"></i>
                                    Tanggal : 28 Juni 2023
                                </p>
                                </div>
                            </div>
                        </div>

                        <div class="job-section-btn-wrap">
                            <a href="job-details.html" class="custom-btn btn">Apply now</a>
                        </div>
                    </div>
                </div>

                <div class="job-thumb d-flex">
                    <div class="job-image-wrap bg-white shadow-lg">
                        <img src="{{asset('assets/images/logos/apple.png')}}" class="job-image img-fluid" alt="">
                    </div>

                    <div class="job-body d-flex flex-wrap flex-auto align-items-center ms-4">
                        <div class="mb-3">
                            <h4 class="job-title mb-lg-0">
                                <a href="job-details.html" class="job-title-link">Layanan Kesehatan Lansia</a>
                            </h4>

                            <div class="d-flex flex-wrap align-items-center">
                                <p class="job-location mb-0">
                                    <i class="custom-icon bi-geo-alt me-1"></i>
                                    Banyuwangi, Jawa Timur
                                </p>

                                <p class="job-date mb-0">
                                    <i class="custom-icon bi-clock me-1"></i>
                                    3 Bulan
                                </p>
                                <p class="job-price mb-0">
                                    <i class="custom-icon bi-bank me-1"></i>
                                    Kesehatan
                                </p>
                                <p class="job-price mb-0">
                                    <i class="custom-icon bi-calendar me-1"></i>
                                    Tanggal : 15 Juli 2023
                                </p>
                                </div>
                            </div>
                        </div>

                        <div class="job-section-btn-wrap">
                            <a href="job-details.html" class="custom-btn btn">Apply now</a>
                        </div>
                    </div>
                </div>

                <div class="job-thumb d-flex">
                    <div class="job-image-wrap bg-white shadow-lg">
                        <img src="{{asset('assets/images/logos/meta.png')}}" class="job-image img-fluid" alt="">
                    </div>

                    <div class="job-body d-flex flex-wrap flex-auto align-items-center ms-4">
                        <div class="mb-3">
                            <h4 class="job-title mb-lg-0">
                                <a href="job-details.html" class="job-title-link">Belajar Mengajar</a>
                            </h4>

                            <div class="d-flex flex-wrap align-items-center">
                                <p class="job-location mb-0">
                                    <i class="custom-icon bi-geo-alt me-1"></i>
                                    Depok, Jawa Barat
                                </p>

                                <p class="job-date mb-0">
                                    <i class="custom-icon bi-clock me-1"></i>
                                    3 Bulan
                                </p>
                                <p class="job-price mb-0">
                                    <i class="custom-icon bi-bank me-1"></i>
                                    Lingkungan

                                </p>
                                <p class="job-price mb-0">
                                    <i class="custom-icon bi-calendar me-1"></i>
                                    Tanggal : 30 Juli 2023
                                </p>
                                </div>
                            </div>
                        </div>

                        <div class="job-section-btn-wrap">
                            <a href="job-details.html" class="custom-btn btn">Apply now</a>
                        </div>
                    </div>
                </div>

                <div class="job-thumb d-flex">
                    <div class="job-image-wrap bg-white shadow-lg">
                        <img src="{{asset('assets/images/logos/slack.png')}}" class="job-image img-fluid" alt="">
                    </div>

                    <div class="job-body d-flex flex-wrap flex-auto align-items-center ms-4">
                        <div class="mb-3">
                            <h4 class="job-title mb-lg-0">
                                <a href="job-details.html" class="job-title-link">Pengabdi Pelosok Negeri</a>
                            </h4>

                            <div class="d-flex flex-wrap align-items-center">
                                <p class="job-location mb-0">
                                    <i class="custom-icon bi-geo-alt me-1"></i>
                                    Sumbawa, NTT
                                </p>

                                <p class="job-date mb-0">
                                    <i class="custom-icon bi-clock me-1"></i>
                                    3 Bulan
                                </p>
                                <p class="job-price mb-0">
                                    <i class="custom-icon bi-bank me-1"></i>
                                    Sosial
                                </p>
                                <p class="job-price mb-0">
                                    <i class="custom-icon bi-calendar me-1"></i>
                                    Tanggal : 03 Agustus 2023
                                </p>
                                </div>
                            </div>
                        </div>

                        <div class="job-section-btn-wrap">
                            <a href="job-details.html" class="custom-btn btn">Apply now</a>
                        </div>
                    </div>
                </div>

                <div class="job-thumb d-flex">
                    <div class="job-image-wrap bg-white shadow-lg">
                        <img src="{{asset('assets/images/logos/creative-market.png')}}" class="job-image img-fluid" alt="">
                    </div>

                    <div class="job-body d-flex flex-wrap flex-auto align-items-center ms-4">
                        <div class="mb-3">
                            <h4 class="job-title mb-lg-0">
                                <a href="job-details.html" class="job-title-link">Gardana Desa</a>
                            </h4>

                            <div class="d-flex flex-wrap align-items-center">
                                <p class="job-location mb-0">
                                    <i class="custom-icon bi-geo-alt me-1"></i>
                                    Madura, Jawa Timur
                                </p>

                                <p class="job-date mb-0">
                                    <i class="custom-icon bi-clock me-1"></i>
                                    3 bulan
                                </p>
                                <p class="job-price mb-0">
                                    <i class="custom-icon bi-bank me-1"></i>
                                    Ekonomi
                                </p>
                                <p class="job-price mb-0">
                                    <i class="custom-icon bi-calendar me-1"></i>
                                    Tanggal : 08 Agustus 2023
                                </p>
                                </div>
                            </div>
                        </div>

                        <div class="job-section-btn-wrap">
                            <a href="job-details.html" class="custom-btn btn">Apply now</a>
                        </div>
                    </div>
                </div>

                <nav aria-label="Page navigation example">
                    <ul class="pagination justify-content-center mt-5">
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Previous">
                                <span aria-hidden="true">Sebelumnya</span>
                            </a>
                        </li>

                        <li class="page-item active" aria-current="page">
                            <a class="page-link" href="#">1</a>
                        </li>
                        
                        <li class="page-item">
                            <a class="page-link" href="#">2</a>
                        </li>
                        
                        <li class="page-item">
                            <a class="page-link" href="#">3</a>
                        </li>

                        <li class="page-item">
                            <a class="page-link" href="#">4</a>
                        </li>

                        <li class="page-item">
                            <a class="page-link" href="#">5</a>
                        </li>
                        
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Next">
                                <span aria-hidden="true">Selanjutnya</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>

        </div>
    </div>
</section>


<section>
    <div class="container">
        <div class="row">

            <div class="col-lg-6 col-12">
                <div class="custom-text-block custom-border-radius-start">
                    <h2 class="text-white mb-3">Komunitas Relawan membantu Anda lebih mudah
                        bagaimana mendapatkan tempat dalam program pengabdian masyarakat.</h2>

                    <p class="text-white">Semakin banyak relawan, semakin besar dampaknya. Ada ratusan aktivitas yang dapat Anda ikuti untuk membuat perubahan besar.</p>

                    <div class="d-flex mt-4">
                        <div class="counter-thumb"> 
                            <div class="d-flex">
                                <span class="counter-number" data-from="1" data-to="12" data-speed="1000"></span>
                                <span class="counter-number-text">M</span>
                            </div>

                            <span class="counter-text">Pengguna aktif harian</span>
                        </div> 

                        <div class="counter-thumb">    
                            <div class="d-flex">
                                <span class="counter-number" data-from="1" data-to="450" data-speed="1000"></span>
                                <span class="counter-number-text">k</span>
                            </div>

                            <span class="counter-text">Membuka komunitas</span>
                        </div> 
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-12">
                <div class="video-thumb">
                    <img src="{{asset('assets/images/people-working-as-team-company.jpg')}}" class="about-image custom-border-radius-end img-fluid" alt="">

                    <div class="video-info">
                        <a href="https://www.youtube.com/tooplate" class="youtube-icon bi-youtube"></a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>


<section class="job-section recent-jobs-section section-padding">
    <div class="container">
        <div class="row align-items-center">

            <div class="col-lg-6 col-12 mb-4">
                <h2>Pekerjaan Terbaru</h2>

                <p><strong>Lebih dari 10rb membuka lowongan</strong> Lorem Ipsum dolor sit amet, consectetur adipsicing kengan omeg kohm tokito adipcingi elit eismuod larehai</p>
            </div>

            <div class="clearfix"></div>

            <div class="col-lg-4 col-md-6 col-12">
                <div class="job-thumb job-thumb-box">
                    <div class="job-image-box-wrap">
                        <a href="job-details.html">
                            <img src="{{asset('assets/images/jobs/it-professional-works-startup-project.jpg')}}" class="job-image img-fluid" alt="">
                        </a>

                        <div class="job-image-box-wrap-info d-flex align-items-center">
                            
                        </div>
                    </div>

                    <div class="job-body">
                        <h4 class="job-title">
                            <a href="job-details.html" class="job-title-link">Belajar Mengajar</a>
                        </h4>

                        <div class="d-flex align-items-center">
                            <div class="job-image-wrap d-flex align-items-center bg-white shadow-lg mt-2 mb-4">
                                <img src="{{asset('assets/images/logos/ngajarbarengid.png')}}" class="job-image me-3 img-fluid" alt="">

                                <p class="mb-0">Ibadah&nbsp;Dalam&nbsp;Karya</p>
                            </div>

                            <a href="#" class="bi-bookmark ms-auto me-2">
                            </a>

                            <a href="#" class="bi-heart">
                            </a>
                        </div>

                        <div class="d-flex align-items-center">
                            <p class="job-location">
                                <i class="custom-icon bi-geo-alt me-1"></i>
                                Depok, Jawa Barat
                            </p>

                            <p class="job-date">
                                <i class="custom-icon bi-clock me-1"></i>
                                3 Bulan
                            </p>
                        </div>

                        <div class="d-flex align-items-center border-top pt-3">
                            <a href="job-details.html" class="custom-btn btn ms-auto">Apply now</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-12">
                <div class="job-thumb job-thumb-box">
                    <div class="job-image-box-wrap">
                        <a href="job-details.html">
                            <img src="{{asset('assets/images/jobs/marketing-assistant.jpg')}}" class="job-image img-fluid" alt="marketing assistant">
                        </a>

                        <div class="job-image-box-wrap-info d-flex align-items-center">
                        </div>
                    </div>

                    <div class="job-body">
                        <h4 class="job-title">
                            <a href="job-details.html" class="job-title-link">Layanan Kesehatan Lansia</a>
                        </h4>

                        <div class="d-flex align-items-center">
                            <div class="job-image-wrap d-flex align-items-center bg-white shadow-lg mt-2 mb-4">
                                <img src="{{asset('assets/images/logos/apple - Copy.png')}}" class="job-image me-3 img-fluid" alt="">

                                <p class="mb-0">Tutur&nbsp;Creative</p>
                            </div>

                            <a href="#" class="bi-bookmark ms-auto me-2">
                            </a>

                            <a href="#" class="bi-heart">
                            </a>
                        </div>

                        <div class="d-flex align-items-center">
                            <p class="job-location">
                                <i class="custom-icon bi-geo-alt me-1"></i>
                                Banyuwangi, Jawa Timur
                            </p>

                            <p class="job-date">
                                <i class="custom-icon bi-clock me-1"></i>
                                3 Bulan
                            </p>
                        </div>

                        <div class="d-flex align-items-center border-top pt-3">
                            <a href="job-details.html" class="custom-btn btn ms-auto">Apply now</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-12">
                <div class="job-thumb job-thumb-box">
                    <div class="job-image-box-wrap">
                        <a href="job-details.html">
                            <img src="{{asset('assets/images/jobs/coding-man.jpg')}}" class="job-image img-fluid" alt="">
                        </a>

                        <div class="job-image-box-wrap-info d-flex align-items-center">
                        </div>
                    </div>

                    <div class="job-body">
                        <h4 class="job-title">
                            <a href="job-details.html" class="job-title-link">Pengabdi Pelosok Negeri</a>
                        </h4>
                            
                        <div class="d-flex align-items-center">
                            <div class="job-image-wrap d-flex align-items-center bg-white shadow-lg mt-2 mb-4">
                                <img src="{{asset('assets/images/logos/slack - Copy.png')}}" class="job-image me-3 img-fluid" alt="">

                                <p class="mb-0">Relawan&nbsp;PYVC</p>
                            </div>

                            <a href="#" class="bi-bookmark ms-auto me-2">
                            </a>

                            <a href="#" class="bi-heart">
                            </a>
                        </div>

                        <div class="d-flex align-items-center">
                            <p class="job-location">
                                <i class="custom-icon bi-geo-alt me-1"></i>
                                Sumbawa, WNT
                            </p>

                            <p class="job-date">
                                <i class="custom-icon bi-clock me-1"></i>
                                3 Bulan
                            </p>
                        </div>

                        <div class="d-flex align-items-center border-top pt-3">
                            <a href="job-details.html" class="custom-btn btn ms-auto">Apply now</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-12">
                <div class="job-thumb job-thumb-box">
                    <div class="job-image-box-wrap">
                        <a href="job-details.html">
                            <img src="{{asset('assets/images/jobs/pretty-blogger-posing-cozy-apartment.jpg')}}" class="job-image img-fluid" alt="">
                        </a>

                        <div class="job-image-box-wrap-info d-flex align-items-center">
                        </div>
                    </div>

                    <div class="job-body">
                        <h4 class="job-title">
                            <a href="job-details.html" class="job-title-link">Biru Voice 2023</a>
                        </h4>

                        <div class="d-flex align-items-center">
                            <div class="job-image-wrap d-flex align-items-center bg-white shadow-lg mt-2 mb-4">
                                <img src="{{asset('assets/images/logos/yelp.png')}}" class="job-image me-3 img-fluid" alt="">

                                <p class="mb-0">Bicara&nbsp;Udara</p>
                            </div>

                            <a href="#" class="bi-bookmark ms-auto me-2">
                            </a>

                            <a href="#" class="bi-heart">
                            </a>
                        </div>

                        <div class="d-flex align-items-center">
                            <p class="job-location">
                                <i class="custom-icon bi-geo-alt me-1"></i>
                                DKI Jakarta
                            </p>

                            <p class="job-date">
                                <i class="custom-icon bi-clock me-1"></i>
                                3 Bulan
                            </p>
                        </div>

                        <div class="d-flex align-items-center border-top pt-3">
                            <a href="job-details.html" class="custom-btn btn ms-auto">Apply now</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-12">
                <div class="job-thumb job-thumb-box">
                    <div class="job-image-box-wrap">
                        <a href="job-details.html">
                            <img src="{{asset('assets/images/jobs/paper-analysis.jpg')}}" class="job-image img-fluid" alt="">
                        </a>

                        <div class="job-image-box-wrap-info d-flex align-items-center">
                            
                        </div>
                    </div>

                    <div class="job-body">
                        <h4 class="job-title">
                            <a href="job-details.html" class="job-title-link">Eco Touch</a>
                        </h4>
                            
                        <div class="d-flex align-items-center">
                            <div class="job-image-wrap d-flex align-items-center bg-white shadow-lg mt-2 mb-4">
                                <img src="{{asset('assets/images/logos/paypal.png')}}" class="job-image me-3 img-fluid" alt="">

                                <p class="mb-0">Idvolunteering</p>
                            </div>

                            <a href="#" class="bi-bookmark ms-auto me-2">
                            </a>

                            <a href="#" class="bi-heart">
                            </a>
                        </div>

                        <div class="d-flex align-items-center">
                            <p class="job-location">
                                <i class="custom-icon bi-geo-alt me-1"></i>
                                Sidoarjo, Jawa Timur
                            </p>

                            <p class="job-date">
                                <i class="custom-icon bi-clock me-1"></i>
                                3 Bulan
                            </p>
                        </div>

                        <div class="d-flex align-items-center border-top pt-3">
                            <a href="job-details.html" class="custom-btn btn ms-auto">Apply now</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-12">
                <div class="job-thumb job-thumb-box">
                    <div class="job-image-box-wrap">
                        <a href="job-details.html">
                            <img src="{{asset('assets/images/jobs/logo-designer-working-computer-desktop.jpg')}}" class="job-image img-fluid" alt="">
                        </a>
                        <div class="job-image-box-wrap-info d-flex align-items-center">
                        </div>
                    </div>

                    <div class="job-body">
                        <h4 class="job-title">
                            <a href="job-details.html" class="job-title-link">Gardana Desa</a>
                        </h4>
                            
                        <div class="d-flex align-items-center">
                            <div class="job-image-wrap d-flex align-items-center bg-white shadow-lg mt-2 mb-4">
                                <img src="{{asset('assets/images/logos/education1.png')}}" class="job-image me-3 img-fluid" alt="">

                                <p class="mb-0">Nusantara&nbsp;Berbakti</p>
                            </div>

                            <a href="#" class="bi-bookmark ms-auto me-2">
                            </a>

                            <a href="#" class="bi-heart">
                            </a>
                        </div>

                        <div class="d-flex align-items-center">
                            <p class="job-location">
                                <i class="custom-icon bi-geo-alt me-1"></i>
                                Madura, Jawa Timur
                            </p>

                            <p class="job-date">
                                <i class="custom-icon bi-clock me-1"></i>
                                3 Bulan
                            </p>
                        </div>

                        <div class="d-flex align-items-center border-top pt-3">


                            <a href="job-details.html" class="custom-btn btn ms-auto">Apply now</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-12 recent-jobs-bottom d-flex ms-auto my-4">
                <a href="job-listings.html" class="custom-btn btn ms-lg-auto">Telusuri Daftar Komunitas</a>
            </div>

        </div>
    </div>
</section>


<section class="reviews-section section-padding">
    <div class="container">
        <div class="row">

            <div class="col-lg-12 col-12">
                <h2 class="text-center mb-5">Happy customers</h2>

                <div class="owl-carousel owl-theme reviews-carousel">
                    <div class="reviews-thumb">
                    
                        <div class="reviews-info d-flex align-items-center">
                            <img src="{{asset('assets/images/avatar/portrait-charming-middle-aged-attractive-woman-with-blonde-hair.jpg')}}" class="avatar-image img-fluid" alt="">

                            <div class="d-flex align-items-center justify-content-between flex-wrap w-100 ms-3">
                                <p class="mb-0">
                                    <strong>Rifdah Najwan Aqilah</strong>
                                    
                                </p>

                                <div class="reviews-icons">
                                    <i class="bi-star-fill"></i>
                                    <i class="bi-star-fill"></i>
                                    <i class="bi-star-fill"></i>
                                    <i class="bi-star-fill"></i>
                                    <i class="bi-star-fill"></i>
                                </div>
                            </div>
                        </div>

                        <div class="reviews-body">
                            <img src="{{asset('assets/images/left-quote.png')}}" class="quote-icon img-fluid" alt="">

                            <h4 class="reviews-title">👍👍👍👍👍👍👍👍👍👍👍</h4>
                        </div>
                    </div>

                    <div class="reviews-thumb">
                        <div class="reviews-info d-flex align-items-center">
                            <img src="{{asset('assets/images/avatar/medium-shot-smiley-senior-man.jpg')}}" class="avatar-image img-fluid" alt="">

                            <div class="d-flex align-items-center justify-content-between flex-wrap w-100 ms-3">
                                <p class="mb-0">
                                    <strong>Muhammad Fajar Ramadhoni</strong>
                                    
                                </p>

                                <div class="reviews-icons">
                                    <i class="bi-star-fill"></i>
                                    <i class="bi-star-fill"></i>
                                    <i class="bi-star-fill"></i>
                                    <i class="bi-star"></i>
                                    <i class="bi-star"></i>
                                </div>
                            </div>
                        </div>

                        <div class="reviews-body">
                            <img src="{{asset('assets/images/left-quote.png')}}" class="quote-icon img-fluid" alt="">

                            <h4 class="reviews-title">I am very happy to find volunteer information on this website</h4>
                        </div>
                    </div>

                    <div class="reviews-thumb">

                        <div class="reviews-info d-flex align-items-center">
                            <img src="{{asset('assets/images/avatar/portrait-beautiful-young-woman.jpg')}}" class="avatar-image img-fluid" alt="">

                            <div class="d-flex align-items-center justify-content-between flex-wrap w-100 ms-3">
                                <p class="mb-0">
                                    <strong>Haley</strong>
                                    
                                </p>

                                <div class="reviews-icons">
                                    <i class="bi-star-fill"></i>
                                    <i class="bi-star-fill"></i>
                                    <i class="bi-star-fill"></i>
                                    <i class="bi-star-fill"></i>
                                    <i class="bi-star-fill"></i>
                                </div>
                            </div>
                        </div>

                        <div class="reviews-body">
                            <img src="{{asset('assets/images/left-quote.png')}}" class="quote-icon img-fluid" alt="">

                            <h4 class="reviews-title">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</h4>
                        </div>
                    </div>

                    <div class="reviews-thumb">
                        <div class="reviews-info d-flex align-items-center">
                            <img src="{{asset('assets/images/avatar/blond-man-happy-expression.jpg')}}" class="avatar-image img-fluid" alt="">

                            <div class="d-flex align-items-center justify-content-between flex-wrap w-100 ms-3">
                                <p class="mb-0">
                                    <strong>Jackson</strong>
                                    
                                </p>

                                <div class="reviews-icons">
                                    <i class="bi-star-fill"></i>
                                    <i class="bi-star-fill"></i>
                                    <i class="bi-star-fill"></i>
                                    <i class="bi-star"></i>
                                    <i class="bi-star"></i>
                                </div>
                            </div>
                        </div>

                        <div class="reviews-body">
                            <img src="{{asset('assets/images/left-quote.png')}}" class="quote-icon img-fluid" alt="">

                            <h4 class="reviews-title">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</h4>
                        </div>
                    </div>

                    <div class="reviews-thumb">
                        <div class="reviews-info d-flex align-items-center">
                            <img src="{{asset('assets/images/avatar/kevin.jpg')}}" class="avatar-image img-fluid" alt="">

                            <div class="d-flex align-items-center justify-content-between flex-wrap w-100 ms-3">
                                <p class="mb-0">
                                    <strong>Kevin</strong>
                                    
                                </p>

                                <div class="reviews-icons">
                                    <i class="bi-star-fill"></i>
                                    <i class="bi-star-fill"></i>
                                    <i class="bi-star-fill"></i>
                                    <i class="bi-star-fill"></i>
                                    <i class="bi-star-fill"></i>
                                </div>
                            </div>
                        </div>

                        <div class="reviews-body">
                            <img src="{{asset('assets/images/left-quote.png')}}" class="quote-icon img-fluid" alt="">

                            <h4 class="reviews-title">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</h4>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>


<section class="cta-section">
    <div class="section-overlay"></div>

    <div class="container">
        <div class="row">

            <div class="col-lg-6 col-10">
                <h2 class="text-white mb-2">Over 10k opening jobs</h2>

                <p class="text-white">Volunteer Community is a site that aims to bring volunteers together with organizations or communities that need help.
                </p>
            </div>

            <div class="col-lg-4 col-12 ms-auto">
                <div class="custom-border-btn-wrap d-flex align-items-center mt-lg-4 mt-2">
                    <a href="#" class="custom-btn custom-border-btn btn me-4">Create an account</a>

                    <a href="#" class="custom-link">Post a job</a>
                </div>
            </div>

        </div>
    </div>
</section>

{{-- End Mengisi section isi_konten di tempalte layout.index--}}

@endsection