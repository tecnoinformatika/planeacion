
@extends('layouts/contentLayoutMaster')

@section('title', 'Cruces PAE')

@section('vendor-style')
  {{-- vendor css files --}}
  <link rel="stylesheet" href="{{ asset(mix('vendors/css/tables/datatable/dataTables.bootstrap5.min.css')) }}">
  <link rel="stylesheet" href="{{ asset(mix('vendors/css/tables/datatable/responsive.bootstrap5.min.css')) }}">
  <link rel="stylesheet" href="{{ asset(mix('vendors/css/tables/datatable/buttons.bootstrap5.min.css')) }}">
  <link rel="stylesheet" href="{{ asset(mix('vendors/css/tables/datatable/rowGroup.bootstrap5.min.css')) }}">
  <link rel="stylesheet" href="{{ asset(mix('vendors/css/pickers/flatpickr/flatpickr.min.css')) }}">
  <link rel="stylesheet" href="{{ asset(mix('vendors/css/forms/select/select2.min.css')) }}">
@endsection

@section('content')
<div class="row">
  <div class="col-12">
    
  </div>
</div>
<!-- Basic table -->
<section class="bootstrap-select">
  <form action="/cruces/estado-matriculaJson" method="GET">
  <div class="row">
    
   
      <div class="col-md-6 col-12">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title">Tipo de complemento</h4>
          </div>
          <div class="card-body">
            <!-- Basic Select -->
            <div class="mb-1">
              <label class="form-label" for="tipo">Tipo de complemento</label>
              <select class="form-select" id="tipo" name="tipo" required>
                <option value="">- Seleccione -</option>
                <option value="RPS">RPS</option>
                <option value="RI">RI</option>
              </select>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-12">
        <div class="card">
          <div class="card-header">
          </div>
          <div class="card-body">
            <!-- Basic Select -->
            <div class="mb-1">
              <button type="submit" class="btn btn-primary waves-effect waves-float waves-light"  value="Filtrar">Filtrar</button>
            </div>
          </div>
        </div>
      </div>
    
  </div>
