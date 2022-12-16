
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
              
              @if($data[0]['tipoconsolidado'] == 'normal')
              CONSOLIDADO NORMAL
              @elseif($data[0]['tipoconsolidado'] == 'especial')
              CONSOLIDADO ENTREGAS ESPECIALES
              @endif
         
            <h4 class="card-title"> {{$data[0]['simat']->institucion}}</h4>  
          </div>
            @php 
                $diashabiles = 0;             
            
                
            
                if($dias->dia_1 != 'Z')
                {
                    $diashabiles += 1;
                }
                if($dias->dia_2 != 'Z')
                {
                    $diashabiles += 1;
                }
                if($dias->dia_3 != 'Z')
                {
                    $diashabiles += 1;
                }
                if($dias->dia_4 != 'Z')
                {
                    $diashabiles += 1;
                }
                if($dias->dia_5 != 'Z')
                {
                    $diashabiles += 1;
                }                
                if($dias->dia_6 != 'Z')
                {
                    $diashabiles += 1;
                }
                if($dias->dia_7 != 'Z')
                {
                    $diashabiles += 1;
                }
                if($dias->dia_8 != 'Z')
                {
                    $diashabiles += 1;
                }
                if($dias->dia_9 != 'Z')
                {
                    $diashabiles += 1;
                }
                if($dias->dia_10 != 'Z')
                {
                    $diashabiles += 1;
                }
                if($dias->dia_11 != 'Z')
                {
                    $diashabiles += 1;
                }

                if($dias->dia_12 != 'Z')
                {
                    $diashabiles += 1;
                }
                if($dias->dia_13 != 'Z')
                {
                    $diashabiles += 1;
                }
                if($dias->dia_14 != 'Z')
                {
                    $diashabiles += 1;
                }
                if($dias->dia_15 != 'Z')
                {
                    $diashabiles += 1;
                }
                if($dias->dia_16 != 'Z')
                {
                    $diashabiles += 1;
                }
                if($dias->dia_17 != 'Z')
                {
                    $diashabiles += 1;
                }
                if($dias->dia_18 != 'Z')
                {
                    $diashabiles += 1;
                }
                if($dias->dia_19 != 'Z')
                {
                    $diashabiles += 1;
                }
                if($dias->dia_20 != 'Z')
                {
                    $diashabiles += 1;
                }
                if($dias->dia_21 != 'Z')
                {
                    $diashabiles += 1;
                }
                if($dias->dia_22 != 'Z')
                {
                    $diashabiles += 1;
                }
                if($dias->dia_23 != 'Z')
                {
                    $diashabiles += 1;
                }
                if($dias->dia_24 != 'Z')
                {
                    $diashabiles += 1;
                }
                if($dias->dia_25 != 'Z')
                {
                    $diashabiles += 1;
                }
                if($dias->dia_26 != 'Z')
                {
                    $diashabiles += 1;
                }
                if($dias->dia_27 != 'Z')
                {
                    $diashabiles += 1;
                }
                if($dias->dia_28 != 'Z')
                {
                    $diashabiles += 1;
                }
                if($dias->dia_29 != 'Z')
                {
                    $diashabiles += 1;
                }
                if($dias->dia_30 != 'Z')
                {
                    $diashabiles += 1;
                }
                if($dias->dia_31 != 'Z')
                {
                    $diashabiles += 1;
                }


                
                
            @endphp
         
         
          <div class="card-datatable">
            @if($data[0]['tipoconsolidado'] == 'normal')
              <table id="editable" class="table table-responsive dt-complex-header  table-bordered  table-sm">
                <thead>
                  <tr>
                    <th rowspan="2">SEDE</th>
                    <th rowspan="2">JORNADA - TIPO DE RACION</th>
                    <th colspan="{{$diashabiles}}">DIAS PROGRAMADOS</th>
                    <th rowspan="2">N° DIAS ATENDIDOS</th>
                    <th rowspan="2">TOTAL RACIONES</th>
                    <th rowspan="2">NOVEDADES EN LAS ENTREGAS</th>
                    <th rowspan="2">DEVOLUCIONES</th>
                    <th rowspan="2">Action</th>
                  </tr>
                  <tr>
                    <th style="display: {{ $dias->dia_1 != 'Z' ? 'table-cell' : 'none' }};">1</th>
                    <th style="display: {{ $dias->dia_2 != 'Z' ? 'table-cell' : 'none' }};">2</th>
                    <th style="display: {{ $dias->dia_3 != 'Z' ? 'table-cell' : 'none' }};">3</th>
                    <th style="display: {{ $dias->dia_4 != 'Z' ? 'table-cell' : 'none' }};">4</th>
                    <th style="display: {{ $dias->dia_5 != 'Z' ? 'table-cell' : 'none' }};">5</th>
                    <th style="display: {{ $dias->dia_6 != 'Z' ? 'table-cell' : 'none' }};">6</th>
                    <th style="display: {{ $dias->dia_7 != 'Z' ? 'table-cell' : 'none' }};">7</th>
                    <th style="display: {{ $dias->dia_8 != 'Z' ? 'table-cell' : 'none' }};">8</th>
                    <th style="display: {{ $dias->dia_9 != 'Z' ? 'table-cell' : 'none' }};">9</th>
                    <th style="display: {{ $dias->dia_10 != 'Z' ? 'table-cell' : 'none' }};">10</th>
                    <th style="display: {{ $dias->dia_11 != 'Z' ? 'table-cell' : 'none' }};">11</th>
                    <th style="display: {{ $dias->dia_12 != 'Z' ? 'table-cell' : 'none' }};">12</th>
                    <th style="display: {{ $dias->dia_13 != 'Z' ? 'table-cell' : 'none' }};">13</th>
                    <th style="display: {{ $dias->dia_14 != 'Z' ? 'table-cell' : 'none' }};">14</th>
                    <th style="display: {{ $dias->dia_15 != 'Z' ? 'table-cell' : 'none' }};">15</th>
                    <th style="display: {{ $dias->dia_16 != 'Z' ? 'table-cell' : 'none' }};">16</th>
                    <th style="display: {{ $dias->dia_17 != 'Z' ? 'table-cell' : 'none' }};">17</th>
                    <th style="display: {{ $dias->dia_18 != 'Z' ? 'table-cell' : 'none' }};">18</th>
                    <th style="display: {{ $dias->dia_19 != 'Z' ? 'table-cell' : 'none' }};">19</th>
                    <th style="display: {{ $dias->dia_20 != 'Z' ? 'table-cell' : 'none' }};">20</th>
                    <th style="display: {{ $dias->dia_21 != 'Z' ? 'table-cell' : 'none' }};">21</th>
                    <th style="display: {{ $dias->dia_22 != 'Z' ? 'table-cell' : 'none' }};">22</th>
                    <th style="display: {{ $dias->dia_23 != 'Z' ? 'table-cell' : 'none' }};">23</th>
                    <th style="display: {{ $dias->dia_24 != 'Z' ? 'table-cell' : 'none' }};">24</th>
                    <th style="display: {{ $dias->dia_25 != 'Z' ? 'table-cell' : 'none' }};">25</th>
                    <th style="display: {{ $dias->dia_26 != 'Z' ? 'table-cell' : 'none' }};">26</th>
                    <th style="display: {{ $dias->dia_27 != 'Z' ? 'table-cell' : 'none' }};">27</th>
                    <th style="display: {{ $dias->dia_28 != 'Z' ? 'table-cell' : 'none' }};">28</th>
                    <th style="display: {{ $dias->dia_29 != 'Z' ? 'table-cell' : 'none' }};">29</th>
                    <th style="display: {{ $dias->dia_30 != 'Z' ? 'table-cell' : 'none' }};">30</th>
                    <th style="display: {{ $dias->dia_31 != 'Z' ? 'table-cell' : 'none' }};">31</th>
                  </tr>
                </thead>
                <tbody>
                      @foreach($data as $datos)                    
                        @if($datos['tipo'] == 'RPI')
                          <tr>                       
                              <td class="uneditable tg-lboi" rowspan="2">{{$datos['sede']->nombre}}</td>
                              <td class="uneditable">JM-RI</td>
                              @if(isset($datos['simat']['dia1'][0]))
                              <td id="{{$datos['sede']->consecutivo}}-JM-RI-dia1" style='display: {{ $dias->dia_1 != 'Z' ? 'table-cell' : 'none' }};' data-id="{{$datos['sede']->consecutivo}}" data-dia="dia1" data-modalidad="JM-RI">{{$datos['simat']->dia1->Tipo_de_complemento = 'CAJMRI' ? $datos['simat']['dia1'][0]->dia_1 != 0 ? $datos['simat']['dia1'][0]->dia_1 + $datos['simat']['dia1'][0]->dia_1observacion : 0 : 0 }}</td>
                              <td id="{{$datos['sede']->consecutivo}}-JM-RI-dia2" style='display: {{ $dias->dia_2 != 'Z' ? 'table-cell' : 'none' }};' data-id="{{$datos['sede']->consecutivo}}" data-dia="dia2" data-modalidad="JM-RI">{{$datos['simat']->dia2->Tipo_de_complemento = 'CAJMRI' ? $datos['simat']['dia2'][0]->dia_2 != 0 ? $datos['simat']['dia2'][0]->dia_2 + $datos['simat']['dia2'][0]->dia_2observacion : 0 : 0 }}</td>
                              <td id="{{$datos['sede']->consecutivo}}-JM-RI-dia3" style='display: {{ $dias->dia_3 != 'Z' ? 'table-cell' : 'none' }};' data-id="{{$datos['sede']->consecutivo}}" data-dia="dia3" data-modalidad="JM-RI">{{$datos['simat']->dia3->Tipo_de_complemento = 'CAJMRI' ? $datos['simat']['dia3'][0]->dia_3 != 0 ? $datos['simat']['dia3'][0]->dia_3 + $datos['simat']['dia3'][0]->dia_3observacion : 0 : 0 }}</td>
                              <td id="{{$datos['sede']->consecutivo}}-JM-RI-dia4" style='display: {{ $dias->dia_4 != 'Z' ? 'table-cell' : 'none' }};' data-id="{{$datos['sede']->consecutivo}}" data-dia="dia4" data-modalidad="JM-RI">{{$datos['simat']->dia4->Tipo_de_complemento = 'CAJMRI' ? $datos['simat']['dia4'][0]->dia_4 != 0 ? $datos['simat']['dia4'][0]->dia_4 + $datos['simat']['dia4'][0]->dia_4observacion : 0 : 0 }}</td>
                              <td id="{{$datos['sede']->consecutivo}}-JM-RI-dia5" style='display: {{ $dias->dia_5 != 'Z' ? 'table-cell' : 'none' }};' data-id="{{$datos['sede']->consecutivo}}" data-dia="dia5" data-modalidad="JM-RI">{{$datos['simat']->dia5->Tipo_de_complemento = 'CAJMRI' ? $datos['simat']['dia5'][0]->dia_5 != 0 ? $datos['simat']['dia5'][0]->dia_5 + $datos['simat']['dia5'][0]->dia_5observacion : 0 : 0 }}</td>
                              <td id="{{$datos['sede']->consecutivo}}-JM-RI-dia6" style='display: {{ $dias->dia_6 != 'Z' ? 'table-cell' : 'none' }};' data-id="{{$datos['sede']->consecutivo}}" data-dia="dia6" data-modalidad="JM-RI">{{$datos['simat']->dia6->Tipo_de_complemento = 'CAJMRI' ? $datos['simat']['dia6'][0]->dia_6 != 0 ? $datos['simat']['dia6'][0]->dia_6 + $datos['simat']['dia6'][0]->dia_6observacion : 0 : 0 }}</td>
                              <td id="{{$datos['sede']->consecutivo}}-JM-RI-dia7" style='display: {{ $dias->dia_7 != 'Z' ? 'table-cell' : 'none' }};' data-id="{{$datos['sede']->consecutivo}}" data-dia="dia7" data-modalidad="JM-RI">{{$datos['simat']->dia7->Tipo_de_complemento = 'CAJMRI' ? $datos['simat']['dia7'][0]->dia_7 != 0 ? $datos['simat']['dia7'][0]->dia_7 + $datos['simat']['dia7'][0]->dia_7observacion : 0 : 0 }}</td>
                              <td id="{{$datos['sede']->consecutivo}}-JM-RI-dia8" style='display: {{ $dias->dia_8 != 'Z' ? 'table-cell' : 'none' }};' data-id="{{$datos['sede']->consecutivo}}" data-dia="dia8" data-modalidad="JM-RI">{{$datos['simat']->dia8->Tipo_de_complemento = 'CAJMRI' ? $datos['simat']['dia8'][0]->dia_8 != 0 ? $datos['simat']['dia8'][0]->dia_8 + $datos['simat']['dia8'][0]->dia_8observacion : 0 : 0 }}</td>
                              <td id="{{$datos['sede']->consecutivo}}-JM-RI-dia9" style='display: {{ $dias->dia_9 != 'Z' ? 'table-cell' : 'none' }};' data-id="{{$datos['sede']->consecutivo}}" data-dia="dia9" data-modalidad="JM-RI">{{$datos['simat']->dia9->Tipo_de_complemento = 'CAJMRI' ? $datos['simat']['dia9'][0]->dia_9 != 0 ? $datos['simat']['dia9'][0]->dia_9 + $datos['simat']['dia9'][0]->dia_9observacion : 0 : 0 }}</td>
                              <td id="{{$datos['sede']->consecutivo}}-JM-RI-dia10" style='display: {{ $dias->dia_10 != 'Z' ? 'table-cell' : 'none' }};' data-id="{{$datos['sede']->consecutivo}}" data-dia="dia10" data-modalidad="JM-RI">{{$datos['simat']->dia10->Tipo_de_complemento = 'CAJMRI' ? $datos['simat']['dia10'][0]->dia_10 != 0 ? $datos['simat']['dia10'][0]->dia_10 + $datos['simat']['dia10'][0]->dia_10observacion : 0 : 0 }}</td>
                              <td id="{{$datos['sede']->consecutivo}}-JM-RI-dia11" style='display: {{ $dias->dia_11 != 'Z' ? 'table-cell' : 'none' }};' data-id="{{$datos['sede']->consecutivo}}" data-dia="dia11" data-modalidad="JM-RI">{{$datos['simat']->dia11->Tipo_de_complemento = 'CAJMRI' ? $datos['simat']['dia11'][0]->dia_11 != 0 ? $datos['simat']['dia11'][0]->dia_11 + $datos['simat']['dia11'][0]->dia_11observacion : 0 : 0 }}</td>
                              <td id="{{$datos['sede']->consecutivo}}-JM-RI-dia12" style='display: {{ $dias->dia_12 != 'Z' ? 'table-cell' : 'none' }};' data-id="{{$datos['sede']->consecutivo}}" data-dia="dia12" data-modalidad="JM-RI">{{$datos['simat']->dia12->Tipo_de_complemento = 'CAJMRI' ? $datos['simat']['dia12'][0]->dia_12 != 0 ? $datos['simat']['dia12'][0]->dia_12 + $datos['simat']['dia12'][0]->dia_12observacion : 0 : 0 }}</td>
                              <td id="{{$datos['sede']->consecutivo}}-JM-RI-dia13" style='display: {{ $dias->dia_13 != 'Z' ? 'table-cell' : 'none' }};' data-id="{{$datos['sede']->consecutivo}}" data-dia="dia13" data-modalidad="JM-RI">{{$datos['simat']->dia13->Tipo_de_complemento = 'CAJMRI' ? $datos['simat']['dia13'][0]->dia_13 != 0 ? $datos['simat']['dia13'][0]->dia_13 + $datos['simat']['dia13'][0]->dia_13observacion : 0 : 0 }}</td>
                              <td id="{{$datos['sede']->consecutivo}}-JM-RI-dia14" style='display: {{ $dias->dia_14 != 'Z' ? 'table-cell' : 'none' }};' data-id="{{$datos['sede']->consecutivo}}" data-dia="dia14" data-modalidad="JM-RI">{{$datos['simat']->dia14->Tipo_de_complemento = 'CAJMRI' ? $datos['simat']['dia14'][0]->dia_14 != 0 ? $datos['simat']['dia14'][0]->dia_14 + $datos['simat']['dia14'][0]->dia_14observacion : 0 : 0 }}</td>
                              <td id="{{$datos['sede']->consecutivo}}-JM-RI-dia15" style='display: {{ $dias->dia_15 != 'Z' ? 'table-cell' : 'none' }};' data-id="{{$datos['sede']->consecutivo}}" data-dia="dia15" data-modalidad="JM-RI">{{$datos['simat']->dia15->Tipo_de_complemento = 'CAJMRI' ? $datos['simat']['dia15'][0]->dia_15 != 0 ? $datos['simat']['dia15'][0]->dia_15 + $datos['simat']['dia15'][0]->dia_15observacion : 0 : 0 }}</td>
                              <td id="{{$datos['sede']->consecutivo}}-JM-RI-dia16" style='display: {{ $dias->dia_16 != 'Z' ? 'table-cell' : 'none' }};' data-id="{{$datos['sede']->consecutivo}}" data-dia="dia16" data-modalidad="JM-RI">{{$datos['simat']->dia16->Tipo_de_complemento = 'CAJMRI' ? $datos['simat']['dia16'][0]->dia_16 != 0 ? $datos['simat']['dia16'][0]->dia_16 + $datos['simat']['dia16'][0]->dia_16observacion : 0 : 0 }}</td>
                              <td id="{{$datos['sede']->consecutivo}}-JM-RI-dia17" style='display: {{ $dias->dia_17 != 'Z' ? 'table-cell' : 'none' }};' data-id="{{$datos['sede']->consecutivo}}" data-dia="dia17" data-modalidad="JM-RI">{{$datos['simat']->dia17->Tipo_de_complemento = 'CAJMRI' ? $datos['simat']['dia17'][0]->dia_17 != 0 ? $datos['simat']['dia17'][0]->dia_17 + $datos['simat']['dia17'][0]->dia_17observacion : 0 : 0 }}</td>
                              <td id="{{$datos['sede']->consecutivo}}-JM-RI-dia18" style='display: {{ $dias->dia_18 != 'Z' ? 'table-cell' : 'none' }};' data-id="{{$datos['sede']->consecutivo}}" data-dia="dia18" data-modalidad="JM-RI">{{$datos['simat']->dia18->Tipo_de_complemento = 'CAJMRI' ? $datos['simat']['dia18'][0]->dia_18 != 0 ? $datos['simat']['dia18'][0]->dia_18 + $datos['simat']['dia18'][0]->dia_18observacion : 0 : 0 }}</td>
                              <td id="{{$datos['sede']->consecutivo}}-JM-RI-dia19" style='display: {{ $dias->dia_19 != 'Z' ? 'table-cell' : 'none' }};' data-id="{{$datos['sede']->consecutivo}}" data-dia="dia19" data-modalidad="JM-RI">{{$datos['simat']->dia19->Tipo_de_complemento = 'CAJMRI' ? $datos['simat']['dia19'][0]->dia_19 != 0 ? $datos['simat']['dia19'][0]->dia_19 + $datos['simat']['dia19'][0]->dia_19observacion : 0 : 0 }}</td>
                              <td id="{{$datos['sede']->consecutivo}}-JM-RI-dia20" style='display: {{ $dias->dia_20 != 'Z' ? 'table-cell' : 'none' }};' data-id="{{$datos['sede']->consecutivo}}" data-dia="dia20" data-modalidad="JM-RI">{{$datos['simat']->dia20->Tipo_de_complemento = 'CAJMRI' ? $datos['simat']['dia20'][0]->dia_20 != 0 ? $datos['simat']['dia20'][0]->dia_20 + $datos['simat']['dia20'][0]->dia_20observacion : 0 : 0 }}</td>
                              <td id="{{$datos['sede']->consecutivo}}-JM-RI-dia21" style='display: {{ $dias->dia_21 != 'Z' ? 'table-cell' : 'none' }};' data-id="{{$datos['sede']->consecutivo}}" data-dia="dia21" data-modalidad="JM-RI">{{$datos['simat']->dia21->Tipo_de_complemento = 'CAJMRI' ? $datos['simat']['dia21'][0]->dia_21 != 0 ? $datos['simat']['dia21'][0]->dia_21 + $datos['simat']['dia21'][0]->dia_21observacion : 0 : 0 }}</td>
                              <td id="{{$datos['sede']->consecutivo}}-JM-RI-dia22" style='display: {{ $dias->dia_22 != 'Z' ? 'table-cell' : 'none' }};' data-id="{{$datos['sede']->consecutivo}}" data-dia="dia22" data-modalidad="JM-RI">{{$datos['simat']->dia22->Tipo_de_complemento = 'CAJMRI' ? $datos['simat']['dia22'][0]->dia_22 != 0 ? $datos['simat']['dia22'][0]->dia_22 + $datos['simat']['dia22'][0]->dia_22observacion : 0 : 0 }}</td>
                              <td id="{{$datos['sede']->consecutivo}}-JM-RI-dia23" style='display: {{ $dias->dia_23 != 'Z' ? 'table-cell' : 'none' }};' data-id="{{$datos['sede']->consecutivo}}" data-dia="dia23" data-modalidad="JM-RI">{{$datos['simat']->dia23->Tipo_de_complemento = 'CAJMRI' ? $datos['simat']['dia23'][0]->dia_23 != 0 ? $datos['simat']['dia23'][0]->dia_23 + $datos['simat']['dia23'][0]->dia_23observacion : 0 : 0 }}</td>
                              <td id="{{$datos['sede']->consecutivo}}-JM-RI-dia24" style='display: {{ $dias->dia_24 != 'Z' ? 'table-cell' : 'none' }};' data-id="{{$datos['sede']->consecutivo}}" data-dia="dia24" data-modalidad="JM-RI">{{$datos['simat']->dia24->Tipo_de_complemento = 'CAJMRI' ? $datos['simat']['dia24'][0]->dia_24 != 0 ? $datos['simat']['dia24'][0]->dia_24 + $datos['simat']['dia24'][0]->dia_24observacion : 0 : 0 }}</td>
                              <td id="{{$datos['sede']->consecutivo}}-JM-RI-dia25" style='display: {{ $dias->dia_25 != 'Z' ? 'table-cell' : 'none' }};' data-id="{{$datos['sede']->consecutivo}}" data-dia="dia25" data-modalidad="JM-RI">{{$datos['simat']->dia25->Tipo_de_complemento = 'CAJMRI' ? $datos['simat']['dia25'][0]->dia_25 != 0 ? $datos['simat']['dia25'][0]->dia_25 + $datos['simat']['dia25'][0]->dia_25observacion : 0 : 0 }}</td>
                              <td id="{{$datos['sede']->consecutivo}}-JM-RI-dia26" style='display: {{ $dias->dia_26 != 'Z' ? 'table-cell' : 'none' }};' data-id="{{$datos['sede']->consecutivo}}" data-dia="dia26" data-modalidad="JM-RI">{{$datos['simat']->dia26->Tipo_de_complemento = 'CAJMRI' ? $datos['simat']['dia26'][0]->dia_26 != 0 ? $datos['simat']['dia26'][0]->dia_26 + $datos['simat']['dia26'][0]->dia_26observacion : 0 : 0 }}</td>
                              <td id="{{$datos['sede']->consecutivo}}-JM-RI-dia27" style='display: {{ $dias->dia_27 != 'Z' ? 'table-cell' : 'none' }};' data-id="{{$datos['sede']->consecutivo}}" data-dia="dia27" data-modalidad="JM-RI">{{$datos['simat']->dia27->Tipo_de_complemento = 'CAJMRI' ? $datos['simat']['dia27'][0]->dia_27 != 0 ? $datos['simat']['dia27'][0]->dia_27 + $datos['simat']['dia27'][0]->dia_27observacion : 0 : 0 }}</td>
                              <td id="{{$datos['sede']->consecutivo}}-JM-RI-dia28" style='display: {{ $dias->dia_28 != 'Z' ? 'table-cell' : 'none' }};' data-id="{{$datos['sede']->consecutivo}}" data-dia="dia28" data-modalidad="JM-RI">{{$datos['simat']->dia28->Tipo_de_complemento = 'CAJMRI' ? $datos['simat']['dia28'][0]->dia_28 != 0 ? $datos['simat']['dia28'][0]->dia_28 + $datos['simat']['dia28'][0]->dia_28observacion : 0 : 0 }}</td>
                              <td id="{{$datos['sede']->consecutivo}}-JM-RI-dia29" style='display: {{ $dias->dia_29 != 'Z' ? 'table-cell' : 'none' }};' data-id="{{$datos['sede']->consecutivo}}" data-dia="dia29" data-modalidad="JM-RI">{{$datos['simat']->dia29->Tipo_de_complemento = 'CAJMRI' ? $datos['simat']['dia29'][0]->dia_29 != 0 ? $datos['simat']['dia29'][0]->dia_29 + $datos['simat']['dia29'][0]->dia_29observacion : 0 : 0 }}</td>
                              <td id="{{$datos['sede']->consecutivo}}-JM-RI-dia30" style='display: {{ $dias->dia_30 != 'Z' ? 'table-cell' : 'none' }};' data-id="{{$datos['sede']->consecutivo}}" data-dia="dia30" data-modalidad="JM-RI">{{$datos['simat']->dia30->Tipo_de_complemento = 'CAJMRI' ? $datos['simat']['dia30'][0]->dia_30 != 0 ? $datos['simat']['dia30'][0]->dia_30 + $datos['simat']['dia30'][0]->dia_30observacion : 0 : 0 }}</td>
                              <td id="{{$datos['sede']->consecutivo}}-JM-RI-dia31" style='display: {{ $dias->dia_31 != 'Z' ? 'table-cell' : 'none' }};' data-id="{{$datos['sede']->consecutivo}}" data-dia="dia31" data-modalidad="JM-RI">{{$datos['simat']->dia31->Tipo_de_complemento = 'CAJMRI' ? $datos['simat']['dia31'][0]->dia_31 != 0 ? $datos['simat']['dia31'][0]->dia_31 + $datos['simat']['dia31'][0]->dia_31observacion : 0 : 0 }}</td>
                              <td id="{{$datos['sede']->consecutivo}}-JM-RI-dias" class="tg-0pky1" data-id="{{$datos['sede']->consecutivo}}" data-dias="diasAtendidos" data-modalidad="JM-RI">
                                @php
                                $suma = 0; 
                                $suma += $datos['simat']['dia1'][0]->dia_1 != 0 ? 1 : 0;
                                $suma += $datos['simat']['dia2'][0]->dia_2 != 0 ? 1 : 0;
                                $suma += $datos['simat']['dia3'][0]->dia_3 != 0 ? 1 : 0;
                                $suma += $datos['simat']['dia4'][0]->dia_4 != 0 ? 1 : 0;
                                $suma += $datos['simat']['dia5'][0]->dia_5 != 0 ? 1 : 0;
                                $suma += $datos['simat']['dia6'][0]->dia_6 != 0 ? 1 : 0;
                                $suma += $datos['simat']['dia7'][0]->dia_7 != 0 ? 1 : 0;
                                $suma += $datos['simat']['dia8'][0]->dia_8 != 0 ? 1 : 0;
                                $suma += $datos['simat']['dia9'][0]->dia_9 != 0 ? 1 : 0;
                                $suma += $datos['simat']['dia10'][0]->dia_10 != 0 ? 1 : 0;
                                $suma += $datos['simat']['dia11'][0]->dia_11 != 0 ? 1 : 0;
                                $suma += $datos['simat']['dia12'][0]->dia_12 != 0 ? 1 : 0;
                                $suma += $datos['simat']['dia13'][0]->dia_13 != 0 ? 1 : 0;
                                $suma += $datos['simat']['dia14'][0]->dia_14 != 0 ? 1 : 0;
                                $suma += $datos['simat']['dia15'][0]->dia_15 != 0 ? 1 : 0;
                                $suma += $datos['simat']['dia16'][0]->dia_16 != 0 ? 1 : 0;
                                $suma += $datos['simat']['dia17'][0]->dia_17 != 0 ? 1 : 0;
                                $suma += $datos['simat']['dia18'][0]->dia_18 != 0 ? 1 : 0;
                                $suma += $datos['simat']['dia19'][0]->dia_19 != 0 ? 1 : 0;
                                $suma += $datos['simat']['dia20'][0]->dia_20 != 0 ? 1 : 0;
                                $suma += $datos['simat']['dia21'][0]->dia_21 != 0 ? 1 : 0;
                                $suma += $datos['simat']['dia22'][0]->dia_22 != 0 ? 1 : 0;
                                $suma += $datos['simat']['dia23'][0]->dia_23 != 0 ? 1 : 0;
                                $suma += $datos['simat']['dia24'][0]->dia_24 != 0 ? 1 : 0;
                                $suma += $datos['simat']['dia25'][0]->dia_25 != 0 ? 1 : 0;
                                $suma += $datos['simat']['dia26'][0]->dia_26 != 0 ? 1 : 0;
                                $suma += $datos['simat']['dia27'][0]->dia_27 != 0 ? 1 : 0;
                                $suma += $datos['simat']['dia28'][0]->dia_28 != 0 ? 1 : 0;
                                $suma += $datos['simat']['dia29'][0]->dia_29 != 0 ? 1 : 0;
                                $suma += $datos['simat']['dia30'][0]->dia_30 != 0 ? 1 : 0;
                                $suma += $datos['simat']['dia31'][0]->dia_31 != 0 ? 1 : 0;
      
                                @endphp
                                {{$suma}}
                              </td>
                              <td id="{{$datos['sede']->consecutivo}}-JM-RI-totalRaciones" class="tg-0pky2" data-id="{{$datos['sede']->consecutivo}}" data-totalraciones="totalRaciones" data-modalidad="JM-RI">
                                @php
                                $suma1 = 0; 
                                $suma1 += $datos['simat']['dia1'][0]->dia_1 != 0 ? $datos['simat']['dia1'][0]->dia_1 + $datos['simat']['dia1'][0]->dia_1observacion : 0;
                                $suma1 += $datos['simat']['dia2'][0]->dia_2 != 0 ? $datos['simat']['dia2'][0]->dia_2 + $datos['simat']['dia2'][0]->dia_2observacion : 0;
                                $suma1 += $datos['simat']['dia3'][0]->dia_3 != 0 ? $datos['simat']['dia3'][0]->dia_3 + $datos['simat']['dia3'][0]->dia_3observacion : 0;
                                $suma1 += $datos['simat']['dia4'][0]->dia_4 != 0 ? $datos['simat']['dia4'][0]->dia_4 + $datos['simat']['dia4'][0]->dia_4observacion : 0;
                                $suma1 += $datos['simat']['dia5'][0]->dia_5 != 0 ? $datos['simat']['dia5'][0]->dia_5 + $datos['simat']['dia5'][0]->dia_5observacion : 0;
                                $suma1 += $datos['simat']['dia6'][0]->dia_6 != 0 ? $datos['simat']['dia6'][0]->dia_6 + $datos['simat']['dia6'][0]->dia_6observacion : 0;
                                $suma1 += $datos['simat']['dia7'][0]->dia_7 != 0 ? $datos['simat']['dia7'][0]->dia_7 + $datos['simat']['dia7'][0]->dia_7observacion : 0;
                                $suma1 += $datos['simat']['dia8'][0]->dia_8 != 0 ? $datos['simat']['dia8'][0]->dia_8 + $datos['simat']['dia8'][0]->dia_8observacion : 0;
                                $suma1 += $datos['simat']['dia9'][0]->dia_9 != 0 ? $datos['simat']['dia9'][0]->dia_9 + $datos['simat']['dia9'][0]->dia_9observacion : 0;
                                $suma1 += $datos['simat']['dia10'][0]->dia_10 != 0 ? $datos['simat']['dia10'][0]->dia_10 + $datos['simat']['dia10'][0]->dia_10observacion : 0;
                                $suma1 += $datos['simat']['dia11'][0]->dia_11 != 0 ? $datos['simat']['dia11'][0]->dia_11 + $datos['simat']['dia11'][0]->dia_11observacion : 0;
                                $suma1 += $datos['simat']['dia12'][0]->dia_12 != 0 ? $datos['simat']['dia12'][0]->dia_12 + $datos['simat']['dia12'][0]->dia_12observacion : 0;
                                $suma1 += $datos['simat']['dia13'][0]->dia_13 != 0 ? $datos['simat']['dia13'][0]->dia_13 + $datos['simat']['dia13'][0]->dia_13observacion : 0;
                                $suma1 += $datos['simat']['dia14'][0]->dia_14 != 0 ? $datos['simat']['dia14'][0]->dia_14 + $datos['simat']['dia14'][0]->dia_14observacion : 0;
                                $suma1 += $datos['simat']['dia15'][0]->dia_15 != 0 ? $datos['simat']['dia15'][0]->dia_15 + $datos['simat']['dia15'][0]->dia_15observacion : 0;
                                $suma1 += $datos['simat']['dia16'][0]->dia_16 != 0 ? $datos['simat']['dia16'][0]->dia_16 + $datos['simat']['dia16'][0]->dia_16observacion : 0;
                                $suma1 += $datos['simat']['dia17'][0]->dia_17 != 0 ? $datos['simat']['dia17'][0]->dia_17 + $datos['simat']['dia17'][0]->dia_17observacion : 0;
                                $suma1 += $datos['simat']['dia18'][0]->dia_18 != 0 ? $datos['simat']['dia18'][0]->dia_18 + $datos['simat']['dia18'][0]->dia_18observacion : 0;
                                $suma1 += $datos['simat']['dia19'][0]->dia_19 != 0 ? $datos['simat']['dia19'][0]->dia_19 + $datos['simat']['dia19'][0]->dia_19observacion : 0;
                                $suma1 += $datos['simat']['dia20'][0]->dia_20 != 0 ? $datos['simat']['dia20'][0]->dia_20 + $datos['simat']['dia20'][0]->dia_20observacion : 0;
                                $suma1 += $datos['simat']['dia21'][0]->dia_21 != 0 ? $datos['simat']['dia21'][0]->dia_21 + $datos['simat']['dia21'][0]->dia_21observacion : 0;
                                $suma1 += $datos['simat']['dia22'][0]->dia_22 != 0 ? $datos['simat']['dia22'][0]->dia_22 + $datos['simat']['dia22'][0]->dia_22observacion : 0;
                                $suma1 += $datos['simat']['dia23'][0]->dia_23 != 0 ? $datos['simat']['dia23'][0]->dia_23 + $datos['simat']['dia23'][0]->dia_23observacion : 0;
                                $suma1 += $datos['simat']['dia24'][0]->dia_24 != 0 ? $datos['simat']['dia24'][0]->dia_24 + $datos['simat']['dia24'][0]->dia_24observacion : 0;
                                $suma1 += $datos['simat']['dia25'][0]->dia_25 != 0 ? $datos['simat']['dia25'][0]->dia_25 + $datos['simat']['dia25'][0]->dia_25observacion : 0;
                                $suma1 += $datos['simat']['dia26'][0]->dia_26 != 0 ? $datos['simat']['dia26'][0]->dia_26 + $datos['simat']['dia26'][0]->dia_26observacion : 0;
                                $suma1 += $datos['simat']['dia27'][0]->dia_27 != 0 ? $datos['simat']['dia27'][0]->dia_27 + $datos['simat']['dia27'][0]->dia_27observacion : 0;
                                $suma1 += $datos['simat']['dia28'][0]->dia_28 != 0 ? $datos['simat']['dia28'][0]->dia_28 + $datos['simat']['dia28'][0]->dia_28observacion : 0;
                                $suma1 += $datos['simat']['dia29'][0]->dia_29 != 0 ? $datos['simat']['dia29'][0]->dia_29 + $datos['simat']['dia29'][0]->dia_29observacion : 0;
                                $suma1 += $datos['simat']['dia30'][0]->dia_30 != 0 ? $datos['simat']['dia30'][0]->dia_30 + $datos['simat']['dia30'][0]->dia_30observacion : 0;
                                $suma1 += $datos['simat']['dia31'][0]->dia_31 != 0 ? $datos['simat']['dia31'][0]->dia_31 + $datos['simat']['dia31'][0]->dia_31observacion : 0;
                                @endphp
                                {{$suma1}}
                              </td>
                              <td id="{{$datos['sede']->consecutivo}}-JM-RI-novedades" class="tg-0pky3" data-id="{{$datos['sede']->consecutivo}}" data-novedades="novedades" data-modalidad="JM-RI">
                                
                                @php
                                $sede = DB::table('ris')->where('codigo_dane_sede',$datos['sede']->consecutivo)->first();
                              

                                $suma2 = 0;
                                $suma2 = $sede->dia_1 != 'Z' ? $sede->dia_1 != 'N' ? $datos['simat']['dia1'][0]->dia_1observacion : 0 : 0;
                                $suma2 = $sede->dia_2 != 'Z' ? $sede->dia_2 != 'N' ? $datos['simat']['dia2'][0]->dia_2observacion : 0 : 0;
                                $suma2 = $sede->dia_3 != 'Z' ? $sede->dia_3 != 'N' ? $datos['simat']['dia3'][0]->dia_3observacion : 0 : 0;
                                $suma2 = $sede->dia_4 != 'Z' ? $sede->dia_4 != 'N' ? $datos['simat']['dia4'][0]->dia_4observacion : 0 : 0;
                                $suma2 = $sede->dia_5 != 'Z' ? $sede->dia_5 != 'N' ? $datos['simat']['dia5'][0]->dia_5observacion : 0 : 0;
                                $suma2 = $sede->dia_6 != 'Z' ? $sede->dia_6 != 'N' ? $datos['simat']['dia6'][0]->dia_6observacion : 0 : 0;
                                $suma2 = $sede->dia_7 != 'Z' ? $sede->dia_7 != 'N' ? $datos['simat']['dia7'][0]->dia_7observacion : 0 : 0;
                                $suma2 = $sede->dia_8 != 'Z' ? $sede->dia_8 != 'N' ? $datos['simat']['dia8'][0]->dia_8observacion : 0 : 0;
                                $suma2 = $sede->dia_9 != 'Z' ? $sede->dia_9 != 'N' ? $datos['simat']['dia9'][0]->dia_9observacion : 0 : 0;
                                $suma2 = $sede->dia_10 != 'Z' ? $sede->dia_10 != 'N' ? $datos['simat']['dia10'][0]->dia_10observacion : 0 : 0;
                                $suma2 = $sede->dia_11 != 'Z' ? $sede->dia_11 != 'N' ? $datos['simat']['dia11'][0]->dia_11observacion : 0 : 0;
                                $suma2 = $sede->dia_12 != 'Z' ? $sede->dia_12 != 'N' ? $datos['simat']['dia12'][0]->dia_12observacion : 0 : 0;
                                $suma2 = $sede->dia_13 != 'Z' ? $sede->dia_13 != 'N' ? $datos['simat']['dia13'][0]->dia_13observacion : 0 : 0;
                                $suma2 = $sede->dia_14 != 'Z' ? $sede->dia_14 != 'N' ? $datos['simat']['dia14'][0]->dia_14observacion : 0 : 0;
                                $suma2 = $sede->dia_15 != 'Z' ? $sede->dia_15 != 'N' ? $datos['simat']['dia15'][0]->dia_15observacion : 0 : 0;
                                $suma2 = $sede->dia_16 != 'Z' ? $sede->dia_16 != 'N' ? $datos['simat']['dia16'][0]->dia_16observacion : 0 : 0;
                                $suma2 = $sede->dia_17 != 'Z' ? $sede->dia_17 != 'N' ? $datos['simat']['dia17'][0]->dia_17observacion : 0 : 0;
                                $suma2 = $sede->dia_18 != 'Z' ? $sede->dia_18 != 'N' ? $datos['simat']['dia18'][0]->dia_18observacion : 0 : 0;
                                $suma2 = $sede->dia_19 != 'Z' ? $sede->dia_19 != 'N' ? $datos['simat']['dia19'][0]->dia_19observacion : 0 : 0;
                                $suma2 = $sede->dia_20 != 'Z' ? $sede->dia_20 != 'N' ? $datos['simat']['dia20'][0]->dia_20observacion : 0 : 0;
                                $suma2 = $sede->dia_21 != 'Z' ? $sede->dia_21 != 'N' ? $datos['simat']['dia21'][0]->dia_21observacion : 0 : 0;
                                $suma2 = $sede->dia_22 != 'Z' ? $sede->dia_22 != 'N' ? $datos['simat']['dia22'][0]->dia_22observacion : 0 : 0;
                                $suma2 = $sede->dia_23 != 'Z' ? $sede->dia_23 != 'N' ? $datos['simat']['dia23'][0]->dia_23observacion : 0 : 0;
                                $suma2 = $sede->dia_24 != 'Z' ? $sede->dia_24 != 'N' ? $datos['simat']['dia24'][0]->dia_24observacion : 0 : 0;
                                $suma2 = $sede->dia_25 != 'Z' ? $sede->dia_25 != 'N' ? $datos['simat']['dia25'][0]->dia_25observacion : 0 : 0;
                                $suma2 = $sede->dia_26 != 'Z' ? $sede->dia_26 != 'N' ? $datos['simat']['dia26'][0]->dia_26observacion : 0 : 0;
                                $suma2 = $sede->dia_27 != 'Z' ? $sede->dia_27 != 'N' ? $datos['simat']['dia27'][0]->dia_27observacion : 0 : 0;
                                $suma2 = $sede->dia_28 != 'Z' ? $sede->dia_28 != 'N' ? $datos['simat']['dia28'][0]->dia_28observacion : 0 : 0;
                                $suma2 = $sede->dia_29 != 'Z' ? $sede->dia_29 != 'N' ? $datos['simat']['dia29'][0]->dia_29observacion : 0 : 0;
                                $suma2 = $sede->dia_30 != 'Z' ? $sede->dia_30 != 'N' ? $datos['simat']['dia30'][0]->dia_30observacion : 0 : 0;
                                $suma2 = $sede->dia_31 != 'Z' ? $sede->dia_31 != 'N' ? $datos['simat']['dia31'][0]->dia_31observacion : 0 : 0;
                                @endphp
                                {{$suma2}}
                              </td>
                              <td id="{{$datos['sede']->consecutivo}}-JM-RI-devoluciones" class="tg-0pky4" data-id="{{$datos['sede']->consecutivo}}" data-devoluciones="devoluciones" data-modalidad="JM-RI">0</td>
                              <td class=""><button class="dt-button create-new btn btn-primary guardarbt" tabindex="0"  type="button" 
                              data-id="{{$datos['sede']->consecutivo}}"
                              data-tipo="JM-RI" id="bt-{{$datos['sede']->consecutivo}}-JM-RI"                        
                                ><span>+ Guardar</span></button></td>
                                @endif
                          </tr>
                          <tr>
                              <td class="uneditable ">JT-RI</td>
                              @if(isset($datos['simat']['dia1'][1]))                        
                              <td id="{{$datos['sede']->consecutivo}}-JT-RI-dia1"  style='display: {{ $dias->dia_1 != 'Z' ? 'table-cell' : 'none' }};' data-id="{{$datos['sede']->consecutivo}}" data-dia="dia1" data-modalidad="JT-RI">{{$datos['simat']->dia1->Tipo_de_complemento = 'CAJTRI' ? $datos['simat']['dia1'][1]->dia_1 != 0 ? $datos['simat']['dia1'][1]->dia_1 + $datos['simat']['dia1'][1]->dia_1observacion : 0 : 0 }}</td>
                              <td id="{{$datos['sede']->consecutivo}}-JT-RI-dia2" style='display: {{ $dias->dia_2 != 'Z' ? 'table-cell' : 'none' }};' data-id="{{$datos['sede']->consecutivo}}" data-dia="dia2" data-modalidad="JT-RI">{{$datos['simat']->dia2->Tipo_de_complemento = 'CAJTRI' ? $datos['simat']['dia2'][1]->dia_2 != 0 ? $datos['simat']['dia2'][1]->dia_2 + $datos['simat']['dia2'][1]->dia_2observacion : 0 : 0 }}</td>
                              <td id="{{$datos['sede']->consecutivo}}-JT-RI-dia3" style='display: {{ $dias->dia_3 != 'Z' ? 'table-cell' : 'none' }};' data-id="{{$datos['sede']->consecutivo}}" data-dia="dia3" data-modalidad="JT-RI">{{$datos['simat']->dia3->Tipo_de_complemento = 'CAJTRI' ? $datos['simat']['dia3'][1]->dia_3 != 0 ? $datos['simat']['dia3'][1]->dia_3 + $datos['simat']['dia3'][1]->dia_3observacion : 0 : 0 }}</td>
                              <td id="{{$datos['sede']->consecutivo}}-JT-RI-dia4" style='display: {{ $dias->dia_4 != 'Z' ? 'table-cell' : 'none' }};' data-id="{{$datos['sede']->consecutivo}}" data-dia="dia4" data-modalidad="JT-RI">{{$datos['simat']->dia4->Tipo_de_complemento = 'CAJTRI' ? $datos['simat']['dia4'][1]->dia_4 != 0 ? $datos['simat']['dia4'][1]->dia_4 + $datos['simat']['dia4'][1]->dia_4observacion : 0 : 0 }}</td>
                              <td id="{{$datos['sede']->consecutivo}}-JT-RI-dia5" style='display: {{ $dias->dia_5 != 'Z' ? 'table-cell' : 'none' }};' data-id="{{$datos['sede']->consecutivo}}" data-dia="dia5" data-modalidad="JT-RI">{{$datos['simat']->dia5->Tipo_de_complemento = 'CAJTRI' ? $datos['simat']['dia5'][1]->dia_5 != 0 ? $datos['simat']['dia5'][1]->dia_5 + $datos['simat']['dia5'][1]->dia_5observacion : 0 : 0 }}</td>
                              <td id="{{$datos['sede']->consecutivo}}-JT-RI-dia6" style='display: {{ $dias->dia_6 != 'Z' ? 'table-cell' : 'none' }};' data-id="{{$datos['sede']->consecutivo}}" data-dia="dia6" data-modalidad="JT-RI">{{$datos['simat']->dia6->Tipo_de_complemento = 'CAJTRI' ? $datos['simat']['dia6'][1]->dia_6 != 0 ? $datos['simat']['dia6'][1]->dia_6 + $datos['simat']['dia6'][1]->dia_6observacion : 0 : 0 }}</td>
                              <td id="{{$datos['sede']->consecutivo}}-JT-RI-dia7" style='display: {{ $dias->dia_7 != 'Z' ? 'table-cell' : 'none' }};' data-id="{{$datos['sede']->consecutivo}}" data-dia="dia7" data-modalidad="JT-RI">{{$datos['simat']->dia7->Tipo_de_complemento = 'CAJTRI' ? $datos['simat']['dia7'][1]->dia_7 != 0 ? $datos['simat']['dia7'][1]->dia_7 + $datos['simat']['dia7'][1]->dia_7observacion : 0 : 0 }}</td>
                              <td id="{{$datos['sede']->consecutivo}}-JT-RI-dia8" style='display: {{ $dias->dia_8 != 'Z' ? 'table-cell' : 'none' }};' data-id="{{$datos['sede']->consecutivo}}" data-dia="dia8" data-modalidad="JT-RI">{{$datos['simat']->dia8->Tipo_de_complemento = 'CAJTRI' ? $datos['simat']['dia8'][1]->dia_8 != 0 ? $datos['simat']['dia8'][1]->dia_8 + $datos['simat']['dia8'][1]->dia_8observacion : 0 : 0 }}</td>
                              <td id="{{$datos['sede']->consecutivo}}-JT-RI-dia9" style='display: {{ $dias->dia_9 != 'Z' ? 'table-cell' : 'none' }};' data-id="{{$datos['sede']->consecutivo}}" data-dia="dia9" data-modalidad="JT-RI">{{$datos['simat']->dia9->Tipo_de_complemento = 'CAJTRI' ? $datos['simat']['dia9'][1]->dia_9 != 0 ? $datos['simat']['dia9'][1]->dia_9 + $datos['simat']['dia9'][1]->dia_9observacion : 0 : 0 }}</td>
                              <td id="{{$datos['sede']->consecutivo}}-JT-RI-dia10" style='display: {{ $dias->dia_10 != 'Z' ? 'table-cell' : 'none' }};' data-id="{{$datos['sede']->consecutivo}}" data-dia="dia10" data-modalidad="JT-RI">{{$datos['simat']->dia10->Tipo_de_complemento = 'CAJTRI' ? $datos['simat']['dia10'][1]->dia_10 != 0 ? $datos['simat']['dia10'][1]->dia_10 + $datos['simat']['dia10'][1]->dia_10observacion : 0 : 0 }}</td>
                              <td id="{{$datos['sede']->consecutivo}}-JT-RI-dia11" style='display: {{ $dias->dia_11 != 'Z' ? 'table-cell' : 'none' }};' data-id="{{$datos['sede']->consecutivo}}" data-dia="dia11" data-modalidad="JT-RI">{{$datos['simat']->dia11->Tipo_de_complemento = 'CAJTRI' ? $datos['simat']['dia11'][1]->dia_11 != 0 ? $datos['simat']['dia11'][1]->dia_11 + $datos['simat']['dia11'][1]->dia_11observacion : 0 : 0 }}</td>
                              <td id="{{$datos['sede']->consecutivo}}-JT-RI-dia12" style='display: {{ $dias->dia_12 != 'Z' ? 'table-cell' : 'none' }};' data-id="{{$datos['sede']->consecutivo}}" data-dia="dia12" data-modalidad="JT-RI">{{$datos['simat']->dia12->Tipo_de_complemento = 'CAJTRI' ? $datos['simat']['dia12'][1]->dia_12 != 0 ? $datos['simat']['dia12'][1]->dia_12 + $datos['simat']['dia12'][1]->dia_12observacion : 0 : 0 }}</td>
                              <td id="{{$datos['sede']->consecutivo}}-JT-RI-dia13" style='display: {{ $dias->dia_13 != 'Z' ? 'table-cell' : 'none' }};' data-id="{{$datos['sede']->consecutivo}}" data-dia="dia13" data-modalidad="JT-RI">{{$datos['simat']->dia13->Tipo_de_complemento = 'CAJTRI' ? $datos['simat']['dia13'][1]->dia_13 != 0 ? $datos['simat']['dia13'][1]->dia_13 + $datos['simat']['dia13'][1]->dia_13observacion : 0 : 0 }}</td>
                              <td id="{{$datos['sede']->consecutivo}}-JT-RI-dia14" style='display: {{ $dias->dia_14 != 'Z' ? 'table-cell' : 'none' }};' data-id="{{$datos['sede']->consecutivo}}" data-dia="dia14" data-modalidad="JT-RI">{{$datos['simat']->dia14->Tipo_de_complemento = 'CAJTRI' ? $datos['simat']['dia14'][1]->dia_14 != 0 ? $datos['simat']['dia14'][1]->dia_14 + $datos['simat']['dia14'][1]->dia_14observacion : 0 : 0 }}</td>
                              <td id="{{$datos['sede']->consecutivo}}-JT-RI-dia15" style='display: {{ $dias->dia_15 != 'Z' ? 'table-cell' : 'none' }};' data-id="{{$datos['sede']->consecutivo}}" data-dia="dia15" data-modalidad="JT-RI">{{$datos['simat']->dia15->Tipo_de_complemento = 'CAJTRI' ? $datos['simat']['dia15'][1]->dia_15 != 0 ? $datos['simat']['dia15'][1]->dia_15 + $datos['simat']['dia15'][1]->dia_15observacion : 0 : 0 }}</td>
                              <td id="{{$datos['sede']->consecutivo}}-JT-RI-dia16" style='display: {{ $dias->dia_16 != 'Z' ? 'table-cell' : 'none' }};' data-id="{{$datos['sede']->consecutivo}}" data-dia="dia16" data-modalidad="JT-RI">{{$datos['simat']->dia16->Tipo_de_complemento = 'CAJTRI' ? $datos['simat']['dia16'][1]->dia_16 != 0 ? $datos['simat']['dia16'][1]->dia_16 + $datos['simat']['dia16'][1]->dia_16observacion : 0 : 0 }}</td>
                              <td id="{{$datos['sede']->consecutivo}}-JT-RI-dia17" style='display: {{ $dias->dia_17 != 'Z' ? 'table-cell' : 'none' }};' data-id="{{$datos['sede']->consecutivo}}" data-dia="dia17" data-modalidad="JT-RI">{{$datos['simat']->dia17->Tipo_de_complemento = 'CAJTRI' ? $datos['simat']['dia17'][1]->dia_17 != 0 ? $datos['simat']['dia17'][1]->dia_17 + $datos['simat']['dia17'][1]->dia_17observacion : 0 : 0 }}</td>
                              <td id="{{$datos['sede']->consecutivo}}-JT-RI-dia18" style='display: {{ $dias->dia_18 != 'Z' ? 'table-cell' : 'none' }};' data-id="{{$datos['sede']->consecutivo}}" data-dia="dia18" data-modalidad="JT-RI">{{$datos['simat']->dia18->Tipo_de_complemento = 'CAJTRI' ? $datos['simat']['dia18'][1]->dia_18 != 0 ? $datos['simat']['dia18'][1]->dia_18 + $datos['simat']['dia18'][1]->dia_18observacion : 0 : 0 }}</td>
                              <td id="{{$datos['sede']->consecutivo}}-JT-RI-dia19" style='display: {{ $dias->dia_19 != 'Z' ? 'table-cell' : 'none' }};' data-id="{{$datos['sede']->consecutivo}}" data-dia="dia19" data-modalidad="JT-RI">{{$datos['simat']->dia19->Tipo_de_complemento = 'CAJTRI' ? $datos['simat']['dia19'][1]->dia_19 != 0 ? $datos['simat']['dia19'][1]->dia_19 + $datos['simat']['dia19'][1]->dia_19observacion : 0 : 0 }}</td>
                              <td id="{{$datos['sede']->consecutivo}}-JT-RI-dia20" style='display: {{ $dias->dia_20 != 'Z' ? 'table-cell' : 'none' }};' data-id="{{$datos['sede']->consecutivo}}" data-dia="dia20" data-modalidad="JT-RI">{{$datos['simat']->dia20->Tipo_de_complemento = 'CAJTRI' ? $datos['simat']['dia20'][1]->dia_20 != 0 ? $datos['simat']['dia20'][1]->dia_20 + $datos['simat']['dia20'][1]->dia_20observacion : 0 : 0 }}</td>
                              <td id="{{$datos['sede']->consecutivo}}-JT-RI-dia21" style='display: {{ $dias->dia_21 != 'Z' ? 'table-cell' : 'none' }};' data-id="{{$datos['sede']->consecutivo}}" data-dia="dia21" data-modalidad="JT-RI">{{$datos['simat']->dia21->Tipo_de_complemento = 'CAJTRI' ? $datos['simat']['dia21'][1]->dia_21 != 0 ? $datos['simat']['dia21'][1]->dia_21 + $datos['simat']['dia21'][1]->dia_21observacion : 0 : 0 }}</td>
                              <td id="{{$datos['sede']->consecutivo}}-JT-RI-dia22" style='display: {{ $dias->dia_22 != 'Z' ? 'table-cell' : 'none' }};'  data-id="{{$datos['sede']->consecutivo}}" data-dia="dia22" data-modalidad="JT-RI">{{$datos['simat']->dia22->Tipo_de_complemento = 'CAJTRI' ? $datos['simat']['dia22'][1]->dia_22 != 0 ? $datos['simat']['dia22'][1]->dia_22 + $datos['simat']['dia22'][1]->dia_22observacion : 0 : 0 }}</td>
                              <td id="{{$datos['sede']->consecutivo}}-JT-RI-dia23" style='display: {{ $dias->dia_23 != 'Z' ? 'table-cell' : 'none' }};'  data-id="{{$datos['sede']->consecutivo}}" data-dia="dia23" data-modalidad="JT-RI">{{$datos['simat']->dia23->Tipo_de_complemento = 'CAJTRI' ? $datos['simat']['dia23'][1]->dia_23 != 0 ? $datos['simat']['dia23'][1]->dia_23 + $datos['simat']['dia23'][1]->dia_23observacion : 0 : 0 }}</td>
                              <td id="{{$datos['sede']->consecutivo}}-JT-RI-dia24" style='display: {{ $dias->dia_24 != 'Z' ? 'table-cell' : 'none' }};'  data-id="{{$datos['sede']->consecutivo}}" data-dia="dia24" data-modalidad="JT-RI">{{$datos['simat']->dia24->Tipo_de_complemento = 'CAJTRI' ? $datos['simat']['dia24'][1]->dia_24 != 0 ? $datos['simat']['dia24'][1]->dia_24 + $datos['simat']['dia24'][1]->dia_24observacion : 0 : 0 }}</td>
                              <td id="{{$datos['sede']->consecutivo}}-JT-RI-dia25" style='display: {{ $dias->dia_25 != 'Z' ? 'table-cell' : 'none' }};'  data-id="{{$datos['sede']->consecutivo}}" data-dia="dia25" data-modalidad="JT-RI">{{$datos['simat']->dia25->Tipo_de_complemento = 'CAJTRI' ? $datos['simat']['dia25'][1]->dia_25 != 0 ? $datos['simat']['dia25'][1]->dia_25 + $datos['simat']['dia25'][1]->dia_25observacion : 0 : 0 }}</td>
                              <td id="{{$datos['sede']->consecutivo}}-JT-RI-dia26" style='display: {{ $dias->dia_26 != 'Z' ? 'table-cell' : 'none' }};'  data-id="{{$datos['sede']->consecutivo}}" data-dia="dia26" data-modalidad="JT-RI">{{$datos['simat']->dia26->Tipo_de_complemento = 'CAJTRI' ? $datos['simat']['dia26'][1]->dia_26 != 0 ? $datos['simat']['dia26'][1]->dia_26 + $datos['simat']['dia26'][1]->dia_26observacion : 0 : 0 }}</td>
                              <td id="{{$datos['sede']->consecutivo}}-JT-RI-dia27" style='display: {{ $dias->dia_27 != 'Z' ? 'table-cell' : 'none' }};' data-id="{{$datos['sede']->consecutivo}}" data-dia="dia27" data-modalidad="JT-RI">{{$datos['simat']->dia27->Tipo_de_complemento = 'CAJTRI' ? $datos['simat']['dia27'][1]->dia_27 != 0 ? $datos['simat']['dia27'][1]->dia_27 + $datos['simat']['dia27'][1]->dia_27observacion : 0 : 0 }}</td>
                              <td id="{{$datos['sede']->consecutivo}}-JT-RI-dia28" style='display: {{ $dias->dia_28 != 'Z' ? 'table-cell' : 'none' }};' data-id="{{$datos['sede']->consecutivo}}" data-dia="dia28" data-modalidad="JT-RI">{{$datos['simat']->dia28->Tipo_de_complemento = 'CAJTRI' ? $datos['simat']['dia28'][1]->dia_28 != 0 ? $datos['simat']['dia28'][1]->dia_28 + $datos['simat']['dia28'][1]->dia_28observacion : 0 : 0 }}</td>
                              <td id="{{$datos['sede']->consecutivo}}-JT-RI-dia29" style='display: {{ $dias->dia_29 != 'Z' ? 'table-cell' : 'none' }};' data-id="{{$datos['sede']->consecutivo}}" data-dia="dia29" data-modalidad="JT-RI">{{$datos['simat']->dia29->Tipo_de_complemento = 'CAJTRI' ? $datos['simat']['dia29'][1]->dia_29 != 0 ? $datos['simat']['dia29'][1]->dia_29 + $datos['simat']['dia29'][1]->dia_29observacion : 0 : 0 }}</td>
                              <td id="{{$datos['sede']->consecutivo}}-JT-RI-dia30" style='display: {{ $dias->dia_30 != 'Z' ? 'table-cell' : 'none' }};' data-id="{{$datos['sede']->consecutivo}}" data-dia="dia30" data-modalidad="JT-RI">{{$datos['simat']->dia30->Tipo_de_complemento = 'CAJTRI' ? $datos['simat']['dia30'][1]->dia_30 != 0 ? $datos['simat']['dia30'][1]->dia_30 + $datos['simat']['dia30'][1]->dia_30observacion : 0 : 0 }}</td>
                              <td id="{{$datos['sede']->consecutivo}}-JT-RI-dia31" style='display: {{ $dias->dia_31 != 'Z' ? 'table-cell' : 'none' }};' data-id="{{$datos['sede']->consecutivo}}" data-dia="dia31" data-modalidad="JT-RI">{{$datos['simat']->dia31->Tipo_de_complemento = 'CAJTRI' ? $datos['simat']['dia31'][1]->dia_31 != 0 ? $datos['simat']['dia31'][1]->dia_31 + $datos['simat']['dia31'][1]->dia_31observacion : 0 : 0 }}</td>
                              <td id="{{$datos['sede']->consecutivo}}-JT-RI-dias" class="tg-0pky1" data-id="{{$datos['sede']->consecutivo}}" data-dias="diasAtendidos" data-modalidad="JT-RI">
                                @php
                                  $suma = 0;
                                  $suma += $datos['simat']['dia1'][1]->dia_1 != 0 ? 1 : 0;
                                  $suma += $datos['simat']['dia2'][1]->dia_2 != 0 ? 1 : 0;
                                  $suma += $datos['simat']['dia3'][1]->dia_3 != 0 ? 1 : 0;
                                  $suma += $datos['simat']['dia4'][1]->dia_4 != 0 ? 1 : 0;
                                  $suma += $datos['simat']['dia5'][1]->dia_5 != 0 ? 1 : 0;
                                  $suma += $datos['simat']['dia6'][1]->dia_6 != 0 ? 1 : 0;
                                  $suma += $datos['simat']['dia7'][1]->dia_7 != 0 ? 1 : 0;
                                  $suma += $datos['simat']['dia8'][1]->dia_8 != 0 ? 1 : 0;
                                  $suma += $datos['simat']['dia9'][1]->dia_9 != 0 ? 1 : 0;
                                  $suma += $datos['simat']['dia10'][1]->dia_10 != 0 ? 1 : 0;
                                  $suma += $datos['simat']['dia11'][1]->dia_11 != 0 ? 1 : 0;
                                  $suma += $datos['simat']['dia12'][1]->dia_12 != 0 ? 1 : 0;
                                  $suma += $datos['simat']['dia13'][1]->dia_13 != 0 ? 1 : 0;
                                  $suma += $datos['simat']['dia14'][1]->dia_14 != 0 ? 1 : 0;
                                  $suma += $datos['simat']['dia15'][1]->dia_15 != 0 ? 1 : 0;
                                  $suma += $datos['simat']['dia16'][1]->dia_16 != 0 ? 1 : 0;
                                  $suma += $datos['simat']['dia17'][1]->dia_17 != 0 ? 1 : 0;
                                  $suma += $datos['simat']['dia18'][1]->dia_18 != 0 ? 1 : 0;
                                  $suma += $datos['simat']['dia19'][1]->dia_19 != 0 ? 1 : 0;
                                  $suma += $datos['simat']['dia20'][1]->dia_20 != 0 ? 1 : 0;
                                  $suma += $datos['simat']['dia21'][1]->dia_21 != 0 ? 1 : 0;
                                  $suma += $datos['simat']['dia22'][1]->dia_22 != 0 ? 1 : 0;
                                  $suma += $datos['simat']['dia23'][1]->dia_23 != 0 ? 1 : 0;
                                  $suma += $datos['simat']['dia24'][1]->dia_24 != 0 ? 1 : 0;
                                  $suma += $datos['simat']['dia25'][1]->dia_25 != 0 ? 1 : 0;
                                  $suma += $datos['simat']['dia26'][1]->dia_26 != 0 ? 1 : 0;
                                  $suma += $datos['simat']['dia27'][1]->dia_27 != 0 ? 1 : 0;
                                  $suma += $datos['simat']['dia28'][1]->dia_28 != 0 ? 1 : 0;
                                  $suma += $datos['simat']['dia29'][1]->dia_29 != 0 ? 1 : 0;
                                  $suma += $datos['simat']['dia30'][1]->dia_30 != 0 ? 1 : 0;
                                  $suma += $datos['simat']['dia31'][1]->dia_31 != 0 ? 1 : 0;

                                @endphp
                                {{$suma}}
                              </td>
                              <td id="{{$datos['sede']->consecutivo}}-JT-RI-totalRaciones" class="tg-0pky2" data-id="{{$datos['sede']->consecutivo}}" data-totalraciones="totalRaciones" data-modalidad="JT-RI">
                                @php
                                $suma1 = 0; 
                                $suma1 += $datos['simat']['dia1'][1]->dia_1 != 0 ? $datos['simat']['dia1'][1]->dia_1 + $datos['simat']['dia1'][1]->dia_1observacion : 0;
                                $suma1 += $datos['simat']['dia2'][1]->dia_2 != 0 ? $datos['simat']['dia2'][1]->dia_2 + $datos['simat']['dia2'][1]->dia_2observacion : 0;
                                $suma1 += $datos['simat']['dia3'][1]->dia_3 != 0 ? $datos['simat']['dia3'][1]->dia_3 + $datos['simat']['dia3'][1]->dia_3observacion : 0;
                                $suma1 += $datos['simat']['dia4'][1]->dia_4 != 0 ? $datos['simat']['dia4'][1]->dia_4 + $datos['simat']['dia4'][1]->dia_4observacion : 0;
                                $suma1 += $datos['simat']['dia5'][1]->dia_5 != 0 ? $datos['simat']['dia5'][1]->dia_5 + $datos['simat']['dia5'][1]->dia_5observacion : 0;
                                $suma1 += $datos['simat']['dia6'][1]->dia_6 != 0 ? $datos['simat']['dia6'][1]->dia_6 + $datos['simat']['dia6'][1]->dia_6observacion : 0;
                                $suma1 += $datos['simat']['dia7'][1]->dia_7 != 0 ? $datos['simat']['dia7'][1]->dia_7 + $datos['simat']['dia7'][1]->dia_7observacion : 0;
                                $suma1 += $datos['simat']['dia8'][1]->dia_8 != 0 ? $datos['simat']['dia8'][1]->dia_8 + $datos['simat']['dia8'][1]->dia_8observacion : 0;
                                $suma1 += $datos['simat']['dia9'][1]->dia_9 != 0 ? $datos['simat']['dia9'][1]->dia_9 + $datos['simat']['dia9'][1]->dia_9observacion : 0;
                                $suma1 += $datos['simat']['dia10'][1]->dia_10 != 0 ? $datos['simat']['dia10'][1]->dia_10 + $datos['simat']['dia10'][1]->dia_10observacion : 0;
                                $suma1 += $datos['simat']['dia11'][1]->dia_11 != 0 ? $datos['simat']['dia11'][1]->dia_11 + $datos['simat']['dia11'][1]->dia_11observacion : 0;
                                $suma1 += $datos['simat']['dia12'][1]->dia_12 != 0 ? $datos['simat']['dia12'][1]->dia_12 + $datos['simat']['dia12'][1]->dia_12observacion : 0;
                                $suma1 += $datos['simat']['dia13'][1]->dia_13 != 0 ? $datos['simat']['dia13'][1]->dia_13 + $datos['simat']['dia13'][1]->dia_13observacion : 0;
                                $suma1 += $datos['simat']['dia14'][1]->dia_14 != 0 ? $datos['simat']['dia14'][1]->dia_14 + $datos['simat']['dia14'][1]->dia_14observacion : 0;
                                $suma1 += $datos['simat']['dia15'][1]->dia_15 != 0 ? $datos['simat']['dia15'][1]->dia_15 + $datos['simat']['dia15'][1]->dia_15observacion : 0;
                                $suma1 += $datos['simat']['dia16'][1]->dia_16 != 0 ? $datos['simat']['dia16'][1]->dia_16 + $datos['simat']['dia16'][1]->dia_16observacion : 0;
                                $suma1 += $datos['simat']['dia17'][1]->dia_17 != 0 ? $datos['simat']['dia17'][1]->dia_17 + $datos['simat']['dia17'][1]->dia_17observacion : 0;
                                $suma1 += $datos['simat']['dia18'][1]->dia_18 != 0 ? $datos['simat']['dia18'][1]->dia_18 + $datos['simat']['dia18'][1]->dia_18observacion : 0;
                                $suma1 += $datos['simat']['dia19'][1]->dia_19 != 0 ? $datos['simat']['dia19'][1]->dia_19 + $datos['simat']['dia19'][1]->dia_19observacion : 0;
                                $suma1 += $datos['simat']['dia20'][1]->dia_20 != 0 ? $datos['simat']['dia20'][1]->dia_20 + $datos['simat']['dia20'][1]->dia_20observacion : 0;
                                $suma1 += $datos['simat']['dia21'][1]->dia_21 != 0 ? $datos['simat']['dia21'][1]->dia_21 + $datos['simat']['dia21'][1]->dia_21observacion : 0;
                                $suma1 += $datos['simat']['dia22'][1]->dia_22 != 0 ? $datos['simat']['dia22'][1]->dia_22 + $datos['simat']['dia22'][1]->dia_22observacion : 0;
                                $suma1 += $datos['simat']['dia23'][1]->dia_23 != 0 ? $datos['simat']['dia23'][1]->dia_23 + $datos['simat']['dia23'][1]->dia_23observacion : 0;
                                $suma1 += $datos['simat']['dia24'][1]->dia_24 != 0 ? $datos['simat']['dia24'][1]->dia_24 + $datos['simat']['dia24'][1]->dia_24observacion : 0;
                                $suma1 += $datos['simat']['dia25'][1]->dia_25 != 0 ? $datos['simat']['dia25'][1]->dia_25 + $datos['simat']['dia25'][1]->dia_25observacion : 0;
                                $suma1 += $datos['simat']['dia26'][1]->dia_26 != 0 ? $datos['simat']['dia26'][1]->dia_26 + $datos['simat']['dia26'][1]->dia_26observacion : 0;
                                $suma1 += $datos['simat']['dia27'][1]->dia_27 != 0 ? $datos['simat']['dia27'][1]->dia_27 + $datos['simat']['dia27'][1]->dia_27observacion : 0;
                                $suma1 += $datos['simat']['dia28'][1]->dia_28 != 0 ? $datos['simat']['dia28'][1]->dia_28 + $datos['simat']['dia28'][1]->dia_28observacion : 0;
                                $suma1 += $datos['simat']['dia29'][1]->dia_29 != 0 ? $datos['simat']['dia29'][1]->dia_29 + $datos['simat']['dia29'][1]->dia_29observacion : 0;
                                $suma1 += $datos['simat']['dia30'][1]->dia_30 != 0 ? $datos['simat']['dia30'][1]->dia_30 + $datos['simat']['dia30'][1]->dia_30observacion : 0;
                                $suma1 += $datos['simat']['dia31'][1]->dia_31 != 0 ? $datos['simat']['dia31'][1]->dia_31 + $datos['simat']['dia31'][1]->dia_31observacion : 0;
                                @endphp
                                {{$suma1}}
                              </td>
                              <td id="{{$datos['sede']->consecutivo}}-JT-RI-novedades" class="tg-0pky3" data-id="{{$datos['sede']->consecutivo}}" data-novedades="novedades" data-modalidad="JT-RI">
                                
                                @php
                                $sede = DB::table('ris')->where('codigo_dane_sede',$datos['sede']->consecutivo)->first();
                              
                            
                                $suma2 = 0;
                                $suma2 = $sede->dia_1 != 'Z' ? $sede->dia_1 != 'N' ? $datos['simat']['dia1'][1]->dia_1observacion : 0 : 0;
                                $suma2 = $sede->dia_2 != 'Z' ? $sede->dia_2 != 'N' ? $datos['simat']['dia2'][1]->dia_2observacion : 0 : 0;
                                $suma2 = $sede->dia_3 != 'Z' ? $sede->dia_3 != 'N' ? $datos['simat']['dia3'][1]->dia_3observacion : 0 : 0;
                                $suma2 = $sede->dia_4 != 'Z' ? $sede->dia_4 != 'N' ? $datos['simat']['dia4'][1]->dia_4observacion : 0 : 0;
                                $suma2 = $sede->dia_5 != 'Z' ? $sede->dia_5 != 'N' ? $datos['simat']['dia5'][1]->dia_5observacion : 0 : 0;
                                $suma2 = $sede->dia_6 != 'Z' ? $sede->dia_6 != 'N' ? $datos['simat']['dia6'][1]->dia_6observacion : 0 : 0;
                                $suma2 = $sede->dia_7 != 'Z' ? $sede->dia_7 != 'N' ? $datos['simat']['dia7'][1]->dia_7observacion : 0 : 0;
                                $suma2 = $sede->dia_8 != 'Z' ? $sede->dia_8 != 'N' ? $datos['simat']['dia8'][1]->dia_8observacion : 0 : 0;
                                $suma2 = $sede->dia_9 != 'Z' ? $sede->dia_9 != 'N' ? $datos['simat']['dia9'][1]->dia_9observacion : 0 : 0;
                                $suma2 = $sede->dia_10 != 'Z' ? $sede->dia_10 != 'N' ? $datos['simat']['dia10'][1]->dia_10observacion : 0 : 0;
                                $suma2 = $sede->dia_11 != 'Z' ? $sede->dia_11 != 'N' ? $datos['simat']['dia11'][1]->dia_11observacion : 0 : 0;
                                $suma2 = $sede->dia_12 != 'Z' ? $sede->dia_12 != 'N' ? $datos['simat']['dia12'][1]->dia_12observacion : 0 : 0;
                                $suma2 = $sede->dia_13 != 'Z' ? $sede->dia_13 != 'N' ? $datos['simat']['dia13'][1]->dia_13observacion : 0 : 0;
                                $suma2 = $sede->dia_14 != 'Z' ? $sede->dia_14 != 'N' ? $datos['simat']['dia14'][1]->dia_14observacion : 0 : 0;
                                $suma2 = $sede->dia_15 != 'Z' ? $sede->dia_15 != 'N' ? $datos['simat']['dia15'][1]->dia_15observacion : 0 : 0;
                                $suma2 = $sede->dia_16 != 'Z' ? $sede->dia_16 != 'N' ? $datos['simat']['dia16'][1]->dia_16observacion : 0 : 0;
                                $suma2 = $sede->dia_17 != 'Z' ? $sede->dia_17 != 'N' ? $datos['simat']['dia17'][1]->dia_17observacion : 0 : 0;
                                $suma2 = $sede->dia_18 != 'Z' ? $sede->dia_18 != 'N' ? $datos['simat']['dia18'][1]->dia_18observacion : 0 : 0;
                                $suma2 = $sede->dia_19 != 'Z' ? $sede->dia_19 != 'N' ? $datos['simat']['dia19'][1]->dia_19observacion : 0 : 0;
                                $suma2 = $sede->dia_20 != 'Z' ? $sede->dia_20 != 'N' ? $datos['simat']['dia20'][1]->dia_20observacion : 0 : 0;
                                $suma2 = $sede->dia_21 != 'Z' ? $sede->dia_21 != 'N' ? $datos['simat']['dia21'][1]->dia_21observacion : 0 : 0;
                                $suma2 = $sede->dia_22 != 'Z' ? $sede->dia_22 != 'N' ? $datos['simat']['dia22'][1]->dia_22observacion : 0 : 0;
                                $suma2 = $sede->dia_23 != 'Z' ? $sede->dia_23 != 'N' ? $datos['simat']['dia23'][1]->dia_23observacion : 0 : 0;
                                $suma2 = $sede->dia_24 != 'Z' ? $sede->dia_24 != 'N' ? $datos['simat']['dia24'][1]->dia_24observacion : 0 : 0;
                                $suma2 = $sede->dia_25 != 'Z' ? $sede->dia_25 != 'N' ? $datos['simat']['dia25'][1]->dia_25observacion : 0 : 0;
                                $suma2 = $sede->dia_26 != 'Z' ? $sede->dia_26 != 'N' ? $datos['simat']['dia26'][1]->dia_26observacion : 0 : 0;
                                $suma2 = $sede->dia_27 != 'Z' ? $sede->dia_27 != 'N' ? $datos['simat']['dia27'][1]->dia_27observacion : 0 : 0;
                                $suma2 = $sede->dia_28 != 'Z' ? $sede->dia_28 != 'N' ? $datos['simat']['dia28'][1]->dia_28observacion : 0 : 0;
                                $suma2 = $sede->dia_29 != 'Z' ? $sede->dia_29 != 'N' ? $datos['simat']['dia29'][1]->dia_29observacion : 0 : 0;
                                $suma2 = $sede->dia_30 != 'Z' ? $sede->dia_30 != 'N' ? $datos['simat']['dia30'][1]->dia_30observacion : 0 : 0;
                                $suma2 = $sede->dia_31 != 'Z' ? $sede->dia_31 != 'N' ? $datos['simat']['dia31'][1]->dia_31observacion : 0 : 0;
                                @endphp
                                {{$suma2}}
                              </td>
                              <td id="{{$datos['sede']->consecutivo}}-JT-RI-devoluciones" class="tg-0pky4" data-id="{{$datos['sede']->consecutivo}}" data-devoluciones="devoluciones" data-modalidad="JT-RI">0</td>
                              <td class=""><button class="dt-button create-new btn btn-primary guardarbt" tabindex="0"  type="button" 
                                data-id="{{$datos['sede']->consecutivo}}"
                                data-tipo="JT-RI" id="bt-{{$datos['sede']->consecutivo}}-JT-RI"                        
                                  ><span>+ Guardar</span></button></td>
                              @else
                              <td style='display: {{ $dias->dia_1 != 'Z' ? 'table-cell' : 'none' }};'>0</td>
                              <td style='display: {{ $dias->dia_2 != 'Z' ? 'table-cell' : 'none' }};'>0</td>
                              <td style='display: {{ $dias->dia_3 != 'Z' ? 'table-cell' : 'none' }};'>0</td>
                              <td style='display: {{ $dias->dia_4 != 'Z' ? 'table-cell' : 'none' }};'>0</td>
                              <td style='display: {{ $dias->dia_5 != 'Z' ? 'table-cell' : 'none' }};'>0</td>
                              <td style='display: {{ $dias->dia_6 != 'Z' ? 'table-cell' : 'none' }};'>0</td>
                              <td style='display: {{ $dias->dia_7 != 'Z' ? 'table-cell' : 'none' }};'>0</td>
                              <td style='display: {{ $dias->dia_8 != 'Z' ? 'table-cell' : 'none' }};'>0</td>
                              <td style='display: {{ $dias->dia_9 != 'Z' ? 'table-cell' : 'none' }};'>0</td>
                              <td style='display: {{ $dias->dia_10 != 'Z' ? 'table-cell' : 'none' }};'>0</td>
                              <td style='display: {{ $dias->dia_11 != 'Z' ? 'table-cell' : 'none' }};'>0</td>
                              <td style='display: {{ $dias->dia_12 != 'Z' ? 'table-cell' : 'none' }};'>0</td>
                              <td style='display: {{ $dias->dia_13 != 'Z' ? 'table-cell' : 'none' }};'>0</td>
                              <td style='display: {{ $dias->dia_14 != 'Z' ? 'table-cell' : 'none' }};'>0</td>
                              <td style='display: {{ $dias->dia_15 != 'Z' ? 'table-cell' : 'none' }};'>0</td>
                              <td style='display: {{ $dias->dia_16 != 'Z' ? 'table-cell' : 'none' }};'>0</td>
                              <td style='display: {{ $dias->dia_17 != 'Z' ? 'table-cell' : 'none' }};'>0</td>
                              <td style='display: {{ $dias->dia_18 != 'Z' ? 'table-cell' : 'none' }};'>0</td>
                              <td style='display: {{ $dias->dia_19 != 'Z' ? 'table-cell' : 'none' }};'>0</td>
                              <td style='display: {{ $dias->dia_20 != 'Z' ? 'table-cell' : 'none' }};'>0</td>
                              <td style='display: {{ $dias->dia_21 != 'Z' ? 'table-cell' : 'none' }};'>0</td>
                              <td style='display: {{ $dias->dia_22 != 'Z' ? 'table-cell' : 'none' }};'>0</td>
                              <td style='display: {{ $dias->dia_23 != 'Z' ? 'table-cell' : 'none' }};'>0</td>
                              <td style='display: {{ $dias->dia_24 != 'Z' ? 'table-cell' : 'none' }};'>0</td>
                              <td style='display: {{ $dias->dia_25 != 'Z' ? 'table-cell' : 'none' }};'>0</td>
                              <td style='display: {{ $dias->dia_26 != 'Z' ? 'table-cell' : 'none' }};'>0</td>
                              <td style='display: {{ $dias->dia_27 != 'Z' ? 'table-cell' : 'none' }};'>0</td>
                              <td style='display: {{ $dias->dia_28 != 'Z' ? 'table-cell' : 'none' }};'>0</td>
                              <td style='display: {{ $dias->dia_29 != 'Z' ? 'table-cell' : 'none' }};'>0</td>
                              <td style='display: {{ $dias->dia_30 != 'Z' ? 'table-cell' : 'none' }};'>0</td>
                              <td style='display: {{ $dias->dia_31 != 'Z' ? 'table-cell' : 'none' }};'>0</td>
                              <td class="tg-0pky1">0</td>
                              <td class="tg-0pky2">0</td>
                              <td class="tg-0pky3">0</td>
                              <td class="tg-0pky4">0</td>
                              <td class=" uneditable"></td>
                              @endif
                              
                          </tr>
                        @endif
                        @if($datos['tipo'] == 'RPS')
                         
                         <tr>                       
                          <td class="uneditable tg-lboi" rowspan="1">{{$datos['sede']->nombre}}</td>
                          <td class="uneditable ">RPS</td>
                          <td id="{{$datos['sede']->consecutivo}}-RPS-dia1" style='display: {{ $dias->dia_1 != 'Z' ? 'table-cell' : 'none' }};' data-id="{{$datos['sede']->consecutivo}}" data-dia="dia1" data-modalidad="RPS">
                            @foreach ($datos['simat']['dia1'] as $dia1)
                            {{$dia1->dia_1 != 0 ? $dia1->dia_1 + $dia1->dia_1observacion : 0}}
                            @endforeach
                          </td>
                          <td id="{{$datos['sede']->consecutivo}}-RPS-dia2" style='display: {{ $dias->dia_2 != 'Z' ? 'table-cell' : 'none' }};' data-id="{{$datos['sede']->consecutivo}}" data-dia="dia2" data-modalidad="RPS">
                            @foreach ($datos['simat']['dia2'] as $dia2)
                            {{$dia2->dia_2 != 0 ? $dia2->dia_2 + $dia2->dia_2observacion : 0}}
                            @endforeach
                          </td>
                          <td id="{{$datos['sede']->consecutivo}}-RPS-dia3" style='display: {{ $dias->dia_3 != 'Z' ? 'table-cell' : 'none' }};' data-id="{{$datos['sede']->consecutivo}}" data-dia="dia3" data-modalidad="RPS">
                            @foreach ($datos['simat']['dia3'] as $dia3)
                            {{$dia3->dia_3 != 0 ? $dia3->dia_3 + $dia3->dia_3observacion : 0}}
                            @endforeach
                          </td>
                          <td id="{{$datos['sede']->consecutivo}}-RPS-dia4" style='display: {{ $dias->dia_4 != 'Z' ? 'table-cell' : 'none' }};' data-id="{{$datos['sede']->consecutivo}}" data-dia="dia4" data-modalidad="RPS">
                            @foreach ($datos['simat']['dia4'] as $dia4)
                            {{$dia4->dia_4 != 0 ? $dia4->dia_4 + $dia4->dia_4observacion : 0}}
                            @endforeach                          
                          </td>
                          <td id="{{$datos['sede']->consecutivo}}-RPS-dia5" style='display: {{ $dias->dia_5 != 'Z' ? 'table-cell' : 'none' }};' data-id="{{$datos['sede']->consecutivo}}" data-dia="dia5" data-modalidad="RPS">
                            @foreach ($datos['simat']['dia5'] as $dia5)
                            {{$dia5->dia_5 != 0 ? $dia5->dia_5 + $dia5->dia_5observacion : 0}}
                            @endforeach
                          </td>
                          <td id="{{$datos['sede']->consecutivo}}-RPS-dia6" style='display: {{ $dias->dia_6 != 'Z' ? 'table-cell' : 'none' }};' data-id="{{$datos['sede']->consecutivo}}" data-dia="dia6" data-modalidad="RPS">
                            @foreach ($datos['simat']['dia6'] as $dia6)
                            {{$dia6->dia_6 != 0 ? $dia6->dia_6 + $dia6->dia_6observacion : 0}}
                            @endforeach
                          </td>
                          <td id="{{$datos['sede']->consecutivo}}-RPS-dia7" style='display: {{ $dias->dia_7 != 'Z' ? 'table-cell' : 'none' }};' data-id="{{$datos['sede']->consecutivo}}" data-dia="dia7" data-modalidad="RPS">
                            @foreach ($datos['simat']['dia7'] as $dia7)
                            {{$dia7->dia_7 != 0 ? $dia7->dia_7 + $dia7->dia_7observacion : 0}}
                            @endforeach
                          </td>
                          <td id="{{$datos['sede']->consecutivo}}-RPS-dia8" style='display: {{ $dias->dia_8 != 'Z' ? 'table-cell' : 'none' }};' data-id="{{$datos['sede']->consecutivo}}" data-dia="dia8" data-modalidad="RPS">
                            @foreach ($datos['simat']['dia8'] as $dia8)
                            {{$dia8->dia_8 != 0 ? $dia8->dia_8 + $dia8->dia_8observacion : 0}}
                            @endforeach
                          </td>
                          <td id="{{$datos['sede']->consecutivo}}-RPS-dia9" style='display: {{ $dias->dia_9 != 'Z' ? 'table-cell' : 'none' }};' data-id="{{$datos['sede']->consecutivo}}" data-dia="dia9" data-modalidad="RPS">
                            @foreach ($datos['simat']['dia9'] as $dia9)
                            {{$dia9->dia_9 != 0 ? $dia9->dia_9 + $dia9->dia_9observacion : 0}}
                            @endforeach
                          </td>
                          <td id="{{$datos['sede']->consecutivo}}-RPS-dia10" style='display: {{ $dias->dia_10 != 'Z' ? 'table-cell' : 'none' }};' data-id="{{$datos['sede']->consecutivo}}" data-dia="dia10" data-modalidad="RPS">
                            @foreach ($datos['simat']['dia10'] as $dia10)
                            {{$dia10->dia_10 != 0 ? $dia10->dia_10 + $dia10->dia_10observacion : 0}}
                            @endforeach
                          </td>
                          <td id="{{$datos['sede']->consecutivo}}-RPS-dia11" style='display: {{ $dias->dia_11 != 'Z' ? 'table-cell' : 'none' }};' data-id="{{$datos['sede']->consecutivo}}" data-dia="dia11" data-modalidad="RPS">
                            @foreach ($datos['simat']['dia11'] as $dia11)
                            {{$dia11->dia_11 != 0 ? $dia11->dia_11 + $dia11->dia_11observacion : 0}}
                            @endforeach
                          </td>
                          <td id="{{$datos['sede']->consecutivo}}-RPS-dia12" style='display: {{ $dias->dia_12 != 'Z' ? 'table-cell' : 'none' }};' data-id="{{$datos['sede']->consecutivo}}" data-dia="dia12" data-modalidad="RPS">
                            @foreach ($datos['simat']['dia12'] as $dia12)
                            {{$dia12->dia_12 != 0 ? $dia12->dia_12 + $dia12->dia_12observacion : 0}}
                            @endforeach
                          </td>
                          <td id="{{$datos['sede']->consecutivo}}-RPS-dia13" style='display: {{ $dias->dia_13 != 'Z' ? 'table-cell' : 'none' }};' data-id="{{$datos['sede']->consecutivo}}" data-dia="dia13" data-modalidad="RPS">
                            @foreach ($datos['simat']['dia13'] as $dia13)
                            {{$dia13->dia_13 != 0 ? $dia13->dia_13 + $dia13->dia_13observacion : 0}}
                            @endforeach
                          </td>
                          <td id="{{$datos['sede']->consecutivo}}-RPS-dia14" style='display: {{ $dias->dia_14 != 'Z' ? 'table-cell' : 'none' }};' data-id="{{$datos['sede']->consecutivo}}" data-dia="dia14" data-modalidad="RPS">
                            @foreach ($datos['simat']['dia14'] as $dia14)
                            {{$dia14->dia_14 != 0 ? $dia14->dia_14 + $dia14->dia_14observacion : 0}}
                            @endforeach
                          </td>
                          <td id="{{$datos['sede']->consecutivo}}-RPS-dia15" style='display: {{ $dias->dia_15 != 'Z' ? 'table-cell' : 'none' }};' data-id="{{$datos['sede']->consecutivo}}" data-dia="dia15" data-modalidad="RPS">
                            @foreach ($datos['simat']['dia15'] as $dia15)
                            {{$dia15->dia_15 != 0 ? $dia15->dia_15 + $dia15->dia_15observacion : 0}}
                            @endforeach
                          </td>
                          <td id="{{$datos['sede']->consecutivo}}-RPS-dia16" style='display: {{ $dias->dia_16 != 'Z' ? 'table-cell' : 'none' }};' data-id="{{$datos['sede']->consecutivo}}" data-dia="dia16" data-modalidad="RPS">
                            @foreach ($datos['simat']['dia16'] as $dia16)
                            {{$dia16->dia_16 != 0 ? $dia16->dia_16 + $dia16->dia_16observacion : 0}}
                            @endforeach
                          </td>
                          <td id="{{$datos['sede']->consecutivo}}-RPS-dia17" style='display: {{ $dias->dia_17 != 'Z' ? 'table-cell' : 'none' }};' data-id="{{$datos['sede']->consecutivo}}" data-dia="dia17" data-modalidad="RPS">
                            @foreach ($datos['simat']['dia17'] as $dia17)
                            {{$dia17->dia_17 != 0 ? $dia17->dia_17 + $dia17->dia_17observacion : 0}}
                            @endforeach
                          </td>
                          <td id="{{$datos['sede']->consecutivo}}-RPS-dia18" style='display: {{ $dias->dia_18 != 'Z' ? 'table-cell' : 'none' }};' data-id="{{$datos['sede']->consecutivo}}" data-dia="dia18" data-modalidad="RPS">
                            @foreach ($datos['simat']['dia18'] as $dia18)
                            {{$dia18->dia_18 != 0 ? $dia18->dia_18 + $dia18->dia_18observacion : 0}}
                            @endforeach
                          </td>
                          <td id="{{$datos['sede']->consecutivo}}-RPS-dia19" style='display: {{ $dias->dia_19 != 'Z' ? 'table-cell' : 'none' }};' data-id="{{$datos['sede']->consecutivo}}" data-dia="dia19" data-modalidad="RPS">
                            @foreach ($datos['simat']['dia19'] as $dia19)
                            {{$dia19->dia_19 != 0 ? $dia19->dia_19 + $dia19->dia_19observacion : 0}}
                            @endforeach
                          </td>
                          <td id="{{$datos['sede']->consecutivo}}-RPS-dia20" style='display: {{ $dias->dia_20 != 'Z' ? 'table-cell' : 'none' }};' data-id="{{$datos['sede']->consecutivo}}" data-dia="dia20" data-modalidad="RPS">
                            @foreach ($datos['simat']['dia20'] as $dia20)
                            {{$dia20->dia_20 != 0 ? $dia20->dia_20 + $dia20->dia_20observacion : 0}}
                            @endforeach
                          </td>
                          <td id="{{$datos['sede']->consecutivo}}-RPS-dia21" style='display: {{ $dias->dia_21 != 'Z' ? 'table-cell' : 'none' }};' data-id="{{$datos['sede']->consecutivo}}" data-dia="dia21" data-modalidad="RPS">
                            @foreach ($datos['simat']['dia21'] as $dia21)
                            {{$dia21->dia_21 != 0 ? $dia21->dia_21 + $dia2->dia_21observacion : 0}}
                            @endforeach
                          </td>
                          <td id="{{$datos['sede']->consecutivo}}-RPS-dia22" style='display: {{ $dias->dia_22 != 'Z' ? 'table-cell' : 'none' }};' data-id="{{$datos['sede']->consecutivo}}" data-dia="dia22" data-modalidad="RPS">
                            @foreach ($datos['simat']['dia22'] as $dia22)
                            {{$dia22->dia_22 != 0 ? $dia22->dia_22 + $dia22->dia_22observacion : 0}}
                            @endforeach
                          </td>
                          <td id="{{$datos['sede']->consecutivo}}-RPS-dia23" style='display: {{ $dias->dia_23 != 'Z' ? 'table-cell' : 'none' }};' data-id="{{$datos['sede']->consecutivo}}" data-dia="dia23" data-modalidad="RPS">
                            @foreach ($datos['simat']['dia23'] as $dia23)
                            {{$dia23->dia_23 != 0 ? $dia23->dia_23 + $dia23->dia_23observacion : 0}}
                            @endforeach
                          </td>
                          <td id="{{$datos['sede']->consecutivo}}-RPS-dia24" style='display: {{ $dias->dia_24 != 'Z' ? 'table-cell' : 'none' }};' data-id="{{$datos['sede']->consecutivo}}" data-dia="dia24" data-modalidad="RPS">
                            @foreach ($datos['simat']['dia24'] as $dia24)
                            {{$dia24->dia_24 != 0 ? $dia24->dia_24 + $dia24->dia_24observacion : 0}}
                            @endforeach
                          </td>
                          <td id="{{$datos['sede']->consecutivo}}-RPS-dia25" style='display: {{ $dias->dia_25 != 'Z' ? 'table-cell' : 'none' }};' data-id="{{$datos['sede']->consecutivo}}" data-dia="dia25" data-modalidad="RPS">
                            @foreach ($datos['simat']['dia25'] as $dia25)
                            {{$dia25->dia_25 != 0 ? $dia25->dia_25 + $dia25->dia_25observacion : 0}}
                            @endforeach
                          </td>
                          <td id="{{$datos['sede']->consecutivo}}-RPS-dia26" style='display: {{ $dias->dia_26 != 'Z' ? 'table-cell' : 'none' }};' data-id="{{$datos['sede']->consecutivo}}" data-dia="dia26" data-modalidad="RPS">
                            @foreach ($datos['simat']['dia26'] as $dia26)
                            {{$dia26->dia_26 != 0 ? $dia26->dia_26 + $dia26->dia_26observacion : 0}}
                            @endforeach
                          </td>
                          <td id="{{$datos['sede']->consecutivo}}-RPS-dia27" style='display: {{ $dias->dia_27 != 'Z' ? 'table-cell' : 'none' }};' data-id="{{$datos['sede']->consecutivo}}" data-dia="dia27" data-modalidad="RPS">
                            @foreach ($datos['simat']['dia27'] as $dia27)
                            {{$dia27->dia_27 != 0 ? $dia27->dia_27 + $dia27->dia_27observacion : 0}}
                            @endforeach
                          </td>
                          <td id="{{$datos['sede']->consecutivo}}-RPS-dia28" style='display: {{ $dias->dia_28 != 'Z' ? 'table-cell' : 'none' }};' data-id="{{$datos['sede']->consecutivo}}" data-dia="dia28" data-modalidad="RPS">
                            @foreach ($datos['simat']['dia28'] as $dia28)
                            {{$dia28->dia_28 != 0 ? $dia28->dia_28 + $dia28->dia_28observacion : 0}}
                            @endforeach
                          </td>
                          <td id="{{$datos['sede']->consecutivo}}-RPS-dia29" style='display: {{ $dias->dia_29 != 'Z' ? 'table-cell' : 'none' }};' data-id="{{$datos['sede']->consecutivo}}" data-dia="dia29" data-modalidad="RPS">
                            @foreach ($datos['simat']['dia29'] as $dia29)
                            {{$dia29->dia_29 != 0 ? $dia29->dia_29 + $dia29->dia_29observacion : 0}}
                            @endforeach
                          </td>
                          <td id="{{$datos['sede']->consecutivo}}-RPS-dia30" style='display: {{ $dias->dia_30 != 'Z' ? 'table-cell' : 'none' }};' data-id="{{$datos['sede']->consecutivo}}" data-dia="dia30" data-modalidad="RPS">
                            @foreach ($datos['simat']['dia30'] as $dia30)
                            {{$dia30->dia_30 != 0 ? $dia30->dia_30 + $dia30->dia_30observacion : 0}}
                            @endforeach
                          </td>
                          <td id="{{$datos['sede']->consecutivo}}-RPS-dia31" style='display: {{ $dias->dia_31 != 'Z' ? 'table-cell' : 'none' }};' data-id="{{$datos['sede']->consecutivo}}" data-dia="dia31" data-modalidad="RPS">
                            @foreach ($datos['simat']['dia31'] as $dia31)
                            {{$dia31->dia_31 != 0 ? $dia31->dia_31 + $dia31->dia_31observacion : 0}}
                            @endforeach
                          </td>
                          <td id="{{$datos['sede']->consecutivo}}-RPS-dias" class="tg-0pky1" data-id="{{$datos['sede']->consecutivo}}" data-dias="diasAtendidos" data-modalidad="RPS">
                          
                            @php
                            $suma = 0; 
                            foreach($datos['simat']['dia1'] as $dia1)
                            {
                              $suma += $dia1->dia_1 != 0 ? 1 : 0;
                            }
                            
                            foreach($datos['simat']['dia2'] as $dia2)
                            {
                              $suma += $dia2->dia_2 != 0 ? 1 : 0;
                            }
                            foreach($datos['simat']['dia3'] as $dia3)
                            {
                              $suma += $dia3->dia_3 != 0 ? 1 : 0;
                            }
                            foreach($datos['simat']['dia4'] as $dia4)
                            {
                              $suma += $dia4->dia_4 != 0 ? 1 : 0;
                            }
                            foreach($datos['simat']['dia5'] as $dia5)
                            {
                              $suma += $dia5->dia_5 != 0 ? 1 : 0;
                            }
                            foreach($datos['simat']['dia6'] as $dia6)
                            {
                              $suma += $dia6->dia_6 != 0 ? 1 : 0;
                            }
                            foreach($datos['simat']['dia7'] as $dia7)
                            {
                              $suma += $dia7->dia_7 != 0 ? 1 : 0;
                            }
                            foreach($datos['simat']['dia8'] as $dia8)
                            {
                              $suma += $dia8->dia_8 != 0 ? 1 : 0;
                            }
                            foreach($datos['simat']['dia9'] as $dia9)
                            {
                              $suma += $dia9->dia_9 != 0 ? 1 : 0;
                            }
                            foreach($datos['simat']['dia10'] as $dia10)
                            {
                              $suma += $dia10->dia_10 != 0 ? 1 : 0;
                            }
                            foreach($datos['simat']['dia11'] as $dia11)
                            {
                              $suma += $dia11->dia_11 != 0 ? 1 : 0;
                            }
                            foreach($datos['simat']['dia12'] as $dia12)
                            {
                              $suma += $dia12->dia_12 != 0 ? 1 : 0;
                            }
                            foreach($datos['simat']['dia13'] as $dia13)
                            {
                              $suma += $dia13->dia_13 != 0 ? 1 : 0;
                            }
                            foreach($datos['simat']['dia14'] as $dia14)
                            {
                              $suma += $dia14->dia_14 != 0 ? 1 : 0;
                            }
                            foreach($datos['simat']['dia15'] as $dia15)
                            {
                              $suma += $dia15->dia_15 != 0 ? 1 : 0;
                            }
                            foreach($datos['simat']['dia16'] as $dia16)
                            {
                              $suma += $dia16->dia_16 != 0 ? 1 : 0;
                            }
                            foreach($datos['simat']['dia17'] as $dia17)
                            {
                              $suma += $dia17->dia_17 != 0 ? 1 : 0;
                            }
                            foreach($datos['simat']['dia18'] as $dia18)
                            {
                              $suma += $dia18->dia_18 != 0 ? 1 : 0;
                            }
                            foreach($datos['simat']['dia19'] as $dia19)
                            {
                              $suma += $dia19->dia_19 != 0 ? 1 : 0;
                            }
                            foreach($datos['simat']['dia20'] as $dia20)
                            {
                              $suma += $dia20->dia_20 != 0 ? 1 : 0;
                            }
                            foreach($datos['simat']['dia21'] as $dia21)
                            {
                              $suma += $dia21->dia_21 != 0 ? 1 : 0;
                            }
                            foreach($datos['simat']['dia22'] as $dia22)
                            {
                              $suma += $dia22->dia_22 != 0 ? 1 : 0;
                            }
                            foreach($datos['simat']['dia23'] as $dia23)
                            {
                              $suma += $dia23->dia_23 != 0 ? 1 : 0;
                            }
                            foreach($datos['simat']['dia24'] as $dia24)
                            {
                              $suma += $dia24->dia_24 != 0 ? 1 : 0;
                            }
                            foreach($datos['simat']['dia25'] as $dia25)
                            {
                              $suma += $dia25->dia_25 != 0 ? 1 : 0;
                            }
                            foreach($datos['simat']['dia26'] as $dia26)
                            {
                              $suma += $dia26->dia_26 != 0 ? 1 : 0;
                            }
                            foreach($datos['simat']['dia27'] as $dia27)
                            {
                              $suma += $dia27->dia_27 != 0 ? 1 : 0;
                            }
                            foreach($datos['simat']['dia28'] as $dia28)
                            {
                              $suma += $dia28->dia_28 != 0 ? 1 : 0;
                            }
                            foreach($datos['simat']['dia29'] as $dia29)
                            {
                              $suma += $dia29->dia_29 != 0 ? 1 : 0;
                            }
                            foreach($datos['simat']['dia30'] as $dia30)
                            {
                              $suma += $dia30->dia_30 != 0 ? 1 : 0;
                            }
                            foreach($datos['simat']['dia31'] as $dia31)
                            {
                              $suma += $dia31->dia_31 != 0 ? 1 : 0;
                            }
                      
                            @endphp
                            {{$suma}}
                          </td>
                          
                          <td id="{{$datos['sede']->consecutivo}}-RPS-totalRaciones" class="tg-0pky2" data-id="{{$datos['sede']->consecutivo}}" data-totalraciones="totalRaciones" data-modalidad="RPS">
                            @php
                            $suma1 = 0; 
                            foreach($datos['simat']['dia1'] as $dia1) {$suma1 += $dia1->dia_1 != 0 ? $dia1->dia_1 + $dia1->dia_1observacion : 0;}
                            foreach($datos['simat']['dia2'] as $dia2) {$suma1 += $dia2->dia_2 != 0 ? $dia2->dia_2 + $dia2->dia_2observacion : 0;}
                            foreach($datos['simat']['dia3'] as $dia3) {$suma1 += $dia3->dia_3 != 0 ? $dia3->dia_3 + $dia3->dia_3observacion : 0;}
                            foreach($datos['simat']['dia4'] as $dia4) {$suma1 += $dia4->dia_4 != 0 ? $dia4->dia_4 + $dia4->dia_4observacion : 0;}
                            foreach($datos['simat']['dia5'] as $dia5) {$suma1 += $dia5->dia_5 != 0 ? $dia5->dia_5 + $dia5->dia_5observacion : 0;}
                            foreach($datos['simat']['dia6'] as $dia6) {$suma1 += $dia6->dia_6 != 0 ? $dia6->dia_6 + $dia6->dia_6observacion : 0;}
                            foreach($datos['simat']['dia7'] as $dia7) {$suma1 += $dia7->dia_7 != 0 ? $dia7->dia_7 + $dia7->dia_7observacion : 0;}
                            foreach($datos['simat']['dia8'] as $dia8) {$suma1 += $dia8->dia_8 != 0 ? $dia8->dia_8 + $dia8->dia_8observacion : 0;}
                            foreach($datos['simat']['dia9'] as $dia9) {$suma1 += $dia9->dia_9 != 0 ? $dia9->dia_9 + $dia9->dia_9observacion : 0;}
                            foreach($datos['simat']['dia10'] as $dia10) {$suma1 += $dia10->dia_10 != 0 ? $dia10->dia_10 + $dia10->dia_10observacion : 0;}
                            foreach($datos['simat']['dia11'] as $dia11) {$suma1 += $dia11->dia_11 != 0 ? $dia11->dia_11 + $dia11->dia_11observacion : 0;}
                            foreach($datos['simat']['dia12'] as $dia12) {$suma1 += $dia12->dia_12 != 0 ? $dia12->dia_12 + $dia12->dia_12observacion : 0;}
                            foreach($datos['simat']['dia13'] as $dia13) {$suma1 += $dia13->dia_13 != 0 ? $dia13->dia_13 + $dia13->dia_13observacion : 0;}
                            foreach($datos['simat']['dia14'] as $dia14) {$suma1 += $dia14->dia_14 != 0 ? $dia14->dia_14 + $dia14->dia_14observacion : 0;}
                            foreach($datos['simat']['dia15'] as $dia15) {$suma1 += $dia15->dia_15 != 0 ? $dia15->dia_15 + $dia15->dia_15observacion : 0;}
                            foreach($datos['simat']['dia16'] as $dia16) {$suma1 += $dia16->dia_16 != 0 ? $dia16->dia_16 + $dia16->dia_16observacion : 0;}
                            foreach($datos['simat']['dia17'] as $dia17) {$suma1 += $dia17->dia_17 != 0 ? $dia17->dia_17 + $dia17->dia_17observacion : 0;}
                            foreach($datos['simat']['dia18'] as $dia18) {$suma1 += $dia18->dia_18 != 0 ? $dia18->dia_18 + $dia18->dia_18observacion : 0;}
                            foreach($datos['simat']['dia19'] as $dia19) {$suma1 += $dia19->dia_19 != 0 ? $dia19->dia_19 + $dia19->dia_19observacion : 0;}
                            foreach($datos['simat']['dia20'] as $dia20) {$suma1 += $dia20->dia_20 != 0 ? $dia20->dia_20 + $dia20->dia_20observacion : 0;}
                            foreach($datos['simat']['dia21'] as $dia21) {$suma1 += $dia21->dia_21 != 0 ? $dia21->dia_21 + $dia21->dia_21observacion : 0;}
                            foreach($datos['simat']['dia22'] as $dia22) {$suma1 += $dia22->dia_22 != 0 ? $dia22->dia_22 + $dia22->dia_22observacion : 0;}
                            foreach($datos['simat']['dia23'] as $dia23) {$suma1 += $dia23->dia_23 != 0 ? $dia23->dia_23 + $dia23->dia_23observacion : 0;}
                            foreach($datos['simat']['dia24'] as $dia24) {$suma1 += $dia24->dia_24 != 0 ? $dia24->dia_24 + $dia24->dia_24observacion : 0;}
                            foreach($datos['simat']['dia25'] as $dia25) {$suma1 += $dia25->dia_25 != 0 ? $dia25->dia_25 + $dia25->dia_25observacion : 0;}
                            foreach($datos['simat']['dia26'] as $dia26) {$suma1 += $dia26->dia_26 != 0 ? $dia26->dia_26 + $dia26->dia_26observacion : 0;}
                            foreach($datos['simat']['dia27'] as $dia27) {$suma1 += $dia27->dia_27 != 0 ? $dia27->dia_27 + $dia27->dia_27observacion : 0;}
                            foreach($datos['simat']['dia28'] as $dia28) {$suma1 += $dia28->dia_28 != 0 ? $dia28->dia_28 + $dia28->dia_28observacion : 0;}
                            foreach($datos['simat']['dia29'] as $dia29) {$suma1 += $dia29->dia_29 != 0 ? $dia29->dia_29 + $dia29->dia_29observacion : 0;}
                            foreach($datos['simat']['dia30'] as $dia30) {$suma1 += $dia30->dia_30 != 0 ? $dia30->dia_30 + $dia30->dia_30observacion : 0;}
                            foreach($datos['simat']['dia31'] as $dia31) {$suma1 += $dia31->dia_31 != 0 ? $dia31->dia_31 + $dia31->dia_31observacion : 0;}

                            @endphp
                            {{$suma1}}
                          </td>
                          
                          <td id="{{$datos['sede']->consecutivo}}-RPS-novedades" class="tg-0pky3" data-id="{{$datos['sede']->consecutivo}}" data-novedades="novedades" data-modalidad="RPS">
                            
                            @php
                            $sede = DB::table('rps')->where('codigo_dane_sede',$datos['sede']->consecutivo)->first();
                          
                      
                            $suma2 = 0;
                            foreach($datos['simat']['dia1'] as $dia1) {$suma2 = $sede->dia_1 != 'Z' ? $sede->dia_1 != 'N' ? $dia1->dia_1observacion : 0 : 0;}
                            foreach($datos['simat']['dia2'] as $dia2) {$suma2 = $sede->dia_2 != 'Z' ? $sede->dia_2 != 'N' ? $dia2->dia_2observacion : 0 : 0;}
                            foreach($datos['simat']['dia3'] as $dia3) {$suma2 = $sede->dia_3 != 'Z' ? $sede->dia_3 != 'N' ? $dia3->dia_3observacion : 0 : 0;}
                            foreach($datos['simat']['dia4'] as $dia4) {$suma2 = $sede->dia_4 != 'Z' ? $sede->dia_4 != 'N' ? $dia4->dia_4observacion : 0 : 0;}
                            foreach($datos['simat']['dia5'] as $dia5) {$suma2 = $sede->dia_5 != 'Z' ? $sede->dia_5 != 'N' ? $dia5->dia_5observacion : 0 : 0;}
                            foreach($datos['simat']['dia6'] as $dia6) {$suma2 = $sede->dia_6 != 'Z' ? $sede->dia_6 != 'N' ? $dia6->dia_6observacion : 0 : 0;}
                            foreach($datos['simat']['dia7'] as $dia7) {$suma2 = $sede->dia_7 != 'Z' ? $sede->dia_7 != 'N' ? $dia7->dia_7observacion : 0 : 0;}
                            foreach($datos['simat']['dia8'] as $dia8) {$suma2 = $sede->dia_8 != 'Z' ? $sede->dia_8 != 'N' ? $dia8->dia_8observacion : 0 : 0;}
                            foreach($datos['simat']['dia9'] as $dia9) {$suma2 = $sede->dia_9 != 'Z' ? $sede->dia_9 != 'N' ? $dia9->dia_9observacion : 0 : 0;}
                            foreach($datos['simat']['dia10'] as $dia10) {$suma2 = $sede->dia_10 != 'Z' ? $sede->dia_10 != 'N' ? $dia10->dia_10observacion : 0 : 0;}
                            foreach($datos['simat']['dia11'] as $dia11) {$suma2 = $sede->dia_11 != 'Z' ? $sede->dia_11 != 'N' ? $dia11->dia_11observacion : 0 : 0;}
                            foreach($datos['simat']['dia12'] as $dia12) {$suma2 = $sede->dia_12 != 'Z' ? $sede->dia_12 != 'N' ? $dia12->dia_12observacion : 0 : 0;}
                            foreach($datos['simat']['dia13'] as $dia13) {$suma2 = $sede->dia_13 != 'Z' ? $sede->dia_13 != 'N' ? $dia13->dia_13observacion : 0 : 0;}
                            foreach($datos['simat']['dia14'] as $dia14) {$suma2 = $sede->dia_14 != 'Z' ? $sede->dia_14 != 'N' ? $dia14->dia_14observacion : 0 : 0;}
                            foreach($datos['simat']['dia15'] as $dia15) {$suma2 = $sede->dia_15 != 'Z' ? $sede->dia_15 != 'N' ? $dia15->dia_15observacion : 0 : 0;}
                            foreach($datos['simat']['dia16'] as $dia16) {$suma2 = $sede->dia_16 != 'Z' ? $sede->dia_16 != 'N' ? $dia16->dia_16observacion : 0 : 0;}
                            foreach($datos['simat']['dia17'] as $dia17) {$suma2 = $sede->dia_17 != 'Z' ? $sede->dia_17 != 'N' ? $dia17->dia_17observacion : 0 : 0;}
                            foreach($datos['simat']['dia18'] as $dia18) {$suma2 = $sede->dia_18 != 'Z' ? $sede->dia_18 != 'N' ? $dia18->dia_18observacion : 0 : 0;}
                            foreach($datos['simat']['dia19'] as $dia19) {$suma2 = $sede->dia_19 != 'Z' ? $sede->dia_19 != 'N' ? $dia19->dia_19observacion : 0 : 0;}
                            foreach($datos['simat']['dia20'] as $dia20) {$suma2 = $sede->dia_20 != 'Z' ? $sede->dia_20 != 'N' ? $dia20->dia_20observacion : 0 : 0;}
                            foreach($datos['simat']['dia21'] as $dia21) {$suma2 = $sede->dia_21 != 'Z' ? $sede->dia_21 != 'N' ? $dia21->dia_21observacion : 0 : 0;}
                            foreach($datos['simat']['dia22'] as $dia22) {$suma2 = $sede->dia_22 != 'Z' ? $sede->dia_22 != 'N' ? $dia22->dia_22observacion : 0 : 0;}
                            foreach($datos['simat']['dia23'] as $dia23) {$suma2 = $sede->dia_23 != 'Z' ? $sede->dia_23 != 'N' ? $dia23->dia_23observacion : 0 : 0;}
                            foreach($datos['simat']['dia24'] as $dia24) {$suma2 = $sede->dia_24 != 'Z' ? $sede->dia_24 != 'N' ? $dia24->dia_24observacion : 0 : 0;}
                            foreach($datos['simat']['dia25'] as $dia25) {$suma2 = $sede->dia_25 != 'Z' ? $sede->dia_25 != 'N' ? $dia25->dia_25observacion : 0 : 0;}
                            foreach($datos['simat']['dia26'] as $dia26) {$suma2 = $sede->dia_26 != 'Z' ? $sede->dia_26 != 'N' ? $dia26->dia_26observacion : 0 : 0;}
                            foreach($datos['simat']['dia27'] as $dia27) {$suma2 = $sede->dia_27 != 'Z' ? $sede->dia_27 != 'N' ? $dia27->dia_27observacion : 0 : 0;}
                            foreach($datos['simat']['dia28'] as $dia28) {$suma2 = $sede->dia_28 != 'Z' ? $sede->dia_28 != 'N' ? $dia28->dia_28observacion : 0 : 0;}
                            foreach($datos['simat']['dia29'] as $dia29) {$suma2 = $sede->dia_29 != 'Z' ? $sede->dia_29 != 'N' ? $dia29->dia_29observacion : 0 : 0;}
                            foreach($datos['simat']['dia30'] as $dia30) {$suma2 = $sede->dia_30 != 'Z' ? $sede->dia_30 != 'N' ? $dia30->dia_30observacion : 0 : 0;}
                            foreach($datos['simat']['dia31'] as $dia31) {$suma2 = $sede->dia_31 != 'Z' ? $sede->dia_31 != 'N' ? $dia31->dia_31observacion : 0 : 0;}

                            @endphp
                            {{$suma2}}
                          </td>
                          
                          <td id="{{$datos['sede']->consecutivo}}-RPS-devoluciones" class="tg-0pky4" data-id="{{$datos['sede']->consecutivo}}" data-devoluciones="devoluciones" data-modalidad="RPS">0</td>
                          <td class=" uneditable"><button class="dt-button create-new btn btn-primary guardarbt" tabindex="0"  type="button" 
                          data-id="{{$datos['sede']->consecutivo}}"
                          data-tipo="RPS" id="bt-{{$datos['sede']->consecutivo}}-RPS"                        
                            ><span>+ Guardar</span></button></td>
                        </tr>
                         
                        @endif
                      @endforeach
                      <tr>
                        <th class="tg-0lax" colspan="{{(31 - $diashabiles)}}" style="text-align: right; text-transform: uppercase;">Totales</th>
                      </tr>
                      <tr>
                        <th class="tg-0lax" colspan="{{(38 - $diashabiles) - $diashabiles}}"></th>
                        <th class="tg-0lax" id="total-dias"></th>
                        <th class="tg-0lax" id="total-raciones"></th>
                        <th class="tg-0lax" id="total-novedades"></th>
                        <th class="tg-0lax" id="total-devoluciones"></th>
                        <th class="tg-0lax" ></th>
                      </tr>
                </tbody>
              </table>
              
            @elseif($data[0]['tipoconsolidado'] == 'especial')
              <table id="editable1" class="table table-responsive dt-complex-header table-bordered  table-sm">
                <thead>
                  <tr>
                    <th rowspan="2">SEDE</th>
                    <th rowspan="2">JORNADA - TIPO DE RACION</th>
                    <th colspan="{{$diashabiles}}">DIAS PROGRAMADOS</th>
                    <th rowspan="2">N° DIAS ATENDIDOS</th>
                    <th rowspan="2">TOTAL RACIONES</th>
                    <th rowspan="2">NOVEDADES EN LAS ENTREGAS</th>
                    <th rowspan="2">DEVOLUCIONES</th>
                    <th rowspan="2">Action</th>
                  </tr>
                  <tr>
                    <th style="display: {{ $dias->dia_1 != 'Z' ? 'table-cell' : 'none' }};">1</th>
                    <th style="display: {{ $dias->dia_2 != 'Z' ? 'table-cell' : 'none' }};">2</th>
                    <th style="display: {{ $dias->dia_3 != 'Z' ? 'table-cell' : 'none' }};">3</th>
                    <th style="display: {{ $dias->dia_4 != 'Z' ? 'table-cell' : 'none' }};">4</th>
                    <th style="display: {{ $dias->dia_5 != 'Z' ? 'table-cell' : 'none' }};">5</th>
                    <th style="display: {{ $dias->dia_6 != 'Z' ? 'table-cell' : 'none' }};">6</th>
                    <th style="display: {{ $dias->dia_7 != 'Z' ? 'table-cell' : 'none' }};">7</th>
                    <th style="display: {{ $dias->dia_8 != 'Z' ? 'table-cell' : 'none' }};">8</th>
                    <th style="display: {{ $dias->dia_9 != 'Z' ? 'table-cell' : 'none' }};">9</th>
                    <th style="display: {{ $dias->dia_10 != 'Z' ? 'table-cell' : 'none' }};">10</th>
                    <th style="display: {{ $dias->dia_11 != 'Z' ? 'table-cell' : 'none' }};">11</th>
                    <th style="display: {{ $dias->dia_12 != 'Z' ? 'table-cell' : 'none' }};">12</th>
                    <th style="display: {{ $dias->dia_13 != 'Z' ? 'table-cell' : 'none' }};">13</th>
                    <th style="display: {{ $dias->dia_14 != 'Z' ? 'table-cell' : 'none' }};">14</th>
                    <th style="display: {{ $dias->dia_15 != 'Z' ? 'table-cell' : 'none' }};">15</th>
                    <th style="display: {{ $dias->dia_16 != 'Z' ? 'table-cell' : 'none' }};">16</th>
                    <th style="display: {{ $dias->dia_17 != 'Z' ? 'table-cell' : 'none' }};">17</th>
                    <th style="display: {{ $dias->dia_18 != 'Z' ? 'table-cell' : 'none' }};">18</th>
                    <th style="display: {{ $dias->dia_19 != 'Z' ? 'table-cell' : 'none' }};">19</th>
                    <th style="display: {{ $dias->dia_20 != 'Z' ? 'table-cell' : 'none' }};">20</th>
                    <th style="display: {{ $dias->dia_21 != 'Z' ? 'table-cell' : 'none' }};">21</th>
                    <th style="display: {{ $dias->dia_22 != 'Z' ? 'table-cell' : 'none' }};">22</th>
                    <th style="display: {{ $dias->dia_23 != 'Z' ? 'table-cell' : 'none' }};">23</th>
                    <th style="display: {{ $dias->dia_24 != 'Z' ? 'table-cell' : 'none' }};">24</th>
                    <th style="display: {{ $dias->dia_25 != 'Z' ? 'table-cell' : 'none' }};">25</th>
                    <th style="display: {{ $dias->dia_26 != 'Z' ? 'table-cell' : 'none' }};">26</th>
                    <th style="display: {{ $dias->dia_27 != 'Z' ? 'table-cell' : 'none' }};">27</th>
                    <th style="display: {{ $dias->dia_28 != 'Z' ? 'table-cell' : 'none' }};">28</th>
                    <th style="display: {{ $dias->dia_29 != 'Z' ? 'table-cell' : 'none' }};">29</th>
                    <th style="display: {{ $dias->dia_30 != 'Z' ? 'table-cell' : 'none' }};">30</th>
                    <th style="display: {{ $dias->dia_31 != 'Z' ? 'table-cell' : 'none' }};">31</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach($data as $datos) 
                                  
                      @if($datos['tipo'] == 'RPI')
                        <tr>                       
                            <td class="uneditable tg-lboi" rowspan="2">{{$datos['sede']->nombre}}</td>
                            <td class="uneditable">JM-RI</td>
                            <td id="{{$datos['sede']->consecutivo}}-JM-RI-dia1" style='display: {{ $dias->dia_1 != 'Z' ? 'table-cell' : 'none' }};' data-id="{{$datos['sede']->consecutivo}}" data-dia="dia1" data-modalidad="JM-RI"></td>
                            <td id="{{$datos['sede']->consecutivo}}-JM-RI-dia2" style='display: {{ $dias->dia_2 != 'Z' ? 'table-cell' : 'none' }};' data-id="{{$datos['sede']->consecutivo}}" data-dia="dia2" data-modalidad="JM-RI"></td>
                            <td id="{{$datos['sede']->consecutivo}}-JM-RI-dia3" style='display: {{ $dias->dia_3 != 'Z' ? 'table-cell' : 'none' }};' data-id="{{$datos['sede']->consecutivo}}" data-dia="dia3" data-modalidad="JM-RI"></td>
                            <td id="{{$datos['sede']->consecutivo}}-JM-RI-dia4" style='display: {{ $dias->dia_4 != 'Z' ? 'table-cell' : 'none' }};' data-id="{{$datos['sede']->consecutivo}}" data-dia="dia4" data-modalidad="JM-RI"></td>
                            <td id="{{$datos['sede']->consecutivo}}-JM-RI-dia5" style='display: {{ $dias->dia_5 != 'Z' ? 'table-cell' : 'none' }};' data-id="{{$datos['sede']->consecutivo}}" data-dia="dia5" data-modalidad="JM-RI"></td>
                            <td id="{{$datos['sede']->consecutivo}}-JM-RI-dia6" style='display: {{ $dias->dia_6 != 'Z' ? 'table-cell' : 'none' }};' data-id="{{$datos['sede']->consecutivo}}" data-dia="dia6" data-modalidad="JM-RI"></td>
                            <td id="{{$datos['sede']->consecutivo}}-JM-RI-dia7" style='display: {{ $dias->dia_7 != 'Z' ? 'table-cell' : 'none' }};' data-id="{{$datos['sede']->consecutivo}}" data-dia="dia7" data-modalidad="JM-RI"></td>
                            <td id="{{$datos['sede']->consecutivo}}-JM-RI-dia8" style='display: {{ $dias->dia_8 != 'Z' ? 'table-cell' : 'none' }};' data-id="{{$datos['sede']->consecutivo}}" data-dia="dia8" data-modalidad="JM-RI"></td>
                            <td id="{{$datos['sede']->consecutivo}}-JM-RI-dia9" style='display: {{ $dias->dia_9 != 'Z' ? 'table-cell' : 'none' }};' data-id="{{$datos['sede']->consecutivo}}" data-dia="dia9" data-modalidad="JM-RI"></td>
                            <td id="{{$datos['sede']->consecutivo}}-JM-RI-dia10" style='display: {{ $dias->dia_10 != 'Z' ? 'table-cell' : 'none' }};' data-id="{{$datos['sede']->consecutivo}}" data-dia="dia10" data-modalidad="JM-RI"></td>
                            <td id="{{$datos['sede']->consecutivo}}-JM-RI-dia11" style='display: {{ $dias->dia_11 != 'Z' ? 'table-cell' : 'none' }};' data-id="{{$datos['sede']->consecutivo}}" data-dia="dia11" data-modalidad="JM-RI"></td>
                            <td id="{{$datos['sede']->consecutivo}}-JM-RI-dia12" style='display: {{ $dias->dia_12 != 'Z' ? 'table-cell' : 'none' }};' data-id="{{$datos['sede']->consecutivo}}" data-dia="dia12" data-modalidad="JM-RI"></td>
                            <td id="{{$datos['sede']->consecutivo}}-JM-RI-dia13" style='display: {{ $dias->dia_13 != 'Z' ? 'table-cell' : 'none' }};' data-id="{{$datos['sede']->consecutivo}}" data-dia="dia13" data-modalidad="JM-RI"></td>
                            <td id="{{$datos['sede']->consecutivo}}-JM-RI-dia14" style='display: {{ $dias->dia_14 != 'Z' ? 'table-cell' : 'none' }};' data-id="{{$datos['sede']->consecutivo}}" data-dia="dia14" data-modalidad="JM-RI"></td>
                            <td id="{{$datos['sede']->consecutivo}}-JM-RI-dia15" style='display: {{ $dias->dia_15 != 'Z' ? 'table-cell' : 'none' }};' data-id="{{$datos['sede']->consecutivo}}" data-dia="dia15" data-modalidad="JM-RI"></td>
                            <td id="{{$datos['sede']->consecutivo}}-JM-RI-dia16" style='display: {{ $dias->dia_16 != 'Z' ? 'table-cell' : 'none' }};' data-id="{{$datos['sede']->consecutivo}}" data-dia="dia16" data-modalidad="JM-RI"></td>
                            <td id="{{$datos['sede']->consecutivo}}-JM-RI-dia17" style='display: {{ $dias->dia_17 != 'Z' ? 'table-cell' : 'none' }};' data-id="{{$datos['sede']->consecutivo}}" data-dia="dia17" data-modalidad="JM-RI"></td>
                            <td id="{{$datos['sede']->consecutivo}}-JM-RI-dia18" style='display: {{ $dias->dia_18 != 'Z' ? 'table-cell' : 'none' }};' data-id="{{$datos['sede']->consecutivo}}" data-dia="dia18" data-modalidad="JM-RI"></td>
                            <td id="{{$datos['sede']->consecutivo}}-JM-RI-dia19" style='display: {{ $dias->dia_19 != 'Z' ? 'table-cell' : 'none' }};' data-id="{{$datos['sede']->consecutivo}}" data-dia="dia19" data-modalidad="JM-RI"></td>
                            <td id="{{$datos['sede']->consecutivo}}-JM-RI-dia20" style='display: {{ $dias->dia_20 != 'Z' ? 'table-cell' : 'none' }};' data-id="{{$datos['sede']->consecutivo}}" data-dia="dia20" data-modalidad="JM-RI"></td>
                            <td id="{{$datos['sede']->consecutivo}}-JM-RI-dia21" style='display: {{ $dias->dia_21 != 'Z' ? 'table-cell' : 'none' }};' data-id="{{$datos['sede']->consecutivo}}" data-dia="dia21" data-modalidad="JM-RI"></td>
                            <td id="{{$datos['sede']->consecutivo}}-JM-RI-dia22" style='display: {{ $dias->dia_22 != 'Z' ? 'table-cell' : 'none' }};' data-id="{{$datos['sede']->consecutivo}}" data-dia="dia22" data-modalidad="JM-RI"></td>
                            <td id="{{$datos['sede']->consecutivo}}-JM-RI-dia23" style='display: {{ $dias->dia_23 != 'Z' ? 'table-cell' : 'none' }};' data-id="{{$datos['sede']->consecutivo}}" data-dia="dia23" data-modalidad="JM-RI"></td>
                            <td id="{{$datos['sede']->consecutivo}}-JM-RI-dia24" style='display: {{ $dias->dia_24 != 'Z' ? 'table-cell' : 'none' }};' data-id="{{$datos['sede']->consecutivo}}" data-dia="dia24" data-modalidad="JM-RI"></td>
                            <td id="{{$datos['sede']->consecutivo}}-JM-RI-dia25" style='display: {{ $dias->dia_25 != 'Z' ? 'table-cell' : 'none' }};' data-id="{{$datos['sede']->consecutivo}}" data-dia="dia25" data-modalidad="JM-RI"></td>
                            <td id="{{$datos['sede']->consecutivo}}-JM-RI-dia26" style='display: {{ $dias->dia_26 != 'Z' ? 'table-cell' : 'none' }};' data-id="{{$datos['sede']->consecutivo}}" data-dia="dia26" data-modalidad="JM-RI"></td>
                            <td id="{{$datos['sede']->consecutivo}}-JM-RI-dia27" style='display: {{ $dias->dia_27 != 'Z' ? 'table-cell' : 'none' }};' data-id="{{$datos['sede']->consecutivo}}" data-dia="dia27" data-modalidad="JM-RI"></td>
                            <td id="{{$datos['sede']->consecutivo}}-JM-RI-dia28" style='display: {{ $dias->dia_28 != 'Z' ? 'table-cell' : 'none' }};' data-id="{{$datos['sede']->consecutivo}}" data-dia="dia28" data-modalidad="JM-RI"></td>
                            <td id="{{$datos['sede']->consecutivo}}-JM-RI-dia29" style='display: {{ $dias->dia_29 != 'Z' ? 'table-cell' : 'none' }};' data-id="{{$datos['sede']->consecutivo}}" data-dia="dia29" data-modalidad="JM-RI"></td>
                            <td id="{{$datos['sede']->consecutivo}}-JM-RI-dia30" style='display: {{ $dias->dia_30 != 'Z' ? 'table-cell' : 'none' }};' data-id="{{$datos['sede']->consecutivo}}" data-dia="dia30" data-modalidad="JM-RI"></td>
                            <td id="{{$datos['sede']->consecutivo}}-JM-RI-dia31" style='display: {{ $dias->dia_31 != 'Z' ? 'table-cell' : 'none' }};' data-id="{{$datos['sede']->consecutivo}}" data-dia="dia31" data-modalidad="JM-RI"></td>
                            <td id="{{$datos['sede']->consecutivo}}-JM-RI-dias" class="tg-0pky1" data-id="{{$datos['sede']->consecutivo}}" data-dias="diasAtendidos" data-modalidad="JM-RI"></td>
                            <td id="{{$datos['sede']->consecutivo}}-JM-RI-totalRaciones" class="tg-0pky2" data-id="{{$datos['sede']->consecutivo}}" data-totalraciones="totalRaciones" data-modalidad="JM-RI"></td>
                            <td id="{{$datos['sede']->consecutivo}}-JM-RI-novedades" class="tg-0pky3" data-id="{{$datos['sede']->consecutivo}}" data-novedades="novedades" data-modalidad="JM-RI"></td>
                            <td id="{{$datos['sede']->consecutivo}}-JM-RI-devoluciones" class="tg-0pky4" data-id="{{$datos['sede']->consecutivo}}" data-devoluciones="devoluciones" data-modalidad="JM-RI"></td>
                            <td class=""><button class="dt-button create-new btn btn-primary guardarbt1" tabindex="0"  type="button" 
                            data-id="{{$datos['sede']->consecutivo}}"
                            data-tipo="JM-RI" id="bt-{{$datos['sede']->consecutivo}}-JM-RI"                        
                              ><span>+ Guardar</span></button></td>
                        </tr>
                        <tr>
                            <td class="uneditable ">JT-RI</td>
                            @if(isset($datos['simat']['dia1'][1]))                        
                            <td id="{{$datos['sede']->consecutivo}}-JT-RI-dia1"  style='display: {{ $dias->dia_1 != 'Z' ? 'table-cell' : 'none' }};' data-id="{{$datos['sede']->consecutivo}}" data-dia="dia1" data-modalidad="JT-RI"></td>
                            <td id="{{$datos['sede']->consecutivo}}-JT-RI-dia2" style='display: {{ $dias->dia_2 != 'Z' ? 'table-cell' : 'none' }};' data-id="{{$datos['sede']->consecutivo}}" data-dia="dia2" data-modalidad="JT-RI"></td>
                            <td id="{{$datos['sede']->consecutivo}}-JT-RI-dia3" style='display: {{ $dias->dia_3 != 'Z' ? 'table-cell' : 'none' }};' data-id="{{$datos['sede']->consecutivo}}" data-dia="dia3" data-modalidad="JT-RI"></td>
                            <td id="{{$datos['sede']->consecutivo}}-JT-RI-dia4" style='display: {{ $dias->dia_4 != 'Z' ? 'table-cell' : 'none' }};' data-id="{{$datos['sede']->consecutivo}}" data-dia="dia4" data-modalidad="JT-RI"></td>
                            <td id="{{$datos['sede']->consecutivo}}-JT-RI-dia5" style='display: {{ $dias->dia_5 != 'Z' ? 'table-cell' : 'none' }};' data-id="{{$datos['sede']->consecutivo}}" data-dia="dia5" data-modalidad="JT-RI"></td>
                            <td id="{{$datos['sede']->consecutivo}}-JT-RI-dia6" style='display: {{ $dias->dia_6 != 'Z' ? 'table-cell' : 'none' }};' data-id="{{$datos['sede']->consecutivo}}" data-dia="dia6" data-modalidad="JT-RI"></td>
                            <td id="{{$datos['sede']->consecutivo}}-JT-RI-dia7" style='display: {{ $dias->dia_7 != 'Z' ? 'table-cell' : 'none' }};' data-id="{{$datos['sede']->consecutivo}}" data-dia="dia7" data-modalidad="JT-RI"></td>
                            <td id="{{$datos['sede']->consecutivo}}-JT-RI-dia8" style='display: {{ $dias->dia_8 != 'Z' ? 'table-cell' : 'none' }};' data-id="{{$datos['sede']->consecutivo}}" data-dia="dia8" data-modalidad="JT-RI"></td>
                            <td id="{{$datos['sede']->consecutivo}}-JT-RI-dia9" style='display: {{ $dias->dia_9 != 'Z' ? 'table-cell' : 'none' }};' data-id="{{$datos['sede']->consecutivo}}" data-dia="dia9" data-modalidad="JT-RI"></td>
                            <td id="{{$datos['sede']->consecutivo}}-JT-RI-dia10" style='display: {{ $dias->dia_10 != 'Z' ? 'table-cell' : 'none' }};' data-id="{{$datos['sede']->consecutivo}}" data-dia="dia10" data-modalidad="JT-RI"></td>
                            <td id="{{$datos['sede']->consecutivo}}-JT-RI-dia11" style='display: {{ $dias->dia_11 != 'Z' ? 'table-cell' : 'none' }};' data-id="{{$datos['sede']->consecutivo}}" data-dia="dia11" data-modalidad="JT-RI"></td>
                            <td id="{{$datos['sede']->consecutivo}}-JT-RI-dia12" style='display: {{ $dias->dia_12 != 'Z' ? 'table-cell' : 'none' }};' data-id="{{$datos['sede']->consecutivo}}" data-dia="dia12" data-modalidad="JT-RI"></td>
                            <td id="{{$datos['sede']->consecutivo}}-JT-RI-dia13" style='display: {{ $dias->dia_13 != 'Z' ? 'table-cell' : 'none' }};' data-id="{{$datos['sede']->consecutivo}}" data-dia="dia13" data-modalidad="JT-RI"></td>
                            <td id="{{$datos['sede']->consecutivo}}-JT-RI-dia14" style='display: {{ $dias->dia_14 != 'Z' ? 'table-cell' : 'none' }};' data-id="{{$datos['sede']->consecutivo}}" data-dia="dia14" data-modalidad="JT-RI"></td>
                            <td id="{{$datos['sede']->consecutivo}}-JT-RI-dia15" style='display: {{ $dias->dia_15 != 'Z' ? 'table-cell' : 'none' }};' data-id="{{$datos['sede']->consecutivo}}" data-dia="dia15" data-modalidad="JT-RI"></td>
                            <td id="{{$datos['sede']->consecutivo}}-JT-RI-dia16" style='display: {{ $dias->dia_16 != 'Z' ? 'table-cell' : 'none' }};' data-id="{{$datos['sede']->consecutivo}}" data-dia="dia16" data-modalidad="JT-RI"></td>
                            <td id="{{$datos['sede']->consecutivo}}-JT-RI-dia17" style='display: {{ $dias->dia_17 != 'Z' ? 'table-cell' : 'none' }};' data-id="{{$datos['sede']->consecutivo}}" data-dia="dia17" data-modalidad="JT-RI"></td>
                            <td id="{{$datos['sede']->consecutivo}}-JT-RI-dia18" style='display: {{ $dias->dia_18 != 'Z' ? 'table-cell' : 'none' }};' data-id="{{$datos['sede']->consecutivo}}" data-dia="dia18" data-modalidad="JT-RI"></td>
                            <td id="{{$datos['sede']->consecutivo}}-JT-RI-dia19" style='display: {{ $dias->dia_19 != 'Z' ? 'table-cell' : 'none' }};' data-id="{{$datos['sede']->consecutivo}}" data-dia="dia19" data-modalidad="JT-RI"></td>
                            <td id="{{$datos['sede']->consecutivo}}-JT-RI-dia20" style='display: {{ $dias->dia_20 != 'Z' ? 'table-cell' : 'none' }};' data-id="{{$datos['sede']->consecutivo}}" data-dia="dia20" data-modalidad="JT-RI"></td>
                            <td id="{{$datos['sede']->consecutivo}}-JT-RI-dia21" style='display: {{ $dias->dia_21 != 'Z' ? 'table-cell' : 'none' }};' data-id="{{$datos['sede']->consecutivo}}" data-dia="dia21" data-modalidad="JT-RI"></td>
                            <td id="{{$datos['sede']->consecutivo}}-JT-RI-dia22" style='display: {{ $dias->dia_22 != 'Z' ? 'table-cell' : 'none' }};'  data-id="{{$datos['sede']->consecutivo}}" data-dia="dia22" data-modalidad="JT-RI"></td>
                            <td id="{{$datos['sede']->consecutivo}}-JT-RI-dia23" style='display: {{ $dias->dia_23 != 'Z' ? 'table-cell' : 'none' }};'  data-id="{{$datos['sede']->consecutivo}}" data-dia="dia23" data-modalidad="JT-RI"></td>
                            <td id="{{$datos['sede']->consecutivo}}-JT-RI-dia24" style='display: {{ $dias->dia_24 != 'Z' ? 'table-cell' : 'none' }};'  data-id="{{$datos['sede']->consecutivo}}" data-dia="dia24" data-modalidad="JT-RI"></td>
                            <td id="{{$datos['sede']->consecutivo}}-JT-RI-dia25" style='display: {{ $dias->dia_25 != 'Z' ? 'table-cell' : 'none' }};'  data-id="{{$datos['sede']->consecutivo}}" data-dia="dia25" data-modalidad="JT-RI"></td>
                            <td id="{{$datos['sede']->consecutivo}}-JT-RI-dia26" style='display: {{ $dias->dia_26 != 'Z' ? 'table-cell' : 'none' }};'  data-id="{{$datos['sede']->consecutivo}}" data-dia="dia26" data-modalidad="JT-RI"></td>
                            <td id="{{$datos['sede']->consecutivo}}-JT-RI-dia27" style='display: {{ $dias->dia_27 != 'Z' ? 'table-cell' : 'none' }};' data-id="{{$datos['sede']->consecutivo}}" data-dia="dia27" data-modalidad="JT-RI"></td>
                            <td id="{{$datos['sede']->consecutivo}}-JT-RI-dia28" style='display: {{ $dias->dia_28 != 'Z' ? 'table-cell' : 'none' }};' data-id="{{$datos['sede']->consecutivo}}" data-dia="dia28" data-modalidad="JT-RI"></td>
                            <td id="{{$datos['sede']->consecutivo}}-JT-RI-dia29" style='display: {{ $dias->dia_29 != 'Z' ? 'table-cell' : 'none' }};' data-id="{{$datos['sede']->consecutivo}}" data-dia="dia29" data-modalidad="JT-RI"></td>
                            <td id="{{$datos['sede']->consecutivo}}-JT-RI-dia30" style='display: {{ $dias->dia_30 != 'Z' ? 'table-cell' : 'none' }};' data-id="{{$datos['sede']->consecutivo}}" data-dia="dia30" data-modalidad="JT-RI"></td>
                            <td id="{{$datos['sede']->consecutivo}}-JT-RI-dia31" style='display: {{ $dias->dia_31 != 'Z' ? 'table-cell' : 'none' }};' data-id="{{$datos['sede']->consecutivo}}" data-dia="dia31" data-modalidad="JT-RI"></td>
                            <td id="{{$datos['sede']->consecutivo}}-JT-RI-dias" class="tg-0pky1" data-id="{{$datos['sede']->consecutivo}}" data-dias="diasAtendidos" data-modalidad="JT-RI"></td>
                            <td id="{{$datos['sede']->consecutivo}}-JT-RI-totalRaciones" class="tg-0pky2" data-id="{{$datos['sede']->consecutivo}}" data-totalraciones="totalRaciones" data-modalidad="JT-RI"></td>
                            <td id="{{$datos['sede']->consecutivo}}-JT-RI-novedades" class="tg-0pky3" data-id="{{$datos['sede']->consecutivo}}" data-novedades="novedades" data-modalidad="JT-RI"></td>
                            <td id="{{$datos['sede']->consecutivo}}-JT-RI-devoluciones" class="tg-0pky4" data-id="{{$datos['sede']->consecutivo}}" data-devoluciones="devoluciones" data-modalidad="JT-RI"></td>
                            <td class=""><button class="dt-button create-new btn btn-primary guardarbt1" tabindex="0"  type="button" 
                              data-id="{{$datos['sede']->consecutivo}}"
                              data-tipo="JT-RI" id="bt-{{$datos['sede']->consecutivo}}-JT-RI"                        
                                ><span>+ Guardar</span></button></td>
                            @else
                            <td style='display: {{ $dias->dia_1 != 'Z' ? 'table-cell' : 'none' }};'></td>
                            <td style='display: {{ $dias->dia_2 != 'Z' ? 'table-cell' : 'none' }};'></td>
                            <td style='display: {{ $dias->dia_3 != 'Z' ? 'table-cell' : 'none' }};'></td>
                            <td style='display: {{ $dias->dia_4 != 'Z' ? 'table-cell' : 'none' }};'></td>
                            <td style='display: {{ $dias->dia_5 != 'Z' ? 'table-cell' : 'none' }};'></td>
                            <td style='display: {{ $dias->dia_6 != 'Z' ? 'table-cell' : 'none' }};'></td>
                            <td style='display: {{ $dias->dia_7 != 'Z' ? 'table-cell' : 'none' }};'></td>
                            <td style='display: {{ $dias->dia_8 != 'Z' ? 'table-cell' : 'none' }};'></td>
                            <td style='display: {{ $dias->dia_9 != 'Z' ? 'table-cell' : 'none' }};'></td>
                            <td style='display: {{ $dias->dia_10 != 'Z' ? 'table-cell' : 'none' }};'></td>
                            <td style='display: {{ $dias->dia_11 != 'Z' ? 'table-cell' : 'none' }};'></td>
                            <td style='display: {{ $dias->dia_12 != 'Z' ? 'table-cell' : 'none' }};'></td>
                            <td style='display: {{ $dias->dia_13 != 'Z' ? 'table-cell' : 'none' }};'></td>
                            <td style='display: {{ $dias->dia_14 != 'Z' ? 'table-cell' : 'none' }};'></td>
                            <td style='display: {{ $dias->dia_15 != 'Z' ? 'table-cell' : 'none' }};'></td>
                            <td style='display: {{ $dias->dia_16 != 'Z' ? 'table-cell' : 'none' }};'></td>
                            <td style='display: {{ $dias->dia_17 != 'Z' ? 'table-cell' : 'none' }};'></td>
                            <td style='display: {{ $dias->dia_18 != 'Z' ? 'table-cell' : 'none' }};'></td>
                            <td style='display: {{ $dias->dia_19 != 'Z' ? 'table-cell' : 'none' }};'></td>
                            <td style='display: {{ $dias->dia_20 != 'Z' ? 'table-cell' : 'none' }};'></td>
                            <td style='display: {{ $dias->dia_21 != 'Z' ? 'table-cell' : 'none' }};'></td>
                            <td style='display: {{ $dias->dia_22 != 'Z' ? 'table-cell' : 'none' }};'></td>
                            <td style='display: {{ $dias->dia_23 != 'Z' ? 'table-cell' : 'none' }};'></td>
                            <td style='display: {{ $dias->dia_24 != 'Z' ? 'table-cell' : 'none' }};'></td>
                            <td style='display: {{ $dias->dia_25 != 'Z' ? 'table-cell' : 'none' }};'></td>
                            <td style='display: {{ $dias->dia_26 != 'Z' ? 'table-cell' : 'none' }};'></td>
                            <td style='display: {{ $dias->dia_27 != 'Z' ? 'table-cell' : 'none' }};'></td>
                            <td style='display: {{ $dias->dia_28 != 'Z' ? 'table-cell' : 'none' }};'></td>
                            <td style='display: {{ $dias->dia_29 != 'Z' ? 'table-cell' : 'none' }};'></td>
                            <td style='display: {{ $dias->dia_30 != 'Z' ? 'table-cell' : 'none' }};'></td>
                            <td style='display: {{ $dias->dia_31 != 'Z' ? 'table-cell' : 'none' }};'></td>
                            <td class="tg-0pky1"></td>
                            <td class="tg-0pky2"></td>
                            <td class="tg-0pky3"></td>
                            <td class="tg-0pky4"></td>
                            <td class=" uneditable"></td>
                            @endif
                            
                        </tr>
                      @endif
                      @if($datos['tipo'] == 'RPS')
                
                        
                        <tr>                       
                            <td class="uneditable tg-lboi" rowspan="1">{{$datos['sede']->nombre}}</td>
                            <td class="uneditable ">RPS</td>
                            <td id="{{$datos['sede']->consecutivo}}-RPS-dia1" style='display: {{ $dias->dia_1 != 'Z' ? 'table-cell' : 'none' }};' data-id="{{$datos['sede']->consecutivo}}" data-dia="dia1" data-modalidad="RPS"></td>
                            <td id="{{$datos['sede']->consecutivo}}-RPS-dia2" style='display: {{ $dias->dia_2 != 'Z' ? 'table-cell' : 'none' }};' data-id="{{$datos['sede']->consecutivo}}" data-dia="dia2" data-modalidad="RPS"></td>
                            <td id="{{$datos['sede']->consecutivo}}-RPS-dia3" style='display: {{ $dias->dia_3 != 'Z' ? 'table-cell' : 'none' }};' data-id="{{$datos['sede']->consecutivo}}" data-dia="dia3" data-modalidad="RPS"></td>
                            <td id="{{$datos['sede']->consecutivo}}-RPS-dia4" style='display: {{ $dias->dia_4 != 'Z' ? 'table-cell' : 'none' }};' data-id="{{$datos['sede']->consecutivo}}" data-dia="dia4" data-modalidad="RPS"></td>
                            <td id="{{$datos['sede']->consecutivo}}-RPS-dia5" style='display: {{ $dias->dia_5 != 'Z' ? 'table-cell' : 'none' }};' data-id="{{$datos['sede']->consecutivo}}" data-dia="dia5" data-modalidad="RPS"></td>
                            <td id="{{$datos['sede']->consecutivo}}-RPS-dia6" style='display: {{ $dias->dia_6 != 'Z' ? 'table-cell' : 'none' }};' data-id="{{$datos['sede']->consecutivo}}" data-dia="dia6" data-modalidad="RPS"></td>
                            <td id="{{$datos['sede']->consecutivo}}-RPS-dia7" style='display: {{ $dias->dia_7 != 'Z' ? 'table-cell' : 'none' }};' data-id="{{$datos['sede']->consecutivo}}" data-dia="dia7" data-modalidad="RPS"></td>
                            <td id="{{$datos['sede']->consecutivo}}-RPS-dia8" style='display: {{ $dias->dia_8 != 'Z' ? 'table-cell' : 'none' }};' data-id="{{$datos['sede']->consecutivo}}" data-dia="dia8" data-modalidad="RPS"></td>
                            <td id="{{$datos['sede']->consecutivo}}-RPS-dia9" style='display: {{ $dias->dia_9 != 'Z' ? 'table-cell' : 'none' }};' data-id="{{$datos['sede']->consecutivo}}" data-dia="dia9" data-modalidad="RPS"></td>
                            <td id="{{$datos['sede']->consecutivo}}-RPS-dia10" style='display: {{ $dias->dia_10 != 'Z' ? 'table-cell' : 'none' }};' data-id="{{$datos['sede']->consecutivo}}" data-dia="dia10" data-modalidad="RPS"></td>
                            <td id="{{$datos['sede']->consecutivo}}-RPS-dia11" style='display: {{ $dias->dia_11 != 'Z' ? 'table-cell' : 'none' }};' data-id="{{$datos['sede']->consecutivo}}" data-dia="dia11" data-modalidad="RPS"></td>
                            <td id="{{$datos['sede']->consecutivo}}-RPS-dia12" style='display: {{ $dias->dia_12 != 'Z' ? 'table-cell' : 'none' }};' data-id="{{$datos['sede']->consecutivo}}" data-dia="dia12" data-modalidad="RPS"></td>
                            <td id="{{$datos['sede']->consecutivo}}-RPS-dia13" style='display: {{ $dias->dia_13 != 'Z' ? 'table-cell' : 'none' }};' data-id="{{$datos['sede']->consecutivo}}" data-dia="dia13" data-modalidad="RPS"></td>
                            <td id="{{$datos['sede']->consecutivo}}-RPS-dia14" style='display: {{ $dias->dia_14 != 'Z' ? 'table-cell' : 'none' }};' data-id="{{$datos['sede']->consecutivo}}" data-dia="dia14" data-modalidad="RPS"></td>
                            <td id="{{$datos['sede']->consecutivo}}-RPS-dia15" style='display: {{ $dias->dia_15 != 'Z' ? 'table-cell' : 'none' }};' data-id="{{$datos['sede']->consecutivo}}" data-dia="dia15" data-modalidad="RPS"></td>
                            <td id="{{$datos['sede']->consecutivo}}-RPS-dia16" style='display: {{ $dias->dia_16 != 'Z' ? 'table-cell' : 'none' }};' data-id="{{$datos['sede']->consecutivo}}" data-dia="dia16" data-modalidad="RPS"></td>
                            <td id="{{$datos['sede']->consecutivo}}-RPS-dia17" style='display: {{ $dias->dia_17 != 'Z' ? 'table-cell' : 'none' }};' data-id="{{$datos['sede']->consecutivo}}" data-dia="dia17" data-modalidad="RPS"></td>
                            <td id="{{$datos['sede']->consecutivo}}-RPS-dia18" style='display: {{ $dias->dia_18 != 'Z' ? 'table-cell' : 'none' }};' data-id="{{$datos['sede']->consecutivo}}" data-dia="dia18" data-modalidad="RPS"></td>
                            <td id="{{$datos['sede']->consecutivo}}-RPS-dia19" style='display: {{ $dias->dia_19 != 'Z' ? 'table-cell' : 'none' }};' data-id="{{$datos['sede']->consecutivo}}" data-dia="dia19" data-modalidad="RPS"></td>
                            <td id="{{$datos['sede']->consecutivo}}-RPS-dia20" style='display: {{ $dias->dia_20 != 'Z' ? 'table-cell' : 'none' }};' data-id="{{$datos['sede']->consecutivo}}" data-dia="dia20" data-modalidad="RPS"></td>
                            <td id="{{$datos['sede']->consecutivo}}-RPS-dia21" style='display: {{ $dias->dia_21 != 'Z' ? 'table-cell' : 'none' }};' data-id="{{$datos['sede']->consecutivo}}" data-dia="dia21" data-modalidad="RPS"></td>
                            <td id="{{$datos['sede']->consecutivo}}-RPS-dia22" style='display: {{ $dias->dia_22 != 'Z' ? 'table-cell' : 'none' }};' data-id="{{$datos['sede']->consecutivo}}" data-dia="dia22" data-modalidad="RPS"></td>
                            <td id="{{$datos['sede']->consecutivo}}-RPS-dia23" style='display: {{ $dias->dia_23 != 'Z' ? 'table-cell' : 'none' }};' data-id="{{$datos['sede']->consecutivo}}" data-dia="dia23" data-modalidad="RPS"></td>
                            <td id="{{$datos['sede']->consecutivo}}-RPS-dia24" style='display: {{ $dias->dia_24 != 'Z' ? 'table-cell' : 'none' }};' data-id="{{$datos['sede']->consecutivo}}" data-dia="dia24" data-modalidad="RPS"></td>
                            <td id="{{$datos['sede']->consecutivo}}-RPS-dia25" style='display: {{ $dias->dia_25 != 'Z' ? 'table-cell' : 'none' }};' data-id="{{$datos['sede']->consecutivo}}" data-dia="dia25" data-modalidad="RPS"></td>
                            <td id="{{$datos['sede']->consecutivo}}-RPS-dia26" style='display: {{ $dias->dia_26 != 'Z' ? 'table-cell' : 'none' }};' data-id="{{$datos['sede']->consecutivo}}" data-dia="dia26" data-modalidad="RPS"></td>
                            <td id="{{$datos['sede']->consecutivo}}-RPS-dia27" style='display: {{ $dias->dia_27 != 'Z' ? 'table-cell' : 'none' }};' data-id="{{$datos['sede']->consecutivo}}" data-dia="dia27" data-modalidad="RPS"></td>
                            <td id="{{$datos['sede']->consecutivo}}-RPS-dia28" style='display: {{ $dias->dia_28 != 'Z' ? 'table-cell' : 'none' }};' data-id="{{$datos['sede']->consecutivo}}" data-dia="dia28" data-modalidad="RPS"></td>
                            <td id="{{$datos['sede']->consecutivo}}-RPS-dia29" style='display: {{ $dias->dia_29 != 'Z' ? 'table-cell' : 'none' }};' data-id="{{$datos['sede']->consecutivo}}" data-dia="dia29" data-modalidad="RPS"></td>
                            <td id="{{$datos['sede']->consecutivo}}-RPS-dia30" style='display: {{ $dias->dia_30 != 'Z' ? 'table-cell' : 'none' }};' data-id="{{$datos['sede']->consecutivo}}" data-dia="dia30" data-modalidad="RPS"></td>
                            <td id="{{$datos['sede']->consecutivo}}-RPS-dia31" style='display: {{ $dias->dia_31 != 'Z' ? 'table-cell' : 'none' }};' data-id="{{$datos['sede']->consecutivo}}" data-dia="dia31" data-modalidad="RPS"></td>
                            <td id="{{$datos['sede']->consecutivo}}-RPS-dias" class="tg-0pky1" data-id="{{$datos['sede']->consecutivo}}" data-dias="diasAtendidos" data-modalidad="RPS"></td>
                            <td id="{{$datos['sede']->consecutivo}}-RPS-totalRaciones" class="tg-0pky2" data-id="{{$datos['sede']->consecutivo}}" data-totalraciones="totalRaciones" data-modalidad="RPS"></td>
                            <td id="{{$datos['sede']->consecutivo}}-RPS-novedades" class="tg-0pky3" data-id="{{$datos['sede']->consecutivo}}" data-novedades="novedades" data-modalidad="RPS"></td>
                            <td id="{{$datos['sede']->consecutivo}}-RPS-devoluciones" class="tg-0pky4" data-id="{{$datos['sede']->consecutivo}}" data-devoluciones="devoluciones" data-modalidad="RPS"></td>
                            <td class=" uneditable"><button class="dt-button create-new btn btn-primary guardarbt1" tabindex="0"  type="button" 
                            data-id="{{$datos['sede']->consecutivo}}"
                            data-tipo="RPS" id="bt-{{$datos['sede']->consecutivo}}-RPS"                        
                              ><span>+ Guardar</span></button></td>
                        </tr>
                        
                      @endif
                    @endforeach
                    
                </tbody>
              </table>
            @endif
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
