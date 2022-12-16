
@extends('layouts/contentLayoutMaster')

@section('title', 'Dashboard PAE SEM')

@section('vendor-style')
  {{-- vendor css files --}}
  <link rel="stylesheet" href="{{ asset(mix('vendors/css/charts/apexcharts.css')) }}">
  <link rel="stylesheet" href="{{ asset(mix('vendors/css/extensions/toastr.min.css')) }}">
@endsection
@section('page-style')
  {{-- Page css files --}}
  <link rel="stylesheet" href="{{ asset(mix('css/base/pages/dashboard-ecommerce.css')) }}">
  <link rel="stylesheet" href="{{ asset(mix('css/base/plugins/charts/chart-apex.css')) }}">
  <link rel="stylesheet" href="{{ asset(mix('css/base/plugins/extensions/ext-component-toastr.css')) }}">
@endsection

@section('content')
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
  function fechaCastellanoMes ($fecha) {
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
      return $nombreMes;
  }

@endphp
<!-- Dashboard Ecommerce Starts -->
<section id="dashboard-ecommerce">
  <div class="row match-height">
    <!-- Medal Card -->
    <div class="col-xl-4 col-md-6 col-12">
      <div class="card card-congratulation-medal">
        <div class="card-body">
          <h5>Total cobertura</h5>
          <p class="card-text font-small-3">{{fechaCastellanoMes($ajustes->fin)}}</p>
          <h3 class="mb-75 mt-2 pt-50">
            <a href="#">{{number_format($total)}}</a>
          </h3>
          
          <img src="{{asset('images/illustration/badge.svg')}}" class="congratulation-medal" alt="Medal Pic" />
        </div>
      </div>
    </div>
    <!--/ Medal Card -->

    <!-- Statistics Card -->
    <div class="col-xl-8 col-md-6 col-12">
      <div class="card card-statistics">
        <div class="card-header">
          <h4 class="card-title">Estadísticas</h4>
          <div class="d-flex align-items-center">
            <p class="card-text font-small-2 me-25 mb-0">Actualizadas al corte del mes de {{fechaCastellanoMes($ajustes->fin)}}</p>
          </div>
        </div>
        <div class="card-body statistics-body">
          <div class="row">
            <div class="col-xl-3 col-sm-6 col-12 mb-2 mb-xl-0">
              <div class="d-flex flex-row">
                <div class="avatar bg-light-primary me-2">
                  <div class="avatar-content">
                    <i data-feather="user" class="avatar-icon"></i>
                  </div>
                </div>
                <div class="my-auto">
                  <h4 class="fw-bolder mb-0">{{number_format($stadisRISSEXO[0]->generos + $stadisRPSSSEXO[0]->generos)}}</h4>
                  <p class="card-text font-small-3 mb-0">Niñas</p>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-sm-6 col-12 mb-2 mb-xl-0">
              <div class="d-flex flex-row">
                <div class="avatar bg-light-info me-2">
                  <div class="avatar-content">
                    <i data-feather="user" class="avatar-icon"></i>
                  </div>
                </div>
                <div class="my-auto">
                  <h4 class="fw-bolder mb-0">{{number_format($stadisRISSEXO[1]->generos + $stadisRPSSSEXO[1]->generos)}}</h4>
                  <p class="card-text font-small-3 mb-0">Niños</p>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-sm-6 col-12 mb-2 mb-sm-0">
              <div class="d-flex flex-row">
                <div class="avatar bg-light-danger me-2">
                  <div class="avatar-content">
                    <i data-feather="book" class="avatar-icon"></i>
                  </div>
                </div>
                <div class="my-auto">
                  <h4 class="fw-bolder mb-0">{{count($stadisColegiosRI) + count($stadisColegiosRps)}}</h4>
                  <p class="card-text font-small-3 mb-0">Instituciones</p>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-sm-6 col-12">
              <div class="d-flex flex-row">
                <div class="avatar bg-light-success me-2">
                  <div class="avatar-content">
                    <i data-feather="book-open" class="avatar-icon"></i>
                  </div>
                </div>
                <div class="my-auto">
                  <h4 class="fw-bolder mb-0">{{count($sedesRI) + count($sedesRps)}}</h4>
                  <p class="card-text font-small-3 mb-0">Sedes</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--/ Statistics Card -->
  </div>

  <div class="row match-height">
    <!-- Revenue Report Card -->
    <div class="col-lg-12 col-12">
      <div class="card card-revenue-budget">
        <div class="row mx-0">
          <div class="col-md-8 col-12 revenue-report-wrapper">
            <div class="d-sm-flex justify-content-between align-items-center mb-3">
              <h4 class="card-title mb-50 mb-sm-0">Raciones por grado</h4>
              <div class="d-flex align-items-center">
                <div class="d-flex align-items-center me-2">
                  <span class="bullet bullet-primary font-small-3 me-50 cursor-pointer"></span>
                  <span>Consumo</span>
                </div>
                <div class="d-flex align-items-center ms-75">
                  <span class="bullet bullet-warning font-small-3 me-50 cursor-pointer"></span>
                  <span>Novedades</span>
                </div>
              </div>
            </div>
            <div id="revenue-report-chart"></div>
          </div>
          <div class="col-md-4 col-12 budget-wrapper">
            <div class="card">
              <div class="card-header d-flex justify-content-between align-items-end">
                <h4 class="card-title">Total beneficiarios por programa</h4>
               
              </div>
              <div class="card-body">
                <div id="customer-chart" class="mt-2 mb-1"></div>
                <div class="pt-25">
                  <div class="d-flex justify-content-between mb-1">
                    <div class="d-flex align-items-center">
                      <i data-feather="circle" class="font-medium-1 text-primary"></i>
                      <span class="fw-bold ms-75">RPS</span>
                    </div>
                    <span>{{number_format(count($rps))}}</span>
                  </div>
                  <div class="d-flex justify-content-between mb-1">
                    <div class="d-flex align-items-center">
                      <i data-feather="circle" class="font-medium-1 text-warning"></i>
                      <span class="fw-bold ms-75">RI</span>
                    </div>
                    <span>{{number_format(count($ri))}}</span>
                  </div>
                 
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    

    
    <!--/ Revenue Report Card -->
  </div>

  
