
@extends('admin.layout')
@section('content')
<div class="card">
  <div class="card-header">Category</div>
  <div class="card-body">
  
        <div class="card-body">
        <h5 class="card-title">Name : {{ $posts->cname }}</h5>
        <p class="card-text">Description : {{ $posts->cdesc }}</p>
        {{$posts->image}}
        <img src={{ $posts->image }} class="card-img-top" alt="No Image" />
  </div>
  </div>
</div>