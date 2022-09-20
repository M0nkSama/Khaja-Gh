
@extends('admin.layout')
@section('content')
<div class="card" style="width:1225px; margin-left:15px">
  <div class="card-header bg-dark text-light">Category</div>
  <div class="card-body">
      
      <form action="{{ url('category') }}" method="POST" enctype="multipart/form-data">
        {!! csrf_field() !!}
        <label>Name</label></br>
        <input type="text" name="cname" id="name" class="form-control"></br>
        <label>Description</label></br>
        <input type="text" name="cdesc" id="address" class="form-control"></br>
        <label for="exampleInputPassword1">Image</label>
        <input type="file" class="form-control"   name="image"></br>
        
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
  
  </div>
</div>
@stop