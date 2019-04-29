@extends('layouts.partner')

@section('content')
<div class="row">
    <div class="col-xs-4">
        <div class="box container">
            <div class="box-body ">
                    <i class="fa fa-3x fa-fw fa-list"></i><br>
                    <strong><h2>Jobs Report</h2></strong>
                    <p>Job's in detail information</p>
                    <button class="btn btn-info btn-lg" data-toggle="modal" data-target="#modal-default">Get Report</button>

            </div>

            
        </div>
    </div>
    <div class="col-xs-4">
            <div class="box container">
                    <div class="box-body">
                            <i class="fa fa-3x fa-fw fa-cart-arrow-down"></i> <br>
                            <strong><h2>Orders Report</h2></strong>
                            <p>Order's financial information</p>
                            <button class="btn btn-info btn-lg" data-toggle="modal" data-target="#modal-default">Get Report</button>
                        </div>
                
                
            </div>
        </div>
        <div class="col-xs-4">
                <div class="box container">
                        <div class="box-body">
                                <i class="fa fa-3x fa-fw fa-users"></i><br>
                                <strong><h2>Resources Report</h2></strong>
                                <p>Resource's personal information</p>
                                <button class="btn btn-info btn-lg" data-toggle="modal" data-target="#modal-default">Get Report</button>
                                
                                
                
                            </div>
                    
                    
                </div>
            </div>
</div>
<div class="modal fade" id="modal-default">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title">Default Modal</h4>
            </div>
            <div class="modal-body">
              <p>One fine body&hellip;</p>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Save changes</button>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->

@endsection