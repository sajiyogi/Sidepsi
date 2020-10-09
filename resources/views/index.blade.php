<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Sistem Pakar Depresi</title>
    <!-- Favicon-->
    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <!-- Bootstrap Core Css -->
    @section('css')
        {{ Html::style('bsbmd/plugins/bootstrap/css/bootstrap.css') }}
        {{ Html::style('bsbmd/plugins/node-waves/waves.css') }}
        {{ Html::style('bsbmd/plugins/animate-css/animate.css') }}
        {{ Html::style('bsbmd/plugins/morrisjs/morris.css') }}
        {{ Html::style('bsbmd/css/style.css') }}
        {{ Html::style('bsbmd/css/themes/all-themes.css') }}

         <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet"/>
          <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    @show

    @yield('extra-css')
    <style type="text/css">
    /* Create the blue navigation bar */
.navbar {
  background-color: #3b5998;
  font-size: 22px;
  padding: 5px 10px;
}

/* Define what each icon button should look like */
.button {
  color: white;
  display: inline-block; /* Inline elements with width and height. TL;DR they make the icon buttons stack from left-to-right instead of top-to-bottom */
  position: relative; /* All 'absolute'ly positioned elements are relative to this one */
  padding: 2px 5px; /* Add some padding so it looks nice */
}

/* Make the badge float in the top right corner of the button */
.button__badge {
  background-color: #fa3e3e;
  border-radius: 2px;
  color: white;
 
  padding: 1px 3px;
  font-size: 10px;
  
  position: absolute; /* Position the badge within the relatively positioned button */
  top: 0;
  right: 0;
</style>
</head>

<body class="theme-red">
    @include('layouts.partials.loader')
    <div class="overlay"></div>
    @include('layouts.partials.header')
    @include('layouts.partials.sidebar')

    <section class="content">
         @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif


        @if(Route::is('dashboard'))
            @include('layouts.dashboard.index')
        @endif

        @yield('content')
    </section>

    @section('script')
        {{Html::script('bsbmd/plugins/jquery/jquery.min.js')}}
        {{Html::script('bsbmd/plugins/bootstrap/js/bootstrap.js')}}
        {{Html::script('bsbmd/plugins/bootstrap-select/js/bootstrap-select.js')}}
        {{Html::script('bsbmd/plugins/jquery-slimscroll/jquery.slimscroll.js')}}
        {{Html::script('bsbmd/plugins/node-waves/waves.js')}}

    @show    
    @yield('extra-script')
    @section('script-bottom')
        {{Html::script('bsbmd/js/admin.js')}}
        {{Html::script('bsbmd/js/demo.js')}}

<!--         <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 -->        
@role('userverified')
  <script>
    $(function notifi() {
    $.ajax({
    type  : 'GET',
    url   : 'user/notifikasi/',
    success :function(response){
      var isi = ''
      var data = response.notifikasi
      var notif = response.total
      
      if(notif > 0){
        console.log(notif)
        $('#notif_count').html('<div>' + notif + '</div');
        for(var i = 0; i < data.length; i++ ){
            isi += `
            <li><a href="#">`+data[i].deskripsi+`</a></li>
           `

        }
        $('#list').html(isi)
      } else {
        $('#notif_count div').remove();
      }
      if(notif == 0){
        notif = 0
        // console.log(notif)
        $('#notif_count').html('<div>' + notif + '</div');
        
      } 
    }
    }).then(function(){
    setTimeout(notifi, 3000)
    

      // for (i=0; i < data.length;i++){
      //   if(data[i].is_read != 0){
      //     newNotif++
      //     isi +=  `<a href="#" class="dropdown-item">
      //           <i class="material-icons">account_circle</i> `+ data[i].judul_notif + `
      //         </a> `

      //   }
      // }
    })
  })
  </script>
  
  <script>
    $('#seen').click(function(e){ //on add input button click
      $.ajax({
        type : 'GET',
        url : 'user/notifupdate/',
        success : function(data){
          console.log('Sukses');
        },                        // pass existing options
    });
    });
  </script>
    @endrole

  @role('pakar')
  <script>
    $(function notifi() {
    $.ajax({
    type  : 'GET',
    url   : 'user/notifikasidua/',
    success :function(response){
      var isi = ''
      var data = response.notifikasidua
      var notif = response.total
      
      if(notif > 0){
        console.log(notif)
        $('#notif_count').html('<div>' + notif + '</div');
        for(var i = 0; i < data.length; i++ ){
            isi += `
            <li><a href="#">`+data[i].deskripsi+`</a></li>
           `

        }
        $('#list').html(isi)
      } else {
        $('#notif_count div').remove();
      }
      if(notif == 0){
        notif = 0
        // console.log(notif)
        $('#notif_count').html('<div>' + notif + '</div');
        
      } 
    }
    }).then(function(){
    setTimeout(notifi, 3000)
    

      // for (i=0; i < data.length;i++){
      //   if(data[i].is_read != 0){
      //     newNotif++
      //     isi +=  `<a href="#" class="dropdown-item">
      //           <i class="material-icons">account_circle</i> `+ data[i].judul_notif + `
      //         </a> `

      //   }
      // }
    })
  })
  </script>
  <script>
    $('#seen').click(function(e){ //on add input button click
      $.ajax({
        type : 'GET',
        url : 'user/notifupdatedua/',
        success : function(data){
          console.log('Sukses');
        },                        // pass existing options
    });
    });
  </script>
  @endrole
    @show

</body>

</html>
