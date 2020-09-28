<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>Sistem Pakar Depresi</title>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('/homepageguest/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset ('/homepageguest/sweetalert.css')}}">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>

    <!-- Swiper CSS -->
    <link rel="stylesheet" href="{{ asset('/homepageguest/css/swiper.min.css')}}">
    <link rel="stylesheet" href="{{ asset('/homepageguest/css/all.min.css')}}">
    <link rel="stylesheet" href="{{ asset('cssguest/agency.min.css')}}">


    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('/homepageguest/style.css')}}">
    <script src="{{ asset('/homepageguest/js/custom.js')}}"></script>

    <style> 
    .LP{
  padding:100px 0;
  background-color:#efefef
}
a, a:hover{
  color:#333
}
    </style> 
</head>
<body id="page-top">
    
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="/"><img class="d-block" src="{{ url('/homepageguest/images/logo.png')}}" alt="logo"> <H6>SIDEPSI</a></H6>
                
                    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">MENU
          
          <i class="fas fa-bars"></i>
        </button>
                        
                            <div class="collapse navbar-collapse" id="navbarResponsive">
                                <ul class="navbar-nav text-uppercase ml-auto">
                       

                        
            
                            
                               <!--  <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#BERANDA }}">BERANDA</a></li> -->
                                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#Pelayanan">PELAYANAN</a></li>
                                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#Gejala">GEJALA DEPRESI</a></li>
                                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#Profil">Profil Pakar</a></li>
                                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="{{url('artikel/')}}">ARTIKEL</a></li>
                                &nbsp &nbsp &nbsp 
                           
                                <li class="nav-item"><a class= "btn btn-sm btn-primary navbar-btn" href="{{ route('login') }}" style="color: black">MASUK</a>
                                    &nbsp

                                <li class="nav-item">
                                <a class="btn btn-sm btn-primary" href="{{ route('register') }}" style="color: black">DAFTAR</a>
                                </li>

                            </ul>
                        
                    </div>
                </div>
            
                 </nav><!-- .site-navigation -->


                                
                            
                       

                       

        <div class="swiper-container hero-slider" style="width:100%; height:580px">
            <div class="swiper-wrapper">
                <div class="swiper-slide hero-content-wrap" style="background-image: url('/homepageguest/images/depresi1.jpg')" data-swiper-autopay="2000">
                    <div class="hero-content-overlay  w-100 h-100">
                        <div class="container h-100">
                            <div class="row h-100">
                                <div class="col-12 col-lg-6 d-flex flex-column justify-content-center align-items-start">
                                    <header class="entry-header">
                                        <h1>Kapan Harus Memeriksakan Diri ke Psikiater?</h1>
                                    </header><!-- .entry-header -->

                                    <div class="entry-content mt-4">
                                        <h1 style="color: #f9ca45"><p><b>Pada sebenarnya dalam kehidupan sehari-hari setiap orang orang tidak menyadari telah mengalami kondisi gangguan jiwa yang mengganggu aktifitasnya sehari-hari. Jadi kapan orang perlu datang ke psikiater?</b></h1>
                                    </div><!-- .entry-content -->

                                    <footer class="entry-footer d-flex flex-wrap align-items-center mt-4">
                                        <a href="{{url('/apasaja')}}" class="button gradient-bg">Read More</a>
                                    </footer><!-- .entry-footer -->
                                </div><!-- .col -->
                            </div><!-- .row -->
                        </div><!-- .container -->
                    </div><!-- .hero-content-overlay -->
                </div><!-- .hero-content-wrap -->

                <div class="swiper-slide hero-content-wrap" style="background-image: url(' {{asset ('/homepageguest/images/depresi2.jpg') }}')">
                    <div class="hero-content-overlay position-absolute w-100 h-100">
                        <div class="container h-100">
                            <div class="row h-100">
                                <div class="col-12 col-lg-6 d-flex flex-column justify-content-center align-items-start">
                                    <header class="entry-header">
                                        <h1>Apa Saja Penyakit yang Ditangani oleh Psikiater?

