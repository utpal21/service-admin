@extends('layouts.partner') 
@section('css')

<link rel="stylesheet" href="{{asset('assets/bower_components/morris.js/morris.css')}}">
@endsection
@section('content')
<div class="row bg-warning">
    <div class="col-xs-6">
        <h1>Welcome Boss!!!</h1>
    </div>
    <div class="col-xs-6 text-right">
        <h4 class="text-success">Current Balance: $900</p>
        <h4 class="text-teal">Bonus: $104</>

    </div>
</div>
<br>
<div class="row">
    <div class="col-lg-4 col-xs-6">
      <!-- small box -->
      <div class="small-box bg-aqua">
        <div class="inner">
          <h3>150 Unit</h3>

          <p>Total Services</p>
        </div>
        <div class="icon">
          <i class="ion ion-bag"></i>
        </div>
        <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-4 col-xs-6">
      <!-- small box -->
      <div class="small-box bg-green">
        <div class="inner">
          <h3>53 Person</h3>
          {{-- <h3>53<sup style="font-size: 20px">%</sup></h3> --}}

          <p>Total Verified Resources</p>
        </div>
        <div class="icon">
          <i class="ion ion-stats-bars"></i>
        </div>
        <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-4 col-xs-6">
      <!-- small box -->
      <div class="small-box bg-yellow">
        <div class="inner">
          <h3>$1001</h3>

          <p>Total Sales</p>
        </div>
        <div class="icon">
          <i class="ion ion-person-add"></i>
        </div>
        <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-4 col-xs-6">
      <!-- small box -->
      <div class="small-box bg-red">
        <div class="inner">
          <h3>65</h3>

          <p>Total served orders</p>
        </div>
        <div class="icon">
          <i class="ion ion-pie-graph"></i>
        </div>
        <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-4 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-info">
          <div class="inner">
            <h3>65</h3>
  
            <p>Serve due</p>
          </div>
          <div class="icon">
            <i class="ion ion-pie-graph"></i>
          </div>
          <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-4 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-dark">
          <div class="inner">
            <h3>65</h3>
  
            <p>Ongoing order</p>
          </div>
          <div class="icon">
            <i class="ion ion-pie-graph"></i>
          </div>
          <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
  </div>
  <!-- /.row -->

  <!-- /.row -->
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
            <tr>
              <th>Order Id</th>              
              <th>Where</th>
              <th>Delivery Name</th>
              <th>Status</th>              
              <th>Action</th>
            </tr>
            <tr>
              <td>183</td>
              <td>John Doe</td>
              <td>11-7-2014</td>
              <td><span class="label label-success">Approved</span></td>
              <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
            </tr>
            <tr>
              <td>219</td>
              <td>Alexander Pierce</td>
              <td>11-7-2014</td>
              <td><span class="label label-warning">Pending</span></td>
              <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
            </tr>
            <tr>
              <td>657</td>
              <td>Bob Doe</td>
              <td>11-7-2014</td>
              <td><span class="label label-primary">Approved</span></td>
              <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
            </tr>
            <tr>
              <td>175</td>
              <td>Mike Doe</td>
              <td>11-7-2014</td>
              <td><span class="label label-danger">Denied</span></td>
              <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
            </tr>
          </table>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
    </div>
  </div>
  <div class="row">
        <div class="col-xs-12">       
            <div class="box">                

                    <div class="box-header with-border">
                      <h3 class="box-title">Sales Statistic</h3>
                    </div>
                    <div class="box-body">
                        <div class="row text-center">
                            <div class="col-xs-3 ">
                                    <span class="label label-primary">TODAY</span>
                                    <hr>
                                    <h4 class="text-success">$90</h4>
                                    <hr>
                                    <p>
                                    <i class="fa fa-fw fa-hand-o-right"></i>
                                    11 Orders</p>
                                    <hr>
                                    <p>
                                    <i class="fa fa-fw fa-hand-o-right"></i>
                                    $10 TOTAL SALE</p>
                                    <hr>
                                    <p>
                                    <i class="fa fa-fw fa-hand-o-right"></i>
                                    $4 DISCOUNT</p>

                            </div>
                            <div class="col-xs-3">
                                    <span class="label label-info">THIS WEEK</span>
                                    <hr>
                                    <h4 class="text-success">$90</h4>
                                    <hr>
                                    <p>
                                    <i class="fa fa-fw fa-hand-o-right"></i>
                                    11 Orders</p>
                                    <hr>
                                    <p>
                                    <i class="fa fa-fw fa-hand-o-right"></i>
                                    $10 TOTAL SALE</p>
                                    <hr>
                                    <p>
                                    <i class="fa fa-fw fa-hand-o-right"></i>
                                    $4 DISCOUNT</p>
                                </div>
                                <div class="col-xs-3">
                                        <span class="label label-success">THIS MONTH</span>
                                    <hr>
                                    <h4 class="text-success">$90</h4>
                                    <hr>
                                    <p>
                                    <i class="fa fa-fw fa-hand-o-right"></i>
                                    11 Orders</p>
                                    <hr>
                                    <p>
                                    <i class="fa fa-fw fa-hand-o-right"></i>
                                    $10 TOTAL SALE</p>
                                    <hr>
                                    <p>
                                    <i class="fa fa-fw fa-hand-o-right"></i>
                                    $4 DISCOUNT</p>
                                    </div>
                                    <div class="col-xs-3">
                                            <span class="label label-danger">THIS YEAR</span>
                                    <hr>
                                    <h4 class="text-success">$90</h4>
                                    <hr>
                                    <p>
                                    <i class="fa fa-fw fa-hand-o-right"></i>
                                    11 Orders</p>
                                    <hr>
                                    <p>
                                    <i class="fa fa-fw fa-hand-o-right"></i>
                                    $10 TOTAL SALE</p>
                                    <hr>
                                    <p>
                                    <i class="fa fa-fw fa-hand-o-right"></i>
                                    $4 DISCOUNT</p>
                                        </div>
    

                        </div>
                      
                    </div>
                    <!-- /.box-body -->
                   
                  </div>
                </div>
                  <!-- /.box -->
         
        
            
        </div>
        <div class="row">
            <div class="col-xs-12">
                <!-- solid sales graph -->
          <div class="box box-solid bg-teal-gradient">
                <div class="box-header">
                  <i class="fa fa-th"></i>
    
                  <h3 class="box-title">Sales Graph</h3>
    
                  
                </div>
                <div class="box-body border-radius-none">
                  <div class="chart" id="line-chart" style="height: 250px;"></div>
                </div>
                <!-- /.box-body -->
                
                <!-- /.box-footer -->
              </div>
              <!-- /.box -->
            </div>
        </div>
      
