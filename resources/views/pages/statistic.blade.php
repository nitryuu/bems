@extends('layouts/contentLayoutMaster')

@section('title', 'Statistic')

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
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

<link rel="stylesheet" href="https://unpkg.com/bootstrap-datepicker@1.9.0/dist/css/bootstrap-datepicker3.min.css">

<link rel="stylesheet" href="{{ asset('css/pages/styles.css') }}">
<link rel="stylesheet" href="{{ asset('vendors/css/extensions/toastr.css') }}">
<!--<link rel="stylesheet" href="{{ asset('css/pages/aggrid.css') }}">-->

@endsection

@section('content')

<section id="statistic">
  <div id="guts">
    <div class="col-lg-12" id="time">
      <span id='date'></span>
      <span id="timeseparator">|</span>
      <span id='clock'></span>
    </div>
    <br />

    <div class="row">
      <div class="col-lg-6 col-12">
        <div class="card">
          <div class="card-header-chart">
            <h4>Energy Usages</h4>
          </div>
          <div class="row-card">
            <div class="col-lg-12 col-12">
              <div id="energy_stat"></div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-6 col-12">
        <div class="card">
          <div class="card-header-chart">
            <h4>Cost</h4>
          </div>
          <div class="row-card">
            <div class="col-lg-12 col-12">
              <div id="cost_stat"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- END guts -->

  </div>

</section>

{!! Charts::scripts() !!}
@endsection

@section('vendor-script')
<!-- vendor files -->
<!--<script src="{{ asset('vendors/js/tables/ag-grid/ag-grid-community.min.noStyle.js') }}"></script>-->
<script src="{{ asset(mix('vendors/js/charts/apexcharts.min.js')) }}"></script>
<script src="https://momentjs.com/downloads/moment.js"></script>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<script src="{{ asset('vendors/js/extensions/toastr.min.js') }}"></script>
<script src="//cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script src="{{ asset('js/scripts/export-data.js') }}"></script>

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
<script src="{{ asset('js/checkHardware.js') }}"></script>
<script src="{{ asset('js/user_datatable.js') }}"></script>
<script src="{{ asset('js/cost_stat.js') }}"></script>
<script src="{{ asset('js/energy_stat.js') }}"></script>
<script src="{{ asset('js/sidenav.js') }}"></script>
<script src="{{ asset('js/date.js') }}"></script>
<script src="{{ asset('js/clock.js') }}"></script>
<script src="{{ asset('js/toggle.js') }}"></script>
<!--<script src="{{ asset('js/scripts/ag-grid/ag-grid.js') }}"></script>-->
@endsection
