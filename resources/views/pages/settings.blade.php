@extends('layouts/contentLayoutMaster')

@section('title', 'Settings')

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

@section('content')

<section id="settings">
  <div id="guts">
    <div class="col-lg-12" id="time">
      <span id='date'></span>
      <span id="timeseparator" style="color:white">|</span><br id="br-time" style="display: none">
      <span id='clock'></span>
    </div>
    <br />
      <div class="row">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-header-chart">
            <h4>Settings</h4>
          </div>
          <div class="card-settings">
            <form action={{route('storeSettings')}} method="post" style="text-align: center; display: block;">
              {{ csrf_field() }}

                <div class="form-group row">
                  <label for="bill" class="col-sm-3 col-form-label">Bill / Wh</label>
                  <div class="col-sm-8">
                    <input type="text" name="bill" class="form-control" id="staticEmail" value="{{ $data[1][0] }}" style="border: 1px solid #b9b2b2; font-size: 15px">
                  </div>

                  </label>
                </div>
                <div class="form-group row">
                  <label for="feature" class="col-sm-3 col-form-label" data-toggle="tooltip" title="Restore Previous Values on each Control after Master Control ON">Feature on Control</label>
                  <div class="col-sm-1">
                      <input class="form-control" name="feature" type="checkbox" id="gridCheck" @if($data[0][0] == 'on' )checked @endif >
                  </div>
                </div>
                <div class="form-group row" style="text-align: right; display: block; margin-right: 7rem;">
                    <button type="submit" class="btn btn-primary">Save Changes</button>
                </div>
            </form>
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
<script src="{{ asset(mix('vendors/js/charts/apexcharts.min.js')) }}"></script>
<script src="{{ asset('vendors/js/extensions/toastr.min.js') }}"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>

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
<script src="{{ asset('js/sidenav.js') }}"></script>
<script src="{{ asset('js/date.js') }}"></script>
<script src="{{ asset('js/clock.js') }}"></script>
<script src="{{ asset('js/toggle.js') }}"></script>
<!--<script src="{{ asset('js/scripts/ag-grid/ag-grid.js') }}"></script>-->
@endsection