</h1>
                                    

                                    <div class="entry-content mt-4">
                                        <h1><p><b>Psikiater mampu mengevaluasi data psikologis dan medis melalui pemeriksan medis kejiwaan untuk menentukan diagnosis, dan bekerja sama dengan pasien untuk membuat rencana perawatan. Sebagai seorang dokter, psikiater juga dapat mencari tahu gejala yang dialami pasien, serta melakukan tes psikologi (psikotes) dan tes penunjang.</b></p></h1>
                                    </div><!-- .entry-content -->

                                    <footer class="entry-footer d-flex flex-wrap align-items-center mt-4">
                                        <a href="{{url('/kapanperiksa')}}" class="button gradient-bg">Read More</a>
                                    </footer><!-- .entry-footer -->
                                </div><!-- .col -->
                            </div><!-- .row -->
                        </div><!-- .container -->
                    </div><!-- .hero-content-overlay -->
                </div><!-- .hero-content-wrap -->

                <div class="swiper-slide hero-content-wrap" style=" background-image: url('{{ asset('/homepageguest/images/depresi3.jpg')}}') ">
                    <div class="hero-content-overlay position-absolute w-100 h-100">
                        <div class="container h-100">
                            <div class="row h-100">
                                <div class="col-12 col-lg-6 d-flex flex-column justify-content-center align-items-start">
                                    <header class="entry-header">
                                        <h1>Apa Saja Tindakan yang Dilakukan Psikiater?

</h1>
                                    </header><!-- .entry-header -->

                                    <div class="entry-content mt-4">
                                        <h1><p><b>Anda dianjurkan menemui psikiater ketika mengalami gangguan fisik, psikis atau menderita penyakit yang disebabkan oleh masalah psikologis. Berbagai keluhan atau gejala berikut dapat dijadikan alasan kenapa harus pergi ke psikiater untuk mendapatkan solusinya:.</p></b></h1>
                                    </div><!-- .entry-content -->

                                    <footer class="entry-footer d-flex flex-wrap align-items-center mt-4">
                                        <a href="{{url('/tindakan')}}" class="button gradient-bg" >Read More</a>
                                    </footer><!-- .entry-footer -->
                                </div><!-- .col -->
                            </div><!-- .row -->
                       
                        </div><!-- .container -->
                    </div><!-- .hero-content-overlay -->
                </div><!-- .hero-content-wrap -->
            </div><!-- .swiper-wrapper -->

            <div class="pagination-wrap position-absolute w-100">
                <div class="swiper-pagination d-flex flex-row flex-md-column"></div>
            </div><!-- .pagination-wrap -->
        </div><!-- .hero-slider -->
    </header><!-- .site-header -->
    <br id="Pelayanan">
    
    <div class="container">
    <h1 align="center" >JADWAL PRAKTIK</h1>

    <div class="homepage-boxes">

        <div class="container">

            <div class="row">

                <div class="col-12 col-md-6 col-lg-4">
                    <div class="opening-hours">

                        <h2 class="d-flex align-items-center">Jam Praktik</h2>

                        <ul class="p-0 m-0">
                            <li>Senin <span>08.00 - 15.00</span></li>
                            <li>Selasa <span>08.00 - 18.00</span></li>
                            <li>Rabu <span>08.00 - 15.00</span></li>
                            <li>Kamis - Sabtu <span>08.00 - 15.00</span></li>

                        </ul>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-3 mt-5 mt-md-0">
                    <div class="emergency-box">
                        <h2 class="d-flex align-items-center">Kontak Darurat</h2>

                        <div class="call-btn button gradient-bg">
                            <a class="d-flex justify-content-center align-items-center" href="#"><img src="{{ url('/homepageguest/images/emergency-call.png') }}"> (021) 7219000</a>
                        </div>

                                                <p>RUMAH SAKIT PUSAT PERTAMINA (RSPP)
                        Alamat : Jl. Kyai Maja No. 43, Kebayoran Baru, Jakarta Selatan 12120</p>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-5 mt-5 mt-lg-0">
                    <div class="appointment-box">
                        <h2 class="d-flex align-items-center">Menu Konsultasi</h2>
                            <br>
                            <p>Anda dapat berkonsultasi langsung menggunakan fitur atur jadwal untuk memastikan bahwa dokter melakukan praktik di rumah sakit.Terdapat Menu deteksi tingkat depresi pada karyawan setelah login .</p> 
                            
                            <br>

                    

                    
                </div>

                </div>
            </div>
        </div>
        </div>
    </div>
