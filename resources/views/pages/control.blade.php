
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

  @section('content')

    <section id="control">
      <div id="guts">
        <div class="col-lg-12" id="time">
            <span id='date'></span>
            <span id="timeseparator">|</span>
            <span id='clock'></span>
        </div>
        <br />
        <div class="row">

          <!-- DEVICE 1 -->
          <div class="col-lg-2">
            <div class="card" style="background-color: #531616;">
              <div class="card-header-chart" style="border-bottom: 1px solid darkred">
                <h4 style="color:white;">MASTER</h4>
              </div>
              <div class="row-card-control">
                <div class="col-lg-12">
                  <div class="card" style="margin-bottom: 0 !important; background-color: #531616;">
                    <div class="card-body-header">
                      <h6 style="color:white;">1ST FLOOR</h4>
                    </div>
                    <div class="card-body">
                    <div class="form-group">
                      <div class="checkbox">
                        <input type="checkbox" name="mlantai1" id="mlantai1" data-style="ios">
                        <input type="hidden" name="hidden_mlantai1" id="hidden_mlantai1" value="on">
                      </div>
                  </div>
                  </div>
                </div>
                </div>
              </div>
              <div class="row-card-control">
                <div class="col-lg-12">
                  <div class="card" style="margin-bottom: 0 !important; background-color: #531616;">
                    <div class="card-body-header">
                      <h6 style="color:white;">2ND FLOOR</h4>
                    </div>
                    <div class="card-body">
                    <div class="form-group">
                      <div class="checkbox">
                        <input type="checkbox" name="mlantai2" id="mlantai2" data-style="ios">
                        <input type="hidden" name="hidden_mlantai2" id="hidden_mlantai2" value="on">
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
                <h4>1ST FLOOR</h4>
              </div>
              <div class="row-card-control">
                <div class="col-lg-4">
                  <div class="card" style="margin-bottom: 0 !important">
                    <div class="card-body-header">
                      <h6>1st Room</h4>
                    </div>
                    <div class="card-body">
                    <div class="form-group">
                      <div class="checkbox">
                        <input type="checkbox" name="l1r1" id="l1r1" data-style="ios">
                        <input type="hidden" name="hidden_l1r1" id="hidden_l1r1" value="on">
                      </div>
                  </div>
                  </div>
                </div>
                </div>
                <div class="col-lg-4">
                  <div class="card" style="margin-bottom: 0 !important">
                    <div class="card-body-header">
                      <h6>2nd Room</h4>
                    </div>
                    <div class="card-body">
                    <div class="form-group">
                      <div class="checkbox">
                        <input type="checkbox" name="l1r2" id="l1r2" data-style="ios">
                        <input type="hidden" name="hidden_l1r2" id="hidden_l1r2" value="on">
                      </div>
                  </div>
                  </div>
                </div>
                </div>
                <div class="col-lg-4">
                  <div class="card" style="margin-bottom: 0 !important">
                    <div class="card-body-header">
                      <h6>3rd Room</h4>
                    </div>
                    <div class="card-body">
                    <div class="form-group">
                      <div class="checkbox">
                        <input type="checkbox" name="l1r3" id="l1r3" data-style="ios">
                        <input type="hidden" name="hidden_l1r3" id="hidden_l1r3" value="on">
                      </div>
                  </div>
                  </div>
                </div>
                </div>
              </div>
              <div class="row-card-control">
                <div class="col-lg-4">
                  <div class="card" style="margin-bottom: 0 !important">
                    <div class="card-body-header">
                      <h6>4th Room</h4>
                    </div>
                    <div class="card-body">
                    <div class="form-group">
                      <div class="checkbox">
                        <input type="checkbox" name="l1r4" id="l1r4" data-style="ios">
                        <input type="hidden" name="hidden_l1r4" id="hidden_l1r4" value="on">
                      </div>
                  </div>
                  </div>
                </div>
                </div>
                <div class="col-lg-4">
                  <div class="card" style="margin-bottom: 0 !important">
                    <div class="card-body-header">
                      <h6>5th Room</h4>
                    </div>
                    <div class="card-body">
                    <div class="form-group">
                      <div class="checkbox">
                        <input type="checkbox" name="l1r5" id="l1r5" data-style="ios">
                        <input type="hidden" name="hidden_l1r5" id="hidden_l1r5" value="on">
                      </div>
                  </div>
                  </div>
                </div>
                </div>
                <div class="col-lg-4">
                  <div class="card" style="margin-bottom: 0 !important">
                    <div class="card-body-header">
                      <h6>6th Room</h4>
                    </div>
                    <div class="card-body">
                    <div class="form-group">
                      <div class="checkbox">
                        <input type="checkbox" name="l1r6" id="l1r6" data-style="ios">
                        <input type="hidden" name="hidden_l1r6" id="hidden_l1r6" value="on">
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
                <h4>2ND FLOOR</h4>
              </div>
              <div class="row-card-control">
                <div class="col-lg-4">
                  <div class="card" style="margin-bottom: 0 !important">
                    <div class="card-body-header">
                      <h6>1st Room</h4>
                    </div>
                    <div class="card-body">
                    <div class="form-group">
                      <div class="checkbox">
                        <input type="checkbox" name="l2r1" id="l2r1" data-style="ios">
                        <input type="hidden" name="hidden_l2r1" id="hidden_l2r1" value="on">
                      </div>
                  </div>
                  </div>
                </div>
                </div>
                <div class="col-lg-4">
                  <div class="card" style="margin-bottom: 0 !important">
                    <div class="card-body-header">
                      <h6>2nd Room</h4>
                    </div>
                    <div class="card-body">
                    <div class="form-group">
                      <div class="checkbox">
                        <input type="checkbox" name="l2r2" id="l2r2" data-style="ios">
                        <input type="hidden" name="hidden_l2r2" id="hidden_l2r2" value="on">
                      </div>
                  </div>
                  </div>
                </div>
                </div>
                <div class="col-lg-4">
                  <div class="card" style="margin-bottom: 0 !important">
                    <div class="card-body-header">
                      <h6>3rd Room</h4>
                    </div>
                    <div class="card-body">
                    <div class="form-group">
                      <div class="checkbox">
                        <input type="checkbox" name="l2r3" id="l2r3" data-style="ios">
                        <input type="hidden" name="hidden_l2r3" id="hidden_l2r3" value="on">
                      </div>
                  </div>
                  </div>
                </div>
                </div>
              </div>
              <div class="row-card-control">
                <div class="col-lg-4">
                  <div class="card" style="margin-bottom: 0 !important">
                    <div class="card-body-header">
                      <h6>4th Room</h4>
                    </div>
                    <div class="card-body">
                    <div class="form-group">
                      <div class="checkbox">
                        <input type="checkbox" name="l2r4" id="l2r4" data-style="ios">
                        <input type="hidden" name="hidden_l2r4" id="hidden_l2r4" value="on">
                      </div>
                  </div>
                  </div>
                </div>
                </div>
                <div class="col-lg-4">
                  <div class="card" style="margin-bottom: 0 !important">
                    <div class="card-body-header">
                      <h6>5th Room</h4>
                    </div>
                    <div class="card-body">
                    <div class="form-group">
                      <div class="checkbox">
                        <input type="checkbox" name="l2r5" id="l2r5" data-style="ios">
                        <input type="hidden" name="hidden_l2r5" id="hidden_l2r5" value="on">
                      </div>
                  </div>
                  </div>
                </div>
                </div>
                <div class="col-lg-4">
                  <div class="card" style="margin-bottom: 0 !important">
                    <div class="card-body-header">
                      <h6>6th Room</h4>
                    </div>
                    <div class="card-body">
                    <div class="form-group">
                      <div class="checkbox">
                        <input type="checkbox" name="l2r6" id="l2r6" data-style="ios">
                        <input type="hidden" name="hidden_l2r6" id="hidden_l2r6" value="on">
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