</form>
</section>
<section>
  @if (isset($_GET['tipo']))
  <input type="hidden" id="tipo1" value="{{$_GET['tipo']}}">
  @php
    $tipo = $_GET['tipo'];
  @endphp
  @endif
  @if ($message = Session::get('success'))
  <div class="alert alert-success">
  <p id="msg">{{ $message }}</p>
  </div>
  @endif
  @php
    $mescorte = DB::table('ajustes')->first();
    $mes = date('m', strtotime($mescorte->incio));
    $mes = intval($mes);
   
  @endphp
  <div class="row" id="table-hover-row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Datos consultados</h4>
        </div>
        <div class="card-body">
         
          <p class="card-text">
            @if(isset($data[0]))
              <h2>INSTITUCIÓN Y  SEDE EDUCATIVA: {{$data[0]->insti}} - {{$data[0]->sed}}  
            @endif
          </p>
        </div>
        <div class="table-responsive">
          <table class="table table-hover table-sm table-responsive" id="example">
            <thead>
              <tr>
                <th>Sede</th>
                <th>Complemento</th>
                <th>Tipo de documento</th>
                <th>Documento</th>
                <th>Primer Nombre</th>
                <th>Segundo Nombre</th>
                <th>Primer Apellido</th>
                <th>Segundo Apellido</th>
                <th>Fecha de nacimiento</th>
                <th>Sexo</th>                          
                <th>Estado documento</th>
                <th>Estado Nombre</th>
                <th>Observación corte pasado</th> 
                <th>Observaciones</th>      
                <th>Acciones</th>
              </tr>
            </thead>
            <tbody>
              
              @if (isset($data))
              @foreach($data as $datos)
 
                <tr>
                  
                  <td class="uneditable">
                    {{$datos->sed}}
                  </td>
                  <td class="uneditable">
                    {{$datos->tipoComplemento}}
                  </td>
                  <td class="uneditable"> 
                    {{$datos->tipodoc}}</td>
                  <td class="uneditable">
                    {{$datos->numdoc}}
                  </td>
                  <td class="uneditable">
                    {{$datos->PrimerNombre}}
                  </td class="uneditable">
                  <td class="uneditable">
                    {{$datos->SegundoNombre}}
                  </td>
                  <td class="uneditable">
                    {{$datos->PrimerApellido}}
                  </td>
                  <td class="uneditable">
                    {{$datos->SegundoApellido}}
                  </td>
                  <td class="uneditable">
                    {{$datos->fechaNacimiento}}
                  </td>
                  <td class="uneditable">
                    {{$datos->sexo}}
                  </td>
                  @php
                        $consultacorte = DB::table('cortes')
                                          ->select('observacion')
                                          ->where(DB::raw('CONCAT(tipodoc,documento)'),$datos->tipodoc.$datos->numdoc)
                                          ->where('codigo_dane_sede',$datos->codsede )
                                          ->where('corte',($mes-1) )
                                          ->first();
                        
                    @endphp 
                  
                  
                    @if($datos->estado == "MATRICULADO")
                      <td class="uneditable"><span class="badge rounded-pill badge-light-success me-1">{{$datos->estado}}</span></td>
                      
                    @elseif($datos->estado == "RETIRADO")
                    <td class="uneditable"><span class="badge rounded-pill badge-light-danger me-1">{{$datos->estado}}</span></td>
              
                    @elseif($datos->estado == "GRADUADO")
                    <td class="uneditable"><span class="badge rounded-pill badge-light-warning me-1">{{$datos->estado}}</span></td>
                    @elseif($datos->estado == "REPROBADO")
                    <td class="uneditable"><span class="badge rounded-pill badge-light-warning me-1">{{$datos->estado}}</span></td>
                    
                    @elseif ($datos->estado == null)
                    <td class="uneditable"><span class="badge rounded-pill badge-light-secondary me-1"> No coincide</span></td>
                
                    @endif
                    @php
                        $consultanombre = DB::table('simats')
                                          ->select(DB::raw('CONCAT(nombre1,nombre2,apellido1,apellido2) as name,estado'))
                                          ->where(DB::raw('CONCAT(nombre1,nombre2,apellido1,apellido2)'), '=', $datos->PrimerNombre.$datos->SegundoNombre.$datos->PrimerApellido.$datos->SegundoApellido)
                                          ->first();
                        
                    @endphp 
                      @if (isset($consultanombre))
                        @if($consultanombre->estado == "MATRICULADO")
                          <td class="uneditable"><span class="badge rounded-pill badge-light-success me-1">{{$consultanombre->estado}}</span></td>
                          
                        @elseif ($consultanombre->estado == "RETIRADO")
                          <td class="uneditable"><span class="badge rounded-pill badge-light-danger me-1">{{$consultanombre->estado}}</span></td>
                  
                        @elseif ($consultanombre->estado == "GRADUADO") 
                          <td class="uneditable"><span class="badge rounded-pill badge-light-warning me-1">{{$consultanombre->estado}}</span></td>
                        
                        @elseif ($consultanombre->estado == "REPROBADO") 
                          <td class="uneditable"><span class="badge rounded-pill badge-light-warning me-1">{{$consultanombre->estado}}</span></td>
                          @endif
                      @else
                      <td class="uneditable"><span class="badge rounded-pill badge-light-secondary me-1"> No coincide</span></td>
                      @endif
                    
                      <td class="uneditable">
                        @if (isset($consultacorte))
                        {{$consultacorte->observacion}}
                        @endif
                      </td>
                      <td data-id="{{$datos->N}}" data-tipo="{{$tipo}}" 
                        @if($datos->estado == "MATRICULADO")
                     
                        data-crucedocumento="MATRICULADO" 
                        @elseif($datos->estado == "RETIRADO")
                      
                        data-crucedocumento="RETIRADO" 
                        @elseif($datos->estado == "GRADUADO")
                      
                        data-crucedocumento="GRADUADO" 
                        @elseif($datos->estado == "REPROBADO")
                      
                        data-crucedocumento="REPROBADO" 
                        
                        @elseif ($datos->estado == null)
                        data-crucedocumento="no coincide" 
                    
                        @endif
                        
                        @if (isset($consultanombre))
                        data-crucenombre="{{$consultanombre->estado}}"
                        @else
                        data-crucenombre="no coincide"
                        @endif
                        >
                        @if($datos->observacionesMatricula)
                        {{$datos->observacionesMatricula}}   
                        @else
                          @if (isset($consultacorte))
                          {{$consultacorte->observacion}}
                          @else
                          {{$datos->observacionesMatricula}}
                          @endif
                        @endif
                      </td>
                   
                    <td class="uneditable">
                    
                      
                      <button type="button" class="btn btn-outline-primary" id="edit-customer" data-bs-toggle="modal" data-bs-target="#modals-slide-in" data-id="{{ $datos->N }}">
                        Detalle
                      </button>
                      @if($tipo == 'RI')
                      <a type="button" class="btn btn-outline-primary" href="/ri/indexfiltrado/{{$datos->N}}" target="_blank">
                        Atención
                      </a>
                      @elseif($tipo == 'RPS')
                      <a type="button" class="btn btn-outline-primary" href="/rps/indexfiltrado/{{$datos->N}}" target="_blank">
                        Atención
                      </a>
                      @endif
                        
                        
                  
                  </td>
                </tr>
        
              @endforeach
            @endif
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</section>


