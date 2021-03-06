
@extends('layouts/contentLayoutMaster')

@section('title', 'Usages')

@section('vendor-style')
        <!-- vendor css files -->
        <link rel="stylesheet" href="{{ asset(mix('vendors/css/charts/apexcharts.css')) }}">
        <link rel="stylesheet" href="//cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">

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
        <link rel="stylesheet" href="{{ asset('vendors/css/extensions/toastr.css') }}">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css" integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc" crossorigin="anonymous">
        <!--<link rel="stylesheet" href="{{ asset('css/pages/aggrid.css') }}">-->


  @endsection

  @section('content')

    <section id="usages">
      <div id="guts">
      <div class="gear">
        <a href="javascript:void(0)">
          <i class="fas fa-cog fa-spin"></i>
        </a>
      </div>
      <div class="gearMenu">
        <div class="gearContainer">
          <div class="row">
            <div class="col-lg-12">
              <button type="button" class="close">
                <span aria-hidden="true">×</span>
              </button>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-3">
              <label for="gedung" style="color: black; font-weight: 500;">Gedung</label>
            </div>
            <div class="col-lg-9">
              <select id="gedung" style="color: black; font-weight: 500;">
                @foreach($gedung as $row)
                  <option value="{{ $row->id }}">{{ $row->gedung }}</option>
                @endforeach
              </select>
            </div>
        </div>
        </div>
      </div>
      <div id="tab-button">
        <div class="row">
        <div class="col-lg-9" id="time">
            <span id='date'></span>
            <span id="timeseparator">|</span><br id="br-time" style="display: none">
            <span id='clock'></span>
        </div>

        <div class="col-lg-3">

          <div class="list-group" id="list-tab" role="tablist">
            <a class="list-group-item list-group-item-action active" id="list-today-list" data-toggle="list" href="#list-today" role="tab" aria-controls="today">Today</a>
            <a class="list-group-item list-group-item-action" id="list-month-list" data-toggle="list" href="#list-month" role="tab" aria-controls="month">Month</a>
            <a class="list-group-item list-group-item-action" id="list-year-list" data-toggle="list" href="#list-year" role="tab" aria-controls="year">Year</a>
          </div>

          </div>
          </div>
        </div>

        <div class="tab-content">

          <div class="tab-pane fade show active" id="list-today" role="tabpanel" aria-labelledby="list-today-list">

            <div class="row">

              <div class="col-lg-6 col-12">
                <div class="card">
                  <div class="card-header-chart">
                    <h4>1ST FLOOR</h4>
                  </div>
                  <div class="row-card">
                  <div class="col-lg-12">
                      <div id="elantai1T"></div>
                    </div>
                    </div>
                    <div class="col-lg-12">
                      <table id="etlantai1T">
                        <thead>
                          <tr>
                            <th>Room</th>
                            <th>Energy (kWh)</th>
                          </tr>

                        </thead>
                      </table>
                    </div>
                  </div>
                  </div>

              <div class="col-lg-6 col-12">
                <div class="card">
                  <div class="card-header-chart">
                    <h4>2ND FLOOR</h4>
                  </div>
                  <div class="row-card">
                  <div class="col-lg-12">
                      <div id="elantai2T"></div>
                    </div>
                  </div>
                    <div class="col-lg-12">
                      <table id="etlantai2T">
                        <thead>
                          <tr>
                            <th>Room</th>
                            <th>Energy (kWh)</th>
                          </tr>

                        </thead>
                      </table>

                    </div>
                  </div>
                  </div>
            </div>

            </div>


          <div class="tab-pane fade" id="list-month" role="tabpanel" aria-labelledby="list-month-list">
            <div class="row">

              <div class="col-lg-6">
                <div class="card">
                  <div class="card-header-chart">
                    <h4>1ST FLOOR</h4>
                  </div>
                  <div class="row-card">
                  <div class="col-lg-12">
                      <div id="elantai1M"></div>
                    </div>
                    </div>
                    <div class="col-lg-12">
                      <table id="etlantai1M">
                        <thead>
                          <tr>
                            <th>Room</th>
                            <th>Energy (kWh)</th>
                          </tr>

                        </thead>
                      </table>
                    </div>
                  </div>
                  </div>

              <div class="col-lg-6">
                <div class="card">
                  <div class="card-header-chart">
                    <h4>2ND FLOOR</h4>
                  </div>
                  <div class="row-card">
                  <div class="col-lg-12">
                      <div id="elantai2M"></div>
                    </div>
                  </div>
                    <div class="col-lg-12">
                      <table id="etlantai2M">
                        <thead>
                          <tr>
                            <th>Room</th>
                            <th>Energy (kWh)</th>
                          </tr>

                        </thead>
                      </table>

                    </div>
                  </div>
                  </div>
            </div>
          </div>

          <div class="tab-pane fade" id="list-year" role="tabpanel" aria-labelledby="list-year-list">
            <div class="row">

              <div class="col-lg-6">
                <div class="card">
                  <div class="card-header-chart">
                    <h4>1ST FLOOR</h4>
                  </div>
                  <div class="row-card">
                  <div class="col-lg-12">
                      <div id="elantai1Y"></div>
                    </div>
                    </div>
                    <div class="col-lg-12">
                      <table id="etlantai1Y">
                        <thead>
                          <tr>
                            <th>Room</th>
                            <th>Energy (kWh)</th>
                          </tr>

                        </thead>
                      </table>
                    </div>
                  </div>
                  </div>

              <div class="col-lg-6">
                <div class="card">
                  <div class="card-header-chart">
                    <h4>2ND FLOOR</h4>
                  </div>
                  <div class="row-card">
                  <div class="col-lg-12">
                      <div id="elantai2Y"></div>
                    </div>
                  </div>
                    <div class="col-lg-12">
                      <table id="etlantai2Y">
                        <thead>
                          <tr>
                            <th>Room</th>
                            <th>Energy (kWh)</th>
                          </tr>

                        </thead>
                      </table>

                    </div>
                  </div>
                  </div>
            </div>
          </div>
        </div>
        </div>

    </section>
  {!! Charts::scripts() !!}
  @endsection