</section>
<!-- Dashboard Ecommerce ends -->
@endsection

@section('vendor-script')
  {{-- vendor files --}}
  <script src="{{ asset(mix('vendors/js/charts/apexcharts.min.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/extensions/toastr.min.js')) }}"></script>
@endsection
@section('page-script')
  {{-- Page js files --}}
  <script>
    $(window).on('load', function () {
    'use strict';

    var $barColor = '#f3f3f3';
    var $trackBgColor = '#EBEBEB';
    var $textMutedColor = '#b9b9c3';
    var $budgetStrokeColor2 = '#dcdae3';
    var $goalStrokeColor2 = '#51e5a8';
    var $strokeColor = '#ebe9f1';
    var $textHeadingColor = '#5e5873';
    var $earningsStrokeColor2 = '#28c76f66';
    var $earningsStrokeColor3 = '#28c76f33';

    var $statisticsOrderChart = document.querySelector('#statistics-order-chart');
    var $statisticsProfitChart = document.querySelector('#statistics-profit-chart');
    var $earningsChart = document.querySelector('#earnings-chart');
    var $revenueReportChart = document.querySelector('#revenue-report-chart');
    var $budgetChart = document.querySelector('#budget-chart');
    var $browserStateChartPrimary = document.querySelector('#browser-state-chart-primary');
    var $browserStateChartWarning = document.querySelector('#browser-state-chart-warning');
    var $browserStateChartSecondary = document.querySelector('#browser-state-chart-secondary');
    var $browserStateChartInfo = document.querySelector('#browser-state-chart-info');
    var $browserStateChartDanger = document.querySelector('#browser-state-chart-danger');
    var $goalOverviewChart = document.querySelector('#goal-overview-radial-bar-chart');
    var $customerChart = document.querySelector('#customer-chart');

    var statisticsOrderChartOptions;
    var statisticsProfitChartOptions;
    var earningsChartOptions;
    var revenueReportChartOptions;
    var budgetChartOptions;
    var browserStatePrimaryChartOptions;
    var browserStateWarningChartOptions;
    var browserStateSecondaryChartOptions;
    var browserStateInfoChartOptions;
    var browserStateDangerChartOptions;
    var goalOverviewChartOptions;
    var customerChartOptions;

    var statisticsOrderChart;
    var statisticsProfitChart;
    var earningsChart;
    var revenueReportChart;
    var budgetChart;
    var browserStatePrimaryChart;
    var browserStateDangerChart;
    var browserStateInfoChart;
    var browserStateSecondaryChart;
    var browserStateWarningChart;
    var goalOverviewChart;
    var customerChart;
    var isRtl = $('html').attr('data-textdirection') === 'rtl';

    // On load Toast
    setTimeout(function () {
      toastr['success'](
        'Has iniciado sesión correctamente!',
        '👋 Bienvenid@ {{Auth::user()->name}} !',
        {
          closeButton: true,
          tapToDismiss: false,
          rtl: isRtl
        }
      );
    }, 2000);

    //------------ Statistics Bar Chart ------------
    //----------------------------------------------
    statisticsOrderChartOptions = {
      chart: {
        height: 70,
        type: 'bar',
        stacked: true,
        toolbar: {
          show: false
        }
      },
      grid: {
        show: false,
        padding: {
          left: 0,
          right: 0,
          top: -15,
          bottom: -15
        }
      },
      plotOptions: {
        bar: {
          horizontal: false,
          columnWidth: '20%',
          startingShape: 'rounded',
          colors: {
            backgroundBarColors: [$barColor, $barColor, $barColor, $barColor, $barColor],
            backgroundBarRadius: 5
          }
        }
      },
      legend: {
        show: false
      },
      dataLabels: {
        enabled: false
      },
      colors: [window.colors.solid.warning],
      series: [
        {
          name: '2020',
          data: [45, 85, 65, 45, 65]
        }
      ],
      xaxis: {
        labels: {
          show: false
        },
        axisBorder: {
          show: false
        },
        axisTicks: {
          show: false
        }
      },
      yaxis: {
        show: false
      },
      tooltip: {
        x: {
          show: false
        }
      }
    };
    statisticsOrderChart = new ApexCharts($statisticsOrderChart, statisticsOrderChartOptions);
    statisticsOrderChart.render();

    //------------ Statistics Line Chart ------------
    //-----------------------------------------------
    statisticsProfitChartOptions = {
      chart: {
        height: 70,
        type: 'line',
        toolbar: {
          show: false
        },
        zoom: {
          enabled: false
        }
      },
      grid: {
        borderColor: $trackBgColor,
        strokeDashArray: 5,
        xaxis: {
          lines: {
            show: true
          }
        },
        yaxis: {
          lines: {
            show: false
          }
        },
        padding: {
          top: -30,
          bottom: -10
        }
      },
      stroke: {
        width: 3
      },
      colors: [window.colors.solid.info],
      series: [
        {
          data: [0, 20, 5, 30, 15, 45]
        }
      ],
      markers: {
        size: 2,
        colors: window.colors.solid.info,
        strokeColors: window.colors.solid.info,
        strokeWidth: 2,
        strokeOpacity: 1,
        strokeDashArray: 0,
        fillOpacity: 1,
        discrete: [
          {
            seriesIndex: 0,
            dataPointIndex: 5,
            fillColor: '#ffffff',
            strokeColor: window.colors.solid.info,
            size: 5
          }
        ],
        shape: 'circle',
        radius: 2,
        hover: {
          size: 3
        }
      },
      xaxis: {
        labels: {
          show: true,
          style: {
            fontSize: '0px'
          }
        },
        axisBorder: {
          show: false
        },
        axisTicks: {
          show: false
        }
      },
      yaxis: {
        show: false
      },
      tooltip: {
        x: {
          show: false
        }
      }
    };
    statisticsProfitChart = new ApexCharts($statisticsProfitChart, statisticsProfitChartOptions);
    statisticsProfitChart.render();

    //--------------- Earnings Chart ---------------
    //----------------------------------------------
    earningsChartOptions = {
      chart: {
        type: 'donut',
        height: 120,
        toolbar: {
          show: false
        }
      },
      dataLabels: {
        enabled: false
      },
      series: [53, 16, 31],
      legend: { show: false },
      comparedResult: [2, -3, 8],
      labels: ['App', 'Service', 'Product'],
      stroke: { width: 0 },
      colors: [$earningsStrokeColor2, $earningsStrokeColor3, window.colors.solid.success],
      grid: {
        padding: {
          right: -20,
          bottom: -8,
          left: -20
        }
      },
      plotOptions: {
        pie: {
          startAngle: -10,
          donut: {
            labels: {
              show: true,
              name: {
                offsetY: 15
              },
              value: {
                offsetY: -15,
                formatter: function (val) {
                  return parseInt(val) + '%';
                }
              },
              total: {
                show: true,
                offsetY: 15,
                label: 'App',
                formatter: function (w) {
                  return '53%';
                }
              }
            }
          }
        }
      },
      responsive: [
        {
          breakpoint: 1325,
          options: {
            chart: {
              height: 100
            }
          }
        },
        {
          breakpoint: 1200,
          options: {
            chart: {
              height: 120
            }
          }
        },
        {
          breakpoint: 1045,
          options: {
            chart: {
              height: 100
            }
          }
        },
        {
          breakpoint: 992,
          options: {
            chart: {
              height: 120
            }
          }
        }
      ]
    };
    earningsChart = new ApexCharts($earningsChart, earningsChartOptions);
    earningsChart.render();

    //------------ Revenue Report Chart ------------
    //----------------------------------------------
    revenueReportChartOptions = {
      chart: {
        height: 430,
        stacked: true,
        type: 'bar',
        toolbar: { show: true }
      },
      plotOptions: {
        bar: {
          columnWidth: '17%',
          endingShape: 'rounded'
        },
        distributed: true
      },
      colors: [window.colors.solid.primary, window.colors.solid.warning],
      series: [
        {
          name: 'Dias de consumo',
          data: [
            @foreach($consumo as $consumos)
            {{$consumos->consumo}},
            @endforeach
          ]
        },
        {
          name: 'Novedades',
          data: [
            @foreach($consumo as $consumos)
            {{$consumos->novedad}},
            @endforeach
          ]
        }
      ],
      dataLabels: {
        enabled: false
      },
      legend: {
        show: true
      },
      grid: {
        padding: {
          top: -20,
          bottom: -10
        },
        yaxis: {
          lines: { show: true }
        }
      },
      xaxis: {
        categories: [
          @foreach($consumo as $consumos)
          'Grado {{$consumos->grado}}',
          @endforeach
        ],
        labels: {
          style: {
            colors: $textMutedColor,
            fontSize: '0.86rem'
          }
        },
        axisTicks: {
          show: true
        },
        axisBorder: {
          show: true
        }
      },
      yaxis: {
        labels: {
          style: {
            colors: $textMutedColor,
            fontSize: '0.86rem'
          }
        }
      }
    };
    revenueReportChart = new ApexCharts($revenueReportChart, revenueReportChartOptions);
    revenueReportChart.render();

    //---------------- Budget Chart ----------------
    //----------------------------------------------
    budgetChartOptions = {
      chart: {
        height: 80,
        toolbar: { show: false },
        zoom: { enabled: true },
        type: 'line',
        sparkline: { enabled: true }
      },
      stroke: {
        curve: 'smooth',
        dashArray: [0, 5],
        width: [2]
      },
      colors: [window.colors.solid.primary, $budgetStrokeColor2],
      series: [
        {
          data: [61, 48, 69, 52, 60, 40, 79, 60, 59, 43, 62]
        },
        {
          data: [20, 10, 30, 15, 23, 0, 25, 15, 20, 5, 27]
        }
      ],
      tooltip: {
        enabled: false
      }
    };
    budgetChart = new ApexCharts($budgetChart, budgetChartOptions);
    budgetChart.render();

    //------------ Browser State Charts ------------
    //----------------------------------------------

    // State Primary Chart
    browserStatePrimaryChartOptions = {
      chart: {
        height: 30,
        width: 30,
        type: 'radialBar'
      },
      grid: {
        show: false,
        padding: {
          left: -15,
          right: -15,
          top: -12,
          bottom: -15
        }
      },
      colors: [window.colors.solid.primary],
      series: [54.4],
      plotOptions: {
        radialBar: {
          hollow: {
            size: '22%'
          },
          track: {
            background: $trackBgColor
          },
          dataLabels: {
            showOn: 'always',
            name: {
              show: false
            },
            value: {
              show: false
            }
          }
        }
      },
      stroke: {
        lineCap: 'round'
      }
    };
    browserStatePrimaryChart = new ApexCharts($browserStateChartPrimary, browserStatePrimaryChartOptions);
    browserStatePrimaryChart.render();

    // State Warning Chart
    browserStateWarningChartOptions = {
      chart: {
        height: 30,
        width: 30,
        type: 'radialBar'
      },
      grid: {
        show: false,
        padding: {
          left: -15,
          right: -15,
          top: -12,
          bottom: -15
        }
      },
      colors: [window.colors.solid.warning],
      series: [6.1],
      plotOptions: {
        radialBar: {
          hollow: {
            size: '22%'
          },
          track: {
            background: $trackBgColor
          },
          dataLabels: {
            showOn: 'always',
            name: {
              show: false
            },
            value: {
              show: false
            }
          }
        }
      },
      stroke: {
        lineCap: 'round'
      }
    };
    browserStateWarningChart = new ApexCharts($browserStateChartWarning, browserStateWarningChartOptions);
    browserStateWarningChart.render();

    // State Secondary Chart 1
    browserStateSecondaryChartOptions = {
      chart: {
        height: 30,
        width: 30,
        type: 'radialBar'
      },
      grid: {
        show: false,
        padding: {
          left: -15,
          right: -15,
          top: -12,
          bottom: -15
        }
      },
      colors: [window.colors.solid.secondary],
      series: [14.6],
      plotOptions: {
        radialBar: {
          hollow: {
            size: '22%'
          },
          track: {
            background: $trackBgColor
          },
          dataLabels: {
            showOn: 'always',
            name: {
              show: false
            },
            value: {
              show: false
            }
          }
        }
      },
      stroke: {
        lineCap: 'round'
      }
    };
    browserStateSecondaryChart = new ApexCharts($browserStateChartSecondary, browserStateSecondaryChartOptions);
    browserStateSecondaryChart.render();

    // State Info Chart
    browserStateInfoChartOptions = {
      chart: {
        height: 30,
        width: 30,
        type: 'radialBar'
      },
      grid: {
        show: false,
        padding: {
          left: -15,
          right: -15,
          top: -12,
          bottom: -15
        }
      },
      colors: [window.colors.solid.info],
      series: [4.2],
      plotOptions: {
        radialBar: {
          hollow: {
            size: '22%'
          },
          track: {
            background: $trackBgColor
          },
          dataLabels: {
            showOn: 'always',
            name: {
              show: false
            },
            value: {
              show: false
            }
          }
        }
      },
      stroke: {
        lineCap: 'round'
      }
    };
    browserStateInfoChart = new ApexCharts($browserStateChartInfo, browserStateInfoChartOptions);
    browserStateInfoChart.render();

    // State Danger Chart
    browserStateDangerChartOptions = {
      chart: {
        height: 30,
        width: 30,
        type: 'radialBar'
      },
      grid: {
        show: false,
        padding: {
          left: -15,
          right: -15,
          top: -12,
          bottom: -15
        }
      },
      colors: [window.colors.solid.danger],
      series: [8.4],
      plotOptions: {
        radialBar: {
          hollow: {
            size: '22%'
          },
          track: {
            background: $trackBgColor
          },
          dataLabels: {
            showOn: 'always',
            name: {
              show: false
            },
            value: {
              show: false
            }
          }
        }
      },
      stroke: {
        lineCap: 'round'
      }
    };
    browserStateDangerChart = new ApexCharts($browserStateChartDanger, browserStateDangerChartOptions);
    browserStateDangerChart.render();

    //------------ Goal Overview Chart ------------
    //---------------------------------------------
    goalOverviewChartOptions = {
      chart: {
        height: 245,
        type: 'radialBar',
        sparkline: {
          enabled: true
        },
        dropShadow: {
          enabled: true,
          blur: 3,
          left: 1,
          top: 1,
          opacity: 0.1
        }
      },
      colors: [$goalStrokeColor2],
      plotOptions: {
        radialBar: {
          offsetY: -10,
          startAngle: -150,
          endAngle: 150,
          hollow: {
            size: '77%'
          },
          track: {
            background: $strokeColor,
            strokeWidth: '50%'
          },
          dataLabels: {
            name: {
              show: false
            },
            value: {
              color: $textHeadingColor,
              fontSize: '2.86rem',
              fontWeight: '600'
            }
          }
        }
      },
      fill: {
        type: 'gradient',
        gradient: {
          shade: 'dark',
          type: 'horizontal',
          shadeIntensity: 0.5,
          gradientToColors: [window.colors.solid.success],
          inverseColors: true,
          opacityFrom: 1,
          opacityTo: 1,
          stops: [0, 100]
        }
      },
      series: [83],
      stroke: {
        lineCap: 'round'
      },
      grid: {
        padding: {
          bottom: 30
        }
      }
    };
    goalOverviewChart = new ApexCharts($goalOverviewChart, goalOverviewChartOptions);
    goalOverviewChart.render();

    customerChartOptions = {
      chart: {
        type: 'pie',
        height: 325,
        toolbar: {
          show: true
        }
      },
      labels: ['Rps', 'Ri'],
      series: [
          {{count($rps)}},
          {{count($ri)}}
      ],
      dataLabels: {
        enabled: true
      },
      legend: { show: false },
      stroke: {
        width: 4
      },
      colors: [window.colors.solid.primary, window.colors.solid.warning, window.colors.solid.danger]
    };
    customerChart = new ApexCharts($customerChart, customerChartOptions);
    customerChart.render();
  });
  </script>
@endsection