<!--/ Basic table -->
<div class="modal modal-slide-in fade" id="modals-slide-in">
  <div class="modal-dialog sidebar-sm add-new-record modal-content pt-0">
    
     
      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">×</button>
      
      <div class="modal-body flex-grow-1">
        
        <div class="mb-1">
          <div class="card">
            <div class="card-body">
              <h5 class="mb-75">Datos del estudiante en la base de datos</h5>
               <p>             
                <h5 class="mb-75">Institución:</h5>
                <b class="card-text" id="institucion1"></b> sede <br>
                <b class="card-text" id="sede1"></b>
               </p>       
              <h5 class="mb-75">Primer coincidencia en el SIMAT</h5>
              
              <p>  
                <h5 class="mb-75">Nombre:</h5>
                <b class="card-text" id="primerNS"></b>
                <b class="card-text" id="segundoNS"></b>
                <b class="card-text" id="primerAS"></b>
                <b class="card-text" id="segundoAS"></b>
              
                <h5 class="mb-75">Institución:</h5>
                <b class="card-text" id="institucionS"></b> sede <br>
                <b class="card-text" id="sedeS"></b>
              </p>
              <p id="estadoS" class="badge rounded-pill badge-light-danger me-1"></p><br>
              Fecha de inicio: <b id="fechamatricula" ></b><br>
              Fecha de fin: <b id="fecharetiro" ></b>
            </div>
          </div>
          
        </div>  
       
        
        <button type="reset" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cerrar</button>
      </div>
    
  </div>
</div>


<!--/ Multilingual -->
@endsection


@section('vendor-script')
  {{-- vendor files --}}
  <script src="{{ asset(mix('vendors/js/tables/datatable/jquery.dataTables.min.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/tables/datatable/dataTables.bootstrap5.min.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/tables/datatable/dataTables.responsive.min.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/tables/datatable/responsive.bootstrap5.min.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/tables/datatable/datatables.checkboxes.min.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/tables/datatable/datatables.buttons.min.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/tables/datatable/jszip.min.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/tables/datatable/pdfmake.min.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/tables/datatable/vfs_fonts.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/tables/datatable/buttons.html5.min.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/tables/datatable/buttons.print.min.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/tables/datatable/dataTables.rowGroup.min.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/pickers/flatpickr/flatpickr.min.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/forms/select/select2.full.min.js')) }}"></script>
  <script src="{{ asset(mix('js/scripts/mindmup-editabletable.js')) }}"></script>
