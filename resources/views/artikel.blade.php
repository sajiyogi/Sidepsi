
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
                       

                        
            
                            
                                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="/{{url('/beranda')}}">PELAYANAN</a></li>
                                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="{{url('/beranda')}}">GEJALA DEPRESI</a></li>
                                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="{{url('/beranda')}}">Profil Pakar</a></li>
                                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="/artikel">ARTIKEL</a></li>
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
         @foreach($artikels as $artikel)
<br><br><br>
     <div class="card">
  <div class="card-header">
           <h1>{{$artikel->judul}}</h1>

  </div>
  <div class="card-body" style="text-align: center;">
    <img src="{{ URL::to('/') }}/images/{{ $artikel->gambar }}"  alt="" style="width: 400px; height: 340px; " /></td>      

    <blockquote class="blockquote mb-0" style="text-align: justify;">
     <p>
    {!! $artikel->deskripsi !!}
</p>    </blockquote>
  </div>
</div>
    <div class="accordion" id="accordionExample">
  <td> </td>
    <div class="card-header" id="headingOne">
      <h2 class="mb-0">

        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
     
    
</div>
</div>
@endforeach
<br><br><br>
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


