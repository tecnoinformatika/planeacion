@extends('layouts/contentLayoutMaster')

@section('title', 'Base de datos SIMAT')

@section('vendor-style')
  {{-- vendor css files --}}
  <link rel="stylesheet" href="{{ asset(mix('vendors/css/tables/datatable/dataTables.bootstrap5.min.css')) }}">
  <link rel="stylesheet" href="{{ asset(mix('vendors/css/tables/datatable/responsive.bootstrap5.min.css')) }}">
  <link rel="stylesheet" href="{{ asset(mix('vendors/css/pickers/flatpickr/flatpickr.min.css')) }}">
  <link rel="stylesheet" href="{{ asset(mix('vendors/css/forms/select/select2.min.css')) }}">
@endsection

@section('page-style')
{{-- Page Css files --}}
<link rel="stylesheet" type="text/css" href="{{asset('css/base/plugins/forms/pickers/form-flat-pickr.css')}}">
<link rel="stylesheet" href="{{ asset(mix('css/base/plugins/forms/form-validation.css')) }}">
<link rel="stylesheet" href="{{ asset(mix('css/base/plugins/forms/form-wizard.css')) }}">
@endsection


@section('content')

<div class="row">
  <div class="col-12">
    
  </div>
</div>
<!-- Basic table -->
<section class="bootstrap-select">

  <div class="row">
    
      <div class="col-md-12 col-12">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title">Filtros</h4>
          </div>
          <div class="card-body">
            <div class="row">
              <div class="mb-1 col-md-3">
                <label class="form-label" for="institucion">Primer Nombre</label>
                <input type="text" class="form-control" id="primerNombre" name="primerNombre" value="">
              </div>
              <div class="mb-1 col-md-3">
                <label class="form-label" for="institucion">Segundo Nombre</label>
                <input type="text" class="form-control" id="segundoNombre" name="segundoNombre" value="">
              </div>
              <div class="mb-1 col-md-3">
                <label class="form-label" for="institucion">Primer Apellido</label>
                <input type="text" class="form-control" id="primerApellido" name="primerApellido" value="">
              </div>
              <div class="mb-1 col-md-3">
                <label class="form-label" for="institucion">Segundo Apellido</label>
                <input type="text" class="form-control" id="segundoApellido" name="segundoApellido" value="">
              </div>
              
              <div class="mb-1 col-md-3">
                <label class="form-label" for="tipo">Tipo de documento</label>
                <select class="form-select" id="tipoDocumento" name="tipoDocumento" required>
                  <option value="">- Seleccione -</option>
                  <option value="&A2&">TI</option>
                  <option value="&A2&">RC</option>
                  <option value="&A2&">NES</option>
                  <option value="&A2&">PPT</option>
                  <option value="&A2&">PEP</option>
                  <option value="&A2&">TMF</option>
                  <option value="&A2&">CC</option>
                  <option value="&A2&">CE</option>
                  <option value="&A2&">VISA</option>
                  <option value="&A2&">NUIP</option>

                </select>
              </div>
              <div class="mb-1 col-md-3">
                <label class="form-label" for="institucion">Documento</label>
                <input type="text" class="form-control" id="documento" name="documento" value="">
              </div>
            </div>
            <!-- Basic Select -->
            
          </div>
        </div>
      </div>  
      <div class="col-md-12 col-12">
        <div class="card">
          <div class="card-header">
          </div>
          <div class="card-body">
            <!-- Basic Select -->
            <div class="mb-1">
              <button class="btn btn-primary waves-effect waves-float waves-light"  id="filtrar">Filtrar</button>
            </div>
          </div>
        </div>
      </div>
    
  </div>
