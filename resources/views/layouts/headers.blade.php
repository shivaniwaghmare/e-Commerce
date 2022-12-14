
<nav class="navbar navbar-dark navbar-expand p-0 bg-primary">
    <div class="container">
        <ul class="navbar-nav d-none d-md-flex mr-auto">
        <li class="nav-item"><a class="nav-link" href="/">Shop</a></li>
        @if(Auth::check())
            @if (Auth::user()->is_admin())
            <li class="nav-item"><a class="nav-link" href="{{ route('products') }}">Products</a></li>
            @endif
        @endif
        <li class="nav-item"><a class="nav-link" href="#">Cart</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Checkout</a></li>
        </ul>
        <ul class="navbar-nav">   
    </ul> <!-- list-inline //  -->
    
    </div> <!-- container //  -->
</nav> <!-- header-top-light.// -->

<section class="header-main border-bottom">
  <div class="container">
<div class="row align-items-center">
  <div class="col-lg-2 col-6">
    <a href="#" class="brand-wrap">
      e-Commerce
    </a> <!-- brand-wrap.// -->
  </div>
  <div class="col-lg-6 col-12 col-sm-12">
    <form action="#" class="search">
      <div class="input-group w-100">
          <input type="text" class="form-control" placeholder="Search">
          <div class="input-group-append">
            <button class="btn btn-primary" type="submit">
              <i class="fa fa-search"></i>
            </button>
          </div>
        </div>
    </form> <!-- search-wrap .end// -->
  </div> <!-- col.// -->
  <div class="col-lg-4 col-sm-6 col-12">
    <div class="widgets-wrap float-md-right">
      <div class="widget-header  mr-3">
        <a href="{{ route('cart.list') }}" class="icon icon-sm rounded-circle border"><i class="fa fa-shopping-cart"></i></a>
        <span class="badge badge-pill badge-danger notify">{{ Cart::getTotalQuantity()}}</span>
      </div>
        <div class="widget-header icontext">
            @guest
            @else
                <a href="#" class="icon icon-sm rounded-circle border" data-toggle="dropdown"><i class="fa fa-user"></i></a>
                <ul class="dropdown-menu">
                    <li><a href="{{ route('logout') }}">Logout</a></li>
                </ul>
                <div class="text">
            @endguest
          <!-- <span class="text-muted">Welcome!</span> -->
          <div> 
           
            @guest
                <a href="{{route('login')}}">Sign | Register</a> 
            @else
                {{ Auth::user()->name }}

            @endguest 
          </div>
        </div>
      </div>
    </div> <!-- widgets-wrap.// -->
  </div> <!-- col.// -->
</div> <!-- row.// -->
  </div> <!-- container.// -->
</section> <!-- header-main .// -->