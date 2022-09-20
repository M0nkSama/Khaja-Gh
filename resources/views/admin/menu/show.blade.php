
@extends('admin.layout')
@section('content')
<div class="card">
  <div class="card-header">Category</div>
  <div class="card-body">
  
        <div class="card-body">
        <h5 class="card-title">Name : {{ $posts->name }}</h5>
        <p class="card-text">Description : {{ $posts->desc }}</p>
        <p class="card-text">Price: {{ $posts->price }}</p>
        {{$posts->image}}
        <img src={{ $posts->image }} class="card-img-top" alt="No Image" />
  </div>
  </div>
</div>