</form>
</section>
<!-- Advanced Search -->
<section id="advanced-search-datatable">
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header border-bottom">
          <h4 class="card-title">Filtros</h4>
        </div>
        <!--Search Form -->
        
        <hr class="my-0" />
        <div class="card-datatable">
          <table class="dt-advanced-search table table-responsive table-sm" id="example">
            <thead>
              <tr>
                <th>Primer Nombre</th>
                <th>Segundo Nombre</th>
                <th>Primer Apellido</th>
                <th>Segundo Apellido</th>
                <th>Tipo de documento</th>
                <th>Documento</th>                
                <th>Género</th>
                <th>Estado</th>
                <th>Fecha de inicio</th>
                <th>Fecha de fin</th>
                <th>Motivo</th>
                <th>Institución</th>
                <th>Sede</th>
              </tr>
            </thead>
            <tbody>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</section>
<!--/ Advanced Search -->

@endsection


@section('vendor-script')
{{-- vendor files --}}
  <script src="{{ asset(mix('vendors/js/tables/datatable/jquery.dataTables.min.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/tables/datatable/dataTables.bootstrap5.min.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/tables/datatable/dataTables.responsive.min.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/tables/datatable/responsive.bootstrap5.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/pickers/flatpickr/flatpickr.min.js')) }}"></script>  
  <script src="{{ asset(mix('vendors/js/forms/select/select2.full.min.js')) }}"></script>
@endsection

@section('page-script')
  {{-- Page js files --}}
  <script src="{{ asset(mix('js/scripts/tables/table-datatables-advanced.js')) }}"></script>
  <script>
    $(document).ready(function(){
      $('#example').DataTable( {
            dom: 'Bfrtip',
            buttons: [
                'copyHtml5',
                'excelHtml5',
                'csvHtml5',
                'pdfHtml5'
            ]
        } );
    });

    
   $('body').on('click', '#filtrar', function () {
    var primerNombre = $('#primerNombre').val();
    var segundoNombre = $('#segundoNombre').val();
    var primerApellido = $('#primerApellido').val();
    var SegundoApellido = $('#SegundoApellido').val();
    var tipoDocumento = $('#tipoDocumento').val();
    var documento = $('#documento').val();
    if(typeof primerNombre == 'undefined'){
      primerNombre = '';
    }
    if(typeof segundoNombre == 'undefined'){
      segundoNombre = '';
    }
    if(typeof primerApellido == 'undefined'){
      primerApellido = '';
    }
    if(typeof segundoApellido == 'undefined'){
      segundoApellido = '';
    }
    if(typeof tipoDocumento == 'undefined'){
      tipoDocumento = '';
    }
    if(typeof documento == 'undefined'){
      documento = '';
    }
    console.log(primerNombre);
      $.ajax({
        type: "GET",
        url: "/simat/tabla",
        data: { 
            "primerNombre": primerNombre, 
            "segundoNombre": segundoNombre, 
            "primerApellido": primerApellido,
            "SegundoApellido": SegundoApellido,
            "tipoDocumento": tipoDocumento,
            "documento": documento,
        },
        contentType: "application/json; charset=utf-8",
        dataType: "json",
        success: function (data) {
            $("#example > tbody").empty();//limpia solo los registros del body
            $.each(data, function (i, item) {
              var rows ="<tr>" +
                          "<td id='nombre1'>" + item.nombre1 + "</td>" +
                          "<td id='nombre2'>" + item.nombre2 + "</td>" +
                          "<td id='apellido1'>" + item.apellido1 + "</td>" +
                          "<td id='apellido2'>" + item.apellido2 + "</td>" +
                          "<td id='tioodoc'>" + item.tioodoc + "</td>" +
                          "<td id='doc'>" + item.doc + "</td>" +
                          "<td id='genero'>" + item.genero + "</td>" +
                          "<td id='estado'>" + item.estado + "</td>" +
                          "<td id='fechaini'>" + item.fechaini + "</td>" +
                          "<td id='fechafin'>" + item.fechafin + "</td>" +
                          "<td id='motivo'>" + item.motivo + "</td>" +
                          "<td id='institucion'>" + item.institucion + "</td>" +
                          "<td id='sede'>" + item.sede + "</td>" +
                          "</tr>";
                $('#example tbody').append(rows);
            });
            console.log(data);
        },

        failure: function (data) {
            alert(data.responseText);
        },
        error: function (data) {
            alert(data.responseText);
        }

    });
  });

</script>
@endsection