@extends('layouts.partner')
@section('content')
<div class="row">
        <div class="col-md-12">
          <!-- Widget: user widget style 1 -->
          <div class="box box-widget widget-user-2">
            <!-- Add the bg color to the header using any of the bg-* classes -->
            <div class="widget-user-header bg-yellow">
              <div class="widget-user-image">
                <img class="img-circle" src="{{asset('assets/dist/img/user7-128x128.jpg')}}" alt="User Avatar">
              </div>
              <!-- /.widget-user-image -->
              <h3 class="widget-user-username">PRAXIS TRAINING & CONSULTENCY </h3>
              <h5 class="widget-user-desc">Rating:4.3</h5>
              <h5 class="widget-user-desc">Reviews:61</h5>
            </div>
          </div>
          <!-- /.widget-user -->
        </div>
</div>
<div class="row">
        <div class="col-md-12">
          <div class="box box-default box-solid">
            <div class="box-header with-border">
              <h3 class="box-title">Current Package</h3>
              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <p><strong>LITE :</strong>  <a href="#">Upgrade</a> </p>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
</div>
<div class="row">
    <!-- /.col -->
    <div class="col-md-12">
            <div class="nav-tabs-custom">
              <ul class="nav nav-tabs">
                <li class="active"><a href="#basic" data-toggle="tab">Basic</a></li>
                <li><a href="#company" data-toggle="tab">Company</a></li>
                <li><a href="#location" data-toggle="tab">Location</a></li>
                <li><a href="#bank" data-toggle="tab">Bank</a></li>
                <li><a href="#admin" data-toggle="tab">Admin</a></li>
                <li><a href="#finance" data-toggle="tab">Finance</a></li>
                <li><a href="#operation" data-toggle="tab">Operation</a></li>
                <li><a href="#closing_request" data-toggle="tab">Closing Request</a></li>
              </ul>
              <div class="tab-content">
                <div class="active tab-pane" id="basic">
                  
                </div>
                <!-- /.tab-pane -->
                <div class="tab-pane" id="company">
                  
                </div>
                <!-- /.tab-pane -->
  
                <div class="tab-pane" id="location">
                </div>
                <!-- /.tab-pane -->
                <!-- /.tab-pane -->
  
                <div class="tab-pane" id="bank">
                    </div>
                    <!-- /.tab-pane -->
                    <!-- /.tab-pane -->
  
                <div class="tab-pane" id="admin">
                    </div>
                    <!-- /.tab-pane -->
                    <!-- /.tab-pane -->
  
                <div class="tab-pane" id="finance">
                    </div>
                    <!-- /.tab-pane -->
                    <!-- /.tab-pane -->
  
                <div class="tab-pane" id="operation">
                    </div>
                    <!-- /.tab-pane -->
                    <!-- /.tab-pane -->
  
                <div class="tab-pane" id="closing_request">
                    </div>
                    <!-- /.tab-pane -->
              </div>
              <!-- /.tab-content -->
            </div>
            <!-- /.nav-tabs-custom -->
          </div>
          <!-- /.col -->
      
        <!-- /.row -->
  
</div>

@endsection