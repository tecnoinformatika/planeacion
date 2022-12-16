<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Simat;
use App\Models\Ri;
use App\Models\Rps;
use App\Models\consolidado;
use App\Models\Ajustes;
use App\Models\ConsolidadosEspeciales;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Response;
use Auth;

class DashboardController extends Controller
{
  public function __construct()
  {
          $this->middleware('auth');
  }
 
  // Dashboard - Analytics
  public function dashboardAnalytics()
  {
    $pageConfigs = ['pageHeader' => false];

    return view('/content/dashboard/dashboard-analytics', ['pageConfigs' => $pageConfigs]);
  }

  // Dashboard - Ecommerce
  public function dashboardEcommerce()
  {
    $ajustes = Ajustes::first();
    $ris = Ri::count();
    $rps = Rps::count();
    $total = $ris + $rps;

    $stadisRISSEXO = Ri::selectRaw('ris.sexo, count(ris.sexo) as generos')                          
                          ->groupBy('ris.sexo')
                          ->get();

    $stadisRPSSSEXO = Rps::selectRaw('rps.sexo, count(rps.sexo) as generos')                          
                          ->groupBy('rps.sexo')
                          ->get();

    $stadisColegiosRI = Ri::selectRaw('ris.institucion')->distinct()->get();
    $sedesRI = Ri::selectRaw('ris.sede')->distinct()->get();
    $stadisColegiosRps = Rps::selectRaw('sede')->distinct()->get();
    $sedesRps = Rps::selectRaw('sede')->distinct()->get();  
    $query = "CAST(Grado_educativo AS DECIMAL(10,2)) ASC";
    $consumo = Ri::selectRaw('
                    ris.Grado_Educativo as grado,
                    Sum(ris.NOVEDADES) AS novedad,
                    Sum(ris.TOTAL_DIAS_NO_CONSUMO) AS consumo')
                    ->groupBy('Grado_Educativo')
                    ->orderByRaw($query)
                    ->get();
    $rps = Rps::get();

    $ri = Ri::get();
    //dd($consumo);

    $pageConfigs = ['pageHeader' => false];

    return view('/content/dashboard/dashboard-ecommerce', ['pageConfigs' => $pageConfigs, 
                                                           'ajustes' => $ajustes, 
                                                           'total' => $total,
                                                           'stadisRISSEXO' => $stadisRISSEXO,
                                                           'stadisRPSSSEXO' => $stadisRPSSSEXO,
                                                           'stadisColegiosRI' => $stadisColegiosRI,
                                                           'sedesRI' => $sedesRI,
                                                           'stadisColegiosRps' => $stadisColegiosRps,
                                                           'sedesRps' => $sedesRps,
                                                           'consumo' => $consumo,
                                                           'rps' => $rps,
                                                           'ri' => $ri]);
  }
}
