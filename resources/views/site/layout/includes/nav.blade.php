<div class="header-top d-lg-block d-md-block d-none ">

  <div class="menu-action">
    <ul class="nav justify-content-center justify-content-lg-end justify-content-md-end">
      <li class="nav-item">
        <a class="nav-link text-light" href="{{ url('/cart') }}">
          <i class="fa  fa-shopping-cart" aria-hidden="true"></i>
          <i class="badge badge-pill badge-danger float-right icon-status-cart">2</i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-light" href="{{ url('/login') }}">
          <span class="d-block ">Login</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-light" href="{{url('/profile')}}">Meu dados</a>
      </li>
    </ul>
  </div>
</div>

<nav class="navbar navbar-expand-md  navbar-light menu-bar-bottom">
  
  <div class="top_logo d-block d-md-none">
    <img src="{{ asset('/assets/site/img/logo-top.png') }}" alt="Logo Image">
   <span class="sr-only">LOGO DO SITE</span> 
  </div>
  <!-- Botão menu -->
  <button type="button" class="navbar-toggler hidden-lg-up btn-menu" data-toggle="collapse" data-target="#collapsibleNavId"
    aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
    <i class="fa fa-bars fa-1x text-light" aria-hidden="true"></i>
  </button>

  <div class="uc-menu">
    <!-- Btn user -->
    <button class="navbar-toggler hidden-lg-up btn-user" type="button" data-toggle="collapse" data-target="#collapsibleNavId"
      aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
      <i class="fa fa-user text-light" aria-hidden="true"></i>
    </button>
    <!-- Btn cart -->
    <button class="navbar-toggler hidden-lg-up btn-cart" type="button" data-toggle="collapse" data-target="#collapsibleNavId"
      aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
      <i class="fa fa-shopping-cart text-light" aria-hidden="true"></i>
      <span class="badge badge-pill  badge-danger icon-status-cart">2</span>
    </button>
  </div>

  <div class="collapse navbar-collapse menu-bar-top" id="collapsibleNavId">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item">
        <a class="nav-link separator" href="{{ route('site.index') }}">
          <i class="fa fa-home d-block d-lg-none" aria-hidden="true"></i>
          <span class="d-none d-lg-block">Home</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('product.sale') }}">Ofertas</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('product.new') }}">Novidades</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Marcas</a>
        <div class="dropdown-menu" aria-labelledby="dropdownId" style="border:none">
          <a class="dropdown-item" href="{{ route('product.brand',['q' => 'nike']) }}">Nike</a>
          <a class="dropdown-item" href="{{ route('product.brand',['q' => 'reserva']) }}">Reserva</a>
          <a class="dropdown-item" href="{{ route('product.brand',['q' => 'adidas']) }}">Adidas</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('site.contact') }}">Contato</a>
      </li>
    </ul>
    <!-- Form search -->
    <form action="{{ route('product.search') }}" class="form-inline form-search" method="POST">
      <div class="input-group form-search-content">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="text" name="search" class="form-control mr-1" placeholder="O que você procura ?">
        <button class="btn btn-dark">
          <i class="fa fa-search" aria-hidden="true"></i>
        </button>
      </div>
    </form>
  </div>
</nav>