<?php

namespace App\Http\Controllers;

use App\Models\InstitucionesOficiales;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\InsitucionOficialImport;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Response;


class InstitucionesOficialesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function instituciones()
    {
        $instituciones = InstitucionesOficiales::where('id','2')->get();

        return response::json($instituciones);
    }
    public function index()
    {
        $breadcrumbs = [['link' => "/", 'name' => "Inicio"], ['link' => "javascript:void(0)", 'name' => "Datos de las Instituciones"], ['name' => "Instituciones"]];
        return view('/content/InstitucionesOficiales/index', ['breadcrumbs' => $breadcrumbs]);
    
    }

    public function tablaInstitucionesOficiales(Request $request)
    {
        //dd($request);
        $simat = InstitucionesOficiales::orWhere('CodEstable','LIKE', '%' .$request->codigo. '%')
                ->Where('NomEstable', 'LIKE', '%' .$request->nombreestablecimiento. '%')
                ->Where('CodSede','LIKE', '%' .$request->codigosede. '%')
                ->Where('Niveles','LIKE', '%' .$request->niveles. '%')
                ->Where('Tipo','LIKE', '%' .$request->tipo. '%')
                ->Where('Zona','LIKE', '%' .$request->zona. '%')
                ->get();  
        
        return json_decode($simat);
    }
    public function Datos()
    {
        $breadcrumbs = [['link' => "/", 'name' => "Inicio"], ['link' => "javascript:void(0)", 'name' => "Datos de las Instituciones"], ['name' => "Administrar datos"]];
        return view('/content/InstitucionesOficiales/datos', ['breadcrumbs' => $breadcrumbs]);
    }
    public function importar(Request $request)
    {
        
        if( isset($request["excelinstitucion"])){
            Excel::import(new InsitucionOficialImport, request()->file('excelinstitucion'));
            $breadcrumbs = [['link' => "/", 'name' => "Inicio"], ['link' => "javascript:void(0)", 'name' => "Datos de las Instituciones"], ['name' => "Administrar datos"]];
            return view('/content/InstitucionesOficiales/datos', ['breadcrumbs' => $breadcrumbs]);
        }
        
        
        
        return redirect('/')->with('success', 'All good!');
    }

    public function vaciar()
    {
        
        InstitucionesOficiales::query()->truncate();

        $breadcrumbs = [['link' => "/", 'name' => "Inicio"], ['link' => "javascript:void(0)", 'name' => "Datos de las Instituciones"], ['name' => "Instituciones"]];
        return view('/content/InstitucionesOficiales/index', ['breadcrumbs' => $breadcrumbs]);
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
     * @param  \App\Models\InstitucionesOficiales  $institucionesOficiales
     * @return \Illuminate\Http\Response
     */
    public function show(InstitucionesOficiales $institucionesOficiales)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\InstitucionesOficiales  $institucionesOficiales
     * @return \Illuminate\Http\Response
     */
    public function edit(InstitucionesOficiales $institucionesOficiales)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\InstitucionesOficiales  $institucionesOficiales
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, InstitucionesOficiales $institucionesOficiales)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\InstitucionesOficiales  $institucionesOficiales
     * @return \Illuminate\Http\Response
     */
    public function destroy(InstitucionesOficiales $institucionesOficiales)
    {
        //
    }
}
