<?php

namespace App\Http\Controllers;

use App\Models\Institucion;
use App\Models\Sedes;
use App\Models\Simat;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\InstitucionImport;
use Auth;

class InstitucionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rps = Institucion::get();  
        $breadcrumbs = [['link' => "/", 'name' => "Inicio"], ['link' => "javascript:void(0)", 'name' => "Datos de las Instituciones"], ['name' => "Institucion"]];
        return view('/content/institucion/instituciones', ['breadcrumbs' => $breadcrumbs, 'data' => $rps]);
    
    }

    public function tablaInstitucion2()
    {
        $rps = Sedes::join('institucions','sedes.codigo_dane_institucion','=','institucions.codigo_dane')
                      ->where('sedes.user_id', Auth::user()->id)
                      ->select('institucions.nombre as institucion', 'sedes.nombre as sede','sedes.consecutivo as consecutivo')
                     
                      ->groupByRaw('institucion, sede,consecutivo')
                      ->get(); 
        
        return \Response::json($rps);
    }
    public function tablaInstitucion3($id)
    {
        $rps = Sedes::join('institucions','sedes.codigo_dane_institucion','=','institucions.codigo_dane')
                      ->select('institucions.nombre as institucion', 'sedes.nombre as sede','sedes.consecutivo as consecutivo')
                      ->where('sedes.user_id', $id)
                      ->groupByRaw('institucion, sede,consecutivo')
                      ->get(); 
        
        return \Response::json($rps);
    }
    public function tablaInstitucion()
    {
        $rps = Institucion::select('institucions.nombre as institucion', 'institucions.codigo_dane as consecutivo')
                      ->get(); 
        
        return \Response::json($rps);
    }
    public function Datos()
    {
        $breadcrumbs = [['link' => "/", 'name' => "Inicio"], ['link' => "javascript:void(0)", 'name' => "Datos de las Instituciones"], ['name' => "Administrar datos"]];
        return view('/content/institucion/datos', ['breadcrumbs' => $breadcrumbs]);
    }
    public function importar(Request $request)
    {
        
        if( isset($request["excelinstitucion"])){
            Excel::import(new InstitucionImport, request()->file('excelinstitucion'));
            $breadcrumbs = [['link' => "/", 'name' => "Inicio"], ['link' => "javascript:void(0)", 'name' => "Datos de las Instituciones"], ['name' => "Institucion"]];
            return view('/content/institucion/instituciones', ['breadcrumbs' => $breadcrumbs]);
        }else{
            dd('error');
        }
        
        
        
        return redirect('/')->with('success', 'All good!');
    }

    public function vaciar()
    {
        
        Institucion::query()->truncate();

        $breadcrumbs = [['link' => "/", 'name' => "Inicio"], ['link' => "javascript:void(0)", 'name' => "Datos de las Instituciones"], ['name' => "Institucion"]];
        return view('/content/institucion/instituciones', ['breadcrumbs' => $breadcrumbs]);
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
     * @param  \App\Models\Institucion  $institucion
     * @return \Illuminate\Http\Response
     */
    public function show(Institucion $institucion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Institucion  $institucion
     * @return \Illuminate\Http\Response
     */
    public function edit(Institucion $institucion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Institucion  $institucion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Institucion $institucion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Institucion  $institucion
     * @return \Illuminate\Http\Response
     */
    public function destroy(Institucion $institucion)
    {
        //
    }
}
