
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
        <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap2-toggle.min.css" rel="stylesheet">
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
            <span id="timeseparator">|</span>
            <span id='clock'></span>
        </div>
        <br />
        <form method="post"></form>
        <div class="row">

          <!-- DEVICE 1 -->
          <div class="col-lg-2">
            <div class="card">
              <div class="card-header-chart">
                <h4>MASTER</h4>
              </div>
              <div class="row-card-control">
                <div class="col-lg-12">
                  <div class="card" style="margin-bottom: 0 !important">
                    <div class="card-body-header">
                      <h6>Lantai 1</h4>
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
              </div>
              <div class="row-card-control">
                <div class="col-lg-12">
                  <div class="card" style="margin-bottom: 0 !important">
                    <div class="card-body-header">
                      <h6>Lantai 2</h4>
                    </div>
                    <div class="card-body">
                    <div class="form-group">
                      <div class="checkbox">
                        <input type="checkbox" name="statdev6" id="statdev6" data-style="ios">
                        <input type="hidden" name="hidden_statdev6" id="hidden_statdev6" value="on">
                      </div>
                  </div>
                  </div>
                </div>
                </div>
              </div>
            </div>
          </div>

          <!-- END DEVICE 1 -->

          <!-- DEVICE 2 -->
          <div class="col-lg-5">
            <div class="card">
              <div class="card-header-chart">
                <h4>LANTAI 1</h4>
              </div>
              <div class="row-card-control">
                <div class="col-lg-6">
                  <div class="card" style="margin-bottom: 0 !important">
                    <div class="card-body-header">
                      <h6>Ruang 1</h4>
                    </div>
                    <div class="card-body">
                    <div class="form-group">
                      <div class="checkbox">
                        <input type="checkbox" name="statdev2" id="statdev2" data-style="ios">
                        <input type="hidden" name="hidden_statdev2" id="hidden_statdev2" value="on">
                      </div>
                  </div>
                  </div>
                </div>
                </div>
                <div class="col-lg-6">
                  <div class="card" style="margin-bottom: 0 !important">
                    <div class="card-body-header">
                      <h6>Ruang 2</h4>
                    </div>
                    <div class="card-body">
                    <div class="form-group">
                      <div class="checkbox">
                        <input type="checkbox" name="statdev4" id="statdev4" data-style="ios">
                        <input type="hidden" name="hidden_statdev4" id="hidden_statdev4" value="on">
                      </div>
                  </div>
                  </div>
                </div>
                </div>
              </div>
              <div class="row-card-control">
                <div class="col-lg-12">
                  <div class="card" style="margin-bottom: 0 !important">
                    <div class="card-body-header">
                      <h6>Ruang 3</h4>
                    </div>
                    <div class="card-body">
                    <div class="form-group">
                      <div class="checkbox">
                        <input type="checkbox" name="statdev5" id="statdev5" data-style="ios">
                        <input type="hidden" name="hidden_statdev5" id="hidden_statdev5" value="on">
                      </div>
                  </div>
                  </div>
                </div>
                </div>
              </div>
            </div>
          </div>

        <!-- END DEVICE 2-->

          <!-- DEVICE 3 -->
          <div class="col-lg-5">
            <div class="card">
              <div class="card-header-chart">
                <h4>LANTAI 2</h4>
              </div>
              <div class="row-card-control">
                <div class="col-lg-4">
                  <div class="card" style="margin-bottom: 0 !important">
                    <div class="card-body-header">
                      <h6>Ruang 1</h4>
                    </div>
                    <div class="card-body">
                    <div class="form-group">
                      <div class="checkbox">
                        <input type="checkbox" name="statdev7" id="statdev7" data-style="ios">
                        <input type="hidden" name="hidden_statdev7" id="hidden_statdev7" value="on">
                      </div>
                  </div>
                  </div>
                </div>
                </div>
                <div class="col-lg-4">
                  <div class="card" style="margin-bottom: 0 !important">
                    <div class="card-body-header">
                      <h6>Ruang 2</h4>
                    </div>
                    <div class="card-body">
                    <div class="form-group">
                      <div class="checkbox">
                        <input type="checkbox" name="statdev8" id="statdev8" data-style="ios">
                        <input type="hidden" name="hidden_statdev8" id="hidden_statdev8" value="on">
                      </div>
                  </div>
                  </div>
                </div>
                </div>
                <div class="col-lg-4">
                  <div class="card" style="margin-bottom: 0 !important">
                    <div class="card-body-header">
                      <h6>Ruang 3</h4>
                    </div>
                    <div class="card-body">
                    <div class="form-group">
                      <div class="checkbox">
                        <input type="checkbox" name="statdev9" id="statdev9" data-style="ios">
                        <input type="hidden" name="hidden_statdev9" id="hidden_statdev9" value="on">
                      </div>
                  </div>
                  </div>
                </div>
                </div>
              </div>
              <div class="row-card-control">
                <div class="col-lg-6">
                  <div class="card" style="margin-bottom: 0 !important">
                    <div class="card-body-header">
                      <h6>Ruang 4</h4>
                    </div>
                    <div class="card-body">
                    <div class="form-group">
                      <div class="checkbox">
                        <input type="checkbox" name="statdev10" id="statdev10" data-style="ios">
                        <input type="hidden" name="hidden_statdev10" id="hidden_statdev10" value="on">
                      </div>
                  </div>
                  </div>
                </div>
                </div>
                <div class="col-lg-6">
                  <div class="card" style="margin-bottom: 0 !important">
                    <div class="card-body-header">
                      <h6>Ruang 5</h4>
                    </div>
                    <div class="card-body">
                    <div class="form-group">
                      <div class="checkbox">
                        <input type="checkbox" name="statdev11" id="statdev11" data-style="ios">
                        <input type="hidden" name="hidden_statdev11" id="hidden_statdev11" value="on">
                      </div>
                  </div>
                  </div>
                </div>
                </div>
              </div>
            </div>
          </div>
          <!-- END DEVICE 3-->

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