</div>

    <div class="our-departments">
        <div class="container">
            <div class="row" id="Gejala">
                <div class="col-12">
                    <div class="our-departments-wrap">
                        <h2>TANDA DAN GEJALA DEPRESI YANG SERING TERJADI</h2>

                        <div class="row">
                            <div class="col-12 col-md-6 col-lg-4">
                                <div class="our-departments-cont">
                                    <header class="entry-header d-flex flex-wrap align-items-center">
                                        <img src="{{ url('/homepageguest/images/cardiogram.png')}}" alt="">

                                        <h3>Kesedihan</h3>
                                    </header>

                                    <div class="entry-content">
                                        <p>Seorang yang depresi akan merasakan kesedihan dan cenderung menjauhkan diri dari yang lain atau bahkan bisa menyalahkan orang lain sehingga menyebabkan hubungan seperti pertemanan, keluarga ataupun lingkungan menjadi teganggu.</p>
                                    </div>

                                    
                                </div>
                            </div>

                            <div class="col-12 col-md-6 col-lg-4">
                                <div class="our-departments-cont">
                                    <header class="entry-header d-flex flex-wrap align-items-center">
                                        <img src="{{ url('/homepageguest/images/stomach-2.png')}}" alt="">

                                        <h3>Hilang Minat</h3>
                                    </header>

                                    <div class="entry-content">
                                        <p>Penderita depresi bisa menyebabkan kemungkinan buruk karena hilangnya minat seperti hilangnya semangat untuk bekerja, bersosialisasi dan bahkan pada kasus yang lain penderita bisa kehilangan pekerjaan.</p>
                                    </div>

                                    
                                </div>
                            </div>

                            <div class="col-12 col-md-6 col-lg-4">
                                <div class="our-departments-cont">
                                    <header class="entry-header d-flex flex-wrap align-items-center">
                                        <img src="{{ url('/homepageguest/images/blood-sample-2.png')}}" alt="">

                                        <h3>Gangguan Tidur</h3>
                                    </header>

                                    <div class="entry-content">
                                        <p>Gangguan tidur dan depresi biasanya cenderung muncul bersamaan. Setidaknya 80% dari orang yang menderita depresi mengalami insomnia atau kesulitan untuk tidur.</p>
                                    </div>

                                    
                                </div>
                            </div>

                            <div class="col-12 col-md-6 col-lg-4">
                                <div class="our-departments-cont">
                                    <header class="entry-header d-flex flex-wrap align-items-center">
                                        <img src="{{ url('/homepageguest/images/teeth.png')}}" alt="">

                                        <h3>Penurunan Energi</h3>
                                    </header>

                                    <div class="entry-content">
                                        <p>Seorang Penderita depresi merasakan Kehilangan energy, lemas, tidak bersemangat, dan tidak tertarik melakukan apapun. Hal ini akan berimbas pada daya tahan tubuh terganggu sehingga sulit untuk pemulihan jika sedang mederita penyakit komplikasi</p>
                                    </div>

                                    
                                </div>
                            </div>

                            <div class="col-12 col-md-6 col-lg-4">
                                <div class="our-departments-cont">
                                    <header class="entry-header d-flex flex-wrap align-items-center">
                                        <img src="{{ url('/homepageguest/images/stretcher.png')}}" alt="">

                                        <h3>Sulit Konsentrasi</h3>
                                    </header>

                                    <div class="entry-content">
                                        <p>Kemampuan koginitif pada penderita depresi akan sulit berkonsentrasi , berpikir maupun dalam mengambil keputusan. Pada pekerja hal ini sangat berpengaruh bagi keberlangsunganya perusahaan yang dapat dicapai dari aspek tersebut</p>
                                    </div>

                                    
                                </div>
                            </div>

                            <div class="col-12 col-md-6 col-lg-4">
                                <div class="our-departments-cont">
                                    <header class="entry-header d-flex flex-wrap align-items-center">
                                        <img src="{{ url('/homepageguest/images/scanner.png')}}" alt="">

                                        <h3>Pesimis</h3>
                                    </header>

                                    <div class="entry-content">
                                        <p>Rasa putus asa dan pesimis menghadapi masa yang akan datang bisa menjadikan sesorang depresi. Biasanya ketika para pekerja merasakan beban seperti target pencapaian yang tidak sesuai.</p>
                                    </div>

                                   
                                </div>
                            </div>

                            <div class="col-12 col-md-6 col-lg-4 mb-md-0">
                                <div class="our-departments-cont">
                                    <header class="entry-header d-flex flex-wrap align-items-center">
                                        <img src="{{ url('/homepageguest/images/bones.png')}}" alt="">

                                        <h3>Melukai Diri Sendiri</h3>
                                    </header>

                                    <div class="entry-content">
                                        <p>Orang yang menderita depresi memiliki perasaan kesepian, ketidakberdayaan. Sehingga mereka dapat melukai diri sendiri atau bahkan mempertimbangkan membunuh dirinya sendiri.</p>
                                    </div>

                                    
                                </div>
                            </div>

                            <div class="col-12 col-md-6 col-lg-4 mb-lg-0">
                                <div class="our-departments-cont">
                                    <header class="entry-header d-flex flex-wrap align-items-center">
                                        <img src="{{ url('/homepageguest/images/blood-donation-2.png')}}" alt="">

                                        <h3>Penurunan Libido</h3>
                                    </header>

                                    <div class="entry-content">
                                        <p>Pada orang dewasa yang sudah menikah yang mederita depresi cenderung gairah hubungan antara suami/istri akan kurang harmonis disebabkan produksi-produksi hormun yang terganggu.</p>
                                    </div>

                                    
                                </div>
                            </div>

                            <div class="col-12 col-md-6 col-lg-4 mb-0">
                                <div class="our-departments-cont">
                                    <header class="entry-header d-flex flex-wrap align-items-center">
                                        <img src="{{ url('/homepageguest/images/glasses.png')}}" alt="">

                                        <h3>Perubahan Berat</h3>
                                    </header>

                                    <div class="entry-content">
                                        <p>Pada penderita depresi terdapat dua kecenderungan umum menegenai pola makan yang secara nyata mempengaruhi berat tubuh seperti Tidak selera makan atau Keinginan makan-makanan yang manis bertambah.</p>
                                    </div>

                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="testimonial-section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 id="Profil">Profil Pakar Spesialis Kejiwaan</h2>
                </div>
            </div>
        </div>

        <!-- Swiper -->
        <div class="testimonial-slider">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-9">
                        <div class="testimonial-bg-shape">
                            <div class="swiper-container testimonial-slider-wrap">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="entry-content">
                                            <p>                                                
                                            dr. Endah Ronawulan merupakan seorang Dokter Spesialis Kedokteran Jiwa. Saat ini, dr. Endah Ronawulan berpraktik di Rumah Sakit Pusat Pertamina di Kebayoran Baru, Jakarta Selatan, dan Rumah Sakit MRCCC Siloam Hospitals Semanggi di Setiabudi, Jakarta Selatan. Sebagai seorang dokter, beliau telah mengenyam pendidikan di Universitas Indonesia.<br>

                                            dr. Endah Ronawulan merupakan anggota dari Ikatan Dokter Indonesia, dan Perhimpunan Dokter Spesialis Kedokteran Jiwa Indonesia. Adapun layanan kesehatan yang diberikan oleh dr. Endah Ronawulan adalah Check Up Kesehatan, Konsultasi Kesehatan, Pemeriksaan Fisik, dan Konseling Psikologis
                                            <br>
                                            <br><br>
                                            <p>
                                        </div><!-- .entry-content -->

                                        <div class="entry-footer">
                                            <figure class="user-avatar">
                                                <img src="{{ url('/homepageguest/images/user-1.jpg')}}" alt="">
                                            </figure><!-- .user-avatar -->

                                            <h3 class="testimonial-user">dr. Endah Ronawulan, Sp.KJ <span>Dokter Spesialis Kejiwaaan</span></h3>
                                        </div><!-- .entry-footer -->
                                    </div><!-- .swiper-slide -->
                                
                                    
                                </div><!-- .swiper-wrapper -->

                                <div class="swiper-pagination-wrap">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="swiper-pagination position-relative flex justify-content-center align-items-center"></div>
                                            </div><!-- .col -->
                                        </div><!-- .row -->
                                    </div><!-- .container -->
                                </div>
                            </div>
                        
            </div>
        </div><!-- .testimonial-slider -->
    </section><!-- .testimonial-section -->

   <!--  <div class="the-news">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>ARTIKEL KESEHATAN JIWA</h2>

                    <div class="row">
                        <div class="col-12 col-md-6 col-lg-4">
                            <div class="the-news-wrap">
                                <figure class="post-thumbnail">
                                    <a href="#"><img src="{{ url('/homepageguest/images/news-1.png')}}" alt=""></a>
                                </figure>

                                <header class="entry-header">
                                    <h3>The latest in Medicine</h3>

                                    <div class="post-metas d-flex flex-wrap align-items-center">
                                        <div class="posted-date"><label>Date: </label><a href="#">April 12, 2018</a></div>

                                        <div class="posted-by"><label>By: </label><a href="#">Dr. Jake Williams</a></div>

                                        <div class="post-comments"><a href="#">2 Comments</a></div>
                                    </div>
                                </header>

                                <div class="entry-content">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris scelerisque, at rutrum nulla dictum. Ut ac ligula sapien. Suspendisse cursus faucibus finibus. </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-md-6 col-lg-4">
                            <div class="the-news-wrap">
                                <figure class="post-thumbnail">
                                    <a href="#"><img src="{{ url('/homepageguest/images/news-2.png')}}" alt=""></a>
                                </figure>

                                <header class="entry-header">
                                    <h3>All you need to know about pills</h3>

                                    <div class="post-metas d-flex flex-wrap align-items-center">
                                        <div class="posted-date"><label>Date: </label><a href="#">April 12, 2018</a></div>

                                        <div class="posted-by"><label>By: </label><a href="#">Dr. Jake Williams</a></div>

                                        <div class="post-comments"><a href="#">2 Comments</a></div>
                                    </div>
                                </header>

                                <div class="entry-content">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris scelerisque, at rutrum nulla dictum. Ut ac ligula sapien. Suspendisse cursus faucibus finibus. </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-md-6 col-lg-4">
                            <div class="the-news-wrap">
                                <figure class="post-thumbnail">
                                    <a href="#"><img src="{{ url('/homepageguest/images/news-3.png')}}" alt=""></a>
                                </figure>

                                <header class="entry-header">
                                    <h3>Marketing and Medicine</h3>

                                    <div class="post-metas d-flex flex-wrap align-items-center">
                                        <div class="posted-date"><label>Date: </label><a href="#">April 12, 2018</a></div>

                                        <div class="posted-by"><label>By: </label><a href="#">Dr. Jake Williams</a></div>

                                        <div class="post-comments"><a href="#">2 Comments</a></div>
                                    </div>
                                </header>

                                <div class="entry-content">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris scelerisque, at rutrum nulla dictum. Ut ac ligula sapien. Suspendisse cursus faucibus finibus. </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->

    <div class="subscribe-banner">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-8 offset-lg-2">
                    <h1>"We Care We Cure"</h1><br>
                    <h2>LA PRIMA</h2> 
                    <h2>Pelayanan Profesional, Ramah, Ikhlas, Mutu, dan Antusias</h2>

                    
                </div>
            </div>
        </div>
    </div>

    <footer class="site-footer">
        <div class="footer-widgets">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="foot-about">
                            <h2><a href="#"><img src="{{ url('/homepageguest/images/logo.png')}}" alt=""></a> SIDEPSI</h2>
                            <b>VISI</b>
                            <p>Menjadi Rumah Sakit terbaik yang menggunakan konsep pelayanan medis mutakhir</p>
                            <br>

                            <b>MISI</b>
                            <br>
                            <p>Sebagai Rumah Sakit yang secara komprehensif memberikan layanan kesehatan spesialistik
                            Membangun loyalitas melalui kepuasan Pelanggan dengan SDM yang profesional dan berbudaya kerja prima
                            Meningkatkan pertumbuhan pendapatan disertai pengendalian biaya secara efisien dan efektif</p>
                            <br>
                            

                            
                        </div><!-- .foot-about -->
                    </div><!-- .col -->

                    <div class="col-12 col-md-6 col-lg-4 mt-5 mt-md-0">
                        <div class="foot-contact">
                            <h2>KONTAK</h2>

                            <ul class="p-0 m-0">

                            <li>RUMAH SAKIT PUSAT PERTAMINA (RSPP)</li>

                            <li>Alamat : Jl. Kyai Maja No. 43, Kebayoran Baru, Jakarta Selatan 12120 </li>
                            <li>Telepon : (021) 7219000 </li>
                            <li>Website :  www.rspp.co.id</li>
                            <li>Information :  (021) 7219300 </li>
                           <li>Keluhan Pelanggan : (021) 7219005 </li>
                            <li>MEDIA SOSIAL </li>     
                            <li>Instagram : @rspusatpertamina </li>
                            <li>Facebook : http://www.facebook.com/rspusatpertamina</li>

                            </ul>
                        </div>
                    </div><!-- .col -->

                    <div class="col-12 col-md-6 col-lg-4 mt-5 mt-md-0">
                        <div class="foot-links">
                            <h2>Link Terkait</h2>

                            <ul class="p-0 m-0">
                                <li><a href="index.html">BERANDA</a></li>
                                <li><a href="about.html">PELAYANAN</a></li>
                                <li><a href="#">GEJALA DEPRESI</a></li>
                                <li><a href="contact.html">PROFIL PAKAR</a></li>
                                <li><a href="news.html">ARTIKEL</a></li>

                            </ul>
                        </div><!-- .foot-links -->
                    </div><!-- .col -->
                </div><!-- .row -->
            </div><!-- .container -->
        </div><!-- .footer-widgets -->
   
                    


    </footer><!-- .site-footer -->


    <script type='text/javascript' src="{{ asset ('/homepageguest/sweetalert.js')}}"></script>    
    <script type='text/javascript' src="{{ asset ('/bguest/bootstrap.min.js') }}"></script>
    <script type='text/javascript' src="{{ asset ('/bguest/bootstrap.js') }}"></script>
    <script type='text/javascript' src="{{ asset ('/homepageguest/js/jquery.js') }}"></script>
    <script type='text/javascript' src="{{ asset ('jsguest/bootstrap.bundle.min.js') }}"></script>
    <script type='text/javascript' src="{{ asset ('/jsguest/jqBootstrapValidation.js') }}"></script>
    <script type='text/javascript' src="{{ asset ('/jsguest/jqBootstrapValidation.js') }}"></script>



    <script type='text/javascript' src="{{ asset ('jsguest/jquery.easing.min.js') }}"></script>
    <script type='text/javascript' src="{{ asset('/homepageguest/js/jquery.collapsible.min.js') }}"></script>
    <script type='text/javascript' src="{{ asset('/homepageguest/js/swiper.min.js')}}"></script>
    <script type='text/javascript' src="{{ asset('/homepageguest/js/jquery.countdown.min.js')}}"></script>
    <script type='text/javascript' src="{{ asset('/homepageguest/js/circle-progress.min.js')}}"></script>
    <script type='text/javascript' src="{{ asset('/homepageguest/js/jquery.countTo.min.js')}}"></script>
    <script type='text/javascript' src="{{ asset('/homepageguest/js/jquery.barfiller.js')}}"></script>
    <script type='text/javascript' src="{{ asset('/homepageguest/js/custom.js')}}"></script>
    <script type='text/javascript' src="{{ asset('/homepage/js/jquery.min.js')}}"></script>
    <script type='text/javascript' src="{{ asset('/jsguest/agency.min.js')}}"></script>

</body>
</html>