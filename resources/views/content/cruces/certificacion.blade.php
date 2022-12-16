@extends('layouts/contentLayoutMaster')

@section('title', 'Certificaciones')

@section('vendor-style')
<link rel="stylesheet" href="{{asset('vendors/css/pickers/flatpickr/flatpickr.min.css')}}">
@endsection
@section('page-style')
<link rel="stylesheet" href="{{asset('css/base/plugins/forms/pickers/form-flat-pickr.css')}}">
<link rel="stylesheet" href="{{asset('css/base/pages/app-invoice.css')}}">
<style type="text/css">
  .tg  {border-collapse:collapse;border-spacing:0;}
  .tg td{border-color:black;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;
    overflow:hidden;padding:10px 5px;word-break:normal;}
  .tg th{border-color:black;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;
    font-weight:normal;overflow:hidden;padding:10px 5px;word-break:normal;}
  .tg .tg-cly1{text-align:left;vertical-align:middle}
  .tg .tg-0lax{text-align:left;vertical-align:top}
  .mostrar20{
    display:none;
  }
  .mostrar19{
    display:none;
  }
  .mostrar18{
    display:none;
  }
  .mostrar17{
    display:none;
  }
  .mostrar16{
    display:none;
  }
  .mostrar15{
    display:none;
  }
  .mostrar14{
    display:none;
  }
  .mostrar13{
    display:none;
  }
  .mostrar11{
    display:none;
  }
  .mostrar10{
    display:none;
  }
  .mostrar9{
    display:none;
  }
  .mostrar8{
    display:none;
  }
  .mostrar7{
    display:none;
  }
  .mostrar6{
    display:none;
  }
  .mostrar5{
    display:none;
  }
  .mostrar4{
    display:none;
  }
  .mostrar3{
    display:none;
  }
  .mostrar2{
    display:none;
  }
  .mostrar1{
    display:table-cell;
  }  
  .mostrara2{
    display:table-cell;
  }
  .mostrara1{
    display:none;
  }
</style>
@endsection

