@extends('layouts.partner')

@section('css')

<link rel="stylesheet" href="{{asset('assets/bower_components/bootstrap-daterangepicker/daterangepicker.css')}}">
<link rel="stylesheet" href="{{asset('assets/bower_components/select2/dist/css/select2.min.css')}}">

<style>
    .my_class{
        
        width: 400px;
        margin: 0 auto;
        
    }
    .hover1:hover{
        
    z-index: 2;
    -webkit-transition: all 200ms ease-in;
    -webkit-transform: scale(1.5);
    -ms-transition: all 200ms ease-in;
    -ms-transform: scale(1.5);   
    -moz-transition: all 200ms ease-in;
    -moz-transform: scale(1.5);
    transition: all 200ms ease-in;
    transform: scale(1.5);
    }
    .my-btn{
      margin-top: 23px;
    }
    
</style>

@endsection
@section('content')

<div class="row">
    <!-- /.col -->
    <div class="col-md-12">
        <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
                <li class="active"><a href="#overview" data-toggle="tab"> Overview </a></li>
                <li><a href="#transaction_history" data-toggle="tab"> Transaction History </a></li>
                <li><a href="#bonus_transaction_history" data-toggle="tab"> Bonus Transaction History </a></li>
                <li><a href="#transaction_report" data-toggle="tab"> Transaction Report </a></li>
                <li><a href="#withdraw_request" data-toggle="tab"> Withdraw Request </a></li>
                <li><a href="#recharge_wallet" data-toggle="tab"> Recharge Wallet </a></li>
            </ul>
            <div class="tab-content">
                <div class="active tab-pane " id="overview">
                    <div class="my_class">
                        <p class="text-center">
                            <img src="{{asset('assets/dist/img/189709.png')}}" height="200" width="200"
                            alt="User Image">

                        </p>
                        <p class="text-center">
                            <span class="btn btn-info btn-lg  hover1">$500.00</span>
                        </p>
                        <h3 class="text-center">Bonus: $40.00</h3>
                        <h3 class="text-center">SERVICE Payable <a href="#" data-toggle="tooltip" data-placement="right"
                            title="Service will pay you">
                         <span style="font-size: 14px; vertical-align: super">
                             <i class="fa fa-question-circle" aria-hidden="true"></i>
                         </span>
                         </a></h3>
                         
                    </div>
                </div>
            <!-- /.tab-pane -->
                <div class="tab-pane" id="transaction_history">
                    <div class="row">
                        <div class="col-xs-12">

                              
                                <div class="row">
                                  <div class="col-xs-4">
                                      <!-- /.input group -->
                                    <div class="form-group" >
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
                                      <div class="col-xs-2">
                                          <!-- /.input group -->
                                          <div class="form-group">
                                                  <button class="btn btn-block btn-info my-btn">Clear</button>
                                                </div>
                                                <!-- /.form-group -->
                              
                        </div>
                        <div class="col-xs-2 pull-right">
                            <!-- /.input group -->
                            <div class="form-group">
                                    <button class="btn btn-block btn-danger my-btn">Export CSV</button>
                                  </div>
                                  <!-- /.form-group -->
                
          </div>

                      

                                </div>
                              

                          
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12">
                          <div class="box">
                            <div class="box-header">
                              <h3 class="box-title">Ongoing order</h3>
                    
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
                                <tbody><tr>
                                  <th> Transc. ID</th>              
                                  <th>Date</th>
                                  <th>Order ID</th>
                                  <th>Description</th>              
                                  <th>Cash Out</th>
                                  <th>Cash In</th>
                                  <th>Balance</th>
                                </tr>
                                <tr>
                                  <td>183</td>
                                  <td>John Doe</td>
                                  <td>11-7-2014</td>
                                  <td><span class="label label-success">Approved</span></td>
                                  <td>11-7-2014</td>
                                  <td>11-7-2014</td>
                                  <td>11-7-2014</td>
                                </tr>
                                <tr>
                                  <td>219</td>
                                  <td>Alexander Pierce</td>
                                  <td>11-7-2014</td>
                                  <td><span class="label label-warning">Pending</span></td>
                                  <td>11-7-2014</td>
                                  <td>11-7-2014</td>
                                  <td>11-7-2014</td>
                                </tr>
                                <tr>
                                  <td>657</td>
                                  <td>Bob Doe</td>
                                  <td>11-7-2014</td>
                                  <td><span class="label label-primary">Approved</span></td>
                                  <td>11-7-2014</td>
                                  <td>11-7-2014</td>
                                  <td>11-7-2014</td>
                                </tr>
                                <tr>
                                  <td>175</td>
                                  <td>Mike Doe</td>
                                  <td>11-7-2014</td>
                                  <td><span class="label label-danger">Denied</span></td>
                                  <td>11-7-2014</td>
                                  <td>11-7-2014</td>
                                  <td>11-7-2014</td>
                                </tr>
                              </tbody></table>
                            </div>
                            <!-- /.box-body -->
                          </div>
                          <!-- /.box -->
                        </div>
                      </div>
                </div>
                <!-- /.tab-pane -->
  
                <div class="tab-pane" id="bonus_transaction_history">
                    <div class="row">
                        <div class="col-xs-12">
                          <div class="box">
                            <div class="box-header">
                              <h3 class="box-title">Ongoing order</h3>
                    
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
                                <tbody><tr>
                                  <th> Transc. ID</th>              
                                  <th>Date</th>
                                  <th>Description</th>              
                                  <th>Valid Till</th>
                                  <th>Amount</th>
                                </tr>
                                <tr>
                                  <td>183</td>
                                  <td>John Doe</td>
                                  <td>11-7-2014</td>
                                  <td><span class="label label-success">Approved</span></td>
                                  <td>11-7-2014</td>
                                </tr>
                                <tr>
                                  <td>219</td>
                                  <td>Alexander Pierce</td>
                                  <td>11-7-2014</td>
                                  <td><span class="label label-warning">Pending</span></td>
                                  <td>11-7-2014</td>
                                </tr>
                                <tr>
                                  <td>657</td>
                                  <td>Bob Doe</td>
                                  <td>11-7-2014</td>
                                  <td><span class="label label-primary">Approved</span></td>
                                  <td>11-7-2014</td>
                                </tr>
                                <tr>
                                  <td>175</td>
                                  <td>Mike Doe</td>
                                  <td>11-7-2014</td>
                                  <td><span class="label label-danger">Denied</span></td>
                                  <td>11-7-2014</td>
                                </tr>
                              </tbody></table>
                            </div>
                            <!-- /.box-body -->
                          </div>
                          <!-- /.box -->
                        </div>
                      </div>
                </div>
        <!-- /.tab-pane -->
        <!-- /.tab-pane -->
                <div class="tab-pane" id="transaction_report">
                </div>
            <!-- /.tab-pane -->
            <!-- /.tab-pane -->
                <div class="tab-pane" id="withdraw_request">
                </div>
            <!-- /.tab-pane -->
            <!-- /.tab-pane -->
                <div class="tab-pane" id="recharge_wallet">
                </div>
            </div>
              <!-- /.tab-content -->
        </div>
            <!-- /.nav-tabs-custom -->
    </div>      
        <!-- /.row -->
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