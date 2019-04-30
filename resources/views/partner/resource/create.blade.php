@extends('layouts.partner')
@section('css')
<style>
    textarea {
   resize: none;
}
</style>
@endsection
@section('content')
{{-- @include('partial.message')
@include('partial.formerror') --}}
    
<div class="row">
        <div class="col-md-12">
                <!-- Horizontal Form -->
                <div class="box box-info">
                  <div class="box-header with-border">
                    <h3 class="box-title">Horizontal Form</h3>
                  </div>
                  <!-- /.box-header -->
                  <!-- form start -->
                  <form class="form-horizontal">
                    <div class="box-body">
                      <div class="form-group">
                        <label for="name" class="col-sm-2 control-label">Mobile</label>
      
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputEmail3" placeholder="Name">
                        </div>
                      </div>
                      <div class="form-group">
                          <label for="name" class="col-sm-2 control-label">Alternate Contact</label>
        
                          <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputEmail3" placeholder="Name">
                          </div>
                        </div>
                        <div class="form-group">
                            <label for="name" class="col-sm-2 control-label">Name</label>
          
                            <div class="col-sm-10">
                              <input type="text" class="form-control" id="inputEmail3" placeholder="Name">
                            </div>
                          </div>
                          <div class="form-group">
                              <label for="name" class="col-sm-2 control-label">Father's Name</label>
            
                              <div class="col-sm-10">
                                <input type="text" class="form-control" id="inputEmail3" placeholder="Name">
                              </div>
                            </div>
                            <div class="form-group">
                                <label for="name" class="col-sm-2 control-label">Resource Photo</label>
              
                                <div class="col-sm-10">
                                  <input type="file" class="form-control" id="inputEmail3" placeholder="Name">
                                </div>
                              </div>
                              
                                <div class="form-group">
                                    <label for="name" class="col-sm-2 control-label">NID Number</label>
                  
                                    <div class="col-sm-10">
                                      <input type="text" class="form-control" id="inputEmail3" placeholder="Name">
                                    </div>
                                  </div>
                                  <div class="form-group">
                                      <label for="name" class="col-sm-2 control-label">NID Image</label>
                    
                                      <div class="col-sm-10">
                                        <input type="file" class="form-control" id="inputEmail3" placeholder="Name">
                                      </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="name" class="col-sm-2 control-label">Email</label>
                      
                                        <div class="col-sm-10">
                                          <input type="email" class="form-control" id="inputEmail3" placeholder="Name">
                                        </div>
                                      </div>
                                      <div class="form-group">
                                          <label for="name" class="col-sm-2 control-label">Resource Type</label>
                        
                                          <div class="col-sm-10">
                                            <select name="" id="" class="form-control">
                                              <option value=""></option>
                                              <option value=""></option>
                                              <option value=""></option>
                                              <option value=""></option>
                                            </select>
                                          </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="name" class="col-sm-2 control-label">Category Ids</label>
                          
                                            <div class="col-sm-10">
                                              <select name="" id="" class="form-control">
                                                <option value=""></option>
                                                <option value=""></option>
                                                <option value=""></option>
                                                <option value=""></option>
                                              </select>
                                            </div>
                                          </div>
                                          <div class="form-group">
                                              <label for="name" class="col-sm-2 control-label">Present Address</label>
                            
                                              <div class="col-sm-10">
                                                <input type="text" class="form-control" id="inputEmail3" placeholder="Name">
                                              </div>
                                            </div>
                                      
            
                      
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer">
                      <button type="submit" class="btn btn-info pull-right">Save</button>
                    </div>
                    <!-- /.box-footer -->
                  </form>
                </div>
</div>
@endsection