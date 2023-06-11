{{-- Start Load template dari file layout/index --}}

@extends('layout.index') 

{{-- End Load template dari file layout/index --}}

{{-- Mengisi section isi_konten di tempalte layout.index--}}
@section('isi_konten')

<header class="site-header">
    <div class="section-overlay"></div>

    <div class="container">
        <div class="row">
            
            <div class="col-lg-12 col-12 text-center">
                <h1 class="text-white">Tentang</h1>

                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item"><a href="index.html">Beranda</a></li>

                        <li class="breadcrumb-item active" aria-current="page">Tentang</li>
                    </ol>
                </nav>
            </div>

        </div>
    </div>
</header>


<section class="about-section">
    <div class="container">
        <div class="row justify-content-center align-items-center">

            <div class="col-lg-5 col-12">
                <div class="about-info-text">
                    <h2 class="mb-0">Memperkenalkan Pekerjaan Relawan</h2>

                    <h4 class="mb-2">Dapatkan Komunitas Anda</h4>

                    <p>Volunteer Community adalah sebuah situs yang bertujuan untuk mempertemukan para relawan dengan organisasi atau komunitas yang membutuhkan bantuan.
                        Melalui Komunitas Relawan, relawan dapat mengetahui informasi tentang organisasi atau komunitas yang membutuhkan bantuan, serta mengakses informasi tentang kegiatan relawan yang tersedia. Selain itu, relawan juga dapat mendaftar secara online dan menjadwalkan kegiatan kerelawanannya dengan lebih mudah.
                        </p>

                    <div class="d-flex align-items-center mt-4">
                        <a href="#services-section" class="custom-btn custom-border-btn btn me-4">Jelajahi Layanan</a>

                        <a href="contact.html" class="custom-link smoothscroll">Kontak</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-5 col-12 mt-5 mt-lg-0">
                <div class="about-image-wrap">
                    <img src="{{asset('assets/images/about_photo.jpg')}}" class="about-image about-image-border-radius img-fluid" alt="">

                    <div class="about-info d-flex">
                        <h4 class="text-white mb-0 me-2">20</h4>

                        <p class="text-white mb-0">tahun berpengalaman</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>


<section class="services-section section-padding" id="services-section">
    <div class="container">
        <div class="row">

            <div class="col-lg-12 col-12 text-center">
                <h2 class="mb-5">Kami memberikan layanan terbaik</h2>
            </div>

            <div class="services-block-wrap col-lg-4 col-md-6 col-12">
                <div class="services-block">
                    <div class="services-block-title-wrap">
                        <i class="services-block-icon bi-window"></i>
                    
                        <h4 class="services-block-title">Pendidikan</h4>
                    </div>

                    <div class="services-block-body">
                        <p>Siapa saja yang memiliki kepedulian terhadap pendidikan dan secara aktif ingin berkontribusi memajukan pendidikan anak-anak di Indonesia.</p>
                    </div>
                </div>
            </div>

            <div class="services-block-wrap col-lg-4 col-md-6 col-12 my-4 my-lg-0 my-md-0">
                <div class="services-block">
                    <div class="services-block-title-wrap">
                        <i class="services-block-icon bi-twitch"></i>
                    
                        <h4 class="services-block-title">Social</h4>
                    </div>

                    <div class="services-block-body">
                        <p>siapapun yang berkontribusi dalam gerakan sosial kemanusiaan untuk kepentingan masyarakat.</p>
                    </div>
                </div>
            </div>

            <div class="services-block-wrap col-lg-4 col-md-6 col-12">
                <div class="services-block">
                    <div class="services-block-title-wrap">
                        <i class="services-block-icon bi-play-circle-fill"></i>
                    
                        <h4 class="services-block-title">Environment</h4>
                    </div>

                    <div class="services-block-body">
                        <p>siapa saja yang sukarela memberikan waktu dan tenaganya untuk memelihara lingkungan.</p>
                    </div>
                </div>
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

                            <h4 class="reviews-title">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</h4>
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
                            <img src="{{asset('assets/images/avatar/alex.jpg')}}" class="avatar-image img-fluid" alt="">

                            <div class="d-flex align-items-center justify-content-between flex-wrap w-100 ms-3">
                                <p class="mb-0">
                                    <strong>Alex</strong>
                                    
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
@endsection