@endsection
@section('page-script')
  {{-- Page js files --}}
  <script src="{{ asset(mix('js/scripts/forms/form-select2.js')) }}"></script>
  <script type="text/javascript">
    $('#example').editableTableWidget();
    $('#example td.uneditable').on('change', function(evt, newValue) {
            return false;
    });
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': '{{ csrf_token() }}'
        }
    });
    $('#example td').on('change', function(evt, newValue) {
          var newValue = newValue;
          var id = $(this).data('id');
          var tipo = $(this).data('tipo');
          var cruceDocumento = $(this).data('crucedocumento');  
          var cruceNombre = $(this).data('crucenombre');    

          $.get( "observacion", {                   
                  id: id,
                  tipo: tipo,
                  observacion: newValue,
                  cruceDocumento: cruceDocumento,
                  cruceNombre: cruceNombre,
                  })
                  .done(function( data ) {
                          console.log( "Data Loaded: " + data );
                  });     
          ;
       
          
    });
    $(document).ready(function(){
        $.ajax({
          url: '/institucion/tabla2',
          type: 'get',
          dataType: 'json',
          success:function(response){
          
          var len = response.length;
          
          $("#institucion").empty();
          for( var i = 0; i<len; i++){
            var id = response[i]['consecutivo'];
            var name = response[i]['institucion'] + " - " + response[i]['sede'];
            
            $("#institucion").append("<option value='"+id+"'>"+name+"</option>");
            
            }
          }
        });
       
        $('#example').DataTable( {
            dom: 'Bfrtip',
            buttons: [
                'copyHtml5',
                'excelHtml5',
                'csvHtml5',
                'pdfHtml5'
            ]
        } );     
    });/* Edit customer */
    var tipo = $('#tipo1').val();
    $('body').on('click', '#edit-customer', function () {
      var customer_id = $(this).data('id');
      
      $.get('/cruces/registro/'+customer_id+'/'+tipo, function (data) {
       
      $('#btn-update').val("Update");
      $('#modals-slide-in').modal('show');
      $('#estudiante-id').val(data.id);
      $('#primerN').html(data.PRIMER_NOMBRE_DEL_TITULAR_DE_DERECHO);
      $('#segundoN').html(data.SEGUNDO_NOMBRE_DEL_TITULAR_DE_DERECHO);
      $('#primerA').html(data.PRIMER_APELLIDO_DEL_TITULAR_DE_DERECHO);
      $('#segundoA').html(data.SEGUNDO_APELLIDO_DEL_TITULAR_DE_DERECHO);
      $('#institucion1').html(data.INSTITUCION);
      $('#sede1').html(data.SEDE);
      });

      var documento_id = $('#id');
      
      $.get('/cruces/registrosimat/'+customer_id+'/'+tipo, function (data) {
        console.log(data);
      
      if(data.vacio){
        $('#tipodocu').html('');
        $('#docu').html('');
        $('#primerNS').html('');
        $('#segundoNS').html('');
        $('#primerAS').html('');
        $('#segundoAS').html('');
        $('#institucionS').html('');
        $('#sedeS').html('');
        $('#fechamatricula').html('');
        $('#fecharetiro').html('');
        $('#estadoS').html('No encontrado en el SIMAT');
      }else{
        $('#tipodocu').html(data.tioodoc);
        $('#docu').html(data.doc);
        $('#primerNS').html(data.nombre1);
        $('#segundoNS').html(data.nombre2);
        $('#primerAS').html(data.apellido1);
        $('#segundoAS').html(data.apellido2);
        $('#institucionS').html(data.institucion);
        $('#sedeS').html(data.sede);
        $('#estadoS').html(data.estado);
        $('#fechamatricula').html(data.fechaini);
        $('#fecharetiro').html(data.fechafin);
      }
     
      })
    });
    $('#btn-save').click(function(){
      var customer_id = $('#estudiante-id').val();
        var observaciones = $('#observaciones').val();
        $.ajax({
          type: "GET",
          url: "/cruces/observacion",
          data: {
          "id": customer_id,
          "tipo": tipo,
          "observacion": observaciones
        },
        success: function (data) {
          console.log(data);
          $('#msg').html('Estudiante actualizado correctamente');
          $('#msg').show();
          $('#modals-slide-in').modal('hide');
        },
        error: function (data) {
          console.log('Error:', data);
        }
        });
    });

   
    </script>

@endsection
