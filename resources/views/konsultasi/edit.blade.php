@extends('index')

@section('title')
@endsection

@section('extra-css')
<!-- Colorpicker Css -->
    {{ Html::style('bsbmd/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.css') }}

    <!-- Dropzone Css -->
    {{ Html::style('bsbmd/plugins/dropzone/dropzone.css') }}

    <!-- Multi Select Css -->
    {{ Html::style('bsbmd/plugins/multi-select/css/multi-select.css') }}

    <!-- Bootstrap Spinner Css -->
    {{ Html::style('bsbmd/plugins/jquery-spinner/css/bootstrap-spinner.css') }}

    <!-- Bootstrap Tagsinput Css -->
    {{ Html::style('bsbmd/plugins/bootstrap-tagsinput/bootstrap-tagsinput.css') }}

    <!-- Bootstrap Select Css -->
    {{ Html::style('bsbmd/plugins/bootstrap-select/css/bootstrap-select.css') }}

    <!-- noUISlider Css -->
    {{ Html::style('bsbmd/plugins/nouislider/nouislider.min.css') }}
    
@endsection

@section('content')
        <style type="text/css">
            .disabled {
  pointer-events: none;
  opacity: .4;
}
        </style>
        <div class="container-fluid">
            

            <!-- Vertical Layout -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header bg-pink">
                            <h2>
                                Edit Konsultasi
                            </h2>
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

                            <form id="form_validation" method="POST" action="{{ route('konsultasi.update') }}" >
                       {{ csrf_field() }}
                       <div class="row clearfix">
                                    <div class="col-sm-12">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input type="hidden" name="user" value="{{ $konsultasi->user_id }}">
                                               <input type="hidden" name="id_konsul" value="{{ $konsultasi->id }}">
                                           <input type="hidden" name="status_konsul" value="sudah dibalas">
                                                   
                                           
                                            </div>
                                            @if ($errors->has('pihal'))
                                                <label id="name-error" class="error" for="perihal">{{ $errors->first('perihal') }}</label>
                                            @endif
                                        </div>
                                    </div>                                    
                                </div> 
                                <div class="row clearfix">
                                    <div class="col-sm-12">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input type="text" class="disabled form-control" name="perihal" value="{{ $konsultasi->perihal }}"required>
                                                <label class="form-label">Name</label>
                                            </div>
                                            @if ($errors->has('perihal'))
                                                <label id="name-error" class="error" for="perihal">{{ $errors->first('perihal') }}</label>
                                            @endif
                                        </div>
                                    </div>                                    
                                </div> 

                                <div class="row clearfix">
                                    

                                    <div class="col-sm-12">
                                        <label class="disabled form-label">Deskripsi</label>

                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <textarea id="konten1" type="text" class="ckedit form-control" name="deskripsi" required>{{ $konsultasi->deskripsi }}</textarea>
                                            </div>
                                            @if ($errors->has('deskripsi'))
                                                <label id="net_wt-error" class="error" for="deskripsi">{{ $errors->first('deskripsi') }}</label>
                                            @endif
                                        </div>
                                    </div>
                                     <div class="col-sm-12">
                                        <label class="form-label">Solusi</label>

                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <textarea id="konten" type="text" class="ckedit form-control" name="solusi" required></textarea>
                                            </div>
                                            @if ($errors->has('solusi'))
                                                <label id="net_wt-error" class="error" for="deskripsi">{{ $errors->first('solusi') }}</label>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <label class="form-label">Perkembangan</label>

                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <textarea id="konten" type="text" class="ckedit form-control" name="perkembangan" required></textarea>
                                            </div>
                                            @if ($errors->has('perkembangan'))
                                                <label id="net_wt-error" class="error" for="perkembangan">{{ $errors->first('perkembangan') }}</label>
                                            @endif
                                        </div>
                                    </div>
                                
                            
                                
                            
                            </div>

                             <button class="btn btn-primary waves-effect" type="submit">SUBMIT</button>
                        
                            </form>
                            
                                
                           
                        </div>
                    </div>
                </div>
            </div>














            <!-- #END# Vertical Layout -->           
        </div>
         <script src="{{asset('ckeditor/ckeditor.js')}}"></script>

        <script>
            CKEDITOR.replace('konten1', {readOnly:true});
  var konten = document.getElementById("konten");
    CKEDITOR.replace("konten",{
    language:'en-gb'
  });

  CKEDITOR.config.allowedContent = true;
</script> 
@endsection

@section('extra-script')
    {{Html::script('bsbmd/plugins/autosize/autosize.js')}}
    {{Html::script('bsbmd/plugins/momentjs/moment.js')}}
    {{Html::script('bsbmd/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js')}}
    {{Html::script('bsbmd/js/pages/forms/basic-form-elements.js')}}
    {{Html::script('bsbmd/plugins/jquery-validation/jquery.validate.js')}}
    {{Html::script('bsbmd/plugins/jquery-steps/jquery.steps.js')}}
    {{Html::script('bsbmd/plugins/sweetalert/sweetalert.min.js')}}
    {{Html::script('bsbmd/js/pages/forms/form-validation.js')}}
@endsection
