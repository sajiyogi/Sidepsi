@extends('index')

@section('title')
	Jewellery
@endsection

@section('extra-css')

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />

<!-- Colorpicker Css -->
    <!-- {{ Html::style('bsbmd/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.css') }} -->

    <!-- Dropzone Css -->
    <!-- {{ Html::style('bsbmd/plugins/dropzone/dropzone.css') }} -->

    <!-- Multi Select Css -->
    <!-- {{ Html::style('bsbmd/plugins/multi-select/css/multi-select.css') }} -->

    <!-- Bootstrap Spinner Css -->
    <!-- {{ Html::style('bsbmd/plugins/jquery-spinner/css/bootstrap-spinner.css') }} -->

    <!-- Bootstrap Tagsinput Css -->
    <!-- {{ Html::style('bsbmd/plugins/bootstrap-tagsinput/bootstrap-tagsinput.css') }} -->

    <!-- Bootstrap Select Css -->
    <!-- {{ Html::style('bsbmd/plugins/bootstrap-select/css/bootstrap-select.css') }} -->

    <!-- noUISlider Css -->
    <!-- {{ Html::style('bsbmd/plugins/nouislider/nouislider.min.css') }} -->

    
	
@endsection

@section('content')
        <div class="container-fluid">
            <div class="block-header">
            </div>

            <!-- Vertical Layout -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                       
                        
                        <div class="body">                        	
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover">
                                    <thead>
                                        <tr>
                                        	<th>Id</th>
                                            <th>Nama Gejala</th>
                                            <th>Deskrkipsi</th>
                                            <th>Pilihan</th>
                                    
                                        </tr>
                                    </thead>
                                    <form  method="POST" action="{{url('/hasildeteksi')}}">
                                                        {{ csrf_field() }}
                                            <!-- <input type="hidden" name="id" value="1"> -->
                                        	@foreach($gejalas as $gejala)
                                            <tr>                                        	
                                            	<td>{{ $gejala->id }}</td>
                                                <td>{{ $gejala->nama_gejala }} </td>
                                                <td>{{ $gejala->deskripsi }} </td>
                                                <td>
                                                
                                                    <select name="pilihan[]" class="gg">
                                                    
                                          <option value="0" selected>TIDAK</option>
                                          <option value="0.3">RINGAN</option>
                                          <option value="0.8">SEDANG</option>
                                          <option value="1">BERAT</option>
                                        
                                        </select>
                                    
                                
                                    </td>
                                             </tr>
                                            @endforeach
                                             <!-- <button class="btn btn-success waves-effect" name="submit" type="submit">Submit</button>
                                                    </form> -->
                                    </tbody>
                                </table>
                                
                                                
                                                    
                                                       
                                                        
                            </div>
                             <button class="btn btn-success waves-effect" name="submit" type="submit">Submit</button>
                             <br><br><br>
                             @if( Session::has( 'success' ))
                             {{ Session::get( 'success' ) }}
                             @endif
           </form>

                                  

                        </div>


                    </div>

                </div>

            </div>
            <!-- #END# Vertical Layout -->

        </div>
@endsection

@section('extra-script')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/i18n/defaults-*.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>

<script type="text/javascript">
$(document).ready(function() {
    $('.gg').select2().val('0').trigger('change.select2');
});
</script>
	<!-- {{Html::script('bsbmd/plugins/autosize/autosize.js')}}
	{{Html::script('bsbmd/plugins/momentjs/moment.js')}}
	{{Html::script('bsbmd/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js')}}
	{{Html::script('bsbmd/js/pages/forms/basic-form-elements.js')}}	
    {{Html::script('bsbmd/plugins/jquery-validation/jquery.validate.js')}}
    {{Html::script('bsbmd/plugins/jquery-steps/jquery.steps.js')}}
    {{Html::script('bsbmd/plugins/sweetalert/sweetalert.min.js')}}
    {{Html::script('bsbmd/js/pages/forms/form-validation.js')}} -->

    <!-- Jquery DataTable Plugin Js -->
    <!-- {{Html::script('bsbmd/plugins/jquery-datatable/jquery.dataTables.js')}}	
    {{Html::script('bsbmd/plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js')}}	
    {{Html::script('bsbmd/plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js')}}	
    {{Html::script('bsbmd/plugins/jquery-datatable/extensions/export/buttons.flash.min.js')}}	
    {{Html::script('bsbmd/plugins/jquery-datatable/extensions/export/jszip.min.js')}}	
    {{Html::script('bsbmd/plugins/jquery-datatable/extensions/export/pdfmake.min.js')}}	
    {{Html::script('bsbmd/plugins/jquery-datatable/extensions/export/vfs_fonts.js')}}	
    {{Html::script('bsbmd/plugins/jquery-datatable/extensions/export/buttons.html5.min.js')}}	
    {{Html::script('bsbmd/plugins/jquery-datatable/extensions/export/buttons.print.min.js')}}	
    {{Html::script('bsbmd/js/pages/tables/jquery-datatable.js') }} -->
    
@endsection