@extends("FE.master")
@section('content')

<nav class="navbar navbar-light bg-dark" style="margin-top:5px; margin-bottom:5px;">
    <span class="navbar-text" style="color: aliceblue; margin-left:700px; font-size:150%;" >
      Pizza
    </span>
  </nav>
  <div class="container-fluid">
  <div class=" row"> 
  @foreach ($posts as $data)
  <div class="col-md-3" style="margin-bottom:75px">
  <img src="{{asset('/images/menu/'.$data["image"])}}" class="card-img-top" alt="..." style="height:180px; width:320px;">
    <div class="card-body">
      <h5 class="card-title">{{$data->name}}</h5>
      <p class="card-text">Rs.{{$data->price}}</p>
      <a href="/order/{{$data->id}}" class="btn btn-primary">Order</a>
    </div>
  </div>
@endforeach
  </div>
</div>
@endsection 