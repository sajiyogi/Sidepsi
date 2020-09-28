	<div class="container-fluid">
            
            @role('user')
            <div class="block-header">
                
                <h1>Selamat Datang {{Auth::user()->nama_lengkap}} <br> Anda Diharuskan melakukan konsultasi secara langsung untuk menggunakan fitur di Sistem Pakar Depresi Karyawan </h1>
                
            </div>
            @endrole

            <!-- Widgets -->
            @role('admin ||pakar')
            <div class="row clearfix">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-pink hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">people</i>
                        </div>
                        <div class="content">
                            <div class="text"><h5>Total User</h5>
                            <div class="number count">{{ $jumlahuser}}</div>
                         </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-cyan hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">featured_play_list
</i>
                        </div>
                        <div class="content">
                            <div class="text"><h5>Total Gejala</h5>
                            <div class="number count">{{ $gejala}}</div>
                         </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-light-green hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">featured_play_list</i>
                        </div>
                        <div class="content">
                            <div class="text"><h5>Total Konsultasi</h5></div>
                            <div class="number count">{{ $konsultasi}}</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-orange hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">person_add</i>
                        </div>
                        <div class="content">
                            <div class="text">Total Artikel</div>
                            <div class="number count">{{ $artikels}}</div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- #END# Widgets -->
            <!-- CPU Usage -->
            <div class="row clearfix">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <!-- <div class="card">
                        <div class="header"> -->
                           <!--  <div class="row clearfix">
                                <div class="col-xs-12 col-sm-6">
                                    <h2>CPU USAGE (%)</h2>
                                </div>
                                <div class="col-xs-12 col-sm-6 align-right">
                                    <div class="switch panel-switch-btn">
                                        <span class="m-r-10 font-12">REAL TIME</span>
                                        <label>OFF<input type="checkbox" id="realtime" checked><span class="lever switch-col-cyan"></span>ON</label>
                                    </div>
                                </div>
                            </div>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div> -->
                        
                    </div>
                </div>
            </div>
            <!-- #END# CPU Usage -->
            <div class="row clearfix">
                <!-- Visitors -->
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                    
                </div>
                <!-- #END# Answered Tickets -->
            </div>

            <div class="row clearfix">
                <!-- Task Info -->
                <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
                    <div class="card">
                        <div class="header">
                            <h2>Jumlah Total Karyawan Yang Mendeteksi: {{$hasildeteksi}}</h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-hover dashboard-task-infos">
                                    <thead>
                                        <tr>
                                            <th>Total Karyawan Terverifikasi Yang Mendeteksi</th>
                                            <th>Status</th>
                                            
                                         </tr>
                                    </thead>
                                    <tbody>
                                        
                                        <tr>
                                            <td>{{$hasildeteksiringan}}</td>
                                            <td><span class="label bg-green">Tingkat Depresi Ringan</span></td>
                                           
                                        </tr>
                                        <tr>
                                            <td>{{$hasildeteksisedang}}</td>
                                            <td><span class="label bg-orange">Tingkat Depresi Sedang</span></td>
                                            
                                        </tr>
                                        <tr>
                                            <td>{{$hasildeteksiberat}}</td>
                                            <td><span class="label bg-red">Tingkat Depresi Berat</span></td>
                                            
                                            
                                        </tr>
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- #END# Task Info -->
                <!-- Browser Usage -->
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                    <div class="card">
                        <div class="header">
                            <h2></h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <div id="donut_chart" class="dashboard-donut-chart"></div>
                        </div>
                    </div>
                </div>
                <!-- #END# Browser Usage -->
            </div>
            @endrole
        </div>

@section('extra-script')
    {{Html::script('bsbmd/plugins/jquery-countto/jquery.countTo.js')}}
    {{Html::script('bsbmd/plugins/raphael/raphael.min.js')}}
    {{Html::script('bsbmd/plugins/morrisjs/morris.js')}}
    {{Html::script('bsbmd/plugins/chartjs/Chart.bundle.js')}}
    {{Html::script('bsbmd/plugins/flot-charts/jquery.flot.js')}}
    {{Html::script('bsbmd/plugins/flot-charts/jquery.flot.resize.js')}}
    {{Html::script('bsbmd/plugins/flot-charts/jquery.flot.pie.js')}}
    {{Html::script('bsbmd/plugins/flot-charts/jquery.flot.categories.js')}}
    {{Html::script('bsbmd/plugins/flot-charts/jquery.flot.time.js')}}
    {{Html::script('bsbmd/plugins/jquery-sparkline/jquery.sparkline.js')}}
    {{Html::script('bsbmd/js/pages/index.js')}}
@endsection