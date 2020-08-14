
@extends('layouts/contentLayoutMaster')

@section('title', 'Custom')

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
        <link rel="stylesheet" href="{{ asset('vendors/css/extensions/toastr.css') }}">
        <link rel="stylesheet" href="{{ asset('css/pages/styles.css') }}">

        <!--<link rel="stylesheet" href="{{ asset('css/pages/aggrid.css') }}">-->

@endsection

  @section('content')

    <section id="custom">
      <div id="guts">
          <div class="col-lg-12" id="time">
              <span id='date'></span>
              <span id="timeseparator">|</span>
              <span id='clock'></span>
          </div>
        <br />

        <div class="col-lg-12 col-12">
          <div class="card">
            <div class="card-header" style="margin-bottom: 1.5rem;">
              <span id="chartTitle">
                {{ $title[0]['customTitle1'] }}
              </span>
              <div class="col-sm-2" style="position: absolute; right: 4rem">
                <select class="form-control" style="border:1px solid #b9b2b2;" id="display" name="display">
                  <option value='0'>Chart 1</option>
                  <option value='1'>Chart 2</option>
                  <option value='2'>Chart 3</option>
                  <option value='3'>Chart 4</option>
                </select>
              </div>
              <div style="justify-content: flex-end;">
                <a style="color: red; cursor: pointer;" id="trashIcon" data-toggle="modal" data-target="#clearConfirmation"><i class="fa fa-trash"></i></a>
                <a style="color: black; cursor: pointer;" id="settingIcon"><i class="fa fa-cog"></i></a>
                <div class="settingMenu">
                  <div class="settingText">
                    
                    <form action="{{ route('customChartSettings') }}" method="get">
                        <div class="form-group row">
                          <label for="titleChart1" class="col-sm-2 col-form-label">Chart 1 Title</label>
                          <div class="col-sm-2">
                            <input type="text" name="titleChart1" class="form-control" value="{{ $title[0]['customTitle1'] }}">
                          </div>
                          <label for="topicChart1" class="col-sm-2 col-form-label">Topic 1 Chart</label>
                          <div class="col-sm-6">
                            <input type="text" name="topicChart1" class="form-control" value="{{ $topic[0]['custom1'] }}">
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="titleChart2" class="col-sm-2 col-form-label">Chart 2 Title</label>
                          <div class="col-sm-2">
                            <input type="text" name="titleChart2" class="form-control" value="{{ $title[0]['customTitle2'] }}">
                          </div>
                          <label for="topicChart2" class="col-sm-2 col-form-label">Topic 2 Chart</label>
                          <div class="col-sm-6">
                            <input type="text" name="topicChart2" class="form-control" value="{{ $topic[0]['custom2'] }}">
                          </div>
                        </div>   
                        <div class="form-group row">
                          <label for="titleChart3" class="col-sm-2 col-form-label">Chart 3 Title</label>
                          <div class="col-sm-2">
                            <input type="text" name="titleChart3" class="form-control" value="{{ $title[0]['customTitle3'] }}">
                          </div>
                          <label for="topicChart3" class="col-sm-2 col-form-label">Topic 3 Chart</label>
                          <div class="col-sm-6">
                            <input type="text" name="topicChart3" class="form-control" value="{{ $topic[0]['custom3'] }}">
                          </div>
                        </div>     
                        <div class="form-group row">
                          <label for="titleChart4" class="col-sm-2 col-form-label">Chart 4 Title</label>
                          <div class="col-sm-2">
                            <input type="text" name="titleChart4" class="form-control" value="{{ $title[0]['customTitle4'] }}">
                          </div>
                          <label for="topicChart4" class="col-sm-2 col-form-label">Topic 4 Chart</label>
                          <div class="col-sm-6">
                            <input type="text" name="topicChart4" class="form-control" value="{{ $topic[0]['custom4'] }}">
                          </div>
                        </div>
                        <button type="submit" class="btn btn-primary btn-sm" style="margin-bottom: 1rem; float: right;">Save Changes</button>                
                    </form>

                  </div>
                </div>
              </div>
            </div>
            <div class="row-card">
              <div class="col-lg-12">
                <div id="customChart1" style="overflow: hidden;"></div>
                <div id="customChart2" style="display: none; overflow: hidden;"></div>
                <div id="customChart3" style="display: none; overflow: hidden;"></div>
                <div id="customChart4" style="display: none; overflow: hidden;"></div>
              </div>
            </div>
          </div>
        </div>
        </div>
        <!-- END guts -->