@section('content')
<section class="invoice-preview-wrapper">
  <div class="row invoice-preview">
    <!-- Invoice -->
    <div class="col-xl-9 col-md-8 col-12">
      <div class="card invoice-preview-card">
        <div class="card-body invoice-padding pb-0">
          <!-- Header starts -->
          <div class="d-flex justify-content-between flex-md-row flex-column invoice-spacing mt-0">
            
            <div class="mt-md-0 mt-2">
              
            </div>
            <div>
              <div class="logo-wrapper">
                <img src="/storage/sec.jpg" alt="">
                
              </div>
              
            </div>
          </div>
          <!-- Header ends -->
        </div>

        <hr class="invoice-spacing" />

        <!-- Address and Contact starts -->
        <div class="card-body invoice-padding pt-0">
          <h3>CONSTANCIA DE VERIFICACION PLANILLAS NIÑO A NIÑO Y SOPORTE MAGNETICO PAE 2022</h3>
          <div class="row invoice-spacing">
            <div class="col-xl-12 p-0">
              <p style="text-align: justify">
                La Institución Educativa: {{$data[0]['simat']->institucion}} y sus sedes: 
                @foreach($data as $datos) 
                {{$datos['simat']->sede}}, 
                @endforeach pertenecientes a la zona {{$data[0]['simat']->zona_sede}} realizó la entrega del complemento 
                alimentario jornada mañana ración preparada en sitio-Rps que contempló 
                un periodo de cobertura de {{$ajustes->totaldiasatencion}} días calendario escolar desde el {{fechaCastellano($ajustes->incio)}} 
                al {{fechaCastellano($ajustes->fin)}}. <b id="datossumatorias">a</b>
              </p>

              <p style="text-align: justify">
                Realizada la verificación de las planillas de entrega en 
                su modalidad RPS o RI de los niños, niñas y adolescentes focalizados 
                y/o suplentes (quienes reciben por novedad) atendidos por el
                {{$ajustes->programa}} 
                conforme la matricula oficial registrada en el 
                SIMAT a corte de {{fechaCastellano($ajustes->cortesimat)}} y los soportes allegados 
                por el operador, me permito certificar que:
              </p>              
            </div>
            
          </div>
        </div>
        <!-- Address and Contact ends -->

        <!-- Invoice Description starts -->
        
        
        <table class="table-responsive table table-bordered  table-sm">
          <thead>
            <tr>
              <th class="tg-cly1">INSTITUCIÓN</th>
              <th class="tg-cly1">SEDE</th>
              <th class="tg-cly1">RACIONES ADJUDICADAS</th>
              <th class="tg-cly1">RACIONES ENTEGADAS <br>MODALIDAD RI<br>(RACIÓN INDUSTRIALIZADA)</th>
              <th class="tg-cly1">RACIONES ENTREGADAS<br> MODALIDAD rps<br>( RACIÓN PREPARADA EN SITIO)</th>
              <th class="tg-cly1">DEVOLUCIONES</th>
              <th class="tg-cly1">NOVEDADES</th>
            </tr>
          </thead>
          <tbody>
            
            @php 
            $i=0; 
            $totalraciones = 0;
            $totalracionesentregadasri = 0;
            $totalracionesentregadasrps = 0;
            $totaldevoluciones = 0;
            $totalnovedades = 0;
            @endphp
            @foreach ($data as $key => $datos)
            <tr>
              <td class="tg-cly1 mostrar{{$key+1}}" rowspan="{{$i}}">{{$datos['simat']->institucion}}</td>
              <td class="tg-0lax">{{$datos['simat']->sede}}</td>
              <td class="tg-0lax">
                RI: 
                  @php
                                        $sede = DB::table('ris')->where('codigo_dane_sede',$datos['simat']->consecutivo)->first();
                                        $dia1 =  DB::table('ris')->where('codigo_dane_sede', $sede->codigo_dane_sede)
                                                
                                                ->select(DB::raw('sum(case when dia_1 is null then 1 else 0 end) as dia_1, sum(case when dia_1 is not null then 1 else 0 end) as dia_1observacion'))
                                                ->first();
                                        $dia2 =  DB::table('ris')->where('codigo_dane_sede', $sede->codigo_dane_sede)
                                                
                                                ->select(DB::raw('sum(case when dia_2 is null then 1 else 0 end) as dia_2, sum(case when dia_2 is not null then 1 else 0 end) as dia_2observacion'))
                                                ->first();
                                        $dia3 =  DB::table('ris')->where('codigo_dane_sede', $sede->codigo_dane_sede)
                                                
                                                ->select(DB::raw('sum(case when dia_3 is null then 1 else 0 end) as dia_3, sum(case when dia_3 is not null then 1 else 0 end) as dia_3observacion'))
                                                ->first();
                                        $dia4 =  DB::table('ris')->where('codigo_dane_sede', $sede->codigo_dane_sede)
                                                
                                                ->select(DB::raw('sum(case when dia_4 is null then 1 else 0 end) as dia_4, sum(case when dia_4 is not null then 1 else 0 end) as dia_4observacion'))
                                                ->first();
                                        $dia5 =  DB::table('ris')->where('codigo_dane_sede', $sede->codigo_dane_sede)
                                                
                                                ->select(DB::raw('sum(case when dia_5 is null then 1 else 0 end) as dia_5, sum(case when dia_5 is not null then 1 else 0 end) as dia_5observacion'))
                                                ->first();
                                        $dia6 =  DB::table('ris')->where('codigo_dane_sede', $sede->codigo_dane_sede)
                                                
                                                ->select(DB::raw('sum(case when dia_6 is null then 1 else 0 end) as dia_6, sum(case when dia_6 is not null then 1 else 0 end) as dia_6observacion'))
                                                ->first();
                                        $dia7 =  DB::table('ris')->where('codigo_dane_sede', $sede->codigo_dane_sede)
                                                
                                                ->select(DB::raw('sum(case when dia_7 is null then 1 else 0 end) as dia_7, sum(case when dia_7 is not null then 1 else 0 end) as dia_7observacion'))
                                                ->first();
                                        $dia8 =  DB::table('ris')->where('codigo_dane_sede', $sede->codigo_dane_sede)
                                                
                                                ->select(DB::raw('sum(case when dia_8 is null then 1 else 0 end) as dia_8, sum(case when dia_8 is not null then 1 else 0 end) as dia_8observacion'))
                                                ->first();
                                        $dia9 =  DB::table('ris')->where('codigo_dane_sede', $sede->codigo_dane_sede)
                                                
                                                ->select(DB::raw('sum(case when dia_9 is null then 1 else 0 end) as dia_9, sum(case when dia_9 is not null then 1 else 0 end) as dia_9observacion'))
                                                ->first();
                                        $dia10 =  DB::table('ris')->where('codigo_dane_sede', $sede->codigo_dane_sede)
                                                
                                                ->select(DB::raw('sum(case when dia_10 is null then 1 else 0 end) as dia_10, sum(case when dia_10 is not null then 1 else 0 end) as dia_10observacion'))
                                                ->first();
                                        $dia11 = DB::table('ris')->where('codigo_dane_sede', $sede->codigo_dane_sede)
                                                
                                                ->select(DB::raw('sum(case when dia_11 is null then 1 else 0 end) as dia_11, sum(case when dia_11 is not null then 1 else 0 end) as dia_11observacion'))
                                                ->first();
                                        $dia12 = DB::table('ris')->where('codigo_dane_sede', $sede->codigo_dane_sede)                       
                                                
                                                ->select(DB::raw('sum(case when dia_12 is null then 1 else 0 end) as dia_12, sum(case when dia_12 is not null then 1 else 0 end) as dia_12observacion'))
                                                ->first();
                                        $dia13 = DB::table('ris')->where('codigo_dane_sede', $sede->codigo_dane_sede)
                                                
                                                ->select(DB::raw('sum(case when dia_13 is null then 1 else 0 end) as dia_13, sum(case when dia_13 is not null then 1 else 0 end) as dia_13observacion'))
                                                ->first();
                                        $dia14 =  DB::table('ris')->where('codigo_dane_sede', $sede->codigo_dane_sede)
                                                
                                                ->select(DB::raw('sum(case when dia_14 is null then 1 else 0 end) as dia_14, sum(case when dia_14 is not null then 1 else 0 end) as dia_14observacion'))
                                                ->first();
                                        $dia15 =  DB::table('ris')->where('codigo_dane_sede', $sede->codigo_dane_sede)
                                                
                                                ->select(DB::raw('sum(case when dia_15 is null then 1 else 0 end) as dia_15, sum(case when dia_15 is not null then 1 else 0 end) as dia_15observacion'))
                                                ->first();
                                        $dia16 =  DB::table('ris')->where('codigo_dane_sede', $sede->codigo_dane_sede)
                                                
                                                ->select(DB::raw('sum(case when dia_16 is null then 1 else 0 end) as dia_16, sum(case when dia_16 is not null then 1 else 0 end) as dia_16observacion'))
                                                ->first();
                                        $dia17 =  DB::table('ris')->where('codigo_dane_sede', $sede->codigo_dane_sede)
                                                
                                                ->select(DB::raw('sum(case when dia_17 is null then 1 else 0 end) as dia_17, sum(case when dia_17 is not null then 1 else 0 end) as dia_17observacion'))
                                                ->first();
                                        $dia18 =  DB::table('ris')->where('codigo_dane_sede', $sede->codigo_dane_sede)
                                                
                                                ->select(DB::raw('sum(case when dia_18 is null then 1 else 0 end) as dia_18, sum(case when dia_18 is not null then 1 else 0 end) as dia_18observacion'))
                                                ->first();
                                        $dia19 =  DB::table('ris')->where('codigo_dane_sede', $sede->codigo_dane_sede)
                                                
                                                ->select(DB::raw('sum(case when dia_19 is null then 1 else 0 end) as dia_19, sum(case when dia_19 is not null then 1 else 0 end) as dia_19observacion'))
                                                ->first();
                                        $dia20 =  DB::table('ris')->where('codigo_dane_sede', $sede->codigo_dane_sede)
                                                
                                                ->select(DB::raw('sum(case when dia_20 is null then 1 else 0 end) as dia_20, sum(case when dia_20 is not null then 1 else 0 end) as dia_20observacion'))
                                                ->first();
                                        $dia21 =  DB::table('ris')->where('codigo_dane_sede', $sede->codigo_dane_sede)
                                                
                                                ->select(DB::raw('sum(case when dia_21 is null then 1 else 0 end) as dia_21, sum(case when dia_21 is not null then 1 else 0 end) as dia_21observacion'))
                                                ->first();
                                        $dia22 =  DB::table('ris')->where('codigo_dane_sede', $sede->codigo_dane_sede)
                                                
                                                ->select(DB::raw('sum(case when dia_22 is null then 1 else 0 end) as dia_22, sum(case when dia_22 is not null then 1 else 0 end) as dia_22observacion'))
                                                ->first();
                                        $dia23 =  DB::table('ris')->where('codigo_dane_sede', $sede->codigo_dane_sede)
                                                
                                                ->select(DB::raw('sum(case when dia_23 is null then 1 else 0 end) as dia_23, sum(case when dia_23 is not null then 1 else 0 end) as dia_23observacion'))
                                                ->first();
                                        $dia24 =  DB::table('ris')->where('codigo_dane_sede', $sede->codigo_dane_sede)
                                                
                                                ->select(DB::raw('sum(case when dia_24 is null then 1 else 0 end) as dia_24, sum(case when dia_24 is not null then 1 else 0 end) as dia_24observacion'))
                                                ->first();
                                        $dia25 =  DB::table('ris')->where('codigo_dane_sede', $sede->codigo_dane_sede)
                                                
                                                ->select(DB::raw('sum(case when dia_25 is null then 1 else 0 end) as dia_25, sum(case when dia_25 is not null then 1 else 0 end) as dia_25observacion'))
                                                ->first();
                                        $dia26 =  DB::table('ris')->where('codigo_dane_sede', $sede->codigo_dane_sede)
                                                
                                                ->select(DB::raw('sum(case when dia_26 is null then 1 else 0 end) as dia_26, sum(case when dia_26 is not null then 1 else 0 end) as dia_26observacion'))
                                                ->first();
                                        $dia27 =  DB::table('ris')->where('codigo_dane_sede', $sede->codigo_dane_sede)
                                                
                                                ->select(DB::raw('sum(case when dia_27 is null then 1 else 0 end) as dia_27, sum(case when dia_27 is not null then 1 else 0 end) as dia_27observacion'))
                                                ->first();
                                        $dia28 =  DB::table('ris')->where('codigo_dane_sede', $sede->codigo_dane_sede)
                                            
                                                ->select(DB::raw('sum(case when dia_28 is null then 1 else 0 end) as dia_28, sum(case when dia_28 is not null then 1 else 0 end) as dia_28observacion'))
                                                ->first();
                                        $dia29 =  DB::table('ris')->where('codigo_dane_sede', $sede->codigo_dane_sede)
                                            
                                                ->select(DB::raw('sum(case when dia_29 is null then 1 else 0 end) as dia_29, sum(case when dia_29 is not null then 1 else 0 end) as dia_29observacion'))
                                                ->first();
                                        $dia30 =  DB::table('ris')->where('codigo_dane_sede', $sede->codigo_dane_sede)
                                               
                                                ->select(DB::raw('sum(case when dia_30 is null then 1 else 0 end) as dia_30, sum(case when dia_30 is not null then 1 else 0 end) as dia_30observacion'))
                                                ->first();
                                        $dia31 =  DB::table('ris')->where('codigo_dane_sede', $sede->codigo_dane_sede)                                                
                                                ->select(DB::raw('sum(case when dia_31 is null then 1 else 0 end) as dia_31, sum(case when dia_31 is not null then 1 else 0 end) as dia_31observacion'))
                                                ->first();
                              $suma2 = 0;
                              $suma2 += $sede->dia_1 != 'Z' ? $dia1->dia_1 + $dia1->dia_1observacion : 0;
                              $suma2 += $sede->dia_2 != 'Z' ? $dia2->dia_2 + $dia2->dia_2observacion : 0;
                              $suma2 += $sede->dia_3 != 'Z' ? $dia3->dia_3 + $dia3->dia_3observacion : 0;
                              $suma2 += $sede->dia_4 != 'Z' ? $dia4->dia_4 + $dia4->dia_4observacion : 0;
                              $suma2 += $sede->dia_5 != 'Z' ? $dia5->dia_5 + $dia5->dia_5observacion : 0;
                              $suma2 += $sede->dia_6 != 'Z' ? $dia6->dia_6 + $dia6->dia_6observacion : 0;
                              $suma2 += $sede->dia_7 != 'Z' ? $dia7->dia_7 + $dia7->dia_7observacion : 0;
                              $suma2 += $sede->dia_8 != 'Z' ? $dia8->dia_8 + $dia8->dia_8observacion : 0;
                              $suma2 += $sede->dia_9 != 'Z' ? $dia9->dia_9 + $dia9->dia_9observacion : 0;
                              $suma2 += $sede->dia_10 != 'Z' ? $dia10->dia_10 + $dia10->dia_10observacion : 0;
                              $suma2 += $sede->dia_11 != 'Z' ? $dia11->dia_11 + $dia11->dia_11observacion : 0;
                              $suma2 += $sede->dia_12 != 'Z' ? $dia12->dia_12 + $dia12->dia_12observacion : 0;
                              $suma2 += $sede->dia_13 != 'Z' ? $dia13->dia_13 + $dia13->dia_13observacion : 0;
                              $suma2 += $sede->dia_14 != 'Z' ? $dia14->dia_14 + $dia14->dia_14observacion : 0;
                              $suma2 += $sede->dia_15 != 'Z' ? $dia15->dia_15 + $dia15->dia_15observacion : 0;
                              $suma2 += $sede->dia_16 != 'Z' ? $dia16->dia_16 + $dia16->dia_16observacion : 0;
                              $suma2 += $sede->dia_17 != 'Z' ? $dia17->dia_17 + $dia17->dia_17observacion : 0;
                              $suma2 += $sede->dia_18 != 'Z' ? $dia18->dia_18 + $dia18->dia_18observacion : 0;
                              $suma2 += $sede->dia_19 != 'Z' ? $dia19->dia_19 + $dia19->dia_19observacion : 0;
                              $suma2 += $sede->dia_20 != 'Z' ? $dia20->dia_20 + $dia20->dia_20observacion : 0;
                              $suma2 += $sede->dia_21 != 'Z' ? $dia21->dia_21 + $dia21->dia_21observacion : 0;
                              $suma2 += $sede->dia_22 != 'Z' ? $dia22->dia_22 + $dia22->dia_22observacion : 0;
                              $suma2 += $sede->dia_23 != 'Z' ? $dia23->dia_23 + $dia23->dia_23observacion : 0;
                              $suma2 += $sede->dia_24 != 'Z' ? $dia24->dia_24 + $dia24->dia_24observacion : 0;
                              $suma2 += $sede->dia_25 != 'Z' ? $dia25->dia_25 + $dia25->dia_25observacion : 0;
                              $suma2 += $sede->dia_26 != 'Z' ? $dia26->dia_26 + $dia26->dia_26observacion : 0;
                              $suma2 += $sede->dia_27 != 'Z' ? $dia27->dia_27 + $dia27->dia_27observacion : 0;
                              $suma2 += $sede->dia_28 != 'Z' ? $dia28->dia_28 + $dia28->dia_28observacion : 0;
                              $suma2 += $sede->dia_29 != 'Z' ? $dia29->dia_29 + $dia29->dia_29observacion : 0;
                              $suma2 += $sede->dia_30 != 'Z' ? $dia30->dia_30 + $dia30->dia_30observacion : 0;
                              $suma2 += $sede->dia_31 != 'Z' ? $dia31->dia_31 + $dia31->dia_31observacion : 0;

                  @endphp
                  {{$suma2}}
                  @php  $totalraciones += $suma2 @endphp
                <br>
                
              
                Rps:
                  @php              
                  
                      
                    $dia1 =  DB::table('rps')->where('codigo_dane_sede', $datos['simat']->consecutivo)          
                            ->select(DB::raw('sum(case when dia_1 is null then 1 else 0 end) as dia_1, sum(case when dia_1 is not null then 1 else 0 end) as dia_1observacion, sum(case when dia_1 = "I" then 1 else 0 end) as dia_1intercambio'))
                            ->first();
                    $dia2 =  DB::table('rps')->where('codigo_dane_sede', $datos['simat']->consecutivo)          
                            ->select(DB::raw('sum(case when dia_2 is null then 1 else 0 end) as dia_2, sum(case when dia_2 is not null then 1 else 0 end) as dia_2observacion, sum(case when dia_2 = "I" then 1 else 0 end) as dia_2intercambio'))
                            ->first();
                    $dia3 =  DB::table('rps')->where('codigo_dane_sede', $datos['simat']->consecutivo)          
                            ->select(DB::raw('sum(case when dia_3 is null then 1 else 0 end) as dia_3, sum(case when dia_3 is not null then 1 else 0 end) as dia_3observacion, sum(case when dia_3 = "I" then 1 else 0 end) as dia_3intercambio'))
                            ->first();
                    $dia4 =  DB::table('rps')->where('codigo_dane_sede', $datos['simat']->consecutivo)                            
                            ->select(DB::raw('sum(case when dia_4 is null then 1 else 0 end) as dia_4, sum(case when dia_4 is not null then 1 else 0 end) as dia_4observacion, sum(case when dia_4 = "I" then 1 else 0 end) as dia_4intercambio'))
                            ->first();
                    $dia5 =  DB::table('rps')->where('codigo_dane_sede', $datos['simat']->consecutivo)                            
                            ->select(DB::raw('sum(case when dia_5 is null then 1 else 0 end) as dia_5, sum(case when dia_5 is not null then 1 else 0 end) as dia_5observacion, sum(case when dia_5 = "I" then 1 else 0 end) as dia_5intercambio'))
                            ->first();
                    $dia6 =  DB::table('rps')->where('codigo_dane_sede', $datos['simat']->consecutivo)                            
                            ->select(DB::raw('sum(case when dia_6 is null then 1 else 0 end) as dia_6, sum(case when dia_6 is not null then 1 else 0 end) as dia_6observacion, sum(case when dia_6 = "I" then 1 else 0 end) as dia_6intercambio'))
                            ->first();
                    $dia7 =  DB::table('rps')->where('codigo_dane_sede', $datos['simat']->consecutivo)                            
                            ->select(DB::raw('sum(case when dia_7 is null then 1 else 0 end) as dia_7, sum(case when dia_7 is not null then 1 else 0 end) as dia_7observacion, sum(case when dia_7 = "I" then 1 else 0 end) as dia_7intercambio'))
                            ->first();
                    $dia8 =  DB::table('rps')->where('codigo_dane_sede', $datos['simat']->consecutivo)                            
                            ->select(DB::raw('sum(case when dia_8 is null then 1 else 0 end) as dia_8, sum(case when dia_8 is not null then 1 else 0 end) as dia_8observacion, sum(case when dia_8 = "I" then 1 else 0 end) as dia_8intercambio'))
                            ->first();
                    $dia9 =  DB::table('rps')->where('codigo_dane_sede', $datos['simat']->consecutivo)                            
                            ->select(DB::raw('sum(case when dia_9 is null then 1 else 0 end) as dia_9, sum(case when dia_9 is not null then 1 else 0 end) as dia_9observacion, sum(case when dia_9 = "I" then 1 else 0 end) as dia_9intercambio'))
                            ->first();
                    $dia10 =  DB::table('rps')->where('codigo_dane_sede', $datos['simat']->consecutivo)                            
                            ->select(DB::raw('sum(case when dia_10 is null then 1 else 0 end) as dia_10, sum(case when dia_10 is not null then 1 else 0 end) as dia_10observacion, sum(case when dia_10 = "I" then 1 else 0 end) as dia_10intercambio'))
                            ->first();
                    $dia11 = DB::table('rps')->where('codigo_dane_sede', $datos['simat']->consecutivo)                            
                            ->select(DB::raw('sum(case when dia_11 is null then 1 else 0 end) as dia_11, sum(case when dia_11 is not null then 1 else 0 end) as dia_11observacion, sum(case when dia_11 = "I" then 1 else 0 end) as dia_11intercambio'))
                            ->first();
                    $dia12 = DB::table('rps')->where('codigo_dane_sede', $datos['simat']->consecutivo)
                            ->select(DB::raw('sum(case when dia_12 is null then 1 else 0 end) as dia_12, sum(case when dia_12 is not null then 1 else 0 end) as dia_12observacion, sum(case when dia_12 = "I" then 1 else 0 end) as dia_12intercambio'))
                            ->first();
                    $dia13 = DB::table('rps')->where('codigo_dane_sede', $datos['simat']->consecutivo)                            
                            ->select(DB::raw('sum(case when dia_13 is null then 1 else 0 end) as dia_13, sum(case when dia_13 is not null then 1 else 0 end) as dia_13observacion, sum(case when dia_13 = "I" then 1 else 0 end) as dia_13intercambio'))
                            ->first();
                    $dia14 =  DB::table('rps')->where('codigo_dane_sede', $datos['simat']->consecutivo)                            
                            ->select(DB::raw('sum(case when dia_14 is null then 1 else 0 end) as dia_14, sum(case when dia_14 is not null then 1 else 0 end) as dia_14observacion, sum(case when dia_14 = "I" then 1 else 0 end) as dia_14intercambio'))
                            ->first();
                    $dia15 =  DB::table('rps')->where('codigo_dane_sede', $datos['simat']->consecutivo)                            
                            ->select(DB::raw('sum(case when dia_15 is null then 1 else 0 end) as dia_15, sum(case when dia_15 is not null then 1 else 0 end) as dia_15observacion, sum(case when dia_15 = "I" then 1 else 0 end) as dia_15intercambio'))
                            ->first();
                    $dia16 =  DB::table('rps')->where('codigo_dane_sede', $datos['simat']->consecutivo)                            
                            ->select(DB::raw('sum(case when dia_16 is null then 1 else 0 end) as dia_16, sum(case when dia_16 is not null then 1 else 0 end) as dia_16observacion, sum(case when dia_16 = "I" then 1 else 0 end) as dia_16intercambio'))
                            ->first();
                    $dia17 =  DB::table('rps')->where('codigo_dane_sede', $datos['simat']->consecutivo)                            
                            ->select(DB::raw('sum(case when dia_17 is null then 1 else 0 end) as dia_17, sum(case when dia_17 is not null then 1 else 0 end) as dia_17observacion, sum(case when dia_17 = "I" then 1 else 0 end) as dia_17intercambio'))
                            ->first();
                    $dia18 =  DB::table('rps')->where('codigo_dane_sede', $datos['simat']->consecutivo)
                            
                            ->select(DB::raw('sum(case when dia_18 is null then 1 else 0 end) as dia_18, sum(case when dia_18 is not null then 1 else 0 end) as dia_18observacion, sum(case when dia_18 = "I" then 1 else 0 end) as dia_18intercambio'))
                            ->first();
                    $dia19 =  DB::table('rps')->where('codigo_dane_sede', $datos['simat']->consecutivo)                            
                            ->select(DB::raw('sum(case when dia_19 is null then 1 else 0 end) as dia_19, sum(case when dia_19 is not null then 1 else 0 end) as dia_19observacion, sum(case when dia_19 = "I" then 1 else 0 end) as dia_19intercambio'))
                            ->first();
                    $dia20 =  DB::table('rps')->where('codigo_dane_sede', $datos['simat']->consecutivo)                            
                            ->select(DB::raw('sum(case when dia_20 is null then 1 else 0 end) as dia_20, sum(case when dia_20 is not null then 1 else 0 end) as dia_20observacion, sum(case when dia_20 = "I" then 1 else 0 end) as dia_20intercambio'))
                            ->first();
                    $dia21 =  DB::table('rps')->where('codigo_dane_sede', $datos['simat']->consecutivo)                            
                            ->select(DB::raw('sum(case when dia_21 is null then 1 else 0 end) as dia_21, sum(case when dia_21 is not null then 1 else 0 end) as dia_21observacion, sum(case when dia_21 = "I" then 1 else 0 end) as dia_21intercambio'))
                            ->first();
                    $dia22 =  DB::table('rps')->where('codigo_dane_sede', $datos['simat']->consecutivo)                            
                            ->select(DB::raw('sum(case when dia_22 is null then 1 else 0 end) as dia_22, sum(case when dia_22 is not null then 1 else 0 end) as dia_22observacion, sum(case when dia_22 = "I" then 1 else 0 end) as dia_22intercambio'))
                            ->first();
                    $dia23 =  DB::table('rps')->where('codigo_dane_sede', $datos['simat']->consecutivo)                            
                            ->select(DB::raw('sum(case when dia_23 is null then 1 else 0 end) as dia_23, sum(case when dia_23 is not null then 1 else 0 end) as dia_23observacion, sum(case when dia_23 = "I" then 1 else 0 end) as dia_23intercambio'))
                            ->first();
                    $dia24 =  DB::table('rps')->where('codigo_dane_sede', $datos['simat']->consecutivo)                            
                            ->select(DB::raw('sum(case when dia_24 is null then 1 else 0 end) as dia_24, sum(case when dia_24 is not null then 1 else 0 end) as dia_24observacion, sum(case when dia_24 = "I" then 1 else 0 end) as dia_24intercambio'))
                            ->first();
                    $dia25 =  DB::table('rps')->where('codigo_dane_sede', $datos['simat']->consecutivo)                            
                            ->select(DB::raw('sum(case when dia_25 is null then 1 else 0 end) as dia_25, sum(case when dia_25 is not null then 1 else 0 end) as dia_25observacion, sum(case when dia_25 = "I" then 1 else 0 end) as dia_25intercambio'))
                            ->first();
                    $dia26 =  DB::table('rps')->where('codigo_dane_sede', $datos['simat']->consecutivo)
                            
                            ->select(DB::raw('sum(case when dia_26 is null then 1 else 0 end) as dia_26, sum(case when dia_26 is not null then 1 else 0 end) as dia_26observacion, sum(case when dia_26 = "I" then 1 else 0 end) as dia_26intercambio'))
                            ->first();
                    $dia27 =  DB::table('rps')->where('codigo_dane_sede', $datos['simat']->consecutivo)                            
                            ->select(DB::raw('sum(case when dia_27 is null then 1 else 0 end) as dia_27, sum(case when dia_27 is not null then 1 else 0 end) as dia_27observacion, sum(case when dia_27 = "I" then 1 else 0 end) as dia_27intercambio'))
                            ->first();
                    $dia28 =  DB::table('rps')->where('codigo_dane_sede', $datos['simat']->consecutivo)                        
                            ->select(DB::raw('sum(case when dia_28 is null then 1 else 0 end) as dia_28, sum(case when dia_28 is not null then 1 else 0 end) as dia_28observacion, sum(case when dia_28 = "I" then 1 else 0 end) as dia_28intercambio'))
                            ->first();
                    $dia29 =  DB::table('rps')->where('codigo_dane_sede', $datos['simat']->consecutivo)                        
                            ->select(DB::raw('sum(case when dia_29 is null then 1 else 0 end) as dia_29, sum(case when dia_29 is not null then 1 else 0 end) as dia_29observacion, sum(case when dia_29 = "I" then 1 else 0 end) as dia_29intercambio'))
                            ->first();
                    $dia30 =  DB::table('rps')->where('codigo_dane_sede', $datos['simat']->consecutivo)                          
                            ->select(DB::raw('sum(case when dia_30 is null then 1 else 0 end) as dia_30, sum(case when dia_30 is not null then 1 else 0 end) as dia_30observacion, sum(case when dia_30 = "I" then 1 else 0 end) as dia_30intercambio'))
                            ->first();
                    $dia31 =  DB::table('rps')->where('codigo_dane_sede', $datos['simat']->consecutivo)                                                
                            ->select(DB::raw('sum(case when dia_31 is null then 1 else 0 end) as dia_31, sum(case when dia_31 is not null then 1 else 0 end) as dia_31observacion, sum(case when dia_31 = "I" then 1 else 0 end) as dia_31intercambio'))
                            ->first();   
                                                   
                    $suma2 = 0;                    
                    $suma2 += $sede->dia_1 != 'Z' ? $dia1->dia_1intercambio ==  $dia1->dia_1observacion ? 0 : $dia1->dia_1 + $dia1->dia_1observacion : 0;
                    $suma2 += $sede->dia_2 != 'Z' ? $dia2->dia_2intercambio ==  $dia2->dia_2observacion ? 0 : $dia2->dia_2 + $dia2->dia_2observacion : 0;
                    $suma2 += $sede->dia_3 != 'Z' ? $dia3->dia_3intercambio ==  $dia3->dia_3observacion ? 0 : $dia3->dia_3 + $dia3->dia_3observacion : 0;
                    $suma2 += $sede->dia_4 != 'Z' ? $dia4->dia_4intercambio ==  $dia4->dia_4observacion ? 0 : $dia4->dia_4 + $dia4->dia_4observacion : 0;
                    $suma2 += $sede->dia_5 != 'Z' ? $dia5->dia_5intercambio ==  $dia5->dia_5observacion ? 0 : $dia5->dia_5 + $dia5->dia_5observacion : 0;
                    $suma2 += $sede->dia_6 != 'Z' ? $dia6->dia_6intercambio ==  $dia6->dia_6observacion ? 0 : $dia6->dia_6 + $dia6->dia_6observacion : 0;
                    $suma2 += $sede->dia_7 != 'Z' ? $dia7->dia_7intercambio ==  $dia7->dia_7observacion ? 0 : $dia7->dia_7 + $dia7->dia_7observacion : 0;
                    $suma2 += $sede->dia_8 != 'Z' ? $dia8->dia_8intercambio ==  $dia8->dia_8observacion ? 0 : $dia8->dia_8 + $dia8->dia_8observacion : 0;
                    $suma2 += $sede->dia_9 != 'Z' ? $dia9->dia_9intercambio ==  $dia9->dia_9observacion ? 0 : $dia9->dia_9 + $dia9->dia_9observacion : 0;
                    $suma2 += $sede->dia_10 != 'Z' ? $dia10->dia_10intercambio ==  $dia10->dia_10observacion ? 0 : $dia10->dia_10 + $dia10->dia_10observacion : 0;
                    $suma2 += $sede->dia_11 != 'Z' ? $dia11->dia_11intercambio ==  $dia11->dia_11observacion ? 0 : $dia11->dia_11 + $dia11->dia_11observacion : 0;
                    $suma2 += $sede->dia_12 != 'Z' ? $dia12->dia_12intercambio ==  $dia12->dia_12observacion ? 0 : $dia12->dia_12 + $dia12->dia_12observacion : 0;
                    $suma2 += $sede->dia_13 != 'Z' ? $dia13->dia_13intercambio ==  $dia13->dia_13observacion ? 0 : $dia13->dia_13 + $dia13->dia_13observacion : 0;
                    $suma2 += $sede->dia_14 != 'Z' ? $dia14->dia_14intercambio ==  $dia14->dia_14observacion ? 0 : $dia14->dia_14 + $dia14->dia_14observacion : 0;
                    $suma2 += $sede->dia_15 != 'Z' ? $dia15->dia_15intercambio ==  $dia15->dia_15observacion ? 0 : $dia15->dia_15 + $dia15->dia_15observacion : 0;
                    $suma2 += $sede->dia_16 != 'Z' ? $dia16->dia_16intercambio ==  $dia16->dia_16observacion ? 0 : $dia16->dia_16 + $dia16->dia_16observacion : 0;
                    $suma2 += $sede->dia_17 != 'Z' ? $dia17->dia_17intercambio ==  $dia17->dia_17observacion ? 0 : $dia17->dia_17 + $dia17->dia_17observacion : 0;
                    $suma2 += $sede->dia_18 != 'Z' ? $dia18->dia_18intercambio ==  $dia18->dia_18observacion ? 0 : $dia18->dia_18 + $dia18->dia_18observacion : 0;
                    $suma2 += $sede->dia_19 != 'Z' ? $dia19->dia_19intercambio ==  $dia19->dia_19observacion ? 0 : $dia19->dia_19 + $dia19->dia_19observacion : 0;
                    $suma2 += $sede->dia_20 != 'Z' ? $dia20->dia_20intercambio ==  $dia20->dia_20observacion ? 0 : $dia20->dia_20 + $dia20->dia_20observacion : 0;
                    $suma2 += $sede->dia_21 != 'Z' ? $dia21->dia_21intercambio ==  $dia21->dia_21observacion ? 0 : $dia21->dia_21 + $dia21->dia_21observacion : 0;
                    $suma2 += $sede->dia_22 != 'Z' ? $dia22->dia_22intercambio ==  $dia22->dia_22observacion ? 0 : $dia22->dia_22 + $dia22->dia_22observacion : 0;
                    $suma2 += $sede->dia_23 != 'Z' ? $dia23->dia_23intercambio ==  $dia23->dia_23observacion ? 0 : $dia23->dia_23 + $dia23->dia_23observacion : 0;
                    $suma2 += $sede->dia_24 != 'Z' ? $dia24->dia_24intercambio ==  $dia24->dia_24observacion ? 0 : $dia24->dia_24 + $dia24->dia_24observacion : 0;
                    $suma2 += $sede->dia_25 != 'Z' ? $dia25->dia_25intercambio ==  $dia25->dia_25observacion ? 0 : $dia25->dia_25 + $dia25->dia_25observacion : 0;
                    $suma2 += $sede->dia_26 != 'Z' ? $dia26->dia_26intercambio ==  $dia26->dia_26observacion ? 0 : $dia26->dia_26 + $dia26->dia_26observacion : 0;
                    $suma2 += $sede->dia_27 != 'Z' ? $dia27->dia_27intercambio ==  $dia27->dia_27observacion ? 0 : $dia27->dia_27 + $dia27->dia_27observacion : 0;
                    $suma2 += $sede->dia_28 != 'Z' ? $dia28->dia_28intercambio ==  $dia28->dia_28observacion ? 0 : $dia28->dia_28 + $dia28->dia_28observacion : 0;
                    $suma2 += $sede->dia_29 != 'Z' ? $dia29->dia_29intercambio ==  $dia29->dia_29observacion ? 0 : $dia29->dia_29 + $dia29->dia_29observacion : 0;
                    $suma2 += $sede->dia_30 != 'Z' ? $dia30->dia_30intercambio ==  $dia30->dia_30observacion ? 0 : $dia30->dia_30 + $dia30->dia_30observacion : 0;
                    $suma2 += $sede->dia_31 != 'Z' ? $dia31->dia_31intercambio ==  $dia31->dia_31observacion ? 0 : $dia31->dia_31 + $dia31->dia_31observacion : 0;


              
                  @endphp
                {{$suma2}} 
                @php  $totalraciones += $suma2 @endphp
              </td>
              <td class="tg-0lax">
                @foreach ($datos['simat']['consolidadoRI'] as $dato5)
                {{$dato5->jornada_tipo_racion}}: {{$dato5->total_raciones}}<br>
                @php  $totalracionesentregadasri += $dato5->total_raciones @endphp
                @endforeach

                
              </td>
              <td class="tg-0lax">
                @if($datos['simat']['consolidadoRPS'])
                @foreach ($datos['simat']['consolidadoRPS'] as $dato4)
                {{$dato4->jornada_tipo_racion}}: {{$dato4->total_raciones}}<br>
                @php  $totalracionesentregadasrps += $dato4->total_raciones @endphp
                @endforeach
                
                @endif
              </td>
              <td class="tg-0lax">
                @foreach ($datos['simat']['consolidadoRI'] as $dato)
                {{$dato->jornada_tipo_racion}}: {{$dato->devoluciones}}<br>
                @php $totaldevoluciones += $dato->devoluciones; @endphp
                @endforeach
                @if($datos['simat']['consolidadoRPS'])
                @foreach ($datos['simat']['consolidadoRPS'] as $dato3)
                {{$dato3->jornada_tipo_racion}}: {{$dato3->devoluciones}}<br>
                @php $totaldevoluciones += $dato3->devoluciones; @endphp
                @endforeach
                @endif
              </td>
              <td class="tg-0lax">
                @foreach ($datos['simat']['consolidadoRI'] as $dato1)
                {{$dato1->jornada_tipo_racion}}: {{$dato1->novedades}}<br>
                @php $totalnovedades += $dato1->novedades; @endphp
                @endforeach
                @if($datos['simat']['consolidadoRPS'])
                @foreach ($datos['simat']['consolidadoRPS'] as $dato2)
                {{$dato2->jornada_tipo_racion}}: {{$dato2->novedades}}<br>
                @php $totalnovedades += $dato2->novedades; @endphp
                @endforeach
                @endif
              </td>
              
            </tr>
            @php $i++; @endphp
           @endforeach
          
           
          </tbody>
          <tr>
            <td colspan="2">TOTAL</td>
            <td>{{$totalraciones}}</td>
            <td><b id="totalracionesentregadasri">{{$totalracionesentregadasri}}</b></td>
            <td><b id="totalracionesentregadasrps">{{$totalracionesentregadasrps}}</b></td>
            <td>{{$totaldevoluciones}}</td>
            <td>{{$totalnovedades}}</td>
           </tr>
        </table>
        

        

        <div class="card-body invoice-padding pb-0">
          <div class="row invoice-sales-total-wrapper">
            <div class="col-md-12">
              <p class="card-text mb-0">
                <span class="fw-bold"></span> <span class="ms-75">
                  <textarea
                    type="text"
                    class="form-control" style="border-color: #40465600;"
                    id="observaciones"
                    name="observaciones"
                    placeholder="Observaciones"
                    aria-label="Observaciones"
                  ></textarea>
                </span>
                
              </p>
            </div>
            <br><br><br><br><br><br><br>
            <div class="col-md-6 justify-content">
              <img src="{{Auth::user()->firma->url_path}}" width="200px" alt=""><br>
                  <hr class="my-50" />
                  <p style="text-transform: uppercase">{{Auth::user()->name}}</p>  
                  <p style="text-transform: uppercase">Cedula de ciudadania: {{Auth::user()->documento}}</p>           
                  <p style="text-transform: uppercase">Cargo: {{Auth::user()->cargo}}</p>
                  <p style="text-transform: uppercase">CONTRATO No.: {{Auth::user()->contrato}}</p>
            </div>
          </div>
        </div>
        <!-- Invoice Description ends -->

        
  
      </div>
    </div>
    <!-- /Invoice -->

    <!-- Invoice Actions -->
    <div class="col-xl-3 col-md-4 col-12 invoice-actions mt-md-0 mt-2">
      <div class="card">
        <div class="card-body">
          <button class="btn btn-primary w-100 mb-75" data-bs-toggle="modal" data-bs-target="#send-invoice-sidebar">
            Send Invoice
          </button>
          <button class="btn btn-outline-secondary w-100 btn-download-invoice mb-75">Download</button>
          <a class="btn btn-outline-secondary w-100 mb-75" href="{{url('app/invoice/print')}}" target="_blank"> Print </a>
          <a class="btn btn-outline-secondary w-100 mb-75" href="{{url('app/invoice/edit')}}"> Edit </a>
          <button class="btn btn-success w-100" data-bs-toggle="modal" data-bs-target="#add-payment-sidebar">
            Add Payment
          </button>
        </div>
      </div>
    </div>
    <!-- /Invoice Actions -->
  </div>
