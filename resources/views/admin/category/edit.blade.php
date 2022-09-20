@extends('admin.layout')
@section('content')
<div class="card" style="width:1225px; margin-left:15px">
  <div class="card-header bg-dark text-light">Category</div>
  <div class="card-body">
      
      <form action="{{ url('category/' .$posts->id) }}" method="POST">
        {!! csrf_field() !!}
        @method("POST")
        <input type="hidden" name="id" id="id" value="{{$posts->id}}" id="id" />
        <label>Name</label></br>
        <input type="text" name="cname" id="name" value="{{$posts->cname}}" class="form-control"></br>
        <label>Description</label></br>
        <input type="text" name="cdesc" id="address" value="{{$posts->cdesc}}" class="form-control"></br>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
  
  </div>
</div>
@stop