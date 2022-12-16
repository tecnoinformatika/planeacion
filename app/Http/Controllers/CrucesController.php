<?php

namespace App\Http\Controllers;

use App\Models\Rps;
use App\Models\Ri;
use App\Models\Simat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Response;
use Auth;
use App\Models\consolidado;
use App\Models\Ajustes;
use App\Models\Corte;
use App\Models\User;
use App\Models\Sedes;
use App\Models\ConsolidadosEspeciales;

class CrucesController extends Controller
{

        public function __construct()
        {
                $this->middleware('auth');
        }
        public function estadoMatriculaJson(Request $request)
        {
                $institucion = $request->institucion;
                $tipo = $request->tipo;
        
                if($tipo == 'RPS'){
                $data = DB::table('rps')
                        ->LeftJoin('simats','rps.documento','=','simats.documento')
                        ->leftJoin('sedes', 'sedes.consecutivo','=','rps.codigo_dane_sede')
                        ->where('sedes.user_id','=', Auth::user()->id) 
                        ->where('simats.estado','!=','MATRICULADO')                       
                        ->select('rps.id as N',
                                'rps.TIPO_DE_DOCUMENTO as tipodoc',
                                'rps.NUMERO_DE_DOCUMENTO_DE_IDENTIDAD as numdoc',
                                'rps.PRIMER_NOMBRE_DEL_TITULAR_DE_DERECHO as PrimerNombre',
                                'rps.SEGUNDO_NOMBRE_DEL_TITULAR_DE_DERECHO as SegundoNombre',
                                'rps.PRIMER_APELLIDO_DEL_TITULAR_DE_DERECHO as PrimerApellido',
                                'rps.SEGUNDO_APELLIDO_DEL_TITULAR_DE_DERECHO as SegundoApellido',
                                'rps.FECHA_DE_NACIMIENTO as fechaNacimiento',
                                'rps.Sexo as sexo',
                                'rps.INSTITUCION as insti',
                                'rps.SEDE as sed',
                                'rps.codigo_dane_sede as codsede',
                                'rps.Tipo_de_complemento as tipoComplemento',
                                'rps.observacionesMatricula as observacionesMatricula', 
                                'simats.institucion as institucion',
                                'sedes.nombre as sede',
                                'simats.estado as estado') 
                        ->groupByRaw('N,tipodoc,numdoc,PrimerNombre,codsede,SegundoNombre,observacionesMatricula,PrimerApellido,SegundoApellido,fechaNacimiento,sexo,insti,sed,tipoComplemento,institucion,sede,estado')                  
                        ->get();
              
                $breadcrumbs = [['link' => "/", 'name' => "Inicio"], ['link' => "javascript:void(0)", 'name' => "Cruces"], ['name' => "Estado de matrícula"]];
                return view('/content/cruces/estadodematricula', ['breadcrumbs' => $breadcrumbs, 'data' => $data]);

                }
                if($tipo == 'RI'){
                $data = DB::table('ris')
                        ->leftJoin('rps','ris.documento','=','rps.documento')
                        ->leftjoin('simats','ris.documento','=','simats.documento')
                        ->join('sedes', 'sedes.consecutivo','=','ris.codigo_dane_sede')
                        ->where('sedes.user_id','=', Auth::user()->id)
                        ->where('simats.estado','!=','MATRICULADO')
                        ->select('ris.id as N',
                                'ris.TIPO_DE_DOCUMENTO as tipodoc',
                                'ris.NUMERO_DE_DOCUMENTO_DE_IDENTIDAD as numdoc',
                                'ris.PRIMER_NOMBRE_DEL_TITULAR_DE_DERECHO as PrimerNombre',
                                'ris.SEGUNDO_NOMBRE_DEL_TITULAR_DE_DERECHO as SegundoNombre',
                                'ris.PRIMER_APELLIDO_DEL_TITULAR_DE_DERECHO as PrimerApellido',
                                'ris.SEGUNDO_APELLIDO_DEL_TITULAR_DE_DERECHO as SegundoApellido',
                                'ris.FECHA_DE_NACIMIENTO as fechaNacimiento',
                                'ris.Sexo as sexo',
                                'ris.INSTITUCION as insti',
                                'ris.SEDE as sed',
                                'ris.Tipo_de_complemento as tipoComplemento',
                                'ris.observacionesMatricula as observacionesMatricula',
                                'ris.codigo_dane_sede as codsede',
                                'simats.institucion as institucion',
                                'sedes.nombre as sede',
                                'simats.estado as estado')
                        ->groupByRaw('N,tipodoc,numdoc,PrimerNombre,codsede,SegundoNombre,observacionesMatricula,PrimerApellido,SegundoApellido,fechaNacimiento,sexo,insti,sed,tipoComplemento,institucion,sede,estado')                  
                        ->get();
                       // dd($data);
                $breadcrumbs = [['link' => "/", 'name' => "Inicio"], ['link' => "javascript:void(0)", 'name' => "Cruces"], ['name' => "Estado de matrícula"]];
                return view('/content/cruces/estadodematricula', ['breadcrumbs' => $breadcrumbs, 'data' => $data]);
                }
                
        }
        public function registro($id,$tipo)
        {
                
        
                if($tipo == 'RPS'){
                $rps = Rps::find($id);      
                return Response::json($rps);
                }
                if($tipo == 'RI'){
                $ri = Ri::find($id);
                return Response::json($ri);
                }
                
        }
        public function registrosimat($id,$tipo)
        {
                $vacio = ['vacio' => 1];
                if($tipo == 'RPS'){
                $rps = Rps::find($id);      
                      
                $simat = Simat::where(DB::raw('CONCAT(nombre1,nombre2,apellido1,apellido2)'), '=', $rps->PRIMER_NOMBRE_DEL_TITULAR_DE_DERECHO.$rps->SEGUNDO_NOMBRE_DEL_TITULAR_DE_DERECHO.$rps->PRIMER_APELLIDO_DEL_TITULAR_DE_DERECHO.$rps->SEGUNDO_APELLIDO_DEL_TITULAR_DE_DERECHO)
                ->first();
                if (isset($simat)){
                        return Response::json($simat);
                }else{
                        return Response::json($vacio);
                }
                }
                if($tipo == 'RI'){
                $ri = Ri::find($id);
                
                $simat = Simat::where(DB::raw('CONCAT(nombre1,nombre2,apellido1,apellido2)'), '=', $ri->PRIMER_NOMBRE_DEL_TITULAR_DE_DERECHO.$ri->SEGUNDO_NOMBRE_DEL_TITULAR_DE_DERECHO.$ri->PRIMER_APELLIDO_DEL_TITULAR_DE_DERECHO.$ri->SEGUNDO_APELLIDO_DEL_TITULAR_DE_DERECHO)
                ->first();
                if (isset($simat)){
                        return Response::json($simat);
                }else{
                        return Response::json($vacio);
                }
                
                }
                
        }
        public function observacion(Request $request)
        {
                $mescorte = DB::table('ajustes')->first();
                $mes = date('m', strtotime($mescorte->incio));
                $mes = intval($mes);
                
                $tipo = $request->tipo;
                $id = $request->id;
                if($tipo == "RPS"){
                        $rps = Rps::find($id);
                        
                        $rps->observacionesMatricula = $request->observacion;
                        $rps->save();


                        if(Corte::where(DB::raw('CONCAT(tipodoc,documento)'),$rps->TIPO_DE_DOCUMENTO.$rps->NUMERO_DE_DOCUMENTO_DE_IDENTIDAD)
                                          ->where('codigo_dane_sede',$rps->codigo_dane_sede )
                                          ->where('corte',($mes) )
                                          ->first())
                        {
                                $corte = Corte::where(DB::raw('CONCAT(tipodoc,documento)'),$rps->TIPO_DE_DOCUMENTO.$rps->NUMERO_DE_DOCUMENTO_DE_IDENTIDAD)
                                ->where('codigo_dane_sede',$rps->codigo_dane_sede )
                                ->where('corte',($mes) )
                                ->update([
                                        'tipodoc' => $rps->TIPO_DE_DOCUMENTO,
                                        'documento' => $rps->NUMERO_DE_DOCUMENTO_DE_IDENTIDAD,
                                        'nombre1' => $rps->PRIMER_NOMBRE_DEL_TITULAR_DE_DERECHO,
                                        'nombre2' => $rps->SEGUNDO_NOMBRE_DEL_TITULAR_DE_DERECHO,
                                        'apellido1' => $rps->PRIMER_APELLIDO_DEL_TITULAR_DE_DERECHO,
                                        'apellido2' => $rps->SEGUNDO_APELLIDO_DEL_TITULAR_DE_DERECHO,
                                        'fechaNacimiento' => $rps->FECHA_DE_NACIMIENTO,
                                        'grupoEtario' => $rps->GRUPO_ETARIO,
                                        'pertenenciaEtnica' => $rps->PERTENENCIA_ETNICA,
                                        'sexo' => $rps->Sexo,
                                        'gradoEducativa' => $rps->Grado_Educativo,
                                        'tipoComplemento' => $rps->Tipo_de_complemento,
                                        'codigo_dane_sede' => $rps->codigo_dane_sede,
                                        'cruceDocumento' => $request->cruceDocumento,
                                        'cruceNombre' => $request->cruceNombre,
                                        'observacion' => $request->observacion,
                                        'corte' => $mes,
                                ]);
                        }else{                       
                                $corte = Corte::create([
                                        'tipodoc' => $rps->TIPO_DE_DOCUMENTO,
                                        'documento' => $rps->NUMERO_DE_DOCUMENTO_DE_IDENTIDAD,
                                        'nombre1' => $rps->PRIMER_NOMBRE_DEL_TITULAR_DE_DERECHO,
                                        'nombre2' => $rps->SEGUNDO_NOMBRE_DEL_TITULAR_DE_DERECHO,
                                        'apellido1' => $rps->PRIMER_APELLIDO_DEL_TITULAR_DE_DERECHO,
                                        'apellido2' => $rps->SEGUNDO_APELLIDO_DEL_TITULAR_DE_DERECHO,
                                        'fechaNacimiento' => $rps->FECHA_DE_NACIMIENTO,
                                        'grupoEtario' => $rps->GRUPO_ETARIO,
                                        'pertenenciaEtnica' => $rps->PERTENENCIA_ETNICA,
                                        'sexo' => $rps->Sexo,
                                        'gradoEducativa' => $rps->Grado_Educativo,
                                        'tipoComplemento' => $rps->Tipo_de_complemento,
                                        'codigo_dane_sede' => $rps->codigo_dane_sede,
                                        'cruceDocumento' => $request->cruceDocumento,
                                        'cruceNombre' => $request->cruceNombre,
                                        'observacion' => $request->observacion,
                                        'corte' => $mes,
                                ]);
                        }

                return Response::json($rps);
                }
                if($tipo == "RI"){
                        $ri = Ri::find($id);
                        
                        $ri->observacionesMatricula = $request->observacion;
                        $ri->save();
                        if(Corte::where(DB::raw('CONCAT(tipodoc,documento)'),$ri->TIPO_DE_DOCUMENTO.$ri->NUMERO_DE_DOCUMENTO_DE_IDENTIDAD)
                                                ->where('codigo_dane_sede',$ri->codigo_dane_sede )
                                                ->where('corte',($mes) )
                                                ->first())
                        {
                                $corte = Corte::where(DB::raw('CONCAT(tipodoc,documento)'),$ri->TIPO_DE_DOCUMENTO.$ri->NUMERO_DE_DOCUMENTO_DE_IDENTIDAD)
                                ->where('codigo_dane_sede',$ri->codigo_dane_sede )
                                ->where('corte',($mes) )
                                ->update([
                                        'tipodoc' => $ri->TIPO_DE_DOCUMENTO,
                                        'documento' => $ri->NUMERO_DE_DOCUMENTO_DE_IDENTIDAD,
                                        'nombre1' => $ri->PRIMER_NOMBRE_DEL_TITULAR_DE_DERECHO,
                                        'nombre2' => $ri->SEGUNDO_NOMBRE_DEL_TITULAR_DE_DERECHO,
                                        'apellido1' => $ri->PRIMER_APELLIDO_DEL_TITULAR_DE_DERECHO,
                                        'apellido2' => $ri->SEGUNDO_APELLIDO_DEL_TITULAR_DE_DERECHO,
                                        'fechaNacimiento' => $ri->FECHA_DE_NACIMIENTO,
                                        'grupoEtario' => $ri->GRUPO_ETARIO,
                                        'pertenenciaEtnica' => $ri->PERTENENCIA_ETNICA,
                                        'sexo' => $ri->Sexo,
                                        'gradoEducativa' => $ri->Grado_Educativo,
                                        'tipoComplemento' => $ri->Tipo_de_complemento,
                                        'codigo_dane_sede' => $ri->codigo_dane_sede,
                                        'cruceDocumento' => $request->cruceDocumento,
                                        'cruceNombre' => $request->cruceNombre,
                                        'observacion' => $request->observacion,
                                        'corte' => $mes,
                                ]);
                        }else{                       
                                $corte = Corte::create([
                                        'tipodoc' => $ri->TIPO_DE_DOCUMENTO,
                                        'documento' => $ri->NUMERO_DE_DOCUMENTO_DE_IDENTIDAD,
                                        'nombre1' => $ri->PRIMER_NOMBRE_DEL_TITULAR_DE_DERECHO,
                                        'nombre2' => $ri->SEGUNDO_NOMBRE_DEL_TITULAR_DE_DERECHO,
                                        'apellido1' => $ri->PRIMER_APELLIDO_DEL_TITULAR_DE_DERECHO,
                                        'apellido2' => $ri->SEGUNDO_APELLIDO_DEL_TITULAR_DE_DERECHO,
                                        'fechaNacimiento' => $ri->FECHA_DE_NACIMIENTO,
                                        'grupoEtario' => $ri->GRUPO_ETARIO,
                                        'pertenenciaEtnica' => $ri->PERTENENCIA_ETNICA,
                                        'sexo' => $ri->Sexo,
                                        'gradoEducativa' => $ri->Grado_Educativo,
                                        'tipoComplemento' => $ri->Tipo_de_complemento,
                                        'codigo_dane_sede' => $ri->codigo_dane_sede,
                                        'cruceDocumento' => $request->cruceDocumento,
                                        'cruceNombre' => $request->cruceNombre,
                                        'observacion' => $request->observacion,
                                        'corte' => $mes,
                                ]);
                        }

                return Response::json($ri);
                }
                

        }
        public function estadoMatricula()
        {
                $breadcrumbs = [['link' => "/", 'name' => "Inicio"], ['link' => "javascript:void(0)", 'name' => "Estado de matrícula"], ['name' => "Cruces"]];
                return view('/content/cruces/estadodematricula', ['breadcrumbs' => $breadcrumbs]);
        }
        public function indexConsolidado()
        {



                $breadcrumbs = [['link' => "/", 'name' => "Inicio"], ['link' => "javascript:void(0)", 'name' => "Consolidado"], ['name' => "Cruces"]];
                return view('/content/cruces/consolidadoIndex', ['breadcrumbs' => $breadcrumbs]);
        }
        public function consolidado(Request $request)
        {
                $array = [];
                foreach($request->sedes as $sede)
                {
                        
                        $sedec = Sedes::where('consecutivo',$sede)->first();
                        $simat = Simat::where('dane', $sedec->codigo_dane_institucion)->first();
                 
                        $tipo = $request->tipo;
                        $tipoconsolidado = $request->tipoconsolidado;
                        //dd($tipoconsolidado);
                        if($tipoconsolidado == '1')
                        {
                                if($tipo == "RI"){
                                        $dias = Ri::first();
                                        $dia1 = Ri::where('codigo_dane_sede', $sede)
                                                ->groupByRaw('Tipo_de_complemento')
                                                ->select(DB::raw('sum(case when dia_1 is null then 1 else 0 end) as dia_1, sum(case when dia_1 is not null then 1 else 0 end) as dia_1observacion, Tipo_de_complemento'))
                                                ->get();
                                        $dia2 = Ri::where('codigo_dane_sede', $sede)
                                                ->groupByRaw('Tipo_de_complemento')
                                                ->select(DB::raw('sum(case when dia_2 is null then 1 else 0 end) as dia_2, sum(case when dia_2 is not null then 1 else 0 end) as dia_2observacion, Tipo_de_complemento'))
                                                ->get();
                                        $dia3 = Ri::where('codigo_dane_sede', $sede)
                                                ->groupByRaw('Tipo_de_complemento')
                                                ->select(DB::raw('sum(case when dia_3 is null then 1 else 0 end) as dia_3, sum(case when dia_3 is not null then 1 else 0 end) as dia_3observacion, Tipo_de_complemento'))
                                                ->get();
                                        $dia4 = Ri::where('codigo_dane_sede', $sede)
                                                ->groupByRaw('Tipo_de_complemento')
                                                ->select(DB::raw('sum(case when dia_4 is null then 1 else 0 end) as dia_4, sum(case when dia_4 is not null then 1 else 0 end) as dia_4observacion, Tipo_de_complemento'))
                                                ->get();
                                        $dia5 = Ri::where('codigo_dane_sede', $sede)
                                                ->groupByRaw('Tipo_de_complemento')
                                                ->select(DB::raw('sum(case when dia_5 is null then 1 else 0 end) as dia_5, sum(case when dia_5 is not null then 1 else 0 end) as dia_5observacion, Tipo_de_complemento'))
                                                ->get();
                                        $dia6 = Ri::where('codigo_dane_sede', $sede)
                                                ->groupByRaw('Tipo_de_complemento')
                                                ->select(DB::raw('sum(case when dia_6 is null then 1 else 0 end) as dia_6, sum(case when dia_6 is not null then 1 else 0 end) as dia_6observacion, Tipo_de_complemento'))
                                                ->get();
                                        $dia7 = Ri::where('codigo_dane_sede', $sede)
                                                ->groupByRaw('Tipo_de_complemento')
                                                ->select(DB::raw('sum(case when dia_7 is null then 1 else 0 end) as dia_7, sum(case when dia_7 is not null then 1 else 0 end) as dia_7observacion, Tipo_de_complemento'))
                                                ->get();
                                        $dia8 = Ri::where('codigo_dane_sede', $sede)
                                                ->groupByRaw('Tipo_de_complemento')
                                                ->select(DB::raw('sum(case when dia_8 is null then 1 else 0 end) as dia_8, sum(case when dia_8 is not null then 1 else 0 end) as dia_8observacion, Tipo_de_complemento'))
                                                ->get();
                                        $dia9 = Ri::where('codigo_dane_sede', $sede)
                                                ->groupByRaw('Tipo_de_complemento')
                                                ->select(DB::raw('sum(case when dia_9 is null then 1 else 0 end) as dia_9, sum(case when dia_9 is not null then 1 else 0 end) as dia_9observacion, Tipo_de_complemento'))
                                                ->get();
                                        $dia10 = Ri::where('codigo_dane_sede', $sede)
                                                ->groupByRaw('Tipo_de_complemento')
                                                ->select(DB::raw('sum(case when dia_10 is null then 1 else 0 end) as dia_10, sum(case when dia_10 is not null then 1 else 0 end) as dia_10observacion, Tipo_de_complemento'))
                                                ->get();
                                        $dia11 = Ri::where('codigo_dane_sede', $sede)
                                                ->groupByRaw('Tipo_de_complemento')
                                                ->select(DB::raw('sum(case when dia_11 is null then 1 else 0 end) as dia_11, sum(case when dia_11 is not null then 1 else 0 end) as dia_11observacion, Tipo_de_complemento'))
                                                ->get();
                                        $dia12 = Ri::where('codigo_dane_sede', $sede)                       
                                                ->groupByRaw('Tipo_de_complemento')
                                                ->select(DB::raw('sum(case when dia_12 is null then 1 else 0 end) as dia_12, sum(case when dia_12 is not null then 1 else 0 end) as dia_12observacion, Tipo_de_complemento'))
                                                ->get();
                                        $dia13 = Ri::where('codigo_dane_sede', $sede)
                                                ->groupByRaw('Tipo_de_complemento')
                                                ->select(DB::raw('sum(case when dia_13 is null then 1 else 0 end) as dia_13, sum(case when dia_13 is not null then 1 else 0 end) as dia_13observacion, Tipo_de_complemento'))
                                                ->get();
                                        $dia14 = Ri::where('codigo_dane_sede', $sede)
                                                ->groupByRaw('Tipo_de_complemento')
                                                ->select(DB::raw('sum(case when dia_14 is null then 1 else 0 end) as dia_14, sum(case when dia_14 is not null then 1 else 0 end) as dia_14observacion, Tipo_de_complemento'))
                                                ->get();
                                        $dia15 = Ri::where('codigo_dane_sede', $sede)
                                                ->groupByRaw('Tipo_de_complemento')
                                                ->select(DB::raw('sum(case when dia_15 is null then 1 else 0 end) as dia_15, sum(case when dia_15 is not null then 1 else 0 end) as dia_15observacion, Tipo_de_complemento'))
                                                ->get();
                                        $dia16 = Ri::where('codigo_dane_sede', $sede)
                                                ->groupByRaw('Tipo_de_complemento')
                                                ->select(DB::raw('sum(case when dia_16 is null then 1 else 0 end) as dia_16, sum(case when dia_16 is not null then 1 else 0 end) as dia_16observacion, Tipo_de_complemento'))
                                                ->get();
                                        $dia17 = Ri::where('codigo_dane_sede', $sede)
                                                ->groupByRaw('Tipo_de_complemento')
                                                ->select(DB::raw('sum(case when dia_17 is null then 1 else 0 end) as dia_17, sum(case when dia_17 is not null then 1 else 0 end) as dia_17observacion, Tipo_de_complemento'))
                                                ->get();
                                        $dia18 = Ri::where('codigo_dane_sede', $sede)
                                                ->groupByRaw('Tipo_de_complemento')
                                                ->select(DB::raw('sum(case when dia_18 is null then 1 else 0 end) as dia_18, sum(case when dia_18 is not null then 1 else 0 end) as dia_18observacion, Tipo_de_complemento'))
                                                ->get();
                                        $dia19 = Ri::where('codigo_dane_sede', $sede)
                                                ->groupByRaw('Tipo_de_complemento')
                                                ->select(DB::raw('sum(case when dia_19 is null then 1 else 0 end) as dia_19, sum(case when dia_19 is not null then 1 else 0 end) as dia_19observacion, Tipo_de_complemento'))
                                                ->get();
                                        $dia20 = Ri::where('codigo_dane_sede', $sede)
                                                ->groupByRaw('Tipo_de_complemento')
                                                ->select(DB::raw('sum(case when dia_20 is null then 1 else 0 end) as dia_20, sum(case when dia_20 is not null then 1 else 0 end) as dia_20observacion, Tipo_de_complemento'))
                                                ->get();
                                        $dia21 = Ri::where('codigo_dane_sede', $sede)
                                                ->groupByRaw('Tipo_de_complemento')
                                                ->select(DB::raw('sum(case when dia_21 is null then 1 else 0 end) as dia_21, sum(case when dia_21 is not null then 1 else 0 end) as dia_21observacion, Tipo_de_complemento'))
                                                ->get();
                                        $dia22 = Ri::where('codigo_dane_sede', $sede)
                                                ->groupByRaw('Tipo_de_complemento')
                                                ->select(DB::raw('sum(case when dia_22 is null then 1 else 0 end) as dia_22, sum(case when dia_22 is not null then 1 else 0 end) as dia_22observacion, Tipo_de_complemento'))
                                                ->get();
                                        $dia23 = Ri::where('codigo_dane_sede', $sede)
                                                ->groupByRaw('Tipo_de_complemento')
                                                ->select(DB::raw('sum(case when dia_23 is null then 1 else 0 end) as dia_23, sum(case when dia_23 is not null then 1 else 0 end) as dia_23observacion, Tipo_de_complemento'))
                                                ->get();
                                        $dia24 = Ri::where('codigo_dane_sede', $sede)
                                                ->groupByRaw('Tipo_de_complemento')
                                                ->select(DB::raw('sum(case when dia_24 is null then 1 else 0 end) as dia_24, sum(case when dia_24 is not null then 1 else 0 end) as dia_24observacion, Tipo_de_complemento'))
                                                ->get();
                                        $dia25 = Ri::where('codigo_dane_sede', $sede)
                                                ->groupByRaw('Tipo_de_complemento')
                                                ->select(DB::raw('sum(case when dia_25 is null then 1 else 0 end) as dia_25, sum(case when dia_25 is not null then 1 else 0 end) as dia_25observacion, Tipo_de_complemento'))
                                                ->get();
                                        $dia26 = Ri::where('codigo_dane_sede', $sede)
                                                ->groupByRaw('Tipo_de_complemento')
                                                ->select(DB::raw('sum(case when dia_26 is null then 1 else 0 end) as dia_26, sum(case when dia_26 is not null then 1 else 0 end) as dia_26observacion, Tipo_de_complemento'))
                                                ->get();
                                        $dia27 = Ri::where('codigo_dane_sede', $sede)
                                                ->groupByRaw('Tipo_de_complemento')
                                                ->select(DB::raw('sum(case when dia_27 is null then 1 else 0 end) as dia_27, sum(case when dia_27 is not null then 1 else 0 end) as dia_27observacion, Tipo_de_complemento'))
                                                ->get();
                                        $dia28 = Ri::where('codigo_dane_sede', $sede)
                                                ->groupByRaw('Tipo_de_complemento')
                                                ->select(DB::raw('sum(case when dia_28 is null then 1 else 0 end) as dia_28, sum(case when dia_28 is not null then 1 else 0 end) as dia_28observacion, Tipo_de_complemento'))
                                                ->get();
                                        $dia29 = Ri::where('codigo_dane_sede', $sede)
                                                ->groupByRaw('Tipo_de_complemento')
                                                ->select(DB::raw('sum(case when dia_29 is null then 1 else 0 end) as dia_29, sum(case when dia_29 is not null then 1 else 0 end) as dia_29observacion, Tipo_de_complemento'))
                                                ->get();
                                        $dia30 = Ri::where('codigo_dane_sede', $sede)
                                                ->groupByRaw('Tipo_de_complemento')
                                                ->select(DB::raw('sum(case when dia_30 is null then 1 else 0 end) as dia_30, sum(case when dia_30 is not null then 1 else 0 end) as dia_30observacion, Tipo_de_complemento'))
                                                ->get();
                                        $dia31 = Ri::where('codigo_dane_sede', $sede)
                                                ->groupByRaw('Tipo_de_complemento')
                                                ->select(DB::raw('sum(case when dia_31 is null then 1 else 0 end) as dia_31, sum(case when dia_31 is not null then 1 else 0 end) as dia_31observacion, Tipo_de_complemento'))
                                                ->get();
                                        $data = [];
                                        $data['simat'] = $simat;
                                        $data['simat']['dia1'] = $dia1;
                                        $data['simat']['dia2'] = $dia2;
                                        $data['simat']['dia3'] = $dia3;
                                        $data['simat']['dia4'] = $dia4;
                                        $data['simat']['dia5'] = $dia5;
                                        $data['simat']['dia6'] = $dia6;
                                        $data['simat']['dia7'] = $dia7;
                                        $data['simat']['dia8'] = $dia8;
                                        $data['simat']['dia9'] = $dia9;
                                        $data['simat']['dia10'] = $dia10;
                                        $data['simat']['dia11'] = $dia11;
                                        $data['simat']['dia12'] = $dia12;
                                        $data['simat']['dia13'] = $dia13;
                                        $data['simat']['dia14'] = $dia14;
                                        $data['simat']['dia15'] = $dia15;
                                        $data['simat']['dia16'] = $dia16;
                                        $data['simat']['dia17'] = $dia17;
                                        $data['simat']['dia18'] = $dia18;
                                        $data['simat']['dia19'] = $dia19;
                                        $data['simat']['dia20'] = $dia20;
                                        $data['simat']['dia21'] = $dia21;
                                        $data['simat']['dia22'] = $dia22;
                                        $data['simat']['dia23'] = $dia23;
                                        $data['simat']['dia24'] = $dia24;
                                        $data['simat']['dia25'] = $dia25;
                                        $data['simat']['dia26'] = $dia26;
                                        $data['simat']['dia27'] = $dia27;
                                        $data['simat']['dia28'] = $dia28;
                                        $data['simat']['dia29'] = $dia29;
                                        $data['simat']['dia30'] = $dia30;
                                        $data['simat']['dia31'] = $dia31;
                                        $data['tipo'] = 'RPI';
                                        $data['tipoconsolidado'] = 'normal';
                                        $data['sede'] = $sedec;
                                        array_push($array, $data);
                                }
                                if($tipo == "RPS"){
                                        $dias = Rps::first();
                                        $dia1 = Rps::where('codigo_dane_sede', $sede)
                                                ->groupByRaw('Tipo_de_complemento')
                                                ->select(DB::raw('sum(case when dia_1 is null then 1 else 0 end) as dia_1, sum(case when dia_1 is not null then 1 else 0 end) as dia_1observacion, Tipo_de_complemento'))
                                                ->get();
                                        $dia2 = Rps::where('codigo_dane_sede', $sede)
                                                ->groupByRaw('Tipo_de_complemento')
                                                ->select(DB::raw('sum(case when dia_2 is null then 1 else 0 end) as dia_2, sum(case when dia_2 is not null then 1 else 0 end) as dia_2observacion, Tipo_de_complemento'))
                                                ->get();
                                        $dia3 = Rps::where('codigo_dane_sede', $sede)
                                                ->groupByRaw('Tipo_de_complemento')
                                                ->select(DB::raw('sum(case when dia_3 is null then 1 else 0 end) as dia_3, sum(case when dia_3 is not null then 1 else 0 end) as dia_3observacion, Tipo_de_complemento'))
                                                ->get();
                                        $dia4 = Rps::where('codigo_dane_sede', $sede)
                                                ->groupByRaw('Tipo_de_complemento')
                                                ->select(DB::raw('sum(case when dia_4 is null then 1 else 0 end) as dia_4, sum(case when dia_4 is not null then 1 else 0 end) as dia_4observacion, Tipo_de_complemento'))
                                                ->get();
                                        $dia5 = Rps::where('codigo_dane_sede', $sede)
                                                ->groupByRaw('Tipo_de_complemento')
                                                ->select(DB::raw('sum(case when dia_5 is null then 1 else 0 end) as dia_5, sum(case when dia_5 is not null then 1 else 0 end) as dia_5observacion, Tipo_de_complemento'))
                                                ->get();
                                        $dia6 = Rps::where('codigo_dane_sede', $sede)
                                                ->groupByRaw('Tipo_de_complemento')
                                                ->select(DB::raw('sum(case when dia_6 is null then 1 else 0 end) as dia_6, sum(case when dia_6 is not null then 1 else 0 end) as dia_6observacion, Tipo_de_complemento'))
                                                ->get();
                                        $dia7 = Rps::where('codigo_dane_sede', $sede)
                                                ->groupByRaw('Tipo_de_complemento')
                                                ->select(DB::raw('sum(case when dia_7 is null then 1 else 0 end) as dia_7, sum(case when dia_7 is not null then 1 else 0 end) as dia_7observacion, Tipo_de_complemento'))
                                                ->get();
                                        $dia8 = Rps::where('codigo_dane_sede', $sede)
                                                ->groupByRaw('Tipo_de_complemento')
                                                ->select(DB::raw('sum(case when dia_8 is null then 1 else 0 end) as dia_8, sum(case when dia_8 is not null then 1 else 0 end) as dia_8observacion, Tipo_de_complemento'))
                                                ->get();
                                        $dia9 = Rps::where('codigo_dane_sede', $sede)
                                                ->groupByRaw('Tipo_de_complemento')
                                                ->select(DB::raw('sum(case when dia_9 is null then 1 else 0 end) as dia_9, sum(case when dia_9 is not null then 1 else 0 end) as dia_9observacion, Tipo_de_complemento'))
                                                ->get();
                                        $dia10 = Rps::where('codigo_dane_sede', $sede)
                                                ->groupByRaw('Tipo_de_complemento')
                                                ->select(DB::raw('sum(case when dia_10 is null then 1 else 0 end) as dia_10, sum(case when dia_10 is not null then 1 else 0 end) as dia_10observacion, Tipo_de_complemento'))
                                                ->get();
                                        $dia11 = Rps::where('codigo_dane_sede', $sede)
                                                ->groupByRaw('Tipo_de_complemento')
                                                ->select(DB::raw('sum(case when dia_11 is null then 1 else 0 end) as dia_11, sum(case when dia_11 is not null then 1 else 0 end) as dia_11observacion, Tipo_de_complemento'))
                                                ->get();
                                        $dia12 = Rps::where('codigo_dane_sede', $sede)                       
                                                ->groupByRaw('Tipo_de_complemento')
                                                ->select(DB::raw('sum(case when dia_12 is null then 1 else 0 end) as dia_12, sum(case when dia_12 is not null then 1 else 0 end) as dia_12observacion, Tipo_de_complemento'))
                                                ->get();
                                        $dia13 = Rps::where('codigo_dane_sede', $sede)
                                                ->groupByRaw('Tipo_de_complemento')
                                                ->select(DB::raw('sum(case when dia_13 is null then 1 else 0 end) as dia_13, sum(case when dia_13 is not null then 1 else 0 end) as dia_13observacion, Tipo_de_complemento'))
                                                ->get();
                                        $dia14 = Rps::where('codigo_dane_sede', $sede)
                                                ->groupByRaw('Tipo_de_complemento')
                                                ->select(DB::raw('sum(case when dia_14 is null then 1 else 0 end) as dia_14, sum(case when dia_14 is not null then 1 else 0 end) as dia_14observacion, Tipo_de_complemento'))
                                                ->get();
                                        $dia15 = Rps::where('codigo_dane_sede', $sede)
                                                ->groupByRaw('Tipo_de_complemento')
                                                ->select(DB::raw('sum(case when dia_15 is null then 1 else 0 end) as dia_15, sum(case when dia_15 is not null then 1 else 0 end) as dia_15observacion, Tipo_de_complemento'))
                                                ->get();
                                        $dia16 = Rps::where('codigo_dane_sede', $sede)
                                                ->groupByRaw('Tipo_de_complemento')
                                                ->select(DB::raw('sum(case when dia_16 is null then 1 else 0 end) as dia_16, sum(case when dia_16 is not null then 1 else 0 end) as dia_16observacion, Tipo_de_complemento'))
                                                ->get();
                                        $dia17 = Rps::where('codigo_dane_sede', $sede)
                                                ->groupByRaw('Tipo_de_complemento')
                                                ->select(DB::raw('sum(case when dia_17 is null then 1 else 0 end) as dia_17, sum(case when dia_17 is not null then 1 else 0 end) as dia_17observacion, Tipo_de_complemento'))
                                                ->get();
                                        $dia18 = Rps::where('codigo_dane_sede', $sede)
                                                ->groupByRaw('Tipo_de_complemento')
                                                ->select(DB::raw('sum(case when dia_18 is null then 1 else 0 end) as dia_18, sum(case when dia_18 is not null then 1 else 0 end) as dia_18observacion, Tipo_de_complemento'))
                                                ->get();
                                        $dia19 = Rps::where('codigo_dane_sede', $sede)
                                                ->groupByRaw('Tipo_de_complemento')
                                                ->select(DB::raw('sum(case when dia_19 is null then 1 else 0 end) as dia_19, sum(case when dia_19 is not null then 1 else 0 end) as dia_19observacion, Tipo_de_complemento'))
                                                ->get();
                                        $dia20 = Rps::where('codigo_dane_sede', $sede)
                                                ->groupByRaw('Tipo_de_complemento')
                                                ->select(DB::raw('sum(case when dia_20 is null then 1 else 0 end) as dia_20, sum(case when dia_20 is not null then 1 else 0 end) as dia_20observacion, Tipo_de_complemento'))
                                                ->get();
                                        $dia21 = Rps::where('codigo_dane_sede', $sede)
                                                ->groupByRaw('Tipo_de_complemento')
                                                ->select(DB::raw('sum(case when dia_21 is null then 1 else 0 end) as dia_21, sum(case when dia_21 is not null then 1 else 0 end) as dia_21observacion, Tipo_de_complemento'))
                                                ->get();
                                        $dia22 = Rps::where('codigo_dane_sede', $sede)
                                                ->groupByRaw('Tipo_de_complemento')
                                                ->select(DB::raw('sum(case when dia_22 is null then 1 else 0 end) as dia_22, sum(case when dia_22 is not null then 1 else 0 end) as dia_22observacion, Tipo_de_complemento'))
                                                ->get();
                                        $dia23 = Rps::where('codigo_dane_sede', $sede)
                                                ->groupByRaw('Tipo_de_complemento')
                                                ->select(DB::raw('sum(case when dia_23 is null then 1 else 0 end) as dia_23, sum(case when dia_23 is not null then 1 else 0 end) as dia_23observacion, Tipo_de_complemento'))
                                                ->get();
                                        $dia24 = Rps::where('codigo_dane_sede', $sede)
                                                ->groupByRaw('Tipo_de_complemento')
                                                ->select(DB::raw('sum(case when dia_24 is null then 1 else 0 end) as dia_24, sum(case when dia_24 is not null then 1 else 0 end) as dia_24observacion, Tipo_de_complemento'))
                                                ->get();
                                        $dia25 = Rps::where('codigo_dane_sede', $sede)
                                                ->groupByRaw('Tipo_de_complemento')
                                                ->select(DB::raw('sum(case when dia_25 is null then 1 else 0 end) as dia_25, sum(case when dia_25 is not null then 1 else 0 end) as dia_25observacion, Tipo_de_complemento'))
                                                ->get();
                                        $dia26 = Rps::where('codigo_dane_sede', $sede)
                                                ->groupByRaw('Tipo_de_complemento')
                                                ->select(DB::raw('sum(case when dia_26 is null then 1 else 0 end) as dia_26, sum(case when dia_26 is not null then 1 else 0 end) as dia_26observacion, Tipo_de_complemento'))
                                                ->get();
                                        $dia27 = Rps::where('codigo_dane_sede', $sede)
                                                ->groupByRaw('Tipo_de_complemento')
                                                ->select(DB::raw('sum(case when dia_27 is null then 1 else 0 end) as dia_27, sum(case when dia_27 is not null then 1 else 0 end) as dia_27observacion, Tipo_de_complemento'))
                                                ->get();
                                        $dia28 = Rps::where('codigo_dane_sede', $sede)
                                                ->groupByRaw('Tipo_de_complemento')
                                                ->select(DB::raw('sum(case when dia_28 is null then 1 else 0 end) as dia_28, sum(case when dia_28 is not null then 1 else 0 end) as dia_28observacion, Tipo_de_complemento'))
                                                ->get();
                                        $dia29 = Rps::where('codigo_dane_sede', $sede)
                                                ->groupByRaw('Tipo_de_complemento')
                                                ->select(DB::raw('sum(case when dia_29 is null then 1 else 0 end) as dia_29, sum(case when dia_29 is not null then 1 else 0 end) as dia_29observacion, Tipo_de_complemento'))
                                                ->get();
                                        $dia30 = Rps::where('codigo_dane_sede', $sede)
                                                ->groupByRaw('Tipo_de_complemento')
                                                ->select(DB::raw('sum(case when dia_30 is null then 1 else 0 end) as dia_30, sum(case when dia_30 is not null then 1 else 0 end) as dia_30observacion, Tipo_de_complemento'))
                                                ->get();
                                        $dia31 = Rps::where('codigo_dane_sede', $sede)
                                                ->groupByRaw('Tipo_de_complemento')
                                                ->select(DB::raw('sum(case when dia_31 is null then 1 else 0 end) as dia_31, sum(case when dia_31 is not null then 1 else 0 end) as dia_31observacion, Tipo_de_complemento'))
                                                ->get();
                                        $data = [];
                                        $data['simat'] = $simat;
                                        $data['simat']['dia1'] = $dia1;
                                        $data['simat']['dia2'] = $dia2;
                                        $data['simat']['dia3'] = $dia3;
                                        $data['simat']['dia4'] = $dia4;
                                        $data['simat']['dia5'] = $dia5;
                                        $data['simat']['dia6'] = $dia6;
                                        $data['simat']['dia7'] = $dia7;
                                        $data['simat']['dia8'] = $dia8;
                                        $data['simat']['dia9'] = $dia9;
                                        $data['simat']['dia10'] = $dia10;
                                        $data['simat']['dia11'] = $dia11;
                                        $data['simat']['dia12'] = $dia12;
                                        $data['simat']['dia13'] = $dia13;
                                        $data['simat']['dia14'] = $dia14;
                                        $data['simat']['dia15'] = $dia15;
                                        $data['simat']['dia16'] = $dia16;
                                        $data['simat']['dia17'] = $dia17;
                                        $data['simat']['dia18'] = $dia18;
                                        $data['simat']['dia19'] = $dia19;
                                        $data['simat']['dia20'] = $dia20;
                                        $data['simat']['dia21'] = $dia21;
                                        $data['simat']['dia22'] = $dia22;
                                        $data['simat']['dia23'] = $dia23;
                                        $data['simat']['dia24'] = $dia24;
                                        $data['simat']['dia25'] = $dia25;
                                        $data['simat']['dia26'] = $dia26;
                                        $data['simat']['dia27'] = $dia27;
                                        $data['simat']['dia28'] = $dia28;
                                        $data['simat']['dia29'] = $dia29;
                                        $data['simat']['dia30'] = $dia30;
                                        $data['simat']['dia31'] = $dia31;
                                        $data['tipo'] = 'RPS';
                                        $data['tipoconsolidado'] = 'normal';
                                        $data['sede'] = $sedec;
                                        array_push($array, $data);
                                }
                                
                                
                        }else if($tipoconsolidado == '2')
                        {
                                if($tipo == "RI"){
                                        $dias = Ri::first();
                                        $dia1 = Ri::where('codigo_dane_sede', $sede)
                                                ->groupByRaw('Tipo_de_complemento')
                                                ->select(DB::raw('sum(case when dia_1 is null then 1 else 0 end) as dia_1, sum(case when dia_1 is not null then 1 else 0 end) as dia_1observacion, Tipo_de_complemento'))
                                                ->get();
                                        $dia2 = Ri::where('codigo_dane_sede', $sede)
                                                ->groupByRaw('Tipo_de_complemento')
                                                ->select(DB::raw('sum(case when dia_2 is null then 1 else 0 end) as dia_2, sum(case when dia_2 is not null then 1 else 0 end) as dia_2observacion, Tipo_de_complemento'))
                                                ->get();
                                        $dia3 = Ri::where('codigo_dane_sede', $sede)
                                                ->groupByRaw('Tipo_de_complemento')
                                                ->select(DB::raw('sum(case when dia_3 is null then 1 else 0 end) as dia_3, sum(case when dia_3 is not null then 1 else 0 end) as dia_3observacion, Tipo_de_complemento'))
                                                ->get();
                                        $dia4 = Ri::where('codigo_dane_sede', $sede)
                                                ->groupByRaw('Tipo_de_complemento')
                                                ->select(DB::raw('sum(case when dia_4 is null then 1 else 0 end) as dia_4, sum(case when dia_4 is not null then 1 else 0 end) as dia_4observacion, Tipo_de_complemento'))
                                                ->get();
                                        $dia5 = Ri::where('codigo_dane_sede', $sede)
                                                ->groupByRaw('Tipo_de_complemento')
                                                ->select(DB::raw('sum(case when dia_5 is null then 1 else 0 end) as dia_5, sum(case when dia_5 is not null then 1 else 0 end) as dia_5observacion, Tipo_de_complemento'))
                                                ->get();
                                        $dia6 = Ri::where('codigo_dane_sede', $sede)
                                                ->groupByRaw('Tipo_de_complemento')
                                                ->select(DB::raw('sum(case when dia_6 is null then 1 else 0 end) as dia_6, sum(case when dia_6 is not null then 1 else 0 end) as dia_6observacion, Tipo_de_complemento'))
                                                ->get();
                                        $dia7 = Ri::where('codigo_dane_sede', $sede)
                                                ->groupByRaw('Tipo_de_complemento')
                                                ->select(DB::raw('sum(case when dia_7 is null then 1 else 0 end) as dia_7, sum(case when dia_7 is not null then 1 else 0 end) as dia_7observacion, Tipo_de_complemento'))
                                                ->get();
                                        $dia8 = Ri::where('codigo_dane_sede', $sede)
                                                ->groupByRaw('Tipo_de_complemento')
                                                ->select(DB::raw('sum(case when dia_8 is null then 1 else 0 end) as dia_8, sum(case when dia_8 is not null then 1 else 0 end) as dia_8observacion, Tipo_de_complemento'))
                                                ->get();
                                        $dia9 = Ri::where('codigo_dane_sede', $sede)
                                                ->groupByRaw('Tipo_de_complemento')
                                                ->select(DB::raw('sum(case when dia_9 is null then 1 else 0 end) as dia_9, sum(case when dia_9 is not null then 1 else 0 end) as dia_9observacion, Tipo_de_complemento'))
                                                ->get();
                                        $dia10 = Ri::where('codigo_dane_sede', $sede)
                                                ->groupByRaw('Tipo_de_complemento')
                                                ->select(DB::raw('sum(case when dia_10 is null then 1 else 0 end) as dia_10, sum(case when dia_10 is not null then 1 else 0 end) as dia_10observacion, Tipo_de_complemento'))
                                                ->get();
                                        $dia11 = Ri::where('codigo_dane_sede', $sede)
                                                ->groupByRaw('Tipo_de_complemento')
                                                ->select(DB::raw('sum(case when dia_11 is null then 1 else 0 end) as dia_11, sum(case when dia_11 is not null then 1 else 0 end) as dia_11observacion, Tipo_de_complemento'))
                                                ->get();
                                        $dia12 = Ri::where('codigo_dane_sede', $sede)                       
                                                ->groupByRaw('Tipo_de_complemento')
                                                ->select(DB::raw('sum(case when dia_12 is null then 1 else 0 end) as dia_12, sum(case when dia_12 is not null then 1 else 0 end) as dia_12observacion, Tipo_de_complemento'))
                                                ->get();
                                        $dia13 = Ri::where('codigo_dane_sede', $sede)
                                                ->groupByRaw('Tipo_de_complemento')
                                                ->select(DB::raw('sum(case when dia_13 is null then 1 else 0 end) as dia_13, sum(case when dia_13 is not null then 1 else 0 end) as dia_13observacion, Tipo_de_complemento'))
                                                ->get();
                                        $dia14 = Ri::where('codigo_dane_sede', $sede)
                                                ->groupByRaw('Tipo_de_complemento')
                                                ->select(DB::raw('sum(case when dia_14 is null then 1 else 0 end) as dia_14, sum(case when dia_14 is not null then 1 else 0 end) as dia_14observacion, Tipo_de_complemento'))
                                                ->get();
                                        $dia15 = Ri::where('codigo_dane_sede', $sede)
                                                ->groupByRaw('Tipo_de_complemento')
                                                ->select(DB::raw('sum(case when dia_15 is null then 1 else 0 end) as dia_15, sum(case when dia_15 is not null then 1 else 0 end) as dia_15observacion, Tipo_de_complemento'))
                                                ->get();
                                        $dia16 = Ri::where('codigo_dane_sede', $sede)
                                                ->groupByRaw('Tipo_de_complemento')
                                                ->select(DB::raw('sum(case when dia_16 is null then 1 else 0 end) as dia_16, sum(case when dia_16 is not null then 1 else 0 end) as dia_16observacion, Tipo_de_complemento'))
                                                ->get();
                                        $dia17 = Ri::where('codigo_dane_sede', $sede)
                                                ->groupByRaw('Tipo_de_complemento')
                                                ->select(DB::raw('sum(case when dia_17 is null then 1 else 0 end) as dia_17, sum(case when dia_17 is not null then 1 else 0 end) as dia_17observacion, Tipo_de_complemento'))
                                                ->get();
                                        $dia18 = Ri::where('codigo_dane_sede', $sede)
                                                ->groupByRaw('Tipo_de_complemento')
                                                ->select(DB::raw('sum(case when dia_18 is null then 1 else 0 end) as dia_18, sum(case when dia_18 is not null then 1 else 0 end) as dia_18observacion, Tipo_de_complemento'))
                                                ->get();
                                        $dia19 = Ri::where('codigo_dane_sede', $sede)
                                                ->groupByRaw('Tipo_de_complemento')
                                                ->select(DB::raw('sum(case when dia_19 is null then 1 else 0 end) as dia_19, sum(case when dia_19 is not null then 1 else 0 end) as dia_19observacion, Tipo_de_complemento'))
                                                ->get();
                                        $dia20 = Ri::where('codigo_dane_sede', $sede)
                                                ->groupByRaw('Tipo_de_complemento')
                                                ->select(DB::raw('sum(case when dia_20 is null then 1 else 0 end) as dia_20, sum(case when dia_20 is not null then 1 else 0 end) as dia_20observacion, Tipo_de_complemento'))
                                                ->get();
                                        $dia21 = Ri::where('codigo_dane_sede', $sede)
                                                ->groupByRaw('Tipo_de_complemento')
                                                ->select(DB::raw('sum(case when dia_21 is null then 1 else 0 end) as dia_21, sum(case when dia_21 is not null then 1 else 0 end) as dia_21observacion, Tipo_de_complemento'))
                                                ->get();
                                        $dia22 = Ri::where('codigo_dane_sede', $sede)
                                                ->groupByRaw('Tipo_de_complemento')
                                                ->select(DB::raw('sum(case when dia_22 is null then 1 else 0 end) as dia_22, sum(case when dia_22 is not null then 1 else 0 end) as dia_22observacion, Tipo_de_complemento'))
                                                ->get();
                                        $dia23 = Ri::where('codigo_dane_sede', $sede)
                                                ->groupByRaw('Tipo_de_complemento')
                                                ->select(DB::raw('sum(case when dia_23 is null then 1 else 0 end) as dia_23, sum(case when dia_23 is not null then 1 else 0 end) as dia_23observacion, Tipo_de_complemento'))
                                                ->get();
                                        $dia24 = Ri::where('codigo_dane_sede', $sede)
                                                ->groupByRaw('Tipo_de_complemento')
                                                ->select(DB::raw('sum(case when dia_24 is null then 1 else 0 end) as dia_24, sum(case when dia_24 is not null then 1 else 0 end) as dia_24observacion, Tipo_de_complemento'))
                                                ->get();
                                        $dia25 = Ri::where('codigo_dane_sede', $sede)
                                                ->groupByRaw('Tipo_de_complemento')
                                                ->select(DB::raw('sum(case when dia_25 is null then 1 else 0 end) as dia_25, sum(case when dia_25 is not null then 1 else 0 end) as dia_25observacion, Tipo_de_complemento'))
                                                ->get();
                                        $dia26 = Ri::where('codigo_dane_sede', $sede)
                                                ->groupByRaw('Tipo_de_complemento')
                                                ->select(DB::raw('sum(case when dia_26 is null then 1 else 0 end) as dia_26, sum(case when dia_26 is not null then 1 else 0 end) as dia_26observacion, Tipo_de_complemento'))
                                                ->get();
                                        $dia27 = Ri::where('codigo_dane_sede', $sede)
                                                ->groupByRaw('Tipo_de_complemento')
                                                ->select(DB::raw('sum(case when dia_27 is null then 1 else 0 end) as dia_27, sum(case when dia_27 is not null then 1 else 0 end) as dia_27observacion, Tipo_de_complemento'))
                                                ->get();
                                        $dia28 = Ri::where('codigo_dane_sede', $sede)
                                                ->groupByRaw('Tipo_de_complemento')
                                                ->select(DB::raw('sum(case when dia_28 is null then 1 else 0 end) as dia_28, sum(case when dia_28 is not null then 1 else 0 end) as dia_28observacion, Tipo_de_complemento'))
                                                ->get();
                                        $dia29 = Ri::where('codigo_dane_sede', $sede)
                                                ->groupByRaw('Tipo_de_complemento')
                                                ->select(DB::raw('sum(case when dia_29 is null then 1 else 0 end) as dia_29, sum(case when dia_29 is not null then 1 else 0 end) as dia_29observacion, Tipo_de_complemento'))
                                                ->get();
                                        $dia30 = Ri::where('codigo_dane_sede', $sede)
                                                ->groupByRaw('Tipo_de_complemento')
                                                ->select(DB::raw('sum(case when dia_30 is null then 1 else 0 end) as dia_30, sum(case when dia_30 is not null then 1 else 0 end) as dia_30observacion, Tipo_de_complemento'))
                                                ->get();
                                        $dia31 = Ri::where('codigo_dane_sede', $sede)
                                                ->groupByRaw('Tipo_de_complemento')
                                                ->select(DB::raw('sum(case when dia_31 is null then 1 else 0 end) as dia_31, sum(case when dia_31 is not null then 1 else 0 end) as dia_31observacion, Tipo_de_complemento'))
                                                ->get();
                                        $data = [];
                                        $data['simat'] = $simat;
                                        $data['simat']['dia1'] = $dia1;
                                        $data['simat']['dia2'] = $dia2;
                                        $data['simat']['dia3'] = $dia3;
                                        $data['simat']['dia4'] = $dia4;
                                        $data['simat']['dia5'] = $dia5;
                                        $data['simat']['dia6'] = $dia6;
                                        $data['simat']['dia7'] = $dia7;
                                        $data['simat']['dia8'] = $dia8;
                                        $data['simat']['dia9'] = $dia9;
                                        $data['simat']['dia10'] = $dia10;
                                        $data['simat']['dia11'] = $dia11;
                                        $data['simat']['dia12'] = $dia12;
                                        $data['simat']['dia13'] = $dia13;
                                        $data['simat']['dia14'] = $dia14;
                                        $data['simat']['dia15'] = $dia15;
                                        $data['simat']['dia16'] = $dia16;
                                        $data['simat']['dia17'] = $dia17;
                                        $data['simat']['dia18'] = $dia18;
                                        $data['simat']['dia19'] = $dia19;
                                        $data['simat']['dia20'] = $dia20;
                                        $data['simat']['dia21'] = $dia21;
                                        $data['simat']['dia22'] = $dia22;
                                        $data['simat']['dia23'] = $dia23;
                                        $data['simat']['dia24'] = $dia24;
                                        $data['simat']['dia25'] = $dia25;
                                        $data['simat']['dia26'] = $dia26;
                                        $data['simat']['dia27'] = $dia27;
                                        $data['simat']['dia28'] = $dia28;
                                        $data['simat']['dia29'] = $dia29;
                                        $data['simat']['dia30'] = $dia30;
                                        $data['simat']['dia31'] = $dia31;
                                        $data['tipo'] = 'RPI';
                                        $data['tipoconsolidado'] = 'especial';
                                        $data['sede'] = $sedec;
                                        array_push($array, $data);
                                }
                                if($tipo == "RPS"){
                                        $dias = Rps::first();
                                        $dia1 = Rps::where('codigo_dane_sede', $sede)
                                                ->groupByRaw('Tipo_de_complemento')
                                                ->select(DB::raw('sum(case when dia_1 is null then 1 else 0 end) as dia_1, sum(case when dia_1 is not null then 1 else 0 end) as dia_1observacion, Tipo_de_complemento'))
                                                ->get();
                                        $dia2 = Rps::where('codigo_dane_sede', $sede)
                                                ->groupByRaw('Tipo_de_complemento')
                                                ->select(DB::raw('sum(case when dia_2 is null then 1 else 0 end) as dia_2, sum(case when dia_2 is not null then 1 else 0 end) as dia_2observacion, Tipo_de_complemento'))
                                                ->get();
                                        $dia3 = Rps::where('codigo_dane_sede', $sede)
                                                ->groupByRaw('Tipo_de_complemento')
                                                ->select(DB::raw('sum(case when dia_3 is null then 1 else 0 end) as dia_3, sum(case when dia_3 is not null then 1 else 0 end) as dia_3observacion, Tipo_de_complemento'))
                                                ->get();
                                        $dia4 = Rps::where('codigo_dane_sede', $sede)
                                                ->groupByRaw('Tipo_de_complemento')
                                                ->select(DB::raw('sum(case when dia_4 is null then 1 else 0 end) as dia_4, sum(case when dia_4 is not null then 1 else 0 end) as dia_4observacion, Tipo_de_complemento'))
                                                ->get();
                                        $dia5 = Rps::where('codigo_dane_sede', $sede)
                                                ->groupByRaw('Tipo_de_complemento')
                                                ->select(DB::raw('sum(case when dia_5 is null then 1 else 0 end) as dia_5, sum(case when dia_5 is not null then 1 else 0 end) as dia_5observacion, Tipo_de_complemento'))
                                                ->get();
                                        $dia6 = Rps::where('codigo_dane_sede', $sede)
                                                ->groupByRaw('Tipo_de_complemento')
                                                ->select(DB::raw('sum(case when dia_6 is null then 1 else 0 end) as dia_6, sum(case when dia_6 is not null then 1 else 0 end) as dia_6observacion, Tipo_de_complemento'))
                                                ->get();
                                        $dia7 = Rps::where('codigo_dane_sede', $sede)
                                                ->groupByRaw('Tipo_de_complemento')
                                                ->select(DB::raw('sum(case when dia_7 is null then 1 else 0 end) as dia_7, sum(case when dia_7 is not null then 1 else 0 end) as dia_7observacion, Tipo_de_complemento'))
                                                ->get();
                                        $dia8 = Rps::where('codigo_dane_sede', $sede)
                                                ->groupByRaw('Tipo_de_complemento')
                                                ->select(DB::raw('sum(case when dia_8 is null then 1 else 0 end) as dia_8, sum(case when dia_8 is not null then 1 else 0 end) as dia_8observacion, Tipo_de_complemento'))
                                                ->get();
                                        $dia9 = Rps::where('codigo_dane_sede', $sede)
                                                ->groupByRaw('Tipo_de_complemento')
                                                ->select(DB::raw('sum(case when dia_9 is null then 1 else 0 end) as dia_9, sum(case when dia_9 is not null then 1 else 0 end) as dia_9observacion, Tipo_de_complemento'))
                                                ->get();
                                        $dia10 = Rps::where('codigo_dane_sede', $sede)
                                                ->groupByRaw('Tipo_de_complemento')
                                                ->select(DB::raw('sum(case when dia_10 is null then 1 else 0 end) as dia_10, sum(case when dia_10 is not null then 1 else 0 end) as dia_10observacion, Tipo_de_complemento'))
                                                ->get();
                                        $dia11 = Rps::where('codigo_dane_sede', $sede)
                                                ->groupByRaw('Tipo_de_complemento')
                                                ->select(DB::raw('sum(case when dia_11 is null then 1 else 0 end) as dia_11, sum(case when dia_11 is not null then 1 else 0 end) as dia_11observacion, Tipo_de_complemento'))
                                                ->get();
                                        $dia12 = Rps::where('codigo_dane_sede', $sede)                       
                                                ->groupByRaw('Tipo_de_complemento')
                                                ->select(DB::raw('sum(case when dia_12 is null then 1 else 0 end) as dia_12, sum(case when dia_12 is not null then 1 else 0 end) as dia_12observacion, Tipo_de_complemento'))
                                                ->get();
                                        $dia13 = Rps::where('codigo_dane_sede', $sede)
                                                ->groupByRaw('Tipo_de_complemento')
                                                ->select(DB::raw('sum(case when dia_13 is null then 1 else 0 end) as dia_13, sum(case when dia_13 is not null then 1 else 0 end) as dia_13observacion, Tipo_de_complemento'))
                                                ->get();
                                        $dia14 = Rps::where('codigo_dane_sede', $sede)
                                                ->groupByRaw('Tipo_de_complemento')
                                                ->select(DB::raw('sum(case when dia_14 is null then 1 else 0 end) as dia_14, sum(case when dia_14 is not null then 1 else 0 end) as dia_14observacion, Tipo_de_complemento'))
                                                ->get();
                                        $dia15 = Rps::where('codigo_dane_sede', $sede)
                                                ->groupByRaw('Tipo_de_complemento')
                                                ->select(DB::raw('sum(case when dia_15 is null then 1 else 0 end) as dia_15, sum(case when dia_15 is not null then 1 else 0 end) as dia_15observacion, Tipo_de_complemento'))
                                                ->get();
                                        $dia16 = Rps::where('codigo_dane_sede', $sede)
                                                ->groupByRaw('Tipo_de_complemento')
                                                ->select(DB::raw('sum(case when dia_16 is null then 1 else 0 end) as dia_16, sum(case when dia_16 is not null then 1 else 0 end) as dia_16observacion, Tipo_de_complemento'))
                                                ->get();
                                        $dia17 = Rps::where('codigo_dane_sede', $sede)
                                                ->groupByRaw('Tipo_de_complemento')
                                                ->select(DB::raw('sum(case when dia_17 is null then 1 else 0 end) as dia_17, sum(case when dia_17 is not null then 1 else 0 end) as dia_17observacion, Tipo_de_complemento'))
                                                ->get();
                                        $dia18 = Rps::where('codigo_dane_sede', $sede)
                                                ->groupByRaw('Tipo_de_complemento')
                                                ->select(DB::raw('sum(case when dia_18 is null then 1 else 0 end) as dia_18, sum(case when dia_18 is not null then 1 else 0 end) as dia_18observacion, Tipo_de_complemento'))
                                                ->get();
                                        $dia19 = Rps::where('codigo_dane_sede', $sede)
                                                ->groupByRaw('Tipo_de_complemento')
                                                ->select(DB::raw('sum(case when dia_19 is null then 1 else 0 end) as dia_19, sum(case when dia_19 is not null then 1 else 0 end) as dia_19observacion, Tipo_de_complemento'))
                                                ->get();
                                        $dia20 = Rps::where('codigo_dane_sede', $sede)
                                                ->groupByRaw('Tipo_de_complemento')
                                                ->select(DB::raw('sum(case when dia_20 is null then 1 else 0 end) as dia_20, sum(case when dia_20 is not null then 1 else 0 end) as dia_20observacion, Tipo_de_complemento'))
                                                ->get();
                                        $dia21 = Rps::where('codigo_dane_sede', $sede)
                                                ->groupByRaw('Tipo_de_complemento')
                                                ->select(DB::raw('sum(case when dia_21 is null then 1 else 0 end) as dia_21, sum(case when dia_21 is not null then 1 else 0 end) as dia_21observacion, Tipo_de_complemento'))
                                                ->get();
                                        $dia22 = Rps::where('codigo_dane_sede', $sede)
                                                ->groupByRaw('Tipo_de_complemento')
                                                ->select(DB::raw('sum(case when dia_22 is null then 1 else 0 end) as dia_22, sum(case when dia_22 is not null then 1 else 0 end) as dia_22observacion, Tipo_de_complemento'))
                                                ->get();
                                        $dia23 = Rps::where('codigo_dane_sede', $sede)
                                                ->groupByRaw('Tipo_de_complemento')
                                                ->select(DB::raw('sum(case when dia_23 is null then 1 else 0 end) as dia_23, sum(case when dia_23 is not null then 1 else 0 end) as dia_23observacion, Tipo_de_complemento'))
                                                ->get();
                                        $dia24 = Rps::where('codigo_dane_sede', $sede)
                                                ->groupByRaw('Tipo_de_complemento')
                                                ->select(DB::raw('sum(case when dia_24 is null then 1 else 0 end) as dia_24, sum(case when dia_24 is not null then 1 else 0 end) as dia_24observacion, Tipo_de_complemento'))
                                                ->get();
                                        $dia25 = Rps::where('codigo_dane_sede', $sede)
                                                ->groupByRaw('Tipo_de_complemento')
                                                ->select(DB::raw('sum(case when dia_25 is null then 1 else 0 end) as dia_25, sum(case when dia_25 is not null then 1 else 0 end) as dia_25observacion, Tipo_de_complemento'))
                                                ->get();
                                        $dia26 = Rps::where('codigo_dane_sede', $sede)
                                                ->groupByRaw('Tipo_de_complemento')
                                                ->select(DB::raw('sum(case when dia_26 is null then 1 else 0 end) as dia_26, sum(case when dia_26 is not null then 1 else 0 end) as dia_26observacion, Tipo_de_complemento'))
                                                ->get();
                                        $dia27 = Rps::where('codigo_dane_sede', $sede)
                                                ->groupByRaw('Tipo_de_complemento')
                                                ->select(DB::raw('sum(case when dia_27 is null then 1 else 0 end) as dia_27, sum(case when dia_27 is not null then 1 else 0 end) as dia_27observacion, Tipo_de_complemento'))
                                                ->get();
                                        $dia28 = Rps::where('codigo_dane_sede', $sede)
                                                ->groupByRaw('Tipo_de_complemento')
                                                ->select(DB::raw('sum(case when dia_28 is null then 1 else 0 end) as dia_28, sum(case when dia_28 is not null then 1 else 0 end) as dia_28observacion, Tipo_de_complemento'))
                                                ->get();
                                        $dia29 = Rps::where('codigo_dane_sede', $sede)
                                                ->groupByRaw('Tipo_de_complemento')
                                                ->select(DB::raw('sum(case when dia_29 is null then 1 else 0 end) as dia_29, sum(case when dia_29 is not null then 1 else 0 end) as dia_29observacion, Tipo_de_complemento'))
                                                ->get();
                                        $dia30 = Rps::where('codigo_dane_sede', $sede)
                                                ->groupByRaw('Tipo_de_complemento')
                                                ->select(DB::raw('sum(case when dia_30 is null then 1 else 0 end) as dia_30, sum(case when dia_30 is not null then 1 else 0 end) as dia_30observacion, Tipo_de_complemento'))
                                                ->get();
                                        $dia31 = Rps::where('codigo_dane_sede', $sede)
                                                ->groupByRaw('Tipo_de_complemento')
                                                ->select(DB::raw('sum(case when dia_31 is null then 1 else 0 end) as dia_31, sum(case when dia_31 is not null then 1 else 0 end) as dia_31observacion, Tipo_de_complemento'))
                                                ->get();
                                        $data = [];
                                        $data['simat'] = $simat;
                                        $data['simat']['dia1'] = $dia1;
                                        $data['simat']['dia2'] = $dia2;
                                        $data['simat']['dia3'] = $dia3;
                                        $data['simat']['dia4'] = $dia4;
                                        $data['simat']['dia5'] = $dia5;
                                        $data['simat']['dia6'] = $dia6;
                                        $data['simat']['dia7'] = $dia7;
                                        $data['simat']['dia8'] = $dia8;
                                        $data['simat']['dia9'] = $dia9;
                                        $data['simat']['dia10'] = $dia10;
                                        $data['simat']['dia11'] = $dia11;
                                        $data['simat']['dia12'] = $dia12;
                                        $data['simat']['dia13'] = $dia13;
                                        $data['simat']['dia14'] = $dia14;
                                        $data['simat']['dia15'] = $dia15;
                                        $data['simat']['dia16'] = $dia16;
                                        $data['simat']['dia17'] = $dia17;
                                        $data['simat']['dia18'] = $dia18;
                                        $data['simat']['dia19'] = $dia19;
                                        $data['simat']['dia20'] = $dia20;
                                        $data['simat']['dia21'] = $dia21;
                                        $data['simat']['dia22'] = $dia22;
                                        $data['simat']['dia23'] = $dia23;
                                        $data['simat']['dia24'] = $dia24;
                                        $data['simat']['dia25'] = $dia25;
                                        $data['simat']['dia26'] = $dia26;
                                        $data['simat']['dia27'] = $dia27;
                                        $data['simat']['dia28'] = $dia28;
                                        $data['simat']['dia29'] = $dia29;
                                        $data['simat']['dia30'] = $dia30;
                                        $data['simat']['dia31'] = $dia31;
                                        $data['tipo'] = 'RPS';
                                        $data['tipoconsolidado'] = 'especial';
                                        $data['sede'] = $sedec;
                                        array_push($array, $data);
                                }      
                        }
                
                }

                //return response::json($array);
                
                $breadcrumbs = [['link' => "/", 'name' => "Inicio"], ['link' => "javascript:void(0)", 'name' => "Consolidado"], ['name' => "Cruces"]];
                return view('/content/cruces/consolidado', ['breadcrumbs' => $breadcrumbs, 'data' => $array, 'dias' => $dias]);
        
        }
        public function tablausuarios()
        {
                $rps = User::where('cargo','asesor')
                        ->get(); 
                
                return \Response::json($rps);
        }
        public function consolidadoadmin(Request $request)
        {
               
                                //return json_encode($sedeadmin);
                        //return json_encode($simat);
                        $tipoconsolidado = $request->tipoconsolidado;
                        //dd($tipoconsolidado);
                        if($tipoconsolidado == '1')
                        {
                                $sedeadmin = DB::table('consolidados')
                                ->get();                        
                                $tipoconsolidado ='normal';                                
                        }else if($tipoconsolidado == '2')
                        {
                                $sedeadmin = DB::table('consolidados_especiales')
                                ->get();                          
                                $tipoconsolidado ='especial';
                        }
                $breadcrumbs = [['link' => "/", 'name' => "Inicio"], ['link' => "javascript:void(0)", 'name' => "Consolidado"], ['name' => "Cruces"]];
                return view('/content/cruces/consolidadoadmin', ['breadcrumbs' => $breadcrumbs, 'data' => $sedeadmin,'tipoconsolidado' => $tipoconsolidado ]);
        
        }
        public function updateConsolidado(Request $request)
        {
                $id = Auth::user()->id;
                
                $dia = $request->dia;

                $mescorte = DB::table('ajustes')->first();
                $mes = date('m', strtotime($mescorte->incio));
                $mes = intval($mes);
                
                if(Consolidado::where('codigo_dane_sede',$request->sede_id)->where('jornada_tipo_racion', $request->modalidad)->where('corte',$mes)->first())
                {
                        if(isset($request->diasAtendidos)){
                                Consolidado::where('codigo_dane_sede',$request->sede_id)->where('jornada_tipo_racion', $request->modalidad)->where('corte',$mes)->first()
                                ->update([
                                        'user_id' => $id,
                                        'codigo_dane_sede' => $request->sede_id,
                                        'jornada_tipo_racion' => $request->modalidad,
                                         $dia => $request->value,
                                        'N_dias_atendidos' => $request->diasAtendidos
                                ]);
                                     
                        }else if(isset($request->totalRaciones))
                        {
                                Consolidado::where('codigo_dane_sede',$request->sede_id)->where('jornada_tipo_racion', $request->modalidad)->where('corte',$mes)->first()
                                ->update([
                                        'user_id' => $id,
                                        'codigo_dane_sede' => $request->sede_id,
                                        'jornada_tipo_racion' => $request->modalidad,
                                         $dia => $request->value,                                        
                                        'total_raciones' => $request->totalRaciones
                                ]);     
                        }else if (isset($request->novedades))
                        {
                                Consolidado::where('codigo_dane_sede',$request->sede_id)->where('jornada_tipo_racion', $request->modalidad)->where('corte',$mes)->first()
                                ->update([
                                        'user_id' => $id,
                                        'codigo_dane_sede' => $request->sede_id,
                                        'jornada_tipo_racion' => $request->modalidad,
                                         $dia => $request->value,                                        
                                        'novedades' => $request->novedades
                                ]);    
                        }else if (isset($request->devoluciones))
                        {
                                Consolidado::where('codigo_dane_sede',$request->sede_id)->where('jornada_tipo_racion', $request->modalidad)->where('corte',$mes)->first()
                                ->update([
                                        'user_id' => $id,
                                        'codigo_dane_sede' => $request->sede_id,
                                        'jornada_tipo_racion' => $request->modalidad,
                                         $dia => $request->value,                                        
                                        'devoluciones' =>$request->devoluciones
                                ]);     
                        }else{
                                Consolidado::where('codigo_dane_sede',$request->sede_id)->where('jornada_tipo_racion', $request->modalidad)->where('corte',$mes)->first()
                                ->update([
                                        'user_id' => $id,
                                        'codigo_dane_sede' => $request->sede_id,
                                        'jornada_tipo_racion' => $request->modalidad,
                                        $dia => $request->value
                                ]);
                        }
                        
                        
                        return response()->json(['success' => true]);
                        
                }else{
                            
                        if(isset($dia) )
                        {
                                Consolidado::insert([
                                        'user_id' => $id,
                                        'codigo_dane_sede' => $request->sede_id,
                                        'jornada_tipo_racion' => $request->modalidad,
                                         $dia => $request->value,
                                         'N_dias_atendidos' => $request->diasAtendidos,
                                        'total_raciones' => $request->totalRaciones,
                                        'novedades' => $request->novedades,
                                        'devoluciones' =>$request->devoluciones,
                                        'corte' => $mes
                                    ]); 
                        }else{
                                Consolidado::insert([
                                        'user_id' => $id,
                                        'codigo_dane_sede' => $request->sede_id,
                                        'jornada_tipo_racion' => $request->modalidad,                                        
                                        'N_dias_atendidos' => $request->diasAtendidos,
                                        'total_raciones' => $request->totalRaciones,
                                        'novedades' => $request->novedades,
                                        'devoluciones' =>$request->devoluciones,
                                        'corte' => $mes
                                    ]); 
                        }
                        

                        return response()->json(['success' => true]);
                }
                
        }
        public function updateConsolidado1(Request $request)
        {       
                $mescorte = DB::table('ajustes')->first();
                $mes = date('m', strtotime($mescorte->incio));
                $mes = intval($mes);
                //dd($request);
                $id = Auth::user()->id; 
                
                if(Consolidado::where('codigo_dane_sede',$request->sede_id)->where('jornada_tipo_racion', $request->modalidad)->where('corte',$mes)->first())
                {
                        Consolidado::where('codigo_dane_sede',$request->sede_id)->where('jornada_tipo_racion', $request->modalidad)->where('corte',$mes)->first()
                        ->update([
                                'user_id' => $id,
                                'codigo_dane_sede' => $request->sede_id,
                                'jornada_tipo_racion' => $request->modalidad,
                                'dia1' => $request->dia1 == 'NaN' ? 0 : $request->dia1,
                                'dia2' => $request->dia2 == 'NaN' ? 0 : $request->dia2,
                                'dia3' => $request->dia3 == 'NaN' ? 0 : $request->dia3,
                                'dia4' => $request->dia4 == 'NaN' ? 0 : $request->dia4,
                                'dia5' => $request->dia5 == 'NaN' ? 0 : $request->dia5,
                                'dia6' => $request->dia6 == 'NaN' ? 0 : $request->dia6,
                                'dia7' => $request->dia7 == 'NaN' ? 0 : $request->dia7,
                                'dia8' => $request->dia8 == 'NaN' ? 0 : $request->dia8,
                                'dia9' => $request->dia9 == 'NaN' ? 0 : $request->dia9,
                                'dia10' => $request->dia10 == 'NaN' ? 0 : $request->dia10,
                                'dia11' => $request->dia11 == 'NaN' ? 0 : $request->dia11,
                                'dia12' => $request->dia12 == 'NaN' ? 0 : $request->dia12,
                                'dia13' => $request->dia13 == 'NaN' ? 0 : $request->dia13,
                                'dia14' => $request->dia14 == 'NaN' ? 0 : $request->dia14,
                                'dia15' => $request->dia15 == 'NaN' ? 0 : $request->dia15,
                                'dia16' => $request->dia16 == 'NaN' ? 0 : $request->dia16,
                                'dia17' => $request->dia17 == 'NaN' ? 0 : $request->dia17,
                                'dia18' => $request->dia18 == 'NaN' ? 0 : $request->dia18,
                                'dia19' => $request->dia19 == 'NaN' ? 0 : $request->dia19,
                                'dia20' => $request->dia20 == 'NaN' ? 0 : $request->dia20,
                                'dia21' => $request->dia21 == 'NaN' ? 0 : $request->dia21,
                                'dia22' => $request->dia22 == 'NaN' ? 0 : $request->dia22,
                                'dia23' => $request->dia23 == 'NaN' ? 0 : $request->dia23,
                                'dia24' => $request->dia24 == 'NaN' ? 0 : $request->dia24,
                                'dia25' => $request->dia25 == 'NaN' ? 0 : $request->dia25,
                                'dia26' => $request->dia26 == 'NaN' ? 0 : $request->dia26,
                                'dia27' => $request->dia27 == 'NaN' ? 0 : $request->dia27,
                                'dia28' => $request->dia28 == 'NaN' ? 0 : $request->dia28,
                                'dia29' => $request->dia29 == 'NaN' ? 0 : $request->dia29,
                                'dia30' => $request->dia30 == 'NaN' ? 0 : $request->dia30,
                                'dia31' => $request->dia31 == 'NaN' ? 0 : $request->dia31,
                                 'N_dias_atendidos' => $request->diasAtendidos,
                                 'total_raciones' => $request->totalRaciones,
                                 'novedades' => $request->novedades,
                                 'devoluciones' =>$request->devoluciones,
                                 'consolidado' => $request->consolidado
                        ]);             
                        return response()->json(['success' => true]);
                }else{
                        Consolidado::insert([
                                'user_id' => $id,
                                'codigo_dane_sede' => $request->sede_id,
                                'jornada_tipo_racion' => $request->modalidad,
                                'dia1' => $request->dia1 == 'NaN' ? 0 : $request->dia1,
                                'dia2' => $request->dia2 == 'NaN' ? 0 : $request->dia2,
                                'dia3' => $request->dia3 == 'NaN' ? 0 : $request->dia3,
                                'dia4' => $request->dia4 == 'NaN' ? 0 : $request->dia4,
                                'dia5' => $request->dia5 == 'NaN' ? 0 : $request->dia5,
                                'dia6' => $request->dia6 == 'NaN' ? 0 : $request->dia6,
                                'dia7' => $request->dia7 == 'NaN' ? 0 : $request->dia7,
                                'dia8' => $request->dia8 == 'NaN' ? 0 : $request->dia8,
                                'dia9' => $request->dia9 == 'NaN' ? 0 : $request->dia9,
                                'dia10' => $request->dia10 == 'NaN' ? 0 : $request->dia10,
                                'dia11' => $request->dia11 == 'NaN' ? 0 : $request->dia11,
                                'dia12' => $request->dia12 == 'NaN' ? 0 : $request->dia12,
                                'dia13' => $request->dia13 == 'NaN' ? 0 : $request->dia13,
                                'dia14' => $request->dia14 == 'NaN' ? 0 : $request->dia14,
                                'dia15' => $request->dia15 == 'NaN' ? 0 : $request->dia15,
                                'dia16' => $request->dia16 == 'NaN' ? 0 : $request->dia16,
                                'dia17' => $request->dia17 == 'NaN' ? 0 : $request->dia17,
                                'dia18' => $request->dia18 == 'NaN' ? 0 : $request->dia18,
                                'dia19' => $request->dia19 == 'NaN' ? 0 : $request->dia19,
                                'dia20' => $request->dia20 == 'NaN' ? 0 : $request->dia20,
                                'dia21' => $request->dia21 == 'NaN' ? 0 : $request->dia21,
                                'dia22' => $request->dia22 == 'NaN' ? 0 : $request->dia22,
                                'dia23' => $request->dia23 == 'NaN' ? 0 : $request->dia23,
                                'dia24' => $request->dia24 == 'NaN' ? 0 : $request->dia24,
                                'dia25' => $request->dia25 == 'NaN' ? 0 : $request->dia25,
                                'dia26' => $request->dia26 == 'NaN' ? 0 : $request->dia26,
                                'dia27' => $request->dia27 == 'NaN' ? 0 : $request->dia27,
                                'dia28' => $request->dia28 == 'NaN' ? 0 : $request->dia28,
                                'dia29' => $request->dia29 == 'NaN' ? 0 : $request->dia29,
                                'dia30' => $request->dia30 == 'NaN' ? 0 : $request->dia30,
                                'dia31' => $request->dia31 == 'NaN' ? 0 : $request->dia31,                                 
                                'N_dias_atendidos' => $request->diasAtendidos,
                                'total_raciones' => $request->totalRaciones,
                                'novedades' => $request->novedades,
                                'devoluciones' =>$request->devoluciones,
                                'consolidado' => $request->consolidado,
                                'corte' => $mes
                        ]); 
                        return response()->json(['success' => true]);
                }
        }
        public function updateConsolidadoespecial(Request $request)
        {
                $id = Auth::user()->id;
                
                $dia = $request->dia;
                $mescorte = DB::table('ajustes')->first();
                $mes = date('m', strtotime($mescorte->incio));
                $mes = intval($mes);
               
                
                if(ConsolidadosEspeciales::where('codigo_dane_sede',$request->sede_id)->where('jornada_tipo_racion', $request->modalidad)->where('corte',$mes)->first())
                {
                        if(isset($request->diasAtendidos)){
                                ConsolidadosEspeciales::where('codigo_dane_sede',$request->sede_id)->where('jornada_tipo_racion', $request->modalidad)->where('corte',$mes)->first()
                                ->update([
                                        'user_id' => $id,
                                        'codigo_dane_sede' => $request->sede_id,
                                        'jornada_tipo_racion' => $request->modalidad,
                                         $dia => $request->value,
                                        'N_dias_atendidos' => $request->diasAtendidos
                                ]);
                                     
                        }else if(isset($request->totalRaciones))
                        {
                                ConsolidadosEspeciales::where('codigo_dane_sede',$request->sede_id)->where('jornada_tipo_racion', $request->modalidad)->where('corte',$mes)->first()
                                ->update([
                                        'user_id' => $id,
                                        'codigo_dane_sede' => $request->sede_id,
                                        'jornada_tipo_racion' => $request->modalidad,
                                         $dia => $request->value,                                        
                                        'total_raciones' => $request->totalRaciones
                                ]);     
                        }else if (isset($request->novedades))
                        {
                                ConsolidadosEspeciales::where('codigo_dane_sede',$request->sede_id)->where('jornada_tipo_racion', $request->modalidad)->where('corte',$mes)->first()
                                ->update([
                                        'user_id' => $id,
                                        'codigo_dane_sede' => $request->sede_id,
                                        'jornada_tipo_racion' => $request->modalidad,
                                         $dia => $request->value,                                        
                                        'novedades' => $request->novedades
                                ]);    
                        }else if (isset($request->devoluciones))
                        {
                                ConsolidadosEspeciales::where('codigo_dane_sede',$request->sede_id)->where('jornada_tipo_racion', $request->modalidad)->where('corte',$mes)->first()
                                ->update([
                                        'user_id' => $id,
                                        'codigo_dane_sede' => $request->sede_id,
                                        'jornada_tipo_racion' => $request->modalidad,
                                         $dia => $request->value,                                        
                                        'devoluciones' =>$request->devoluciones
                                ]);     
                        }else{
                                ConsolidadosEspeciales::where('codigo_dane_sede',$request->sede_id)->where('jornada_tipo_racion', $request->modalidad)->where('corte',$mes)->first()
                                ->update([
                                        'user_id' => $id,
                                        'codigo_dane_sede' => $request->sede_id,
                                        'jornada_tipo_racion' => $request->modalidad,
                                        $dia => $request->value
                                ]);
                        }
                        
                        
                        return response()->json(['success' => true]);
                        
                }else{
                            
                        if(isset($dia) )
                        {
                                ConsolidadosEspeciales::insert([
                                        'user_id' => $id,
                                        'codigo_dane_sede' => $request->sede_id,
                                        'jornada_tipo_racion' => $request->modalidad,
                                         $dia => $request->value,
                                         'N_dias_atendidos' => $request->diasAtendidos,
                                        'total_raciones' => $request->totalRaciones,
                                        'novedades' => $request->novedades,
                                        'devoluciones' =>$request->devoluciones,
                                        'corte' => $mes
                                    ]); 
                        }else{
                                ConsolidadosEspeciales::insert([
                                        'user_id' => $id,
                                        'codigo_dane_sede' => $request->sede_id,
                                        'jornada_tipo_racion' => $request->modalidad,                                        
                                        'N_dias_atendidos' => $request->diasAtendidos,
                                        'total_raciones' => $request->totalRaciones,
                                        'novedades' => $request->novedades,
                                        'devoluciones' =>$request->devoluciones,
                                        'corte' => $mes
                                    ]); 
                        }
                        

                        return response()->json(['success' => true]);
                }
                
        }
        public function updateConsolidadoespecial1(Request $request)
        {
                $mescorte = DB::table('ajustes')->first();
                $mes = date('m', strtotime($mescorte->incio));
                $mes = intval($mes);
                $id = Auth::user()->id; 

                if(ConsolidadosEspeciales::where('codigo_dane_sede',$request->sede_id)->where('jornada_tipo_racion', $request->modalidad)->where('corte',$mes)->first())
                {
                        
                        ConsolidadosEspeciales::where('codigo_dane_sede',$request->sede_id)->where('jornada_tipo_racion', $request->modalidad)->where('corte',$mes)->first()
                        ->update([
                                'user_id' => $id,
                                'codigo_dane_sede' => $request->sede_id,
                                'jornada_tipo_racion' => $request->modalidad,
                                'dia1' => $request->dia1 = NULL ? 0: $request->dia1,
                                'dia2' => $request->dia2 = NULL ? 0: $request->dia2,
                                'dia3' => $request->dia3 = NULL ? 0: $request->dia3,
                                'dia4' => $request->dia4 = NULL ? 0: $request->dia4,
                                'dia5' => $request->dia5 = NULL ? 0: $request->dia5,
                                'dia6' => $request->dia6 = NULL ? 0: $request->dia6,
                                'dia7' => $request->dia7 = NULL ? 0: $request->dia7,
                                'dia8' => $request->dia8 = NULL ? 0: $request->dia8,
                                'dia9' => $request->dia9 = NULL ? 0: $request->dia9,
                                'dia10' => $request->dia10 = NULL ? 0: $request->dia10,
                                'dia11' => $request->dia11 = NULL ? 0: $request->dia11,
                                'dia12' => $request->dia12 = NULL ? 0: $request->dia12,
                                'dia13' => $request->dia13 = NULL ? 0: $request->dia13,
                                'dia14' => $request->dia14 = NULL ? 0: $request->dia14,
                                'dia15' => $request->dia15 = NULL ? 0: $request->dia15,
                                'dia16' => $request->dia16 = NULL ? 0: $request->dia16,
                                'dia17' => $request->dia17 = NULL ? 0: $request->dia17,
                                'dia18' => $request->dia18 = NULL ? 0: $request->dia18,
                                'dia19' => $request->dia19 = NULL ? 0: $request->dia19,
                                'dia20' => $request->dia20 = NULL ? 0: $request->dia20,
                                'dia21' => $request->dia21 = NULL ? 0: $request->dia21,
                                'dia22' => $request->dia22 = NULL ? 0: $request->dia22,
                                'dia23' => $request->dia23 = NULL ? 0: $request->dia23,
                                'dia24' => $request->dia24 = NULL ? 0: $request->dia24,
                                'dia25' => $request->dia25 = NULL ? 0: $request->dia25,
                                'dia26' => $request->dia26 = NULL ? 0: $request->dia26,
                                'dia27' => $request->dia27 = NULL ? 0: $request->dia27,
                                'dia28' => $request->dia28 = NULL ? 0: $request->dia28,
                                'dia29' => $request->dia29 = NULL ? 0: $request->dia29,
                                'dia30' => $request->dia30 = NULL ? 0: $request->dia30,
                                'dia31' => $request->dia31 = NULL ? 0: $request->dia31,
                                 'N_dias_atendidos' => $request->diasAtendidos,
                                 'total_raciones' => $request->totalRaciones,
                                 'novedades' => $request->novedades,
                                 'devoluciones' =>$request->devoluciones,
                                 'consolidado' => $request->consolidado
                        ]);             
                        return response()->json(['success' => true]);
                }else{
                        ConsolidadosEspeciales::insert([
                                'user_id' => $id,
                                'codigo_dane_sede' => $request->sede_id,
                                'jornada_tipo_racion' => $request->modalidad,
                                'dia1' => $request->dia1 = NULL ? 0: $request->dia1,
                                'dia2' => $request->dia2 = NULL ? 0: $request->dia2,
                                'dia3' => $request->dia3 = NULL ? 0: $request->dia3,
                                'dia4' => $request->dia4 = NULL ? 0: $request->dia4,
                                'dia5' => $request->dia5 = NULL ? 0: $request->dia5,
                                'dia6' => $request->dia6 = NULL ? 0: $request->dia6,
                                'dia7' => $request->dia7 = NULL ? 0: $request->dia7,
                                'dia8' => $request->dia8 = NULL ? 0: $request->dia8,
                                'dia9' => $request->dia9 = NULL ? 0: $request->dia9,
                                'dia10' => $request->dia10 = NULL ? 0: $request->dia10,
                                'dia11' => $request->dia11 = NULL ? 0: $request->dia11,
                                'dia12' => $request->dia12 = NULL ? 0: $request->dia12,
                                'dia13' => $request->dia13 = NULL ? 0: $request->dia13,
                                'dia14' => $request->dia14 = NULL ? 0: $request->dia14,
                                'dia15' => $request->dia15 = NULL ? 0: $request->dia15,
                                'dia16' => $request->dia16 = NULL ? 0: $request->dia16,
                                'dia17' => $request->dia17 = NULL ? 0: $request->dia17,
                                'dia18' => $request->dia18 = NULL ? 0: $request->dia18,
                                'dia19' => $request->dia19 = NULL ? 0: $request->dia19,
                                'dia20' => $request->dia20 = NULL ? 0: $request->dia20,
                                'dia21' => $request->dia21 = NULL ? 0: $request->dia21,
                                'dia22' => $request->dia22 = NULL ? 0: $request->dia22,
                                'dia23' => $request->dia23 = NULL ? 0: $request->dia23,
                                'dia24' => $request->dia24 = NULL ? 0: $request->dia24,
                                'dia25' => $request->dia25 = NULL ? 0: $request->dia25,
                                'dia26' => $request->dia26 = NULL ? 0: $request->dia26,
                                'dia27' => $request->dia27 = NULL ? 0: $request->dia27,
                                'dia28' => $request->dia28 = NULL ? 0: $request->dia28,
                                'dia29' => $request->dia29 = NULL ? 0: $request->dia29,
                                'dia30' => $request->dia30 = NULL ? 0: $request->dia30,
                                'dia31' => $request->dia31 = NULL ? 0: $request->dia31,                                  
                                'N_dias_atendidos' => $request->diasAtendidos,
                                'total_raciones' => $request->totalRaciones,
                                'novedades' => $request->novedades,
                                'devoluciones' => $request->devoluciones,
                                'consolidado' => $request->consolidado,
                                'corte' => $mes
                        ]); 
                        return response()->json(['success' => true]);
                }
        }
        public function indexCertificaciones()
        {



                $breadcrumbs = [['link' => "/", 'name' => "Inicio"], ['link' => "javascript:void(0)", 'name' => "Cruces"], ['name' => "Certificaciones"]];
                return view('/content/cruces/certificacionesIndex', ['breadcrumbs' => $breadcrumbs]);
        }
        public function certificacion(Request $request)
        {
                $mescorte = DB::table('ajustes')->first();
                $mes = date('m', strtotime($mescorte->incio));
                $mes = intval($mes);
                $array = [];
                foreach($request->sedes as $sede)
                {
                       
                        $sedec = Sedes::where('consecutivo',$sede)->first();
                        
                        $simat = Simat::where('dane', $sedec->codigo_dane_institucion)->first();
                      
                        $tipoconsolidado = $request->tipoconsolidado;
                        //dd($tipoconsolidado);
                        if($tipoconsolidado == '1')
                        {
                                $consolidadoRI = Consolidado::where('consolidados.codigo_dane_sede', $sede)
                                                ->where('consolidados.jornada_tipo_racion', 'LIKE','%RI%')
                                                ->where('corte',$mes)   
                                                ->get();

                                $diasRI = Ri::first();                                                                                              

                                $consolidadoRPS = Consolidado::where('consolidados.codigo_dane_sede', $sede)
                                                ->where('consolidados.jornada_tipo_racion', 'RPS')
                                                ->where('corte',$mes)   
                                                ->get();
                                

                                $data = [];
                                $data['simat'] = $simat;
                                $data['simat']['consolidadoRI'] = $consolidadoRI;
                                $data['simat']['consolidadoRPS'] = $consolidadoRPS;
                                $data['simat']['tipoconsolidado'] = 'normal';
                                $data['simat']['dias'] = $diasRI;
                                $data['sede'] = $sedec;
                                array_push($array, $data);
                        
                        }else if($tipoconsolidado == '2')
                        {
                                $diasatencion = $request->diasatencion;
                                $consolidadoRI = ConsolidadosEspeciales::where('codigo_dane_sede', $sede)
                                ->where('jornada_tipo_racion', 'LIKE','%RI%')   
                                ->where('corte',$mes)   
                                ->get();

                                $diasRI = Ri::first();                                                                                              

                                $consolidadoRPS = ConsolidadosEspeciales::where('codigo_dane_sede', $sede)
                                                ->where('jornada_tipo_racion', 'RPS')
                                                ->where('corte',$mes)   
                                                ->get();
                                

                                $data = [];
                                $data['simat'] = $simat;
                                $data['simat']['consolidadoRI'] = $consolidadoRI;
                                $data['simat']['consolidadoRPS'] = $consolidadoRPS;
                                $data['simat']['tipoconsolidado'] = 'especial';
                                $data['simat']['dias'] = $diasRI;
                                $data['sede'] = $sedec;
                                $data['diasatencion'] = $diasatencion;
                                 array_push($array, $data);
                                                
                        }
                
                }
                $ajustes = Ajustes::first();
                //return response::json($array);
                
                $breadcrumbs = [['link' => "/", 'name' => "Inicio"], ['link' => "javascript:void(0)", 'name' => "Cruces"], ['name' => "Certificaciones"]];
                return view('/content/apps/invoice/app-invoice-print', ['breadcrumbs' => $breadcrumbs, 'data' => $array, 'ajustes' => $ajustes]);
        
        }
}
