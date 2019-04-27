@extends('layouts.partner')
@section('css')
<link rel="stylesheet" href="{{asset('assets/bower_components/bootstrap-daterangepicker/daterangepicker.css')}}">
<link rel="stylesheet" href="{{asset('assets/bower_components/select2/dist/css/select2.min.css')}}">
@endsection
@section('content')
<div class="row">
    <div class="col-xs-9">
            <div class="box box-primary">
                    <div class="box-header">
                      <h3 class="box-title">Date picker</h3>
                    </div>
                    <div class="box-body">
                        <div class="row">
                            <div class="col-xs-4">
        <!-- Date range -->
        <div class="form-group">
                
                <label>Date range:</label>
                <div class="input-group">
                      
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="text" class="form-control" id="reservation">
                </div>
            </div>
        </div>
        <div class="col-xs-4">
                <!-- /.input group -->
                <div class="form-group">
                   
                        <label>Date range:</label>
                    <div class="input-group">
                           
                      <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                      </div>
                      <input type="text" class="form-control" id="reservation">
                    </div>
                    <!-- /.input group -->
                  </div>
                </div>
                <div class="col-xs-4">
                        <!-- /.input group -->
                        <div class="form-group">
                                <label>Minimal</label>
                                <select class="form-control select2" style="width: 100%;">
                                  <option selected="selected">Alabama</option>
                                  <option>Alaska</option>
                                  <option>California</option>
                                  <option>Delaware</option>
                                  <option>Tennessee</option>
                                  <option>Texas</option>
                                  <option>Washington</option>
                                </select>
                              </div>
                              <!-- /.form-group -->
            </div>
            <div class="col-xs-4">
                    <!-- /.input group -->
                    <div class="form-group">
                            <label>Minimal</label>
                            <select class="form-control select2" style="width: 100%;">
                              <option selected="selected">Alabama</option>
                              <option>Alaska</option>
                              <option>California</option>
                              <option>Delaware</option>
                              <option>Tennessee</option>
                              <option>Texas</option>
                              <option>Washington</option>
                            </select>
                          </div>
                          <!-- /.form-group -->
        </div>
        <div class="col-xs-4">
          <!-- /.input group -->
          <div class="form-group">
                  <label>Minimal</label>
                  <select class="form-control select2" style="width: 100%;">
                    <option selected="selected">Alabama</option>
                    <option>Alaska</option>
                    <option>California</option>
                    <option>Delaware</option>
                    <option>Tennessee</option>
                    <option>Texas</option>
                    <option>Washington</option>
                  </select>
                </div>
                <!-- /.form-group -->
</div>
    <div class="col-xs-4">
            <!-- /.input group -->
            <div class="form-group">
                <button class="btn-info">Search</button>
                  </div>
                  <!-- /.form-group -->
</div> 

    </div>
</div>
</div>

    <div class="col-xs-3">

    </div>

</div>
</div>

<div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">ALL JOBS</h3>

          <div class="box-tools">
            <div class="input-group input-group-sm" style="width: 150px;">
              <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

              <div class="input-group-btn">
                <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
              </div>
            </div>
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body table-responsive no-padding">
          <table class="table table-hover">
            <tr>
              <th>Job Id</th>
              <th>Order Id</th>
              <th>Customer Name</th>
              <th>Service Name</th>
              <th>Scheduled Date & Time</th>
              <th>Status</th>
              <th>Action</th>
            </tr>
            <tr>
              <td>183</td>
              <td>John Doe</td>
              <td>11-7-2014</td>
              <td><span class="label label-success">Approved</span></td>
              <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
              <td>John Doe</td>
              <td>John Doe</td>
            </tr>
            <tr>
              <td>219</td>
              <td>Alexander Pierce</td>
              <td>11-7-2014</td>
              <td><span class="label label-warning">Pending</span></td>
              <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
              <td>John Doe</td>
              <td>John Doe</td>
            </tr>
            <tr>
              <td>657</td>
              <td>Bob Doe</td>
              <td>11-7-2014</td>
              <td><span class="label label-primary">Approved</span></td>
              <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
              <td>John Doe</td>
              <td>John Doe</td>
            </tr>
            <tr>
              <td>175</td>
              <td>Mike Doe</td>
              <td>11-7-2014</td>
              <td><span class="label label-danger">Denied</span></td>
              <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
              <td>John Doe</td>
              <td>John Doe</td>
            </tr>
          </table>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
    </div>
  </div>

@endsection
@section('script-s1')

<!-- Select2 -->
<script src="{{asset('assets/bower_components/select2/dist/js/select2.full.min.js')}}"></script>

{{-- date range picker --}}
<script src="{{asset('assets/bower_components/moment/min/moment.min.js')}}"></script>
<script src="{{asset('assets/bower_components/bootstrap-daterangepicker/daterangepicker.js')}}"></script>
@endsection

@section('script-s2')
<script>
$(document).ready(function () {
    //Initialize Select2 Elements
    $('.select2').select2()
    $('#reservation').daterangepicker()
});
</script>

@endsection