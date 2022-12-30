@extends('layouts/contentLayoutMaster')

@section('title', 'Base de datos Instituciones Oficiales')

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
                <label class="form-label" for="institucion">Nombre del establecimiento</label>
                <input type="text" class="form-control" id="nombreestablecimiento" name="nombreestablecimiento" value="">
              </div>
              <div class="mb-1 col-md-3">
                <label class="form-label" for="institucion">Código de la Sede</label>
                <input type="text" class="form-control" id="codigosede" name="codigosede" value="">
              </div>
              <div class="mb-1 col-md-3">
                <label class="form-label" for="institucion">Nombre de la Sede</label>
                <input type="text" class="form-control" id="nombresede" name="nombresede" value="">
              </div>
              <div class="mb-1 col-md-3">
                <label class="form-label" for="niveles">Niveles académicos</label>
                <select class="form-select" id="niveles" name="niveles" required>
                  <option value="">- Seleccione -</option>
                  <option value="PRIMERA INFANCIA">PRIMERA INFANCIA</option>
                  <option value="PREESCOLAR">PREESCOLAR</option>
                  <option value="BÁSICA PRIMARIA">BÁSICA PRIMARIA</option>
                  <option value="BÁSICA SECUNDARIA">BÁSICA SECUNDARIA</option>
                  <option value="MEDIA">MEDIA</option>

                </select>
              </div>
              <div class="mb-1 col-md-3">
                <label class="form-label" for="tipo">Zona</label>
                <select class="form-select" id="zona" name="zona" required>
                  <option value="">- Seleccione -</option>
                  <option value="RURAL">RURAL</option>
                  <option value="URBANA">URBANA</option>

                </select>
              </div>
              <div class="mb-1 col-md-3">
                <label class="form-label" for="tipo">Tipo de institución</label>
                <select class="form-select" id="tipo" name="tipo" required>
                  <option value="">- Seleccione -</option>
                  <option value="PRINCIPAL">PRINCIPAL</option>
                  <option value="SEDE">SEDE</option>

                </select>
              </div>
              <div class="mb-1 col-md-3">
                <label class="form-label" for="codigo">Código de establecimiento</label>
                <input type="text" class="form-control" id="codigo" name="codigo" value="">
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
                <th>Código del establecimiento</th>
                <th>Nombre del establecimiento</th>
                <th>Código de la sede</th>
                <th>Nombre de la Sede</th>
                <th>Tipo</th>                
                <th>Zona</th>
                <th>Dirección</th>
                <th>Teléfono</th>
                <th>Estado</th>
                <th>Niveles</th>
                <th>Modelos</th>
                <th>Grados</th>
                <th>Coordenadas</th>
                <th>Acciones</th>
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
<div class="modal modal-slide-in new-user-modal fade" id="modals-slide-in2">
  <div class="modal-dialog">
    <form class="add-new-user modal-content pt-0" method="POST" action="{{ route('editarInstitucion') }}" role="form" enctype="multipart/form-data">
     @csrf
      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">×</button>
      <div class="modal-header mb-1">
        <h5 class="modal-title" id="exampleModalLabel">Actualizar SEDE</h5>
      </div>
      <div class="modal-body flex-grow-1">
        <input type="hidden" id="id1" name="id1">
        
          <b id="sede1"></b><br>
          
               
        <img  id="escudo1" width="150px" style="background-color: #fff" alt="">
        <div class="mb-1">
          <label for="customFile1" class="form-label">Escudo</label>
          <input class="form-control" type="file" id="escudo" required="require" name="escudo">
        </div>
        <img  id="imagen1" width="150px" style="background-color: #fff" alt="">
        <div class="mb-1">
          <label for="customFile1" class="form-label">Imagen</label>
          <input class="form-control" type="file" id="imagen" required="require" name="imagen">
        </div>
        
        <button type="submit" class="btn btn-primary me-1 data-submit">Submit</button>
        <button type="reset" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cancel</button>
      </div>
    </form>
  </div>
</div>
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
    var nombreestablecimiento = $('#nombreestablecimiento').val();
    var codigosede = $('#codigosede').val();
    var nombresede = $('#nombresede').val();
    var niveles = $('#niveles').val();
    var tipo = $('#tipo').val();
    var zona = $('#zona').val();
    var codigo = $('#codigo').val();
    if(typeof nombreestablecimiento == 'undefined'){
      nombreestablecimiento = '';
    }
    if(typeof codigosede == 'undefined'){
      codigosede = '';
    }
    if(typeof nombresede == 'undefined'){
      nombresede = '';
    }
    if(typeof niveles == 'undefined'){
      niveles = '';
    }
    if(typeof tipo == 'undefined'){
      tipo = '';
    }
    if(typeof zona == 'undefined'){
      zona = '';
    }
    if(typeof codigo == 'undefined'){
      codigo = '';
    }
      $.ajax({
        type: "GET",
        url: "/institucionesOficiales/tabla",
        data: { 
            "nombreestablecimiento": nombreestablecimiento, 
            "codigosede": codigosede, 
            "nombresede": nombresede,
            "niveles": niveles,
            "tipo": tipo,
            "zona": zona,
            "codigo": codigo,
        },
        contentType: "application/json; charset=utf-8",
        dataType: "json",
        success: function (data) {
            $("#example > tbody").empty();//limpia solo los registros del body
            $.each(data, function (i, item) {
              var rows =  "<tr>" +
                            "<td id='CodEstable'>" + item.CodEstable + "</td>" +
                            "<td id='NomEstable'>" + item.NomEstable + "</td>" +
                            "<td id='CodSede'>" + item.CodSede + "</td>" +
                            "<td id='NomSede'>" + item.NomSede + "</td>" +
                            "<td id='Tipo'>" + item.Tipo + "</td>" +
                            "<td id='Zona'>" + item.Zona + "</td>" +
                            "<td id='Direccion'>" + item.Direccion + "</td>" +
                            "<td id='Telefono'>" + item.Telefono + "</td>" +
                            "<td id='EstadoSede'>" + item.EstadoSede + "</td>" +
                            "<td id='Niveles'>" + item.Niveles + "</td>" +
                            "<td id='Modelos'>" + item.Modelos + "</td>" +
                            "<td id='Grados'>" + item.Grados + "</td>" +
                            "<td id='coordenadas'>" + item.X + "," + item.Y + "</td>" +
                            "<td>"+
                              "<div class='btn-group'>"+                                
                                  "<a href='#' class='dropdown-item' data-bs-toggle='modal' data-bs-target='#modals-slide-in2' id='edit-customer1' data-id='" + item.id + "'>Editar</a>"+
                               "</div>"+
                            "</td>"+
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
  $('body').on('click', '#edit-customer1', function () {
      var customer_id = $(this).data('id');
      
      $.get('/institucionesOficiales/buscar/'+customer_id, function (data) {
      
          $('#btn-update').val("Update");
          $('#modals-slide-in1').modal('show');
           
          (data.escudo !== undefined) ? $('#escudo1').attr("src","/storage/"+ data.escudo) : '' ;
          (data.imagen !== undefined) ? $('#imagen1').attr("src","/storage/"+ data.imagen) : '' ;
    
      });
      $.get('/institucionesOficiales/buscar1/'+customer_id, function (data2) {
            $('#btn-update').val("Update");
            $('#modals-slide-in1').modal('show');
            $('#id1').val(data2.id);
            $('#sede1').html(data2.NomSede);   
          });

    });

</script>
@endsection