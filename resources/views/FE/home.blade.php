@extends("FE.master")
@section('content')
<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel" style="scale:50px; ">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="{{asset('cr/third.jpg')}}" class="d-block w-100" alt="..." style="height: 600px ">
      </div>
      <div class="carousel-item">
        <img src="{{asset('cr/third.jpg')}}" class="d-block w-100" alt="..."style="height: 600px">
      </div>
      <div class="carousel-item">
        <img src="{{asset('cr/third.jpg')}}" class="d-block w-100" alt="..."style="height: 600px">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  <nav class="navbar navbar-light bg-dark" style="margin-top:20px; margin-bottom:20px;">
    <span class="navbar-text" style="color: aliceblue; ; font-size:150%; padding-left:650px;" >
      POPULAR CATEGORY
    </span>
  </nav>
  <div class="row row-cols-1 row-cols-md-3 g-4">
    <div class="col">
      <a href="/momo" style="text-decoration:none; color:black">
      <div class="card h-100">
        <img src="{{asset('cr/momo.jpg')}}" class="card-img-top" style="height: 300px;" alt="...">
        <div class="card-body">
          <h5 class="card-title">Momo</h5>
          <p class="card-text">Momo are bite-size dumplings made with a spoonful of stuffing wrapped in dough.</p>
        </div>
        <div class="card-footer">
          
        </div>
      </div>
      </a>
    </div>
    <div class="col">
      <a href="/chowmein" style="text-decoration:none; color:black">
      <div class="card h-100">
        <img src="{{asset('cr/pizza.jpg')}}" class="card-img-top" style="height: 300px;" alt="...">
        <div class="card-body">
          <h5 class="card-title">Chowmein</h5>
          <p class="card-text">a seasoned stew of shredded or diced meat, mushrooms, and vegetables that is usually served with fried noodles.</p>
        </div>
        <div class="card-footer">
          
        </div>
      </div>
    </a>
    </div>
    <div class="col">
      <a href="/drinks" style="text-decoration:none; color:black">
      <div class="card h-100">
        <img src="{{asset('cr/burger.jpg')}}" class="card-img-top" style="height: 300px;" alt="...">
        <div class="card-body">
          <h5 class="card-title">Drinks</h5>
          <p class="card-text">take (a liquid) into the mouth and swallow.</p>
        </div>
        <div class="card-footer">
          
        </div>
      </div>
    </a>
    </div>
  </div>
  <nav class="navbar navbar-light bg-dark" style="margin-top:25px; margin-bottom:25px;">
    <span class="navbar-text" style="color: aliceblue; font-size:150%; padding-left:650px" >
    
      POPULAR ITEM
    </span>
  </nav>

  <div class="row row-cols-1 row-cols-md-3 g-4">
    <div class="col">
      <a href="/order/14" style="text-decoration:none; color:black">
      <div class="card h-100">
        <img src="{{asset('cr/bm.JFIF')}}" class="card-img-top" style="height: 300px;" alt="...">
        <div class="card-body">
          <h5 class="card-title">Buff Momo</h5>
          <p class="card-text">Rs. 110</p>
        </div>
        <div class="card-footer">
          
        </div>
      </div>
      </a>
    </div>
    <div class="col">
      <a href="/order/21" style="text-decoration:none; color:black">
      <div class="card h-100">
         <img src="{{asset('cr/coke.jpg')}}" class="card-img-top" style="height: 300px;" alt="...">
        <div class="card-body">
          <h5 class="card-title">Coke</h5>
          <p class="card-text">RS. 60</p>
        </div>
        <div class="card-footer">
          
        </div>
      </div>
    </a>
    </div>
    <div class="col">
      <a href="/order/16" style="text-decoration:none; color:black">
      <div class="card h-100">
        <img src="{{asset('cr/c.jpg')}}" class="card-img-top" style="height: 300px;" alt="...">
        <div class="card-body">
          <h5 class="card-title">Chicken chowmein</h5>
          <p class="card-text">Rs. 100</p>
        </div>
        <div class="card-footer">
          
        </div>
      </div>
    </a>
    </div>
  </div>

@endsection