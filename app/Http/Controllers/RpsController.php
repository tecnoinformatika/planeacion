<?php

namespace App\Http\Controllers;

use App\Models\Rps;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\RpsImport;

class RpsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rps = Rps::paginate(1000);  
        $breadcrumbs = [['link' => "/", 'name' => "Inicio"], ['link' => "javascript:void(0)", 'name' => "Datos del RPS"], ['name' => "RPS"]];
        return view('/content/rps/rps', ['breadcrumbs' => $breadcrumbs, 'data' => $rps]);
    
    }

    public function indexfiltrado($id)
    {
        $rps = Rps::find($id);
        $breadcrumbs = [['link' => "/", 'name' => "Inicio"], ['link' => "javascript:void(0)", 'name' => "Datos del RPS"], ['name' => "RPS"]];
        return view('/content/rps/rps-filtrado', ['breadcrumbs' => $breadcrumbs, 'data' => $rps]);
    }

    public function tablaRps()
    {
        $records = Rps::get();

        $data_arr = array();
        
        foreach($records as $record){
            
            $data_arr[] = array(
                "id" => $record->id,
                "TIPO_DE_DOCUMENTO" => $record->TIPO_DE_DOCUMENTO,
                "NUMERO_DE_DOCUMENTO_DE_IDENTIDAD" => $record->NUMERO_DE_DOCUMENTO_DE_IDENTIDAD,
                "PRIMER_NOMBRE_DEL_TITULAR_DE_DERECHO" => $record->PRIMER_NOMBRE_DEL_TITULAR_DE_DERECHO,
                "SEGUNDO_NOMBRE_DEL_TITULAR_DE_DERECHO" => $record->SEGUNDO_NOMBRE_DEL_TITULAR_DE_DERECHO,
                "PRIMER_APELLIDO_DEL_TITULAR_DE_DERECHO" => $record->PRIMER_APELLIDO_DEL_TITULAR_DE_DERECHO,
                "SEGUNDO_APELLIDO_DEL_TITULAR_DE_DERECHO" => $record->SEGUNDO_APELLIDO_DEL_TITULAR_DE_DERECHO,
                "FECHA_DE_NACIMIENTO" => $record->FECHA_DE_NACIMIENTO,
                "GRUPO_ETARIO" => $record->GRUPO_ETARIO,
                "PERTENENCIA_ETNICA" => $record->PERTENENCIA_ETNICA,
                "Sexo" => $record->Sexo,
                "Grado_Educativo" => $record->Grado_Educativo,
                "dia_1" => $record->dia_1,
                "dia_2" => $record->dia_2,
                "dia_3" => $record->dia_3,
                "dia_4" => $record->dia_4,
                "dia_5" => $record->dia_5,
                "dia_6" => $record->dia_6,
                "dia_7" => $record->dia_7,
                "dia_8" => $record->dia_8,
                "dia_9" => $record->dia_9,
                "dia_10" => $record->dia_10,
                "dia_11" => $record->dia_11,
                "dia_12" => $record->dia_12,
                "dia_13" => $record->dia_13,
                "dia_14" => $record->dia_14,
                "dia_15" => $record->dia_15,
                "dia_16" => $record->dia_16,
                "dia_17" => $record->dia_17,
                "dia_18" => $record->dia_18,
                "dia_19" => $record->dia_19,
                "dia_20" => $record->dia_20,
                "dia_21" => $record->dia_21,
                "dia_22" => $record->dia_22,
                "dia_23" => $record->dia_23,
                "dia_24" => $record->dia_24,
                "dia_25" => $record->dia_25,
                "dia_26" => $record->dia_26,
                "dia_27" => $record->dia_27,
                "dia_28" => $record->dia_28,
                "dia_29" => $record->dia_29,
                "dia_30" => $record->dia_30,
                "dia_31" => $record->dia_31,
                "MODALIDAD" => $record->MODALIDAD,
                "NO_CLASES" => $record->NO_CLASES,
                "NOVEDADES" => $record->NOVEDADES,
                "TOTAL_DIAS_NO_CONSUMO" => $record->TOTAL_DIAS_NO_CONSUMO,
                "SEDE" => $record->SEDE,
                "INSTITUCION" => $record->INSTITUCION,
                "CODIGO_DANE" => $record->codigo_dane_sede,
                "SUPERVISOR_OPERDOR" => $record->SUPERVISOR_OPERDOR

            );
            
        }

        $response = array(
            "data" => $data_arr
        );

        return response($response);
    }
    public function Datos()
    {
        $breadcrumbs = [['link' => "/", 'name' => "Inicio"], ['link' => "javascript:void(0)", 'name' => "Datos del RPS"], ['name' => "Administrar datos"]];
        return view('/content/rps/datos', ['breadcrumbs' => $breadcrumbs]);
    }
    public function importar(Request $request)
    {
        $rps = Rps::paginate(1000);  
        
        if( isset($request["excelrps"])){
            Excel::import(new RpsImport, request()->file('excelrps'));
            $breadcrumbs = [['link' => "/", 'name' => "Inicio"], ['link' => "javascript:void(0)", 'name' => "Datos del Rps"], ['name' => "Rps"]];
            return view('/content/rps/rps', ['breadcrumbs' => $breadcrumbs, 'data' => $rps]);
        }
        
        
        
        return redirect('/')->with('success', 'All good!');
    }

    public function vaciar()
    {
        
        Rps::query()->truncate();
        $rps = Rps::paginate(1000);  
        $breadcrumbs = [['link' => "/", 'name' => "Inicio"], ['link' => "javascript:void(0)", 'name' => "Datos del Rps"], ['name' => "Rps"]];
        return view('/content/rps/rps', ['breadcrumbs' => $breadcrumbs, 'data' => $rps]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Rps  $rps
     * @return \Illuminate\Http\Response
     */
    public function show(Rps $rps)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Rps  $rps
     * @return \Illuminate\Http\Response
     */
    public function edit(Rps $rps)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Rps  $rps
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Rps $rps)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Rps  $rps
     * @return \Illuminate\Http\Response
     */
    public function destroy(Rps $rps)
    {
        //
    }
}
