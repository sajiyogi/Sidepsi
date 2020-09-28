@extends('index')

@section('title')
	Jewellery
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
        <div class="container-fluid">
            <div class="block-header">
            </div>
<!-- 'name', 'net_wt', 'gross_wt', 'stone_wt', 'other_details', 'description', 'item_image', 'caret', 'item_size', 'purity', 'height', 'width', 'discount', 'price', 'user_id']; -->
            <!-- Vertical Layout -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header bg-pink">
                            <h2>
                                Tambah Gejala
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
                           <form id="form_validation" method="POST" action="{{ route('gejala.store') }}" enctype="multipart/form-data">
                            {{ csrf_field() }}
                                <div class="row clearfix">
                                    <div class="col-sm-12">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input type="text" class="form-control" name="nama_gejala" required>
                                                <label class="form-label">Nama Gejala</label>
                                            </div>
                                            @if ($errors->has('name'))
                                                <label id="name-error" class="error" for="nama_gejala">{{ $errors->first('name') }}</label>
                                            @endif
                                        </div>
                                    </div>                                    
                                </div> 

                                <div class="row clearfix">
                                    <div class="col-sm-12">
                                        <label class="form-label">Deskripsi</label>
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <textarea id="konten" type="text" class="form-control" name="deskripsi" required></textarea>
                                                
                                            </div>
                                            @if ($errors->has('deskripsi'))
                                                <label id="net_wt-error" class="error" for="deskripsi">{{ $errors->first('deskripsi') }}</label>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-sm-4">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input type="number" class="form-control" name="nilai_pakar" required>
                                                <label class="form-label">Nilai CF Pakar ( 0 hingga 1) </label>
                                            </div>
                                            @if ($errors->has('nilai_pakar'))
                                                <label id="net_wt-error" class="error" for="deskripsi">{{ $errors->first('nilai_pakar') }}</label>
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
  var konten = document.getElementById("konten");
    CKEDITOR.replace('konten',{
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