</div>

    </section>

<div class="modal fade" id="clearConfirmation" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">CONFIRMATION</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <br />Are you sure you want to clear this chart's data?
      </div>
      <br />
      <div class="modal-footer">
        <button id="clear_confirmation" type="button" class="btn btn-danger">Clear</button>
      </div>
    </div>
  </div>
</div>
  


  {!! Charts::scripts() !!}
  @endsection

@section('vendor-script')
        <!-- vendor files -->
        <!--<script src="{{ asset('vendors/js/tables/ag-grid/ag-grid-community.min.noStyle.js') }}"></script>-->
        <script src="{{ asset(mix('vendors/js/charts/apexcharts.min.js')) }}"></script>
        <script src="{{ asset('vendors/js/extensions/toastr.min.js') }}"></script>
        <script src="https://momentjs.com/downloads/moment.js"></script>
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
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
          $('#settingIcon').click(function(){
            $('.settingMenu').toggleClass('show');
          })
        </script>
        <script>
          $('#display').change(function(){
            if($(this).val() == '0'){
              $('#customChart1').css('display','block');
              $('#customChart2').css('display','none');
              $('#customChart3').css('display','none');
              $('#customChart4').css('display','none');
              $('#chartTitle').text('{!! $title[0]['customTitle1'] !!}');
            }
            else if($(this).val() == '1'){
              $('#customChart1').css('display','none');
              $('#customChart2').css('display','block');
              $('#customChart3').css('display','none');
              $('#customChart4').css('display','none');
              $('#chartTitle').text('{!! $title[0]['customTitle2'] !!}');
            }else if($(this).val() == '2'){
              $('#customChart1').css('display','none');
              $('#customChart2').css('display','none');
              $('#customChart3').css('display','block');
              $('#customChart4').css('display','none');
              $('#chartTitle').text('{!! $title[0]['customTitle3'] !!}');
            }else if($(this).val() == '3'){
              $('#customChart1').css('display','none');
              $('#customChart2').css('display','none');
              $('#customChart3').css('display','none');
              $('#customChart4').css('display','block');
              $('#chartTitle').text('{!! $title[0]['customTitle4'] !!}');
            }
          })
        </script>
        <script src="{{ asset('js/customChart1.js') }}"></script>
        <script src="{{ asset('js/customChart2.js') }}"></script>
        <script src="{{ asset('js/customChart3.js') }}"></script>
        <script src="{{ asset('js/customChart4.js') }}"></script>
        <script>
          var id = 0;
          $('#display').change(function(){
            if($(this).val() == '0'){
              id = 0;
            }
            else if($(this).val() == '1'){
              id = 1;
            }else if($(this).val() == '2'){
              id = 2;
            }else if($(this).val() == '3'){
              id = 3;
            }
          })
          $('#clear_confirmation').click(function(){
            $(this).text('Clearing..');
            $.ajax({
              url: 'clear/'+id,
              success: function(data){
                $('#clearConfirmation').modal('hide');
                $('#clear_confirmation').text('Clear');
                toastr.success('Data has been cleared Successfully!');
              }
            })
          })
        </script>
        <script src="{{ asset('js/checkHardware.js') }}"></script>
        <script src="{{ asset('js/user_datatable.js') }}"></script>
        <script src="{{ asset('js/sidenav.js') }}"></script>
        <script src="{{ asset('js/date.js') }}"></script>
        <script src="{{ asset('js/clock.js') }}"></script>
        <script src="{{ asset('js/toggle.js') }}"></script>
        <!--<script src="{{ asset('js/scripts/ag-grid/ag-grid.js') }}"></script>-->
@endsection
