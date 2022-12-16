
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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/pure/1.0.1/pure-min.css">
  
@endsection
 
@section('content')
<div class="row">
  <div class="col-12">
    
  </div>
</div>
<!-- Basic table -->

<section id="complex-header-datatable">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header border-bottom">
            <h2>
           
              
             <b style="text-transform: Uppercase"> CONSOLIDADO {{$tipoconsolidado}}</b>
          </div>
          
         
          <div class="card-datatable">
           
              <table id="editable" class="table table-responsive dt-complex-header  table-bordered  table-sm">
                <thead>
                  <tr>
                    <th >SEDE</th>
                    <th >JORNADA - TIPO DE RACION</th>
                    <th>1</th>                    
                    <th>2</th>
                    <th>3</th>
                    <th>4</th>
                    <th>5</th>
                    <th>6</th>
                    <th>7</th>
                    <th>8</th>
                    <th>9</th>
                    <th>10</th>
                    <th>11</th>
                    <th>12</th>
                    <th>13</th>
                    <th>14</th>
                    <th>15</th>
                    <th>16</th>
                    <th>17</th>
                    <th>18</th>
                    <th>19</th>
                    <th>20</th>
                    <th>21</th>
                    <th>22</th>
                    <th>23</th>
                    <th>24</th>
                    <th>25</th>
                    <th>26</th>
                    <th>27</th>
                    <th>28</th>
                    <th>29</th>
                    <th>30</th>
                    <th>31</th>
                    <th >N° DIAS ATENDIDOS</th>
                    <th >TOTAL RACIONES</th>
                    <th >NOVEDADES EN LAS ENTREGAS</th>
                    <th >DEVOLUCIONES</th>
                  </tr>
                  
                </thead>
                
                <tbody>
                  
                      @foreach($data as $datos)    
                      @php
                        $se = DB::table('sedes')->where('consecutivo',$datos->codigo_dane_sede)->first();
                      @endphp
                      <tr>
                        <td>{{$se->nombre}}</td>
                        <td>{{$datos->jornada_tipo_racion}}</td>
                        <td>{{$datos->dia1}}</td>
                        <td>{{$datos->dia2}}</td>
                        <td>{{$datos->dia3}}</td>
                        <td>{{$datos->dia4}}</td>
                        <td>{{$datos->dia5}}</td>
                        <td>{{$datos->dia6}}</td>
                        <td>{{$datos->dia7}}</td>
                        <td>{{$datos->dia8}}</td>
                        <td>{{$datos->dia9}}</td>
                        <td>{{$datos->dia10}}</td>
                        <td>{{$datos->dia11}}</td>
                        <td>{{$datos->dia12}}</td>
                        <td>{{$datos->dia13}}</td>
                        <td>{{$datos->dia14}}</td>
                        <td>{{$datos->dia15}}</td>
                        <td>{{$datos->dia16}}</td>
                        <td>{{$datos->dia17}}</td>
                        <td>{{$datos->dia18}}</td>
                        <td>{{$datos->dia19}}</td>
                        <td>{{$datos->dia20}}</td>
                        <td>{{$datos->dia21}}</td>
                        <td>{{$datos->dia22}}</td>
                        <td>{{$datos->dia23}}</td>
                        <td>{{$datos->dia24}}</td>
                        <td>{{$datos->dia25}}</td>
                        <td>{{$datos->dia26}}</td>
                        <td>{{$datos->dia27}}</td>
                        <td>{{$datos->dia28}}</td>
                        <td>{{$datos->dia29}}</td>
                        <td>{{$datos->dia30}}</td>
                        <td>{{$datos->dia31}}</td>
                        <td>{{$datos->N_dias_atendidos}}</td>
                        <td>{{$datos->total_raciones}}</td>
                        <td>{{$datos->novedades}}</td>
                        <td>{{$datos->devoluciones}}</td>

                      </tr>             
                     
                      @endforeach
                </tbody>
              </table>
         
            
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Modal to add new record -->
  
</section>
<!--/ Basic table -->



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
  <script src="{{ asset(mix('js/scripts/mindmup-editabletable.js')) }}"></script>
