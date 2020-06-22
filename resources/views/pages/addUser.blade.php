@extends('layouts/contentLayoutMaster')

@section('title', 'Add User')

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

<section id="addUser">
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
            <h4>Add New User</h4>
          </div>
          <div class="card-settings">
            <form action="{{ route('storeNewUser') }}" method="post" style="text-align: center; display: block;">
              {{ csrf_field() }}

                <div class="form-group row">
                  <label for="name" class="col-sm-3 col-form-label">Name</label>
                  <div class="col-sm-8">
                    <input required type="text" placeholder="Name" name="name" class="form-control" id="staticEmail" value="{{ old('name') }}" style="border: 1px solid #b9b2b2; font-size: 15px">
                  </div>
                  </label>
                </div>
                <div class="form-group row">
                  <label for="email" class="col-sm-3 col-form-label">Email</label>
                  <div class="col-sm-8">
                    <input required type="email" placeholder="example@xyz.com" name="email" class="form-control" id="staticEmail" value="{{ old('email') }}" style="border: 1px solid #b9b2b2; font-size: 15px">
                  </div>
                  </label>
                </div>
                <div class="form-group row">
                  <label for="password" class="col-sm-3 col-form-label">Password</label>
                  <div class="col-sm-8">
                    <input required type="password" placeholder="********" name="password" class="form-control" id="staticEmail" value="{{ old('password') }}" style="border: 1px solid #b9b2b2; font-size: 15px">
                  </div>
                  </label>
                </div>
                <div class="form-group row" style="text-align: right; display: block; margin-right: 7rem;">
                    <a href="{{route('settings')}}" type="submit" class="btn btn-danger">Back</a>
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
<script>
@if(count($errors))
    @foreach($errors->all() as $error)
    toastr.error('',{{$error}}, {
      timeOut: 3000,
      positionClass: 'toast-top-center',
      showMethod: 'slideDown',
      hideMethod: 'slideUp'
    })
    @endforeach
      @endif
</script>
<script src="{{ asset('js/user_datatable.js') }}"></script>
<script src="{{ asset('js/sidenav.js') }}"></script>
<script src="{{ asset('js/date.js') }}"></script>
<script src="{{ asset('js/clock.js') }}"></script>
<script src="{{ asset('js/toggle.js') }}"></script>
<!--<script src="{{ asset('js/scripts/ag-grid/ag-grid.js') }}"></script>-->
@endsection
