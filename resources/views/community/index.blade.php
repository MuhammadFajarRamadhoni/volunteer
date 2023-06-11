{{-- Start Load template dari file layout/index --}}

@extends('layout.index') 

{{-- End Load template dari file layout/index --}}

{{-- Mengisi section isi_konten di tempalte layout.index--}}
@section('isi_konten')

<section class="categories-section mt-5" id="categories-section">
    <div class="container">
        <div class="row justify-content-center align-items-center">

            <div class="col-lg-12 col-12 text-center">
                <h2 class="mb-5">Community <span>Categories</span></h2>
            </div>

            <div class="col-lg-2 col-md-4 col-6">
                <div class="categories-block">
                    <a href="#" class="d-flex flex-column justify-content-center align-items-center h-100">
                        <i class="categories-icon bi-book"></i>
                    
                        <small class="categories-block-title">Education</small>

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
                    
                        <small class="categories-block-title">Medical</small>

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
                    
                        <small class="categories-block-title">Environment</small>

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
                    
                        <small class="categories-block-title">Social</small>

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
                    
                        <small class="categories-block-title">Economy</small>

                        <div class="categories-block-number d-flex flex-column justify-content-center align-items-center">
                            <span class="categories-block-number-text">84</span>
                        </div>
                    </a>
                </div>
            </div>

        </div>
    </div>
</section>

{{-- Strt Section untuk bagian Introduction --}}
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
                    <h2 class="text-white mb-2">Introduction</h2>

                    <p class="text-white">Volunteer Community is a site that aims to bring volunteers together with organizations or communities that need help.

                        Through the Volunteer Community, volunteers can find information about organizations or communities that need help, as well as access information about available volunteer activities.</p>

                    <div class="custom-border-btn-wrap d-flex align-items-center mt-5">
                        <a href="about.html" class="custom-btn custom-border-btn btn me-4">Get to know us</a>

                        <a href="#job-section" class="custom-link smoothscroll">Explore Jobs</a>
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
{{-- End Section untuk bagian Introduction --}}

{{-- Tombol untuk membuat komunitas baru --}}
<div class="text-center my-5">
    <a href="#" class="custom-btn btn" data-bs-toggle="modal" data-bs-target="#modal-form-tambah-community">Buat Komunitas Baru</a>
</div>
{{-- End untuk membuat komunitas baru --}}

<section class="job-section job-featured-section section-padding" id="job-section">
    <div class="container">
        <div class="row">

            <div class="col-lg-6 col-12 text-center mx-auto mb-4">
                <h2>Recomendation For You</h2>
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
                                    DKI Jakarta, West Java
                                </p>

                                <p class="job-date mb-0">
                                    <i class="custom-icon bi-clock me-1"></i>
                                    3 Months
                                </p>
                                <p class="job-price mb-0">
                                    <i class="custom-icon bi-bank me-1"></i>
                                    Education
                                </p>
                                <p class="job-price mb-0">
                                    <i class="custom-icon bi-calendar me-1"></i>
                                    Date : 28 Juni 2023
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
                                    Banyuwangi, East Java
                                </p>

                                <p class="job-date mb-0">
                                    <i class="custom-icon bi-clock me-1"></i>
                                    3 Months
                                </p>
                                <p class="job-price mb-0">
                                    <i class="custom-icon bi-bank me-1"></i>
                                    Medical
                                </p>
                                <p class="job-price mb-0">
                                    <i class="custom-icon bi-calendar me-1"></i>
                                    Date : 15 Juli 2023
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
                                    Depok, West Java
                                </p>

                                <p class="job-date mb-0">
                                    <i class="custom-icon bi-clock me-1"></i>
                                    3 Months
                                </p>
                                <p class="job-price mb-0">
                                    <i class="custom-icon bi-bank me-1"></i>
                                    Environment

                                </p>
                                <p class="job-price mb-0">
                                    <i class="custom-icon bi-calendar me-1"></i>
                                    Date : 30 Juli 2023
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
                                    3 Months
                                </p>
                                <p class="job-price mb-0">
                                    <i class="custom-icon bi-bank me-1"></i>
                                    Social
                                </p>
                                <p class="job-price mb-0">
                                    <i class="custom-icon bi-calendar me-1"></i>
                                    Date : 03 Agustus 2023
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
                                    Madura, East Java
                                </p>

                                <p class="job-date mb-0">
                                    <i class="custom-icon bi-clock me-1"></i>
                                    3 Months
                                </p>
                                <p class="job-price mb-0">
                                    <i class="custom-icon bi-bank me-1"></i>
                                    Economy
                                </p>
                                <p class="job-price mb-0">
                                    <i class="custom-icon bi-calendar me-1"></i>
                                    Date : 08 August 2023
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
                                <span aria-hidden="true">Prev</span>
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
                                <span aria-hidden="true">Next</span>
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
                    <h2 class="text-white mb-3">Volunteer Community help you easier
                        how to get a place in the community service program.</h2>

                    <p class="text-white">The more volunteers, the bigger the impact. There are hundreds of activities you can participate in to make big changes.</p>

                    <div class="d-flex mt-4">
                        <div class="counter-thumb"> 
                            <div class="d-flex">
                                <span class="counter-number" data-from="1" data-to="12" data-speed="1000"></span>
                                <span class="counter-number-text">M</span>
                            </div>

                            <span class="counter-text">Daily active users</span>
                        </div> 

                        <div class="counter-thumb">    
                            <div class="d-flex">
                                <span class="counter-number" data-from="1" data-to="450" data-speed="1000"></span>
                                <span class="counter-number-text">k</span>
                            </div>

                            <span class="counter-text">Opening jobs</span>
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
                <h2>Recent Jobs</h2>

                <p><strong>Over 10k opening jobs</strong> Lorem Ipsum dolor sit amet, consectetur adipsicing kengan omeg kohm tokito adipcingi elit eismuod larehai</p>
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
                                Depok, West Java
                            </p>

                            <p class="job-date">
                                <i class="custom-icon bi-clock me-1"></i>
                                3 Months
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
                                Banyuwangi, East Java
                            </p>

                            <p class="job-date">
                                <i class="custom-icon bi-clock me-1"></i>
                                3 Months
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
                                3 Months
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
                                DKI Jakarta, West Java
                            </p>

                            <p class="job-date">
                                <i class="custom-icon bi-clock me-1"></i>
                                3 Months
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
                                Sidoarjo, East Java
                            </p>

                            <p class="job-date">
                                <i class="custom-icon bi-clock me-1"></i>
                                3 Months
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
                                Madura, East Java
                            </p>

                            <p class="job-date">
                                <i class="custom-icon bi-clock me-1"></i>
                                3 Months
                            </p>
                        </div>

                        <div class="d-flex align-items-center border-top pt-3">


                            <a href="job-details.html" class="custom-btn btn ms-auto">Apply now</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-12 recent-jobs-bottom d-flex ms-auto my-4">
                <a href="job-listings.html" class="custom-btn btn ms-lg-auto">Browse Job Listings</a>
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

@include('community._modalBuatKomunitas')
@push('js')
    @include('community.jsFunction')
@endpush

{{-- End Mengisi section isi_konten di tempalte layout.index--}}

@endsection