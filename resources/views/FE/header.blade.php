  @php
      $auth = Auth()->user();
      use App\Models\Menu;
      $posts = Menu::all();
@endphp
  </div><nav class="navbar navbar-expand-lg navbar-light bg-warning">
    <div class="container-fluid">
      <a class="navbar-brand text-light" style="font-size:250%; " href="/">Khaja Ghar</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/menu">Menu</a>
          </li>
       
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Category
            </a>
            
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="/momo">Momo</a></li>
              <li><a class="dropdown-item" href="/chowmein">Chowmein</a></li>
              <li><a class="dropdown-item" href="/pizza">Pizza</a></li>
              <li><a class="dropdown-item" href="/drinks">Drinks</a></li>
            </ul>
            
          </li>
           <li class="nav-item">
    <a class="nav-link" href="/order"style="text-decoration:none; color:black">Orders</a>
  </li>
          
          
</ul>
        @if ($auth==NULL)
        <span></span>
        @else
 
        @if($auth['role']=='2')
        <li class="nav-item" >
          <a class="nav-link" href="/admin/order">
            <i class="fa fa-lock" style="color:red">
              
            </i>
            Admin
          </a>
        </li>
        @else
            <span></span>
        
        @endif
        @endif

        
    <div >
      @auth
                   <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" style="text-decoration:none; color:black "  href="{{ url('/') }}" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  {{$auth->name}}
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="/logout">Log Out</a></li>
                  
                </ul>
              </li>
              @else
                  <a href="{{ route('login') }}" class="text-sm text-gray-700 " style="text-decoration:none; color:black ">Log in</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                  @if (Route::has('register'))
                      <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 " style="text-decoration:none; color:black">Register</a>
                  @endif
              @endauth

    </div>
       
          
  </nav>

  
  