<?php

namespace App\Http\Controllers;

use App\Models\Sedes;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\SedesImport;

class SedesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $breadcrumbs = [['link' => "/", 'name' => "Inicio"], ['link' => "javascript:void(0)", 'name' => "Datos de las sedes"], ['name' => "Sedes"]];
        return view('/content/sede/sedes', ['breadcrumbs' => $breadcrumbs]);
    
    }

    public function tablaSedes()
    {
        $simat = Sedes::get();  
        
        return json_decode($simat);
    }
    public function Datos()
    {
        $breadcrumbs = [['link' => "/", 'name' => "Inicio"], ['link' => "javascript:void(0)", 'name' => "Datos de las sedes"], ['name' => "Administrar datos"]];
        return view('/content/sede/datos', ['breadcrumbs' => $breadcrumbs]);
    }
    public function importar(Request $request)
    {
        
        if( isset($request["excelsedes"])){
            Excel::import(new SedesImport, request()->file('excelsedes'));
            $breadcrumbs = [['link' => "/", 'name' => "Inicio"], ['link' => "javascript:void(0)", 'name' => "Datos de las sedes"], ['name' => "Sedes"]];
            return view('/content/sede/sedes', ['breadcrumbs' => $breadcrumbs]);
        }
        
        
        
        return redirect('/')->with('success', 'All good!');
    }

    public function vaciar()
    {
        
        Sedes::query()->truncate();

        $breadcrumbs = [['link' => "/", 'name' => "Inicio"], ['link' => "javascript:void(0)", 'name' => "Datos de las sedes"], ['name' => "Sedes"]];
        return view('/content/sede/sedes', ['breadcrumbs' => $breadcrumbs]);
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
     * @param  \App\Models\Sedes  $sedes
     * @return \Illuminate\Http\Response
     */
    public function show(Sedes $sedes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Sedes  $sedes
     * @return \Illuminate\Http\Response
     */
    public function edit(Sedes $sedes)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Sedes  $sedes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sedes $sedes)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Sedes  $sedes
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sedes $sedes)
    {
        //
    }
}
