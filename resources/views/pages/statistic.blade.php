
@extends('layouts/contentLayoutMaster')

@section('title', 'Statistic')

@section('vendor-style')
        <!-- vendor css files -->
        <link rel="stylesheet" href="{{ asset(mix('vendors/css/charts/apexcharts.css')) }}">
        <!--
        <link rel="stylesheet" href="{{ asset('vendors/css/tables/ag-grid/ag-grid.css') }}">
        <link rel="stylesheet" href="{{ asset('vendors/css/tables/ag-grid/ag-theme-material.css') }}">
        -->
@endsection
@section('page-style')
        <!-- Page css files -->
        <link rel="stylesheet" href="{{ asset(mix('css/pages/dashboard-analytics.css')) }}">
        <link rel="stylesheet" href="{{ asset(mix('css/pages/card-analytics.css')) }}">
        <link rel="stylesheet" href="{{ asset('css/pages/styles.css') }}">
        <!--<link rel="stylesheet" href="{{ asset('css/pages/aggrid.css') }}">-->


  @endsection

  @section('button')
    <div class="button-wrapper" id="button-wrapper">
      <ul>
        <li class="button-list"><a href="dashboard_today">Today</a></li>
        <li class="button-list"><a href="dashboard_month">Month</a></li>
        <li class="button-list"><a href="dashboard_year">Year</a></li>
      </ul>
    </div>
  @endsection

  @section('content')

    <section id="statistic">
      <div id="tab-button">
        <div class="row" style="margin-top: -8px;">
          <div class="col-lg-6" id="time">
              <span id='date'></span>
              <span style="color:black">|</span>
              <span id='clock'></span>
          </div>
          <div class="col-lg-6">
            <ul class="button-wrapper nav nav-tabs justify-content-end" role="tablist">
              <li class="nav-item act">
                <a class="nav-link active" id="today-tab-end" data-toggle="tab" href="#today-align-end"
                  aria-controls="today-align-end" role="tab" aria-selected="true">Today</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="month-tab-end" data-toggle="tab" href="#month-align-end"
                  aria-controls="month-align-end" role="tab" aria-selected="false">Month</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="year-tab-end" data-toggle="tab" href="#year-align-end"
                  aria-controls="year-align-end" role="tab" aria-selected="false">Year</a>
              </li>
            </ul>
            </div>
      </div>
      </div>

      <div class="row" style="margin-top: -25px;">

  <div class="card-body">

    <div class="tab-content">

      <div class="tab-pane active" id="today-align-end" aria-labelledby="today-tab-end" role="tabpanel">

        <div class="row" id="guts">
                <div class="col-lg-4 col-sm-6 col-12">
                  <div class="card">
                      <div class="card-header d-flex align-items-start pb-0">
                        <div>
                          <h2 class="text-bold-700 mb-0">
                            <span id="power-value">0</span>
                          </h2>
                          <p>Watt</p>
                        </div>
                          <div class="avatar bg-primary bg-lighten-4 p-50 m-0">
                              <div class="avatar-content">
                                  <i class="feather icon-battery-charging text-primary font-medium-5"></i>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-lg-4 col-sm-6 col-12">
                <div class="card">
                    <div class="card-header d-flex align-items-start pb-0">
                        <div>
                            <h2 class="text-bold-700 mb-0">Rp1.352</h2>
                            <p>per KWH</p>
                        </div>
                        <div class="avatar bg-warning bg-lighten-4 p-50 m-0">
                            <div class="avatar-content">
                                <i class="feather icon-zap text-warning font-medium-5"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-sm-6 col-12">
              <div class="card">
                  <div class="card-header d-flex align-items-start pb-0">
                      <div>
                          <h2 class="text-bold-700 mb-0">Rp
                            <span id="cost">0</span>
                          </h2>
                          <p>Cost</p>
                      </div>
                      <div class="avatar bg-success bg-lighten-4 p-50 m-0">
                          <div class="avatar-content">
                              <i class="feather icon-credit-card text-primary font-medium-5"></i>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
        </div>
        <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
          <div class="card">
            <div class="card-header-chart">
              <h4>Power Usage</h4>
            </div>
            <div class="card-content-chart">
                <div id="daya"></div>
            </div>
            <div class="card-footer"></div>
           </div>
        </div>
      </div>
      </div>
      <div class="tab-pane" id="month-align-end" aria-labelledby="month-tab-end" role="tabpanel">
        <p>Month.</p>
      </div>
      <div class="tab-pane" id="year-align-end" aria-labelledby="year-tab-end" role="tabpanel">
        <p>Year.</p>
      </div>
    </div>
  </div>

</div>



<!--
    <div class="row-lg-12">
      <div class="card">
        <div class="card-content">
          <div class="card-body">
            <div class="row">
              <div class="col-12">
              </div>
            </div>
            <div id="table" class="aggrid ag-theme-material"></div>
          </div>
        </div>
      </div>
    </div>
  -->

    </section>

  {!! Charts::scripts() !!}
  @endsection

@section('vendor-script')
        <!-- vendor files -->
        <!--<script src="{{ asset('vendors/js/tables/ag-grid/ag-grid-community.min.noStyle.js') }}"></script>-->
        <script src="{{ asset(mix('vendors/js/charts/apexcharts.min.js')) }}"></script>
        <script src="https://code.highcharts.com/modules/exporting.js"></script>

@endsection
@section('page-script')
        <!-- Page js files -->
        <script src="{{ asset('js/tab-button.js') }}"></script>
        <script src="{{ asset('js/sidenav.js') }}"></script>
        <script src="{{ asset('js/date.js') }}"></script>
        <script src="{{ asset('js/clock.js') }}"></script>
        <script src="{{ asset('js/toggle.js') }}"></script>
        <script src="{{ asset('js/realtimevalue.js') }}"></script>
        <script src="{{ asset('js/daya.js') }}"></script>
        <!--<script src="{{ asset('js/scripts/ag-grid/ag-grid.js') }}"></script>-->
@endsection
