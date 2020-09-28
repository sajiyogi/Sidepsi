
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head style="color: blue">
    <title>Health Care</title>

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
                <a class="navbar-brand js-scroll-trigger" href="/"><img class="d-block" src="{{ url('/homepageguest/images/logo.png')}}" alt="logo"><h6>SIDEPSI</a></h6>
                
                    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">MENU
          
          <i class="fas fa-bars"></i>
        </button>
                        
                            <div class="collapse navbar-collapse" id="navbarResponsive">
                                <ul class="navbar-nav text-uppercase ml-auto">
                       

                        
            
                            
                                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="{{url('/beranda')}}">PELAYANAN</a></li>
                                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="{{url('/beranda')}}">GEJALA DEPRESI</a></li>
                                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="{{url('/beranda')}}">Profil Pakar</a></li>
                                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="artikel/">ARTIKEL</a></li>
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

<div class="container" style="background: #efda9d">
    
    <section>
    
        
          <div class="col-lg-12 text-center">
            
            <h1>Kapan Harus Memeriksakan Diri Ke Psikiater?</h1>
            <br>

            <img src="{{ url('/homepageguest/images/depresi1.jpg') }}" alt="images" height="256" width="527">
            <br>
            &nbsp
            <br>
            &nbsp
            <p>&nbsp;Psikiater atau yang juga dikenal sebagai Dokter Spesialis Kedokteran Jiwa di Indonesia masih identik dengan menyembuhkan sakit jiwa serius. Tapi sebenarnya dalam kehidupan sehari-hari orang tidak menyadari telah mengalami kondisi gangguan jiwa yang mengganggu aktifitasnya sehari-hari. Jadi kapan orang perlu datang ke psikiater?<br /><br />.</p>
<h4 style="text-align: left;">1. Mengganggu Fungsi Pribadi</h4><br />
<p>Kondisi gangguan jiwa adalah sekumpulan gejala dan tanda yang dialami pasien yang cocok dengan suatu diagnosis gangguan jiwa sesuai dengan pedoman diagnosis gangguan jiwa menurut WHO (ICD 10 atau edisi Indonesianya PPDGJ III dan DSM IV-TR).</p>
<p>Disebut gangguan jiwa adalah ketika telah terjadi gangguan fungsi (hendaya/impairment) pribadinya. Misalnya karena kondisi gangguan jiwanya pasien jadi sulit beraktifitas sehari-hari, tidak bisa bekerja atau bersekolah dengan baik dan mengalami gangguan-gangguan fungsi pribadi terkait dengan gangguan jiwanya misalnya menjadi sulit tidur, sulit menjaga emosi dan sulit mengatasi kondisi lingkungan dengan keadaannya sekarang.<br /><br><h4 style="text-align: left;">2. Mengganggu Fungsi Sosial</h4><br />Kondisi gangguan jiwa biasanya tidak hanya mengganggu fungsi pribadi tetapi juga fungsi sosial. Pasien bisanya juga sulit berinteraksi dengan orang lain dan seringkali kesulitan ikut aktif dalam kondisi sosial yang bermakna.<br />Misalnya seorang yang menderita gangguan panik menjadi sulit untuk bepergian sendiri karena takut serangan paniknya muncul lagi saat sendiri, dia juga menjadi malas bertemu dengan orang lain (misalnya klien atau rekan bisnis) karena merasa tidak nyaman jika berbicara terlalu lama dan sulit konsentrasi. Jika pasien mengalami depresi biasanya ada rasa enggan dan malas untuk beraktifitas sosial.<br /><br /><h4 style="text-align: left;">3. Berlangsung dalam waktu yang bermakna</h4><br />Gangguan jiwa ada yang berlangsung secara singkat misalnya stres akut, reaksi berkabung, atau gangguan penyesuaian akibat penyakit medis yang diderita. Tetapi ada juga yang berlangsung lama.<br /><br />Gangguan depresi secara diagnosis baru bisa kita tetapkan diagnosisnya setelah gejala-gejala yang sesuai diagnosis berlangsung lebih dari dua minggu. Gejala depresi bisa berlangsung lama bila tanpa pengobatan yang tepat. Rata-rata pasien yang datang ke tempat saya bahkan sudah ada yang mengalami gejala gangguan jiwanya sejak beberapa bulan yang lalu bahkan ada yang sampai tahunan terutama pasien dengan gangguan psikosomatik.<br /><br/><h3>Kapan Perlu Rawat Inap?<h3></h3><br />Beberapa hal di bawah ini bisa menjadi patokannya.<br /><br />a. Membahayakan diri sendiri<br />Pasien yang telah membahayakan diri sendiri seharusnya dirawat inap. Contohnya adalah pasien skizofrenia yang karena gejala halusinasi dan wahamnya melukai diri sendiri. Pasien depresi yang keinginan bunuh dirinya sangat kuat.<br /><br />Pasien skizofrenia yang tidak mau makan obat dan tidak mampu mengurus dirinya sendiri termasuk makan dan merawat diri. Ini adalah beberapa hal yang perlu perawatan inap.<br /><br />b. Membahayakan orang lain<br />Pasien yang karena gangguan jiwanya secara obyektif dilihat mempunyai potensi untuk melukai orang lain juga perlu dirawat. Ini tentunya memerlukan suatu penanganan yang serius dan adanya informasi yang baik terhadap keluarga agar tidak terjadi kesalapahaman.<br /><br /></p>
          
        
    </section>
</div>
</div>
<footer class="site-footer">
        <div class="footer-widgets">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="foot-about">
                            <h2><a href="#"><img src="{{ url('/homepageguest/images/logo.png')}}" alt=""></a></h2>
                            <b>VISI</b>
                            <p>Menjadi Rumah Sakit terbaik yang menggunakan konsep pelayanan medis mutakhir</p>
                            <br>

                            <b>MISI</b>
                            <br>
                            <p>Sebagai Rumah Sakit yang secara komprehensif memberikan layanan kesehatan spesialistik
                            Membangun loyalitas melalui kepuasan Pelanggan dengan SDM yang profesional dan berbudaya kerja prima
                            Meningkatkan pertumbuhan pendapatan disertai pengendalian biaya    
                        </div><!-- .foot-about -->
                    </div><!-- .col -->

                    <div class="col-12 col-md-6 col-lg-4 mt-5 mt-md-0">
                        <div class="foot-contact">
                            <h2 style="text-align: center;">KONTAK</h2>

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
                                <li><a href="">BERANDA</a></li>
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


         @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif


    @section('script')
        {{Html::script('bsbmd/plugins/jquery/jquery.min.js')}}
        {{Html::script('bsbmd/plugins/bootstrap/js/bootstrap.js')}}
        {{Html::script('bsbmd/plugins/bootstrap-select/js/bootstrap-select.js')}}
        {{Html::script('bsbmd/plugins/jquery-slimscroll/jquery.slimscroll.js')}}
        {{Html::script('bsbmd/plugins/node-waves/waves.js')}}

    @show    
    @yield('home-script')
    @section('home-script-bottom')
        {{Html::script('bsbmd/js/admin.js')}}
        {{Html::script('bsbmd/js/demo.js')}}
    @show
</body>

</html>


