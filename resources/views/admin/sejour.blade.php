@extends('layouts.tartifly')

@section('slider')
<aside id="colorlib-hero">
  <div class="flexslider">
    <ul class="slides">
      <li style="background-image: url(/images/cover-img-3.jpg);">
        <div class="overlay"></div>
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12 slider-text">
              <div class="slider-text-inner text-center">
                <h2>by colorlib.com</h2>
                <h1>Tour Overview</h1>
              </div>
            </div>
          </div>
        </div>
      </li>
      </ul>
    </div>
</aside>
@endsection

@section('content')
<div class="colorlib-wrap">
  <div class="container">
    <div class="row">
      <div class="col-md-9">
        <div class="row">
          <div class="col-md-12">
            <div class="wrap-division">
              <div class="form-group">
                <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                  <form action= "{{ route('sejour.create') }}" method="get">
                    <button class="btn btn-primary" type="submit">Create Sejour</button>
                  </form>
                </div>
              </div>
              <?php foreach ($sejours as $key => $value): ?>
                <div class="col-md-6 col-sm-6 animate-box">
                  <div class="tour">
                    <a href="tour-place.html" class="tour-img" style="background-image: url(/images/tour-1.jpg);">
                      <p class="price"><span> {{ $value["cout"] }} Euros </span> <small>/ {{ $value["dure"] }} Days</small></p>
                    </a>
                    <span class="desc">
                      <h2><a href="tour-place.html">{{ $value["libelle"] }}</a></h2>
                      <span class="city">{{ $value["pays"] }}</span>
                    </span>
                    <div class="form-group">
                      <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                        <form action= "{{ route('sejour.destroy',['sejour' => $value['id']]) }}" method="post">
                          @csrf
                          @method("DELETE")
                          <button class="btn btn-primary" type="submit">Delete</button>
                        </form>
                        <form action = "{{ route('sejour.edit',['sejour' => $value['id']]) }}" method="get">
                          <button class="btn btn-primary" type="submit">Edit</button>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>

              <?php endforeach; ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection

@section('menu')
  <nav class="colorlib-nav" role="navigation">
    <div class="top-menu">
      <div class="container-fluid">
        <div class="row">
          <div class="col-xs-2">
            <div id="colorlib-logo"><a href="/">Tartifly</a></div>
          </div>
          <div class="col-xs-10 text-right menu-1">
            <ul>
              <li><a href="{{ route('sejour.index')}}">Home</a></li>
              <li class="active has-dropdown">
                <a href="{{ route('sejour.index')}}">Sejours</a>
              </li>
              <li><a class="dropdown-item" href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </nav>
@endsection
