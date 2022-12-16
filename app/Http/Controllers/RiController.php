<?php

namespace App\Http\Controllers;

use App\Models\Ri;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\RiImport;

class RiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ri = Ri::paginate(1000);
        $breadcrumbs = [['link' => "/", 'name' => "Inicio"], ['link' => "javascript:void(0)", 'name' => "Datos del RI"], ['name' => "RI"]];
        return view('/content/ri/ri', ['breadcrumbs' => $breadcrumbs, 'data' => $ri]);
    
    }
    public function indexfiltrado($id)
    {
        $ri = Ri::find($id);
        $breadcrumbs = [['link' => "/", 'name' => "Inicio"], ['link' => "javascript:void(0)", 'name' => "Datos del RI"], ['name' => "RI"]];
        return view('/content/ri/ri-filtrado', ['breadcrumbs' => $breadcrumbs, 'data' => $ri]);
    }

    public function tablaRps()
    {
        $rps = Rps::skip(0)->take(5)->get();  
        
        return \Response::json($rps);
    }
    public function Datos()
    {
        $breadcrumbs = [['link' => "/", 'name' => "Inicio"], ['link' => "javascript:void(0)", 'name' => "Datos del RI"], ['name' => "Administrar datos"]];
        return view('/content/ri/datos', ['breadcrumbs' => $breadcrumbs]);
    }
    public function importar(Request $request)
    {
        $ri = Ri::paginate(1000);
        if( isset($request["excelri"])){
            Excel::import(new RiImport, request()->file('excelri'));
            $breadcrumbs = [['link' => "/", 'name' => "Inicio"], ['link' => "javascript:void(0)", 'name' => "Datos del RI"], ['name' => "RI"]];
            return view('/content/ri/ri', ['breadcrumbs' => $breadcrumbs, 'data' => $ri]);
        }
        
        
        
        return redirect('/')->with('success', 'All good!');
    }

    public function vaciar()
    {
        
        Ri::query()->truncate();

        $breadcrumbs = [['link' => "/", 'name' => "Inicio"], ['link' => "javascript:void(0)", 'name' => "Datos del RI"], ['name' => "RI"]];
        return view('/content/ri/ri', ['breadcrumbs' => $breadcrumbs]);
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
     * @param  \App\Models\Ri  $ri
     * @return \Illuminate\Http\Response
     */
    public function show(Ri $ri)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ri  $ri
     * @return \Illuminate\Http\Response
     */
    public function edit(Ri $ri)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ri  $ri
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ri $ri)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ri  $ri
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ri $ri)
    {
        //
    }
}
