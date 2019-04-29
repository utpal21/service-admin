@extends('layouts.partner')
@section('content')
<div class="row">
    <div class="col-xs-12">
<div class="box">
    <div class="box-header with-border">
      <h3 class="box-title">Different Width</h3>
    </div>
    <div class="box-body container">
      <div class="row">
        <div class="col-xs-2">
            <label>Service Name</label>
            <select class="form-control">
                <option>option 1</option>
                <option>option 2</option>
                <option>option 3</option>
                <option>option 4</option>
                <option>option 5</option>
              </select>
        </div>
        <div class="col-xs-2">
            <label>Resource Name</label>
            <select class="form-control">
                <option>option 1</option>
                <option>option 2</option>
                <option>option 3</option>
                <option>option 4</option>
                <option>option 5</option>
            </select>
        </div>
        <div class="col-xs-2">
            <label>Rating</label>
            <select class="form-control">
                <option>option 1</option>
                <option>option 2</option>
                <option>option 3</option>
                <option>option 4</option>
                <option>option 5</option>
            </select>
        </div>
        <div class="col-xs-2">
            <div style="margin-top: 25px">
            <button class ="btn btn-block btn-info">Search</button>

        </div>
    </div>
        <div class="col-xs-2">
                <div style="margin-top: 25px">
                <button class ="btn btn-block btn-danger">Clear</button>
    
            </div>

        </div>
      
    </div>
    <!-- /.box-body -->
  </div>
  <!-- /.box -->
</div>
</div>

  
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
                  <th>Customer Name</th>
                  <th>Service Name</th>
                  <th>Resource Name</th>
                  <th>Rating</th>
                  <th>Action</th>
                </tr>
                <tr>
                  <td>183</td>
                  <td>John Doe</td>
                  <td>11-7-2014</td>
                  <td><span class="label label-success">Approved</span></td>
                  <td>John Doe</td>
                  <td>John Doe</td>
                </tr>
                <tr>
                  <td>219</td>
                  <td>Alexander Pierce</td>
                  <td>11-7-2014</td>
                  <td><span class="label label-warning">Pending</span></td>
                  <td>John Doe</td>
                  <td>John Doe</td>
                </tr>
                <tr>
                  <td>657</td>
                  <td>Bob Doe</td>
                  <td>11-7-2014</td>
                  <td><span class="label label-primary">Approved</span></td>
                  <td>John Doe</td>
                  <td>John Doe</td>
                </tr>
                <tr>
                  <td>175</td>
                  <td>Mike Doe</td>
                  <td>11-7-2014</td>
                  <td><span class="label label-danger">Denied</span></td>
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