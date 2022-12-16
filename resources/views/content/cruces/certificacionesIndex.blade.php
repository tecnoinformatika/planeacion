@extends('layouts/contentLayoutMaster')

@section('title', 'Form Layouts')

@section('vendor-style')
  <!-- vendor css files -->
  <link rel="stylesheet" href="{{ asset(mix('vendors/css/forms/wizard/bs-stepper.min.css')) }}">
  <link rel="stylesheet" href="{{ asset(mix('vendors/css/forms/select/select2.min.css')) }}">
  
@endsection
@section('page-style')
  <!-- Page css files -->
  <link rel="stylesheet" href="{{ asset(mix('css/base/plugins/forms/form-validation.css')) }}">
  <link rel="stylesheet" href="{{ asset(mix('css/base/plugins/forms/form-wizard.css')) }}">
@endsection
@section('content')
<!-- Basic Horizontal form layout section start -->
<section class="horizontal-wizard">
  <div class="bs-stepper horizontal-wizard-example">
    <div class="bs-stepper-header" role="tablist">
      <div class="step" data-target="#account-details" role="tab" id="account-details-trigger">
        <button type="button" class="step-trigger">
          <span class="bs-stepper-box">1</span>
          <span class="bs-stepper-label">
            <span class="bs-stepper-title">Certificación</span>
            <span class="bs-stepper-subtitle">Selección de sedes y modalidad para certificación</span>
          </span>
        </button>
      </div>
      <div class="line">
        <i data-feather="chevron-right" class="font-medium-2"></i>
      </div>
     
      
    </div>
    <div class="bs-stepper-content">
      <div id="account-details" class="content" role="tabpanel" aria-labelledby="account-details-trigger">
        <div class="content-header">
          <h5 class="mb-0">Filtros</h5>
          <small class="text-muted">Seleccione los datos que necesita para la certificación que desea generar</small>
        </div>
        <form action="{{ route("certificacion") }}" method="POST">
          @csrf
          <div class="row">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">Porfavor escoja las sedes que desea certificar</h4>
              </div>
              <div class="card-body">
                <div class="row">
                  <div class="col-12">
                    <p class="card-text">
                      Seleccione las que desee, puede incluso digitar el nombre de la sede para que sea mas precisa la búsqueda.
                    </p>
                  </div>
                  
                  </div>
                  <div class="col-12">
                    <label class="form-label" for="default-select-multi">Sedes</label>
                    <div class="mb-1">
                      <select class="select2 form-select" multiple="multiple" id="listadoSedes" name="sedes[]" required>
                        
                      </select>
                    </div>
                  </div>
                  
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            
            <div class="col-md-6">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title">Tipo de consolidado</h4>
                </div>
                <div class="card-body">
                  <!-- Basic Select -->
                  <div class="mb-1">
                    <label class="form-label" for="tipoconsolidado">Tipo de consolidado</label>
                    <select class="form-select" id="tipoconsolidado" name="tipoconsolidado" required>
                      <option >- Seleccione -</option>
                      <option value="1">Consolidado normal</option>
                      <option value="2">Consolidado entregas especiales</option>
                    </select>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6" id="diastencion1" style="visibility: hidden">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title">Total días de atención</h4>
                </div>
                <div class="card-body">
                  <!-- Basic Select -->
                  <div class="mb-1">
                    <label class="form-label" for="diasatencion">Dias de atención</label>
                    <input class="form-control" id="diasatencion" name="diasatencion" required>
                    
                  </div>
                </div>
              </div>
            </div>
            
            
          </div>
          <button class="btn btn-primary btn-next">
            <span class="align-middle d-sm-inline-block d-none">Generar certificación</span>
            <i data-feather="arrow-right" class="align-middle ms-sm-25 ms-0"></i>
          </button>
        </form>
       
      </div>
     
    </div>
  </div>
</section>

<!-- Basic Horizontal form layout section end -->

<!-- Basic Vertical form layout section start -->

<!-- Basic Floating Label Form section end -->
@endsection
@section('vendor-script')
  <!-- vendor files -->
  <script src="{{ asset(mix('vendors/js/forms/wizard/bs-stepper.min.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/forms/select/select2.full.min.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/forms/validation/jquery.validate.min.js')) }}"></script>
@endsection
@section('page-script')
  <!-- Page js files -->
  
  <script src="{{ asset(mix('js/scripts/forms/form-wizard.js')) }}"></script>
  <script>
    $('#tipoconsolidado').on('change', function() {
      if ($('#tipoconsolidado').val() == '2')
      {
        $('#diastencion1').css("visibility", "visible");
      }else{
        $('#diastencion1').css("visibility", "hidden");
      }
    });
    $(document).ready(function() {
        // Select2 Multiple
        $('.select2-multiple').select2({
            placeholder: "Select",
            allowClear: true
        });

   
        $.ajax({
          url: '/institucion/tabla2',
          type: 'get',
          dataType: 'json',
          success:function(response){
          
          var len = response.length;
          
          $("#listadoSedes").empty();
          for( var i = 0; i<len; i++){
            var id = response[i]['consecutivo'];
            var name = response[i]['institucion'] + " - " + response[i]['sede'];
            
            $("#listadoSedes").append("<option value='"+id+"'>"+name+"</option>");
            
            }
          }
        });
       
           
    });

</script>
@endsection
