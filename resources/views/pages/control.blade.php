
@extends('layouts/contentLayoutMaster')

@section('title', 'Control')

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
        <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
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
        <li class="button-list active"><a href="dashboard_realtime">Realtime</a></li>
      </ul>
    </div>
  @endsection

  @section('content')

    <section id="control">
      <div id="guts">
        <div class="col-lg-12" id="time">
            <span id='date'></span>
            <span style="color:black">|</span>
            <span id='clock'></span>
        </div>
        <br />
        <form method="post"></form>
        <div class="row">

          <!-- DEVICE 1 -->
          <div class="col-lg-3">
            <div class="card">
              <div class="card-header-chart">
                <h4>DEVICE 1</h4>
              </div>
              <div class="card-body">
                <div class="form-group">

                  <div class="checkbox">
                    <input type="checkbox" name="statdev1" id="statdev1" data-style="ios">
                    <input type="hidden" name="hidden_statdev1" id="hidden_statdev1" value="on">
                  </div>

                </div>
              </div>
            </div>
          </div>
          <!-- END DEVICE 1 -->

          <!-- DEVICE 2 -->
          <div class="col-lg-3">
            <div class="card">
              <div class="card-header-chart">
                <h4>DEVICE 2</h4>
              </div>
              <div class="card-body">
                <div class="form-group">

                  <div class="checkbox">
                    <input type="checkbox" name="statdev2" id="statdev2" checked data-style="ios">
                    <input type="hidden" name="hidden_statdev2" id="hidden_statdev2" value="on">
                  </div>

                </div>
              </div>
            </div>
          </div>

        <!-- END DEVICE 2-->

          <!-- DEVICE 3 -->
          <div class="col-lg-3">
            <div class="card">
              <div class="card-header-chart">
                <h4>DEVICE 3</h4>
              </div>
              <div class="card-body">
                <div class="form-group">

                  <div class="checkbox">
                    <input type="checkbox" name="statdev3" id="statdev3" data-style="ios">
                    <input type="hidden" name="hidden_statdev3" id="hidden_statdev3" value="on">
                  </div>

                </div>
              </div>
            </div>
          </div>
          <!-- END DEVICE 3-->

          <!-- DEVICE 4 -->
          <div class="col-lg-3">
            <div class="card">
              <div class="card-header-chart">
                <h4>DEVICE 4</h4>
              </div>
              <div class="card-body">
                <div class="form-group">

                  <div class="checkbox">
                    <input type="checkbox" name="statdev4" id="statdev4" checked data-style="ios">
                    <input type="hidden" name="hidden_statdev4" id="hidden_statdev4" value="on">
                  </div>

                </div>
              </div>
            </div>
          </div>
          <!-- END DEVICE 4 -->


        </div>
        <!-- END row -->

        <!--
        <div class="row">
          <div class="col-12">
            <div class="footerbutton">
              <button type="submit" class="btn btn-primary">save</button>
            </div>
          </div>

        </div>
      -->
        </div>
        <!-- END guts -->

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
        <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
        <script src="{{ asset(mix('vendors/js/charts/apexcharts.min.js')) }}"></script>
        <script src="https://code.highcharts.com/modules/exporting.js"></script>

@endsection
@section('page-script')
        <!-- Page js files -->
        <script src="{{ asset('js/checkbox.js') }}"></script>
        <script src="{{ asset('js/sidenav.js') }}"></script>
        <script src="{{ asset('js/date.js') }}"></script>
        <script src="{{ asset('js/clock.js') }}"></script>
        <script src="{{ asset('js/toggle.js') }}"></script>
        <!--<script src="{{ asset('js/scripts/ag-grid/ag-grid.js') }}"></script>-->
@endsection
