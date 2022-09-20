<?php
$user=auth()->user();
?>


<head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<title>Khaja Ghar</title>
  </head>
<body>
<section >
  <div class="container py-5">
    <div class="row justify-content-center">
      <div class="col-md-8 col-lg-6 col-xl-4">
        <div class="card" style="border-radius: 15px; >
          <div class="bg-image hover-overlay ripple ripple-surface ripple-surface-light"
            data-mdb-ripple-color="light">
            <img src="{{asset('/images/menu/'.$posts["image"])}}"
              style="border-top-left-radius: 15px; border-top-right-radius: 15px;" class="img-fluid"
              alt="Laptop" />
            <a href="#!">
              <div class="mask"></div>
            </a>
          </div>
          <div class="card-body pb-0">
            <div class="d-flex justify-content-between">
              <div>
                <p><a href="#!" class="text-dark">{{$posts->name}}</a></p>
                <p class="small text-muted">{{$posts->desc}}</p><span>Rs.{{$posts->price}}<span>
                </div>
            </div>
          </div>
         
          <hr class="my-0" />
          <div class="card-body">
            <div class="d-flex justify-content-between align-items-center pb-2 mb-1">
              <a href="/menu" class="text-dark fw-bold">Cancel</a>

              <form action="/store" method="POST">
                @CSRF
               
                
                  <input type="text" name="uid" value="{{$user->id}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" hidden>
                  <input type="text" name="uname" value="{{$user->name}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" hidden>
                  <input type="text" name="pid" value="{{$posts->id}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" hidden>
                  <input type="text" name="pname" value="{{$posts->name}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" hidden>
                  <input type="text" name="pp" value="{{$posts->price}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" hidden>
                 
                <button type="submit" class="btn btn-primary">Order Now</button>
              </form>  
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>



</body>