@endsection
@section('script-s1')
<!-- Morris.js charts -->
<script src="{{asset('assets/bower_components/raphael/raphael.min.js')}}"></script>
<script src="{{asset('assets/bower_components/morris.js/morris.min.js')}}"></script>
@endsection
@section('script-s2')
<script>
$(document).ready(function () {
    var line = new Morris.Line({
    element          : 'line-chart',
    resize           : true,
    data             : [
      { y: '2011 Q1', item1: 2666 },
      { y: '2011 Q2', item1: 2778 },
      { y: '2011 Q3', item1: 4912 },
      { y: '2011 Q4', item1: 3767 },
      { y: '2012 Q1', item1: 6810 },
      { y: '2012 Q2', item1: 5670 },
      { y: '2012 Q3', item1: 4820 },
      { y: '2012 Q4', item1: 15073 },
      { y: '2013 Q1', item1: 10687 },
      { y: '2013 Q2', item1: 8432 }
    ],
    xkey             : 'y',
    ykeys            : ['item1'],
    labels           : ['Item 1'],
    lineColors       : ['#efefef'],
    lineWidth        : 2,
    hideHover        : 'auto',
    gridTextColor    : '#fff',
    gridStrokeWidth  : 0.4,
    pointSize        : 4,
    pointStrokeColors: ['#efefef'],
    gridLineColor    : '#efefef',
    gridTextFamily   : 'Open Sans',
    gridTextSize     : 10
  });
});
</script>
@endsection