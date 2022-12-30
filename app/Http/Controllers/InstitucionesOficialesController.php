<?php

namespace App\Http\Controllers;

use App\Models\InstitucionesOficiales;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\InsitucionOficialImport;
use App\Imports\ImportCupos;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Response;
use App\Models\Imagen;
use App\Models\Escudo;
use App\Models\Cupos;

class InstitucionesOficialesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function instituciones()
    {
        $instituciones = InstitucionesOficiales::join('imagens','instituciones_oficiales.id','imagens.institucion_id')
                                                ->select('instituciones_oficiales.*','imagens.nombre as imagen')
                                                ->get();

        return response::json($instituciones);
    }

    public function cupos($id)
    {
        $cupos = Cupos::where('CodSede',$id)
                                ->select('jornada','grado','cupos')
                                ->get();

        return response::json($cupos);
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

    public function institucionesData(Request $request)
    {
        //dd($request);
        $simat = InstitucionesOficiales::orWhere('NomEstable', 'LIKE', '%' .$request->nombreestablecimiento. '%')
                ->Where('Grados','LIKE', '%' .$request->grado. '%')
                ->Where('Niveles','LIKE', '%' .$request->niveles. '%')
                ->Where('Tipo','LIKE', '%' .$request->tipo. '%')
                ->Where('NomSede','LIKE', '%' .$request->nombresede. '%')
                ->Where('Zona','LIKE', '%' .$request->zona. '%')
                ->join('imagens','instituciones_oficiales.id','imagens.institucion_id')
                ->select('instituciones_oficiales.*',
                        'imagens.nombre as imagen')
                ->get();  
        
        return json_decode($simat);
    }
    public function editarInstitucion(Request $request)
    {

        //dd($request);
        $InstitucionesOficiales = InstitucionesOficiales::find($request->id1);

        
       
            $this->validate($request, [
                'imagen' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            ]);
            

            $image_path = $request->file('imagen')->store('imagen', 'public');
            
            $formato = request()->file('imagen')->getClientOriginalExtension();
            if(Imagen::where('institucion_id', $InstitucionesOficiales->id)->first())
            {
                $data = Imagen::where('institucion_id', $InstitucionesOficiales->id)->first()
                ->update([
                    'nombre' => $image_path, 
                    'formato' => $formato,
                    'institucion_id' => $InstitucionesOficiales->id,
                    'created_at' => date("Y-m-d H:i:s"),
                    'updated_at' => date("Y-m-d H:i:s"),
                ]);

            }else{
                $data = Imagen::create([
                    'nombre' => $image_path, 
                    'formato' => $formato,
                    'institucion_id' => $InstitucionesOficiales->id,
                    'created_at' => date("Y-m-d H:i:s"),
                    'updated_at' => date("Y-m-d H:i:s"),
                ]);
            }


            $this->validate($request, [
                'escudo' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            ]);


            $image_path = $request->file('escudo')->store('escudo', 'public');

            $formato = request()->file('escudo')->getClientOriginalExtension();
            if(Escudo::where('institucion_id', $InstitucionesOficiales->id)->first())
            {
                $data = Escudo::where('institucion_id', $InstitucionesOficiales->id)->first()
                ->update([
                    'nombre' => $image_path, 
                    'formato' => $formato,
                    'institucion_id' => $InstitucionesOficiales->id,
                    'created_at' => date("Y-m-d H:i:s"),
                    'updated_at' => date("Y-m-d H:i:s"),
                ]);

            }else{
                $data = Escudo::create([
                    'nombre' => $image_path, 
                    'formato' => $formato,
                    'institucion_id' => $InstitucionesOficiales->id,
                    'created_at' => date("Y-m-d H:i:s"),
                    'updated_at' => date("Y-m-d H:i:s"),
                ]);
            }
            

            $breadcrumbs = [['link' => "/", 'name' => "Inicio"], ['link' => "javascript:void(0)", 'name' => "Datos de las Instituciones"], ['name' => "Instituciones"]];
            return view('/content/InstitucionesOficiales/index', ['breadcrumbs' => $breadcrumbs]);
    }
    public function buscar($id)
    {
        $usuario = InstitucionesOficiales::where('instituciones_oficiales.id',$id)
        ->join('imagens','instituciones_oficiales.id','imagens.institucion_id')
                ->join('escudos','instituciones_oficiales.id','escudos.institucion_id')
                ->select('instituciones_oficiales.*',
                        'imagens.nombre as imagen','escudos.nombre as escudo')
        ->first();
        return Response::json($usuario);
    }
    public function buscar1($id)
    {
        $usuario = InstitucionesOficiales::where('instituciones_oficiales.id',$id)
        
        ->first();
        return Response::json($usuario);
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
    public function indexCupos()
    {
        $cupos = Cupos::leftJoin('instituciones_oficiales','cupos.CodSede','=','instituciones_oficiales.CodSede')
                        ->select('cupos.id as id', 'cupos.CodSede as CodSede','instituciones_oficiales.NomSede as NomSede','cupos.jornada as jornada','cupos.grado as grado','cupos.cupos as cupos')
                        ->get();
        $breadcrumbs = [['link' => "/", 'name' => "Inicio"], ['link' => "javascript:void(0)", 'name' => "Datos de las Instituciones"], ['name' => "Instituciones"]];
        return view('/content/cupos/index', ['breadcrumbs' => $breadcrumbs, 'data' => $cupos]);
    
    }
    public function DatosCupos()
    {
        $breadcrumbs = [['link' => "/", 'name' => "Inicio"], ['link' => "javascript:void(0)", 'name' => "Datos de las Instituciones"], ['name' => "Administrar datos"]];
        return view('/content/cupos/datos', ['breadcrumbs' => $breadcrumbs]);
    }
    public function importarCupos(Request $request)
    {
        
        if( isset($request["cupos"])){
            Excel::import(new ImportCupos, request()->file('cupos'));
            $breadcrumbs = [['link' => "/", 'name' => "Inicio"], ['link' => "javascript:void(0)", 'name' => "Cupos importados"], ['name' => "Administrar datos"]];
            return view('/content/cupos/datos', ['breadcrumbs' => $breadcrumbs]);
        }
        
        
        
        return redirect('/')->with('success', 'All good!');
    }

    public function vaciarCupos()
    {
        
        Cupos::query()->truncate();

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
