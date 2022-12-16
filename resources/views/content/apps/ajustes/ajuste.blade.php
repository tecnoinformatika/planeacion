
@extends('layouts/contentLayoutMaster')

@section('title', 'Ajustes corte atención PAE')

@section('vendor-style')
  {{-- Vendor Css files --}}
  <link rel="stylesheet" href="{{ asset(mix('vendors/css/forms/select/select2.min.css')) }}">
  <link rel="stylesheet" href="{{ asset(mix('vendors/css/pickers/flatpickr/flatpickr.min.css')) }}">
@endsection

@section('page-style')
  {{-- Page Css files --}}
  <link rel="stylesheet" href="{{ asset(mix('css/base/plugins/forms/form-validation.css')) }}">
  <link rel="stylesheet" href="{{ asset(mix('css/base/plugins/forms/pickers/form-flat-pickr.css')) }}">
@endsection

@section('content')
<!-- Validation -->
<section class="bs-validation">
  <div class="row">
    <!-- Bootstrap Validation -->
    <div class="col-md-12 col-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Ajustes</h4>
        </div>
        <div class="card-body">
          <form novalidate method="POST" action="{{ route('guardarajuste') }}">
            @csrf
            <div class="mb-1">
              <label class="form-label" for="basic-addon-name">Total de dias de atención</label>

              <input
                type="number"
                id="totaldiasatencion"
                name="totaldiasatencion"
                class="form-control"
                placeholder="Total dias de atención"
                aria-label="totaldiasatencion"
                aria-describedby="basic-addon-name"
                required
              />              
            </div>
            <div class="mb-1">
                <label class="form-label" for="fp-default">Fecha de inicio de atención</label>
                <input type="text" id="fp-default" name="incio" class="form-control flatpickr-basic incio" placeholder="YYYY-MM-DD" />
              
            </div>
            <div class="mb-1">
                <label class="form-label" for="fp-default">Fecha de fin de atención</label>
                <input type="text" id="fp-default" name="fin" class="form-control flatpickr-basic fin" placeholder="YYYY-MM-DD" />
              
            </div>
            <div class="mb-1">
                <label class="form-label" for="fp-default">Fecha de corte del SIMAT</label>
                <input type="text" id="fp-default" name="cortesimat" class="form-control flatpickr-basic cortesimat" placeholder="YYYY-MM-DD" />
              
            </div>
        
          
            <div class="mb-1">
              <label class="d-block form-label" for="validationBioBootstrap">Nombre del programa</label>
              <input          class="form-control programa"        id="validationBioBootstrap"          name="programa"  required
              />
            </div>
       
            <button type="submit" class="btn btn-primary">Guadar +</button>
          </form>
        </div>
      </div>
    </div>
    <!-- /Bootstrap Validation -->

    <!-- jQuery Validation -->
    
    <!-- /jQuery Validation -->
  </div>
</section>
<!-- /Validation -->
@endsection

@section('vendor-script')
  <!-- vendor files -->
  <script src="{{ asset(mix('vendors/js/forms/select/select2.full.min.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/forms/validation/jquery.validate.min.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/pickers/flatpickr/flatpickr.min.js')) }}"></script>
@endsection
@section('page-script')
  <!-- Page js files -->
  <script src="{{ asset(mix('js/scripts/forms/form-validation.js')) }}"></script>
  <script src="{{ asset(mix('js/scripts/forms/pickers/form-pickers.js')) }}"></script>

  <script>
     $(document).ready(function(){
      
      $.ajax({
        url: '/ajustes/datos',
        type: 'get',
        dataType: 'json',
        success:function(response){
            console.log(response);
            var len = response.length;
            
            
           
            
            $("#totaldiasatencion").val(response.totaldiasatencion);
            $(".incio").val(response.incio);
            $(".fin").val(response.fin);
            $(".cortesimat").val(response.cortesimat);
            $(".programa").val(response.programa);
            
            
        }
      });
     
      
  });
  </script>
@endsection
