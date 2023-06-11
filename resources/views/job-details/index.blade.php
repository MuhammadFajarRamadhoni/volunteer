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
                            <h1 class="text-white">Rincian Pekerjaan</h1>

                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb justify-content-center">
                                    <li class="breadcrumb-item"><a href="index.html">Beranda</a></li>

                                    <li class="breadcrumb-item active" aria-current="page">Rincian Pekerjaan</li>
                                </ol>
                            </nav>
                        </div>

                    </div>
                </div>
            </header>


            <section class="job-section section-padding pb-0">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-8 col-12">
                            <h2 class="job-title mb-0">BIRU Voices 2023 </h2>

                            <div class="job-thumb job-thumb-detail">
                                <div class="d-flex flex-wrap align-items-center border-bottom pt-lg-3 pt-2 pb-3 mb-4">
                                    <p class="job-location mb-0">
                                        <i class="custom-icon bi-geo-alt me-1"></i>
                                        DKI Jakarta 
                                    </p>

                                    <p class="job-date mb-0">
                                        <i class="custom-icon bi-clock me-1"></i>
                                        3 bulan
                                    </p>

                                

                                    <div class="d-flex">
                                
                                    </div>
                                </div>

                                <h4 class="mt-4 mb-2">Deskripsi Pekerjaan</h4>

                                <ul>
                                    <li>Membantu mengampanyekan program-program Bicara Udara perihal kampanye udara bersih di Jabodetabek</li>
                                    <li>Ikut serta merencanakan, mempersiapkan, dan mengeksekusi kegiatan-kegiatan Bicara Udara, termasuk di antaranya: audiensi kebijakan dengan pemerintah, roadshow dengan komunitas dan universitas, dan sebagainya.</li>
                                </ul>
                            

                                <h5 class="mt-4 mb-3">Peran</h5>

                                <p class="mb-1"><strong>Ambassador</strong> </p>

                                <h5 class="mt-4 mb-3">Requirements</h5>

                                <ul>
                                    <li>Mahasiswa AKTIF Tahun Kedua dan/atau Tahun Ketiga, berkuliah di universitas atau sekolah tinggi di Jabodetabek.</li>

                                    <li>Memiliki kemampuan komunikasi dan public speaking yang baik.</li>

                                    <li>Aktif di Sosial Media.</li>

                                    <li>Mengecek syarat/kriteria dan mendaftar di https://bit.ly/biruvoices2023.</li>
                                </ul>

                                <div class="d-flex justify-content-center flex-wrap mt-5 border-top pt-4">
                                    <a href="ActivityList.html" class="custom-btn btn mt-2">Apply now</a>

                                    <a href="#" class="custom-btn custom-border-btn btn mt-2 ms-lg-4 ms-3">Save this job</a>

                                    <div class="job-detail-share d-flex align-items-center">
                                        <p class="mb-0 me-lg-4 me-3">Share:</p>

                                        <a href="#" class="bi-facebook"></a>

                                        <a href="#" class="bi-twitter mx-3"></a>

                                        <a href="#" class="bi-share"></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-12 mt-5 mt-lg-0">
                            <div class="job-thumb job-thumb-detail-box bg-white shadow-lg">
                                <div class="d-flex align-items-center">
                                    <div class="job-image-wrap d-flex align-items-center bg-white shadow-lg mb-3">
                                        <img src="{{asset('assets/images/logos/meta.png')}}" class="job-image me-3 img-fluid" alt="">

                                        <p class="mb-0">Lingkungan, Medis</p>
                                    </div>

                                    <a href="#" class="bi-bookmark ms-auto me-2"></a>

                                    <a href="#" class="bi-heart"></a>
                                </div>

                                <h6 class="mt-3 mb-2">BIRU Voice 2023</h6>

                                <p>Panggilan kepada mahasiswa untuk bergabunglah dengan BIRU Voices 2023, program pengembangan kapasitas dan kepribadian duta udara bersih.</p>

                                <h6 class="mt-4 mb-3">Contact Information</h6>

                                <p class="mb-2">
                                    <i class="custom-icon bi-globe me-1"></i>

                                    <a href="#" class="site-footer-link">
                                        www.volunteer.my.id
                                    </a>
                                </p>

                                <p class="mb-2">
                                    <i class="custom-icon bi-telephone me-1"></i>

                                    <a href="tel: 305-240-9671" class="site-footer-link">
                                        305-240-9671
                                    </a>
                                </p>

                                <p>
                                    <i class="custom-icon bi-envelope me-1"></i>

                                    <a href="mailto:info@yourgmail.com" class="site-footer-link">
                                        info@volunteerpengmas.co
                                    </a>
                                </p>
                            </div>
                        </div>

                    </div>
                </div>
            </section>


            <section class="job-section section-padding">
                <div class="container">
                    <div class="row align-items-center">

                        <div class="col-lg-6 col-12 mb-lg-4">
                            <h3>Pekerjaan Serupa</h3>

                            <p><strong>Lebih dari 10rb membuka lowongan</strong> Lorem Ipsum dolor sit amet, consectetur adipsicing kengan omeg kohm tokito adipcingi elit eismuod larehai</p>
                        </div>

                        <div class="col-lg-4 col-12 d-flex ms-auto mb-5 mb-lg-4">
                            <a href="job-listings.html" class="custom-btn custom-border-btn btn ms-lg-auto">Browse Job Listings</a>
                        </div>

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
                                        <a href="job-details.html" class="job-title-link">Taman Literasi</a>
                                    </h4>

                                    <div class="d-flex align-items-center">
                                        <div class="job-image-wrap d-flex align-items-center bg-white shadow-lg mt-2 mb-4">
                                            <img src="{{asset('assets/images/logos/ngajarbarengid.png')}}" class="job-image me-3 img-fluid" alt="">

                                            <p class="mb-0"><ngajarbareng class="id"></ngajarbareng>PetaBencana.id</p>
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
                                            3 bulan
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
                                        <img src="{{asset('assets/images/jobs/people-working-as-team-company.jpg')}}" class="job-image img-fluid" alt="marketing assistant">
                                    </a>

                                    <div class="job-image-box-wrap-info d-flex align-items-center">
                
                                    </div>
                                </div>

                                <div class="job-body">
                                    <h4 class="job-title">
                                        <a href="job-details.html" class="job-title-link">Donasi&nbsp;Buku</a>
                                    </h4>

                                    <div class="d-flex align-items-center">
                                        <div class="job-image-wrap d-flex align-items-center bg-white shadow-lg mt-2 mb-4">
                                            <img src="{{asset('assets/images/logos/education1.png')}}" class="job-image me-3 img-fluid" alt="">

                                            <p class="mb-0">Book&nbsp;Clan</p>
                                        </div>

                                        <a href="#" class="bi-bookmark ms-auto me-2">
                                        </a>

                                        <a href="#" class="bi-heart">
                                        </a>
                                    </div>

                                    <div class="d-flex align-items-center">
                                        <p class="job-location">
                                            <i class="custom-icon bi-geo-alt me-1"></i>
                                            Surabaya, East Java
                                        </p>

                                        <p class="job-date">
                                            <i class="custom-icon bi-clock me-1"></i>
                                            3 bulan
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
                                        <a href="job-details.html" class="job-title-link">Layanan Kesehatan Lansia</a>
                                    </h4>
                                        
                                    <div class="d-flex align-items-center">
                                        <div class="job-image-wrap d-flex align-items-center bg-white shadow-lg mt-2 mb-4">
                                            <img src="{{asset('assets/images/logos/education2.png')}}" class="job-image me-3 img-fluid" alt="">

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
                                            3 bulan
                                        </p>
                                    </div>

                                    <div class="d-flex align-items-center border-top pt-3">
                                      

                                        <a href="job-details.html" class="custom-btn btn ms-auto">Apply now</a>
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
                            <h2 class="text-white mb-2">Lebih dari 10rb membuka lowongan</h2>

                            <p class="text-white">Volunteer Community adalah sebuah situs yang bertujuan untuk mempertemukan para relawan dengan organisasi atau komunitas yang membutuhkan bantuan.
                            </p>
                        </div>

                        <div class="col-lg-4 col-12 ms-auto">
                            <div class="custom-border-btn-wrap d-flex align-items-center mt-lg-4 mt-2">
                                <a href="#" class="custom-btn custom-border-btn btn me-4">Buat Akun</a>

                                <a href="#" class="custom-link">Post a job</a>
                            </div>
                        </div>

                    </div>
                </div>
            </section>

{{-- End Mengisi section isi_konten di tempalte layout.index--}}

@endsection