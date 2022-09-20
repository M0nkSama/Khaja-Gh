
@extends('admin.layout')
@section('content')
<div class="card" style="width:1225px; margin-left:15px">
  <div class="card-header bg-dark text-light">Menu</div>
  <div class="card-body">
      
      <form action="{{ url('/admin/menu') }}" method="POST" enctype="multipart/form-data">
        {!! csrf_field() !!}
        <label>Name</label></br>
        <input type="text" name="name" id="name" class="form-control"></br>
        <label for="">Category</label>
  <select id="cars" name="category" required>
  <option >Choose your category</option>
  <option value="Momo" required>Momo</option>
  <option value="Pizza" required>Pizza</option>
  <option value="Chowmein" required>Chowmein</option>
  <option value="Drinks" required>Drinks</option>
  </select></br></br>
        <label>Description</label></br>
        <input type="text" name="desc" id="description" class="form-control"></br>
        <label>Price</label></br>
        <input type="text" name="price" id="price" class="form-control"></br>
        <label for="exampleInputPassword1">Image</label>
        <input type="file" class="form-control"   name="image"></br>
        
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
  
  </div>
</div>
@stop