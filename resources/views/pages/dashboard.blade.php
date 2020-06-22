@extends('layouts/contentLayoutMaster')

@section('title', 'Dashboard')

@section('vendor-style')
<!-- vendor css files -->
<link rel="stylesheet" href="{{ asset(mix('vendors/css/charts/apexcharts.css')) }}">
<link rel="stylesheet" href="cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">

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
<!--<link rel="stylesheet" href="{{ asset('css/pages/aggrid.css') }}">-->


@endsection

@section('content')

<section id="dashboard">
  <div id="guts">
    <div class="col-lg-12" id="time">
      <span id='date'></span>
      <span id="timeseparator" style="color:white">|</span><br id="br-time" style="display: none">
      <span id='clock'></span>
    </div>
    <br />
    <div class="row">

      <!-- LOAD 1 -->
      <div class="col-lg-4">
        <div class="card">
          <div class="card-header-chart">
            <h4>TOTAL ENERGY USAGES</h4>
          </div>
          <div class="row-card">
            <div class="col-lg-6" style="border-right: 1px dotted; margin-bottom: 0.5rem">
              <div class="row-header" style="border-bottom: 1px solid">
                <p>
                  TODAY
                </p>
              </div>
              <div id="daya" style="margin-top: 10px"></div>
            </div>
            <div class="col-lg-6">
              <div class="row-header" style="border-bottom: 1px solid">
                <p>
                  TILL NOW
                </p>
              </div>
              <div id="daya2" style="margin-top: 10px"></div>
            </div>
          </div>
        </div>
      </div>

      <!-- END LOAD 1 -->

      <!-- LOAD 2 -->
      <div class="col-lg-4">
        <div class="card">
          <div class="card-header-chart">
            <h4>TOTAL COST</h4>
          </div>
          <div class="row-card">
            <div class="col-lg-12">
              <div class="row">
                <div class="col-lg-8 col-sm-4 col-8">
                  <div id="tcost"></div>
                </div>
                <div class="col-lg-4 col-sm-2 col-4">
                  <div class="row-tcost">
                    <span id="tcost-value"></span>
                    <br />
                    <span id="tcost-text"></span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- END LOAD 2-->


      <!-- LOAD 3 -->
      <div class="col-lg-4">
        <div class="card">
          <div class="card" id="theoverlay" style="display: none;">
            <div class="card-body" id="theoverlay-body">
              <i class="feather icon-alert-triangle feather-lg" style="font-size: 50px; color: #ff2929; font-weight: bold;"></i><br />
              <h4 style="font-weight: bold; color: #ff2929; margin-top: 0.5rem">LOST CONNECTION TO HARDWARE</h4>
            </div>
          </div>
          <div class="card-header-chart">
            <h4>ACTIVE APPLIANCES</h4>
          </div>
          <div class="row-card">
            <div class="col-lg-6 col-sm-6 col-md-6 col-12" style="border-right: 1px dotted; margin-bottom: 20px; z-index: 2">
              <div class="row-header" style="border-bottom: 1px solid">
                <p>
                  1ST FLOOR
                </p>
              </div>
              <div class="row-chart">
                <div id="lantai1"></div>
              </div>

            </div>
            <div class="col-lg-6 col-sm-6 col-md-6 col-12">
              <div class="row-header" style="border-bottom: 1px solid">
                <p>
                  2ND FLOOR
                </p>
              </div>
              <div class="row-chart" style="margin-left: -8px;">
                <div id="lantai2"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- END LOAD 3 -->
    </div>
    <!-- END row -->

  </div>
  <!-- END guts -->
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
<script src="https://code.highcharts.com/modules/solid-gauge.js"></script>
<script src="{{ asset(mix('vendors/js/charts/apexcharts.min.js')) }}"></script>
<script src="{{ asset('vendors/js/extensions/toastr.min.js') }}"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="//cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>

@endsection
@section('page-script')
<!-- Page js files -->
<script>
  @if(session() -> has('error'))
  toastr.error('', 'Check your Email and Password !!', {
    timeOut: 3000,
    positionClass: 'toast-top-center',
    showMethod: 'slideDown',
    hideMethod: 'slideUp'
  })
  @endif
</script>
<script src="{{ asset('js/checkHardware.js') }}"></script>
<script src="{{ asset('js/user_datatable.js') }}"></script>
<script src="{{ asset('js/totalDaya.js') }}"></script>
<script src="{{ asset('js/totalDaya2.js') }}"></script>
<script src="{{ asset('js/totalCost.js') }}"></script>
<script src="{{ asset('js/lantai1.js') }}"></script>
<script src="{{ asset('js/lantai2.js') }}"></script>
<script src="{{ asset('js/sidenav.js') }}"></script>
<script src="{{ asset('js/date.js') }}"></script>
<script src="{{ asset('js/clock.js') }}"></script>
<script src="{{ asset('js/toggle.js') }}"></script>
<!--<script src="{{ asset('js/scripts/ag-grid/ag-grid.js') }}"></script>-->
@endsection
