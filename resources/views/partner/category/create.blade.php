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
                 <label for="name" class="col-sm-2 control-label">Name</label>
      
                 <div class="col-sm-10">
                   <input type="email" class="form-control" id="inputEmail3" placeholder="Name">
                 </div>
               </div>
               <div class="form-group">
                 <label for="description" class="col-sm-2 control-label">Description</label>
      
                 <div class="col-sm-10">
                     <textarea class="form-control noresize"  placeholder="Enter ..."></textarea>
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