</section>



@php
  function fechaCastellano ($fecha) {
      $fecha = substr($fecha, 0, 10);
      $numeroDia = date('d', strtotime($fecha));
      $dia = date('l', strtotime($fecha));
      $mes = date('F', strtotime($fecha));
      $anio = date('Y', strtotime($fecha));
      $dias_ES = array("Lunes", "Martes", "Miércoles", "Jueves", "Viernes", "Sábado", "Domingo");
      $dias_EN = array("Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday");
      $nombredia = str_replace($dias_EN, $dias_ES, $dia);
      $meses_ES = array("Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre");
      $meses_EN = array("January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December");
      $nombreMes = str_replace($meses_EN, $meses_ES, $mes);
      return $nombredia." ".$numeroDia." de ".$nombreMes." de ".$anio;
  }

@endphp
<!-- /Add Payment Sidebar -->
@endsection

@section('vendor-script')
<script src="{{asset('vendors/js/forms/repeater/jquery.repeater.min.js')}}"></script>
<script src="{{asset('vendors/js/pickers/flatpickr/flatpickr.min.js')}}"></script>

@endsection

@section('page-script')
<script src="{{asset('js/scripts/pages/app-invoice.js')}}"></script>
<script src="{{asset('js/scripts/NumeroALetras.js')}}"></script>
<script>
   $(document).ready(function(){
      var totalri = parseInt($('#totalracionesentregadasri').html());
      var totalrps = parseInt($('#totalracionesentregadasrps').html());
      console.log(totalri);
      console.log(totalrps);
      if(totalri > 0 && totalrps > 0){
        
        $('#datossumatorias').html('Se registró una atención total '+
        'de ' + totalrps +' ('+ NumeroALetras(totalrps) +') '+
        'estudiantes beneficiarios para RPS'+
        'y se registró una atención total de '+totalri+' ('+NumeroALetras(totalri)+') '+
        'estudiantes beneficiarios para RI.');
      }else if(totalri != 0)
      {
        
        $('#datossumatorias').html('Se registró una atención total '+
        'de '+totalri+' ('+NumeroALetras(totalri)+') '+
        'estudiantes beneficiarios para RI.');
      }else if (totalrps != 0)
      {
        
        $('#datossumatorias').html('Se registró una atención total '+
        'de ' + totalrps +' ('+ NumeroALetras(totalrps) +') '+
        'estudiantes beneficiarios para RPS.');
      }
      

      
      $('#sumatoria').html(totalri + totalrps);
      $('#sumatoriaL').html(NumeroALetras(totalri + totalrps));
  });
</script>
@endsection
