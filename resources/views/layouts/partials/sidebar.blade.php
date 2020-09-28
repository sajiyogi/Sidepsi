<section>
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
            <div class="user-info">
                <div class="image">
                    <!-- <img src="{{url('storage/profile',Auth::user()->profiles?Auth::user()->profiles->avatar:'user.png')}}" width="60" height="60" alt="User" /> -->
                </div>
                <div class="info-container">
                    <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{Auth::user()->name}}</div>
                    <div class="email">{{Auth::user()->email}}</div>
                    <div class="btn-group user-helper-dropdown">
                        <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                        <ul class="dropdown-menu pull-right">
                           <!--  <li {{ Route::is('profile.index')? 'class=active':'' }}><a href="{{ route('profile.index') }}"><i class="material-icons">person</i>Profile</a></li> -->
                        


                            <li>  
                                <a href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                                        Logout
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- #User Info -->
            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li class="header">MAIN NAVIGATION</li>
                                            @role('pakar')

                    <li {{Route::is('dashboard')? 'class=active':''}}>
                        <a href="{{route('dashboard')}}">
                            <i class="material-icons">home</i>
                            <span>Home</span>
                        </a>
                    </li>
                    @endrole
                        @role('admin')
                     
                     <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">face</i>
                            <span>Pengelolaan Hak Akses</span>
                        </a>
                        <ul class="ml-menu">                            
                            <li >
                                <a href="{{route('permissions.index')}}">Permissions</a>
                            </li>
                            <li>
                                <a href="{{ route('roles.index') }}">Roles</a>
                            </li>
                            
                        </ul>
                    </li>
                    <li>
                   <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">healing</i>
                            <span>Pengelolaan Artikel</span>
                        </a>
                     <ul class="ml-menu">
                    <li >
                                <a href="{{url('admin/admin/artikel')}}">Artikel</a>
                            </li><!-- 
                    <a href="{{url('admin/admin/artikel')}}" class="nav-link">
                      <i class="nav-icon fas fa-th"></i>
                        Artikel                
                      
                    </a> -->
                  </ul>
                  </li>
                    @endrole
                    @role('pakar') 
                     <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">face</i>
                            <span>Pengelolaan Pasien Karyawan</span>
                        </a>
                        <ul class="ml-menu">        
                        <li>                    
                                <a href="{{ route('users.index') }}">Data Pasien Karyawan</a>

                            <li>
                            </li>
                        </ul>
                    </li>
                    
                    <li>
                            
                            <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">list_alt</i>

                            <span>Pengelolaan Konsultasi</span>
                        </a>
                        <ul class="ml-menu">                                
                            <li>
                                <a href="{{ url('admin/konsultasipakar') }}">Data Konsultasi</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">chrome_reader_mode
                            </i>
                            <span>Pengelolaan Gejala</span>
                        </a>
                     <ul class="ml-menu">
                    <li>
                        <a href="{{url('admin/gejala')}}" class="menu-toggle"> Data Gejala</a>
                    </li>
                    <li>
                        <a href="{{url('admin/hasilsemuadeteksi/')}}" class="menu-toggle"> Hasil Semua Deteksi Gejala</a>
                    </li>
                    
                    
                    </ul>                                     
                        
                    
                  </ul>
                    </li>
                    <!-- <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">chrome_reader_mode
                            </i>
                            <span>Hasil Semua Deteksi</span>
                        </a>
                     <ul class="ml-menu">
                    <a href="{{url('admin/hasilsemuadeteksi/')}}" class="nav-link">
                      <i class="nav-icon fas fa-th"></i>
                     Gejala                
                
                    </a>
                  </ul>
                    </li> -->
                    @endrole
                    <!-- @role('user')
                                        <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">chrome_reader_mode
                            </i>
                            <span>Deteksi Depresi</span>
                        </a>
                     <ul class="ml-menu">
                    <a href="{{url('user/gejala')}}" class="nav-link">
                      <i class="nav-icon fas fa-th"></i>
                     Mulai Deteksi                
                
                    </a>
                  </ul>
                    </li>
                    @endrole -->
                    <!-- <li>
                            
                            <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">list_alt</i>

                            <span>Konsultasi</span>
                        </a>
                        <ul class="ml-menu">                            
                            
                            <li>
                                <a href="{{ url('user/konsultasi') }}">Data Konsultasi</a>
                            </li>
                        </ul>
                    </li> -->
                    @role('userverified')
                                        <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">chrome_reader_mode
                            </i>
                            <span>Deteksi Depresi</span>
                        </a>
                     <ul class="ml-menu">
                        <li>
                    <a href="{{url('user/gejala/verified/')}}" class="nav-link">Mulai Deteksi             
                
                    </a>
                    </li>
                  </ul>
                    </li>
                    <li>
                            
                            <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">list_alt</i>

                            <span>Konsultasi</span>
                        </a>
                        <ul class="ml-menu">                            
                            
                            <li>
                                <a href="{{ url('user/konsultasi') }}">Buat Konsultasi</a>
                            </li>
                            <li>
                                <a href="{{ url('user/konsultasi/lihat') }}">Lihat Hasil Konsultasi</a>
                            </li>

                        </ul>
                    </li>
                    


  
                        <!-- <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">chrome_reader_mode
                        </i>
                            <span>Pengelolaan Diagnosa</span>
                        </a>
                     <ul class="ml-menu">
                    <a href="{{url('admin/diagnosa')}}" class="nav-link">
                      <i class="nav-icon fas fa-th"></i>
                &nbsp &nbsp &nbsp &nbsp&nbsp&nbsp&nbsp
                    

                        Diagnosa                
                
                    </a>
                  </ul>
                    </li> -->
                     
                    @endrole

                    <!-- <li {{Route::is('typography')? 'class=active':''}}>
                        <a href="{{route('typography')}}">
                            <i class="material-icons">text_fields</i>
                            <span>Typography</span>
                        </a>
                    </li>
                    <li {{Route::is('helper')? 'class=active':''}}>
                        <a href="{{route('form')}}">
                            <i class="material-icons">build</i>
                            <span>Form</span>
                        </a>
                    </li>
                    <li {{Route::is('helper')? 'class=active':''}}>
                        <a href="{{route('helper')}}">
                            <i class="material-icons">layers</i>
                            <span>Helper Classes</span>
                        </a>
                    </li>
                    <li {{Route::is('widget')? 'class=active':''}}>
                        <a href="{{route('widget')}}">
                            <i class="material-icons">widgets</i>
                            <span>Widgets</span>
                        </a>
                    </li>
                    <li {{Route::is('table')? 'class=active':''}}>
                        <a href="{{route('table')}}">
                            <i class="material-icons">view_list</i>
                            <span>Tables</span>
                        </a>
                    </li>
                    <li {{Route::is('media')? 'class=active':''}}>
                        <a href="{{route('media')}}">
                            <i class="material-icons">perm_media</i>
                            <span>Medias</span>
                        </a>
                    </li>
                    <li {{Route::is('chart')? 'class=active':''}}>
                        <a href="{{route('chart')}}">
                            <i class="material-icons">pie_chart</i>
                            <span>Charts</span>
                        </a>
                    </li> -->
                    
                   <!--  <li class="header">LABELS</li>
                    <li>
                        <a href="javascript:void(0);">
                            <i class="material-icons col-red">donut_large</i>
                            <span>Important</span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);">
                            <i class="material-icons col-amber">donut_large</i>
                            <span>Warning</span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);">
                            <i class="material-icons col-light-blue">donut_large</i>
                            <span>Information</span>
                        </a>
                    </li> -->
                </ul>
            </div>
            <!-- #Menu -->
            <!-- Footer -->
            <div class="legal">
                <div class="copyright">
                    &copy; 2020 <a href="javascript:void(0);">SiPDesi Nangogie</a>.
                </div>
                <div class="version">
                    <b>Version: </b> 1.0.0
                </div>
            </div>
            <!-- #Footer -->
        </aside>
        <!-- #END# Left Sidebar -->
        <!-- Right Sidebar -->
        <aside id="rightsidebar" class="right-sidebar">
            <ul class="nav nav-tabs tab-nav-right" role="tablist">
                <li role="presentation" class="active"><a href="#skins" data-toggle="tab">SKINS</a></li>
                <li role="presentation"><a href="#settings" data-toggle="tab">SETTINGS</a></li>
            </ul>
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane fade in active in active" id="skins">
                    <ul class="demo-choose-skin">
                        <li data-theme="red" class="active">
                            <div class="red"></div>
                            <span>Red</span>
                        </li>
                        <li data-theme="pink">
                            <div class="pink"></div>
                            <span>Pink</span>
                        </li>
                        <li data-theme="purple">
                            <div class="purple"></div>
                            <span>Purple</span>
                        </li>
                        <li data-theme="deep-purple">
                            <div class="deep-purple"></div>
                            <span>Deep Purple</span>
                        </li>
                        <li data-theme="indigo">
                            <div class="indigo"></div>
                            <span>Indigo</span>
                        </li>
                        <li data-theme="blue">
                            <div class="blue"></div>
                            <span>Blue</span>
                        </li>
                        <li data-theme="light-blue">
                            <div class="light-blue"></div>
                            <span>Light Blue</span>
                        </li>
                        <li data-theme="cyan">
                            <div class="cyan"></div>
                            <span>Cyan</span>
                        </li>
                        <li data-theme="teal">
                            <div class="teal"></div>
                            <span>Teal</span>
                        </li>
                        <li data-theme="green">
                            <div class="green"></div>
                            <span>Green</span>
                        </li>
                        <li data-theme="light-green">
                            <div class="light-green"></div>
                            <span>Light Green</span>
                        </li>
                        <li data-theme="lime">
                            <div class="lime"></div>
                            <span>Lime</span>
                        </li>
                        <li data-theme="yellow">
                            <div class="yellow"></div>
                            <span>Yellow</span>
                        </li>
                        <li data-theme="amber">
                            <div class="amber"></div>
                            <span>Amber</span>
                        </li>
                        <li data-theme="orange">
                            <div class="orange"></div>
                            <span>Orange</span>
                        </li>
                        <li data-theme="deep-orange">
                            <div class="deep-orange"></div>
                            <span>Deep Orange</span>
                        </li>
                        <li data-theme="brown">
                            <div class="brown"></div>
                            <span>Brown</span>
                        </li>
                        <li data-theme="grey">
                            <div class="grey"></div>
                            <span>Grey</span>
                        </li>
                        <li data-theme="blue-grey">
                            <div class="blue-grey"></div>
                            <span>Blue Grey</span>
                        </li>
                        <li data-theme="black">
                            <div class="black"></div>
                            <span>Black</span>
                        </li>
                    </ul>
                </div>
                <div role="tabpanel" class="tab-pane fade" id="settings">
                    <div class="demo-settings">
                        <p>GENERAL SETTINGS</p>
                        <ul class="setting-list">
                            <li>
                                <span>Report Panel Usage</span>
                                <div class="switch">
                                    <label><input type="checkbox" checked><span class="lever"></span></label>
                                </div>
                            </li>
                            <li>
                                <span>Email Redirect</span>
                                <div class="switch">
                                    <label><input type="checkbox"><span class="lever"></span></label>
                                </div>
                            </li>
                        </ul>
                        <p>SYSTEM SETTINGS</p>
                        <ul class="setting-list">
                            <li>
                                <span>Notifications</span>
                                <div class="switch">
                                    <label><input type="checkbox" checked><span class="lever"></span></label>
                                </div>
                            </li>
                            <li>
                                <span>Auto Updates</span>
                                <div class="switch">
                                    <label><input type="checkbox" checked><span class="lever"></span></label>
                                </div>
                            </li>
                        </ul>
                        <p>ACCOUNT SETTINGS</p>
                        <ul class="setting-list">
                            <li>
                                <span>Offline</span>
                                <div class="switch">
                                    <label><input type="checkbox"><span class="lever"></span></label>
                                </div>
                            </li>
                            <li>
                                <span>Location Permission</span>
                                <div class="switch">
                                    <label><input type="checkbox" checked><span class="lever"></span></label>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </aside>
        <!-- #END# Right Sidebar -->
    </section>