@endsection
@section('page-script')
  {{-- Page js files --}}
  
  <script type="text/javascript">
    $('#editable').editableTableWidget();
    $('#editable td.uneditable').on('change', function(evt, newValue) {
            return false;
    });
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': '{{ csrf_token() }}'
        }
    });
    $('#editable td').on('change', function(evt, newValue) {
          var newValue = parseInt(newValue);
          var sede_id = $(this).data('id');
          var dia = $(this).data('dia');
          var modalidad = $(this).data('modalidad');          
          var diasAtendidos = $(this).data('dias');
          var totalRaciones = $(this).data('totalraciones');
          var novedades = $(this).data('novedades');
          var devoluciones = $(this).data('devoluciones');

      

          if(typeof dia != 'undefined'){
            dia = dia;
          }
          
          if(typeof diasAtendidos != 'undefined'){
            diasAtendidos = newValue;
          }
          if(typeof totalRaciones != 'undefined'){
            totalRaciones = newValue;
          }
          if(typeof novedades != 'undefined'){
            novedades = newValue;
          }
          if(typeof devoluciones != 'undefined'){
            devoluciones = newValue;
          }
          
          
          
          $.get( "updateConsolidado", { 
                  value: newValue,
                  sede_id: sede_id,
                  dia: dia,
                  modalidad: modalidad,
                  diasAtendidos: diasAtendidos,
                  totalRaciones: totalRaciones,
                  novedades: novedades,
                  devoluciones: devoluciones
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
       
        $('#editable').DataTable( {
            dom: 'Bfrtip',
            buttons: [
                'copyHtml5',
                'excelHtml5',
                'csvHtml5',
                'pdfHtml5'
            ]
        } ); 
           

        sumar();
    });
    /* GUARDAR TODO DESDE LA TABLA */
    $('.guardarbt').on('click', function() {
          var sede_id = $(this).data('id');
          var modalidad = $(this).data('tipo'); 
          var dia1 = parseInt($('#'+sede_id+'-'+modalidad+'-dia1').html());
       
          var dia2 = parseInt($('#'+sede_id+'-'+modalidad+'-dia2').html());
          var dia3 = parseInt($('#'+sede_id+'-'+modalidad+'-dia3').html());
          var dia4 = parseInt($('#'+sede_id+'-'+modalidad+'-dia4').html());
          var dia5 = parseInt($('#'+sede_id+'-'+modalidad+'-dia5').html());
          var dia6 = parseInt($('#'+sede_id+'-'+modalidad+'-dia6').html());
          var dia7 = parseInt($('#'+sede_id+'-'+modalidad+'-dia7').html());
          var dia8 = parseInt($('#'+sede_id+'-'+modalidad+'-dia8').html());
          var dia9 = parseInt($('#'+sede_id+'-'+modalidad+'-dia9').html());
          var dia10 = parseInt($('#'+sede_id+'-'+modalidad+'-dia10').html());
          var dia11 = parseInt($('#'+sede_id+'-'+modalidad+'-dia11').html());
          var dia12 = parseInt($('#'+sede_id+'-'+modalidad+'-dia12').html());
          var dia13 = parseInt($('#'+sede_id+'-'+modalidad+'-dia13').html());
          var dia14 = parseInt($('#'+sede_id+'-'+modalidad+'-dia14').html());
          var dia15 = parseInt($('#'+sede_id+'-'+modalidad+'-dia15').html());
          var dia16 = parseInt($('#'+sede_id+'-'+modalidad+'-dia16').html());
          var dia17 = parseInt($('#'+sede_id+'-'+modalidad+'-dia17').html());
          var dia18 = parseInt($('#'+sede_id+'-'+modalidad+'-dia18').html());
          var dia19 = parseInt($('#'+sede_id+'-'+modalidad+'-dia19').html());
          var dia20 = parseInt($('#'+sede_id+'-'+modalidad+'-dia20').html());
          var dia21 = parseInt($('#'+sede_id+'-'+modalidad+'-dia21').html());
          var dia22 = parseInt($('#'+sede_id+'-'+modalidad+'-dia22').html());
          var dia23 = parseInt($('#'+sede_id+'-'+modalidad+'-dia23').html());
          var dia24 = parseInt($('#'+sede_id+'-'+modalidad+'-dia24').html());
          var dia25 = parseInt($('#'+sede_id+'-'+modalidad+'-dia25').html());
          var dia26 = parseInt($('#'+sede_id+'-'+modalidad+'-dia26').html());
          var dia27 = parseInt($('#'+sede_id+'-'+modalidad+'-dia27').html());
          var dia28 = parseInt($('#'+sede_id+'-'+modalidad+'-dia28').html());
          var dia29 = parseInt($('#'+sede_id+'-'+modalidad+'-dia29').html());
          var dia30 = parseInt($('#'+sede_id+'-'+modalidad+'-dia30').html());
          var dia31 = parseInt($('#'+sede_id+'-'+modalidad+'-dia31').html());                 
          var diasAtendidos = parseInt($('#'+sede_id+'-'+modalidad+'-dias').html());
          var totalRaciones = parseInt($('#'+sede_id+'-'+modalidad+'-totalRaciones').html());
          var novedades = parseInt($('#'+sede_id+'-'+modalidad+'-novedades').html());
          var devoluciones = parseInt($('#'+sede_id+'-'+modalidad+'-devoluciones').html());
          var consolidado = 1;

          
          console.log(totalRaciones);
          
          
          $.get( "updateConsolidado1", {                   
                  sede_id: sede_id,                  
                  modalidad: modalidad,
                  dia1: dia1,
                  dia2: dia2,
                  dia3: dia3,
                  dia4: dia4,
                  dia5: dia5,
                  dia6: dia6,
                  dia7: dia7,
                  dia8: dia8,
                  dia9: dia9,
                  dia10: dia10,
                  dia11: dia11,
                  dia12: dia12,
                  dia13: dia13,
                  dia14: dia14,
                  dia15: dia15,
                  dia16: dia16,
                  dia17: dia17,
                  dia18: dia18,
                  dia19: dia19,
                  dia20: dia20,
                  dia21: dia21,
                  dia22: dia22,
                  dia23: dia23,
                  dia24: dia24,
                  dia25: dia25,
                  dia26: dia26,
                  dia27: dia27,
                  dia28: dia28,
                  dia29: dia29,
                  dia30: dia30,
                  dia31: dia31,                  
                  diasAtendidos: diasAtendidos,
                  totalRaciones: totalRaciones,
                  novedades: novedades,
                  devoluciones: devoluciones,
                  consolidado: consolidado
                  })
                  .done(function( data ) {
                          console.log( "Data Loaded: " + data );
                  });     
          ;
        
    });
    
    function sumar(){
            var table = $('#editable');
            



            
            
            var tds = document.getElementById('editable').getElementsByTagName('td');
            var sum1 = 0;
            var sum2 = 0;
            var sum3 = 0;
            var sum4 = 0;
            for(var i = 0; i < tds.length; i ++) {
                if(tds[i].className == 'tg-0pky1') {
                    sum1 += isNaN(tds[i].innerHTML) ? 0 : parseInt(tds[i].innerHTML);
                }
                if(tds[i].className == 'tg-0pky2') {
                    sum2 += isNaN(tds[i].innerHTML) ? 0 : parseInt(tds[i].innerHTML);
                }
                if(tds[i].className == 'tg-0pky3') {
                    sum3 += isNaN(tds[i].innerHTML) ? 0 : parseInt(tds[i].innerHTML);
                }
                if(tds[i].className == 'tg-0pky4') {
                    sum4 += isNaN(tds[i].innerHTML) ? 0 : parseInt(tds[i].innerHTML);
                }

            }
            console.log(sum1,'-'+ sum2,'-'+sum3,'-'+sum4);
            document.getElementById('total-dias').innerHTML += '<tr><td>' + sum1 + '</td>'
              document.getElementById('total-raciones').innerHTML += '<tr><td>' + sum2 + '</td>'
                document.getElementById('total-novedades').innerHTML += '<tr><td>' + sum3 + '</td>'
                  document.getElementById('total-devoluciones').innerHTML += '<tr><td>' + sum4 + '</td>'

    }
    
    /* entregas especiales inicio */ 

    $('#editable1').editableTableWidget();
    $('#editable1 td.uneditable').on('change', function(evt, newValue) {
            return false;
    });
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': '{{ csrf_token() }}'
        }
    });
    $('#editable1 td').on('change', function(evt, newValue) {
          var newValue = parseInt(newValue);
          var sede_id = $(this).data('id');
          var dia = $(this).data('dia');
          var modalidad = $(this).data('modalidad');          
          var diasAtendidos = $(this).data('dias');
          var totalRaciones = $(this).data('totalraciones');
          var novedades = $(this).data('novedades');
          var devoluciones = $(this).data('devoluciones');

      

          if(typeof dia != 'undefined'){
            dia = dia;
          }
          
          if(typeof diasAtendidos != 'undefined'){
            diasAtendidos = newValue;
          }
          if(typeof totalRaciones != 'undefined'){
            totalRaciones = newValue;
          }
          if(typeof novedades != 'undefined'){
            novedades = newValue;
          }
          if(typeof devoluciones != 'undefined'){
            devoluciones = newValue;
          }
          
          
          
          $.get( "updateConsolidadoespecial", { 
                  value: newValue,
                  sede_id: sede_id,
                  dia: dia,
                  modalidad: modalidad,
                  diasAtendidos: diasAtendidos,
                  totalRaciones: totalRaciones,
                  novedades: novedades,
                  devoluciones: devoluciones
                  })
                  .done(function( data ) {
                          console.log( "Data Loaded: " + data );
                  });     
          ;
       
          
    });
    
    $(document).ready(function(){
      
        $.ajax({
          url: '/institucion/tabla',
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
           

       
    });
    /* GUARDAR TODO DESDE LA TABLA */
    $('.guardarbt1').on('click', function() {
          var sede_id = $(this).data('id');
          var modalidad = $(this).data('tipo'); 
          var dia1 = parseInt($('#'+sede_id+'-'+modalidad+'-dia1').html());
          var dia2 = parseInt($('#'+sede_id+'-'+modalidad+'-dia2').html());
          var dia3 = parseInt($('#'+sede_id+'-'+modalidad+'-dia3').html());
          var dia4 = parseInt($('#'+sede_id+'-'+modalidad+'-dia4').html());
          var dia5 = parseInt($('#'+sede_id+'-'+modalidad+'-dia5').html());
          var dia6 = parseInt($('#'+sede_id+'-'+modalidad+'-dia6').html());
          var dia7 = parseInt($('#'+sede_id+'-'+modalidad+'-dia7').html());
          var dia8 = parseInt($('#'+sede_id+'-'+modalidad+'-dia8').html());
          var dia9 = parseInt($('#'+sede_id+'-'+modalidad+'-dia9').html());
          var dia10 = parseInt($('#'+sede_id+'-'+modalidad+'-dia10').html());
          var dia11 = parseInt($('#'+sede_id+'-'+modalidad+'-dia11').html());
          var dia12 = parseInt($('#'+sede_id+'-'+modalidad+'-dia12').html());
          var dia13 = parseInt($('#'+sede_id+'-'+modalidad+'-dia13').html());
          var dia14 = parseInt($('#'+sede_id+'-'+modalidad+'-dia14').html());
          var dia15 = parseInt($('#'+sede_id+'-'+modalidad+'-dia15').html());
          var dia16 = parseInt($('#'+sede_id+'-'+modalidad+'-dia16').html());
          var dia17 = parseInt($('#'+sede_id+'-'+modalidad+'-dia17').html());
          var dia18 = parseInt($('#'+sede_id+'-'+modalidad+'-dia18').html());
          var dia19 = parseInt($('#'+sede_id+'-'+modalidad+'-dia19').html());
          var dia20 = parseInt($('#'+sede_id+'-'+modalidad+'-dia20').html());
          var dia21 = parseInt($('#'+sede_id+'-'+modalidad+'-dia21').html());
          var dia22 = parseInt($('#'+sede_id+'-'+modalidad+'-dia22').html());
          var dia23 = parseInt($('#'+sede_id+'-'+modalidad+'-dia23').html());
          var dia24 = parseInt($('#'+sede_id+'-'+modalidad+'-dia24').html());
          var dia25 = parseInt($('#'+sede_id+'-'+modalidad+'-dia25').html());
          var dia26 = parseInt($('#'+sede_id+'-'+modalidad+'-dia26').html());
          var dia27 = parseInt($('#'+sede_id+'-'+modalidad+'-dia27').html());
          var dia28 = parseInt($('#'+sede_id+'-'+modalidad+'-dia28').html());
          var dia29 = parseInt($('#'+sede_id+'-'+modalidad+'-dia29').html());
          var dia30 = parseInt($('#'+sede_id+'-'+modalidad+'-dia30').html());
          var dia31 = parseInt($('#'+sede_id+'-'+modalidad+'-dia31').html());                 
          var diasAtendidos = parseInt($('#'+sede_id+'-'+modalidad+'-dias').html());
          var totalRaciones = parseInt($('#'+sede_id+'-'+modalidad+'-totalRaciones').html());
          var novedades = parseInt($('#'+sede_id+'-'+modalidad+'-novedades').html());
          var devoluciones = parseInt($('#'+sede_id+'-'+modalidad+'-devoluciones').html());
          var consolidado = 1;

          
          
          
          
          $.get( "updateConsolidadoespecial", {                   
                  sede_id: sede_id,                  
                  modalidad: modalidad,
                  dia1: dia1,
                  dia2: dia2,
                  dia3: dia3,
                  dia4: dia4,
                  dia5: dia5,
                  dia6: dia6,
                  dia7: dia7,
                  dia8: dia8,
                  dia9: dia9,
                  dia10: dia10,
                  dia11: dia11,
                  dia12: dia12,
                  dia13: dia13,
                  dia14: dia14,
                  dia15: dia15,
                  dia16: dia16,
                  dia17: dia17,
                  dia18: dia18,
                  dia19: dia19,
                  dia20: dia20,
                  dia21: dia21,
                  dia22: dia22,
                  dia23: dia23,
                  dia24: dia24,
                  dia25: dia25,
                  dia26: dia26,
                  dia27: dia27,
                  dia28: dia28,
                  dia29: dia29,
                  dia30: dia30,
                  dia31: dia31,                  
                  diasAtendidos: diasAtendidos,
                  totalRaciones: totalRaciones,
                  novedades: novedades,
                  devoluciones: devoluciones,
                  consolidado: consolidado
                  })
                  .done(function( data ) {
                          console.log( "Data Loaded: " + data );
                  });     
          ;
        
    });
    
    
    
    
    

   
    </script>

@endsection
