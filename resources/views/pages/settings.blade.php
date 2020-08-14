@extends('layouts/contentLayoutMaster')

@section('title', 'Settings')

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

          <div class="row">
            <div class="col-9" style="border-right: 1px solid black; height: 50vh; overflow: auto">
            <form action={{route('storeSettings')}} method="post" style="text-align: center; display: block;">
              {{ csrf_field() }}

                <div class="form-group row">
                  <label for="bill" class="col-sm-3 col-form-label">Bill / kWh</label>
                  <div class="col-sm-2">
                    <input type="text" name="bill" class="form-control" value="{{ $data[1][0] }}" style="border: 1px solid #b9b2b2; font-size: 15px">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="feature" class="col-sm-3 col-form-label" data-toggle="tooltip" title="Restore Previous Values on each Control after Master Control ON">Feature on Control</label>
                  <div class="form-check">
                      <input name="feature" type="checkbox" id="gridCheck" @if($data[0][0] == 'on' )checked @endif style="vertical-align: -webkit-baseline-middle;
                      margin-top: 0.5rem;">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="auto" class="col-sm-3 col-form-label">Automatic Delete</label>
                   <div class="form-check">
                      <input name="auto" type="checkbox" id="auto" @if($data[8][0] == 'on' )checked @endif style="vertical-align: -webkit-baseline-middle;
                      margin-top: 0.5rem;">
                  </div>
                </div>
                <div class="form-group row" id="interval">
                  <label for="interval" class="col-sm-3 col-form-label">Interval (Month)</label>
                  <div class="col-sm-1">
                    <input type="text" name="interval" class="form-control" value="{{ $data[9][0] }}" style="border: 1px solid #b9b2b2; font-size: 15px">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="feature" class="col-sm-3 col-form-label">Protocol</label>
                  <div class="col-sm-2">
                    <select class="form-control" style="border:1px solid #b9b2b2;" id="sources" name="source">
                      <option value='0' @if($data[2][0] == '0')selected @endif>MQTT</option>
                      <option value='1' @if($data[2][0] == '1')selected @endif>HTTP</option>
                    </select>
                  </div>
                </div>
                <div class="form-group row" id="host">
                  <label for="bill" class="col-sm-3 col-form-label">Host</label>
                  <div class="col-sm-4">
                    <input type="text" name="host" class="form-control" value="{{ $data[4] }}" style="border: 1px solid #b9b2b2; font-size: 15px" placeholder="TOPIC">
                  </div>
                </div>
                <div class="form-group row" id="port">
                  <label for="bill" class="col-sm-3 col-form-label">Port</label>
                  <div class="col-sm-2">
                    <input type="text" name="port" class="form-control" value="{{ $data[7] }}" style="border: 1px solid #b9b2b2; font-size: 15px" placeholder="TOPIC">
                  </div>
                </div>
                <div class="form-group row" id="username">
                  <label for="bill" class="col-sm-3 col-form-label">Username</label>
                  <div class="col-sm-4">
                    <input type="text" name="username" class="form-control" value="{{ $data[5] }}" style="border: 1px solid #b9b2b2; font-size: 15px" placeholder="TOPIC">
                  </div>
                </div>
                <div class="form-group row" id="password">
                  <label for="bill" class="col-sm-3 col-form-label">Password</label>
                  <div class="col-sm-4">
                    <input type="text" name="password" class="form-control" value="{{ $data[6] }}" style="border: 1px solid #b9b2b2; font-size: 15px" placeholder="TOPIC">
                  </div>
                </div>
                <div class="form-group row" id="topic">
                  <label for="bill" class="col-sm-3 col-form-label">Topic</label>
                  <div class="col-sm-8">
                    <input type="text" name="address" class="form-control" value="{{ $data[3][0] }}" style="border: 1px solid #b9b2b2; font-size: 15px" placeholder="TOPIC">
                  </div>
                </div>

                <div class="form-group row" id="url">
                  <label for="bill" class="col-sm-3 col-form-label">API Address</label>
                  <div class="col-sm-8">
                    <input type="text" name="url" class="form-control" value="https://si.ft.uns.ac.id/bems/api/httpData" style="border: 1px solid #b9b2b2; font-size: 15px" disabled>
                  </div>
                </div>

                <br />
                <div class="form-group row" style="text-align: right; display: block; margin-right: 5rem;">
                    <button type="submit" class="btn btn-primary">Save Changes</button>
                </div>
            </form>
            </div>
            <div class="col-3" style="padding: 0 0 0 4rem;">
              <form action="{{ route('changePass') }}" method="post" style="text-align: center">
                {{ csrf_field() }}

                  <input type="id" name="id" class="form-control" value="{{ Auth()->user()->id }}" id="old_pass" style="border: 1px solid #b9b2b2; font-size: 15px" hidden>
                  <label for="old_pass">Old Password</label>
                  <input type="password" name="old_pass" class="form-control" id="old_pass" style="border: 1px solid #b9b2b2; font-size: 15px">

                  <label for="new_pass">New Password</label>
                  <input type="password" name="new_pass" class="form-control" id="new_pass" style="border: 1px solid #b9b2b2; font-size: 15px">
                  <br />
                  <div class="form-group row" style="padding: 0 0 0 2.2rem">
                      <button type="submit" class="btn btn-success">Change Password</button>
                  </div>
              </form>
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
<script src="{{ asset(mix('vendors/js/charts/apexcharts.min.js')) }}"></script>
<script src="{{ asset('vendors/js/extensions/toastr.min.js') }}"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="//cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>

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
  value = $("#sources").val();
  topic = $("#topic");
  url = $("#url");
  username = $("#username");
  password = $("#password");
  host = $("#host");
  port = $("#port");
  auto = $("#auto");
  interval = $("#interval");

  $('#auto').change(function(){
    if($(this).prop('checked') == true){
      interval.css('display','');
    }else if($(this).prop('checked') == false){
      interval.css('display','none');
    }
  })

  if(auto.prop('checked') == true){
    interval.css('display','');
  }else if(auto.prop('checked') == false){
    interval.css('display','none');
  }


  $('#sources').change(function(){
    if(this.value == 0)
    {
      topic.css('display','');
      url.css('display','none');
      username.css('display','');
      password.css('display','');
      host.css('display','');
      port.css('display','');
    }else if(this.value == 1)
    {
      topic.css('display','none');
      url.css('display','');
      username.css('display','none');
      password.css('display','none');
      host.css('display','none');
      port.css('display','none');
    }
  })
    if(this.value == 0)
    {
      topic.css('display','');
      url.css('display','none');
      username.css('display','');
      password.css('display','');
      host.css('display','');
      port.css('display','');
    }else if(this.value == 1)
    {
      topic.css('display','none');
      url.css('display','');
      username.css('display','none');
      password.css('display','none');
      host.css('display','none');
      port.css('display','none');
    }
</script>
<script src="{{ asset('js/checkHardware.js') }}"></script>
<script src="{{ asset('js/user_datatable.js') }}"></script>
<script src="{{ asset('js/sidenav.js') }}"></script>
<script src="{{ asset('js/date.js') }}"></script>
<script src="{{ asset('js/clock.js') }}"></script>
<script src="{{ asset('js/toggle.js') }}"></script>
<!--<script src="{{ asset('js/scripts/ag-grid/ag-grid.js') }}"></script>-->
@endsection
