@extends('admin.layout')
@section('content')
<div class="card" style="width:1225px; margin-left:15px" >
  <div class="card-header bg-dark text-light">Menu</div>
  <div class="card-body" >
      
      <form action="{{ url('/admin/menu/' .$posts->id) }}" method="POST">
        {!! csrf_field() !!}
        @method("POST")
        <input type="hidden" name="id" id="id" value="{{$posts->id}}" id="id" />
        <label>Name</label></br>
        <input type="text" name="name" id="name" value="{{$posts->name}}" class="form-control"></br>
        <label for="">Category</label>
  <select id="cars" name="category" required>
  <option >{{$posts->category}}</option>
  <option value="Momo" required>Momo</option>
  <option value="Fried rice" required>Fried rice</option>
  <option value="Chowmein" required>Chowmein</option>
  <option value="Drinks" required>Drinks</option>
  </select></br></br>
        <label>Description</label></br>
        <input type="text" name="desc" id="desc" value="{{$posts->desc}}" class="form-control"></br>
        <label>Price</label></br>
        <input type="text" name="price" id="price" value="{{$posts->price}}" class="form-control"></br>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
  
  </div>
</div>
@stop