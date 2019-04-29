@extends('layouts.partner')
@section('content')
{{-- @include('partial.message')
@include('partial.formerror') --}}
  <div class="row">
    <div class="col-xs-12">
      <div class="pull-right" style="margin-bottom:30px;">
        <a class="btn btn-success" href="{{ url('partner/discount/create') }}">Add New Service Discount</a>
      </div>
    </div>
  </div>
        <!-- /.row -->
        <div class="row">
          <div class="col-xs-12">
            <div class="box">
              <div class="box-header">
                <h3 class="box-title">Responsive Hover Table</h3>
  
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
                    <th>Service Name</th>
                    <th>Amount</th>
                    <th>Start Date</th>
                    <th>End Date</th>
                    <th>Sheba Contribution</th>                  
                    <th>Partner Contribution</th>                  
                    <th>Action</th>                  
                  </tr>
                  <tr>
                    <td>183</td>
                    <td>John Doe</td>
                    <td>11-7-2014</td>
                    <td><span class="label label-success">Approved</span></td>
                    <td><span class="label label-success">Approved</span></td>
                    <td><span class="label label-success">Approved</span></td>
                    <td>
                      <a class="btn btn-info" href="#">Show</a>
                      <a class="btn btn-primary" href="#">Edit</a>
                      <a class="btn btn-danger" href="#">Delete</a>
                      
                  </td>
                  </tr>
                  <tr>
                    <td>219</td>
                    <td>Alexander Pierce</td>
                    <td>11-7-2014</td>
                    <td><span class="label label-warning">Pending</span></td>
                    <td><span class="label label-warning">Pending</span></td>
                    <td><span class="label label-warning">Pending</span></td>
                    <td>
                      <a class="btn btn-info" href="#">Show</a>
                      <a class="btn btn-primary" href="#">Edit</a>
                      <a class="btn btn-danger" href="#">Delete</a>
                      
                  </td>
                  </tr>
                  <tr>
                    <td>657</td>
                    <td>Bob Doe</td>
                    <td>11-7-2014</td>
                    <td><span class="label label-primary">Approved</span></td>
                    <td><span class="label label-primary">Approved</span></td>
                    <td><span class="label label-primary">Approved</span></td>
                    <td>
                      <a class="btn btn-info" href="#">Show</a>
                      <a class="btn btn-primary" href="#">Edit</a>
                      <a class="btn btn-danger" href="#">Delete</a>
                      
                  </td>
                  </tr>
                  <tr>
                    <td>175</td>
                    <td>Mike Doe</td>
                    <td>11-7-2014</td>
                    <td><span class="label label-danger">Denied</span></td>
                    <td><span class="label label-danger">Denied</span></td>
                    <td><span class="label label-danger">Denied</span></td>
                    <td>
                      <a class="btn btn-info" href="#">Show</a>
                      <a class="btn btn-primary" href="#">Edit</a>
                      <a class="btn btn-danger" href="#">Delete</a>                    
                  </td>
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
  <!-- SlimScroll -->
  <script src="{{asset('assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
  <!-- FastClick -->
  <script src="{{asset('assets/bower_components/fastclick/lib/fastclick.js')}}"></script>
  @endsection
  @section('script-s2')
  <!-- AdminLTE for demo purposes -->
  <script src="{{asset('assets/dist/js/demo.js')}}"></script>

@endsection