@section('vendor-script')
        <!-- vendor files -->
        <!--<script src="{{ asset('vendors/js/tables/ag-grid/ag-grid-community.min.noStyle.js') }}"></script>-->
        <script src="https://code.highcharts.com/modules/solid-gauge.js"></script>
        <script src="//cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>

        <script src="{{ asset(mix('vendors/js/charts/apexcharts.min.js')) }}"></script>
        <script src="{{ asset('vendors/js/extensions/toastr.min.js') }}"></script>
        <script src="https://code.highcharts.com/modules/exporting.js"></script>

@endsection
@section('page-script')
        <!-- Page js files -->
        <script>
        toastr.options.positionClass = 'toast-top-right';
          @if(session()-> has('status'))
            toastr.info("{{ session('status') }}");
            @elseif(session()->has('success'))
              toastr.success("{{ session('success') }}")
            @elseif(session()->has('error'))
              toastr.error("{{ session('error') }}")
          @endif
        </script>
        <script>
          $('.gear').click(function(){
            $('.gearMenu').css('transform','translateX(0)');
          })
          $('.close').click(function(){
            $('.gearMenu').css('transform','translateX(500px)');
          })
        </script>
        <script>
          
        </script>
        <script src="{{ asset('js/checkHardware.js') }}"></script>
        <script src="{{ asset('js/tab-button.js') }}"></script>

        <!-- Today Usages -->
        <script src="{{ asset('js/user_datatable.js') }}"></script>
        <script src="{{ asset('js/elantai1T.js') }}"></script>
        <script src="{{ asset('js/etlantai1T.js') }}"></script>
        <script src="{{ asset('js/elantai2T.js') }}"></script>
        <script src="{{ asset('js/etlantai2T.js') }}"></script>

        <!-- Month Usages -->
        <script src="{{ asset('js/elantai1M.js') }}"></script>
        <script src="{{ asset('js/etlantai1M.js') }}"></script>
        <script src="{{ asset('js/elantai2M.js') }}"></script>
        <script src="{{ asset('js/etlantai2M.js') }}"></script>

        <!-- Year Usages -->
        <script src="{{ asset('js/elantai1Y.js') }}"></script>
        <script src="{{ asset('js/etlantai1Y.js') }}"></script>
        <script src="{{ asset('js/elantai2Y.js') }}"></script>
        <script src="{{ asset('js/etlantai2Y.js') }}"></script>

        <script src="{{ asset('js/sidenav.js') }}"></script>
        <script src="{{ asset('js/date.js') }}"></script>
        <script src="{{ asset('js/clock.js') }}"></script>
        <script src="{{ asset('js/toggle.js') }}"></script>
        <!--<script src="{{ asset('js/scripts/ag-grid/ag-grid.js') }}"></script>-->
@endsection
