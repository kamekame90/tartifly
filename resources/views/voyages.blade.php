@extends('layouts.tartifly')

@section('slider')
<aside id="colorlib-hero">
  <div class="flexslider">
    <ul class="slides">
      <li style="background-image: url(images/img_bg_3.jpg);">
        <div class="overlay"></div>
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12 slider-text">
              <div class="slider-text-inner text-center">
                <h2>by colorlib.com</h2>
                <h1>Find Tours</h1>
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
          <div class="wrap-division">
            <?php foreach ($sejours as $key => $value): ?>
              <div class="col-md-6 col-sm-6 animate-box">
                <div class="tour">
                  <a href="/voyages/{{ $value['id'] }}" class="tour-img" style="background-image: url(images/tour-1.jpg);">
                    <p class="price"><span> {{ $value["cout"] }} Euros </span> <small>/ {{ $value["dure"] }} Days</small></p>
                  </a>
                  <span class="desc">
                    <h2><a href="tour-place.html">{{ $value["libelle"] }}</a></h2>
                    <span class="city">{{ $value["pays"] }}</span>
                  </span>
                </div>
              </div>
            <?php endforeach; ?>


          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">
            <ul class="pagination">
              <li class="disabled"><a href="#">&laquo;</a></li>
              <li class="active"><a href="#">1</a></li>
              <li><a href="#">2</a></li>
              <li><a href="#">3</a></li>
              <li><a href="#">4</a></li>
              <li><a href="#">&raquo;</a></li>
            </ul>
          </div>
        </div>
      </div>

      <!-- SIDEBAR-->
      <div class="col-md-3">
        <div class="sidebar-wrap">
          <div class="side search-wrap animate-box">
            <h3 class="sidebar-heading">Find your tour</h3>
            <form method="post" action="search" class="colorlib-form">
                  @csrf
                    <div class="row">
                     <div class="col-md-12">
                      <div class="form-group">
                        <label for="date">Where:</label>
                        <div class="form-field">
                          <input type="text" name="libelle" id="location" class="form-control" placeholder="Search Location">
                        </div>
                      </div>
                     </div>


                    <div class="col-md-12">
                      <input type="submit" name="submit" id="submit" value="Find Flights" class="btn btn-primary btn-block">
                    </div>
                  </div>
                </form>
          </div>
          <div class="side animate-box">
            <div class="row">
              <div class="col-md-12">
                <h3 class="sidebar-heading">Price Range</h3>
                <form method="post" class="colorlib-form-2">
                        <div class="row">
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="guests">Price from:</label>
                            <div class="form-field">
                              <i class="icon icon-arrow-down3"></i>
                              <select name="people" id="people" class="form-control">
                                <option value="#">1</option>
                                <option value="#">200</option>
                                <option value="#">300</option>
                                <option value="#">400</option>
                                <option value="#">1000</option>
                              </select>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="guests">Price to:</label>
                            <div class="form-field">
                              <i class="icon icon-arrow-down3"></i>
                              <select name="people" id="people" class="form-control">
                                <option value="#">2000</option>
                                <option value="#">4000</option>
                                <option value="#">6000</option>
                                <option value="#">8000</option>
                                <option value="#">10000</option>
                              </select>
                            </div>
                          </div>
                        </div>
                      </div>
                    </form>
                  </div>
            </div>
          </div>
          <div class="side animate-box">
            <div class="row">
              <div class="col-md-12">
                <h3 class="sidebar-heading">Review Rating</h3>
                <form method="post" class="colorlib-form-2">
                   <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">
                      <p class="rate"><span><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i></span></p>
                    </label>
                   </div>
                   <div class="form-check">
                      <input type="checkbox" class="form-check-input" id="exampleCheck1">
                      <label class="form-check-label" for="exampleCheck1">
                         <p class="rate"><span><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i></span></p>
                      </label>
                   </div>
                   <div class="form-check">
                      <input type="checkbox" class="form-check-input" id="exampleCheck1">
                      <label class="form-check-label" for="exampleCheck1">
                        <p class="rate"><span><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i></span></p>
                     </label>
                   </div>
                   <div class="form-check">
                      <input type="checkbox" class="form-check-input" id="exampleCheck1">
                      <label class="form-check-label" for="exampleCheck1">
                        <p class="rate"><span><i class="icon-star-full"></i><i class="icon-star-full"></i></span></p>
                     </label>
                   </div>
                   <div class="form-check">
                      <input type="checkbox" class="form-check-input" id="exampleCheck1">
                      <label class="form-check-label" for="exampleCheck1">
                        <p class="rate"><span><i class="icon-star-full"></i></span></p>
                     </label>
                   </div>
                </form>
              </div>
            </div>
          </div>
          <div class="side animate-box">
            <div class="row">
              <div class="col-md-12">
                <h3 class="sidebar-heading">Location</h3>
                <form method="post" class="colorlib-form-2">
                   <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">
                      <h4 class="place">Greece</h4>
                    </label>
                   </div>
                   <div class="form-check">
                      <input type="checkbox" class="form-check-input" id="exampleCheck1">
                      <label class="form-check-label" for="exampleCheck1">
                      <h4 class="place">Italy</h4>
                    </label>
                   </div>
                   <div class="form-check">
                      <input type="checkbox" class="form-check-input" id="exampleCheck1">
                      <label class="form-check-label" for="exampleCheck1">
                      <h4 class="place">Spain</h4>
                    </label>
                   </div>
                   <div class="form-check">
                      <input type="checkbox" class="form-check-input" id="exampleCheck1">
                      <label class="form-check-label" for="exampleCheck1">
                      <h4 class="place">Germany</h4>
                    </label>
                   </div>
                   <div class="form-check">
                      <input type="checkbox" class="form-check-input" id="exampleCheck1">
                      <label class="form-check-label" for="exampleCheck1">
                      <h4 class="place">Japan</h4>
                    </label>
                   </div>
                </form>
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
              <li><a href="/">Home</a></li>
              <li class="active has-dropdown">
                <a href="voyages">Voyages</a>
                <ul class="dropdown">
                  <li><a href="#">Destination</a></li>
                  <li><a href="#">Cruises</a></li>
                  <li><a href="#">Hotels</a></li>
                  <li><a href="#">Booking</a></li>
                </ul>
              </li>
              <li><a href="about">About</a></li>
              <li><a href="contact">Contact</a></li>
              @guest <li><a href="/login">Login</a></li> @endguest
              @auth <li><a href="{{ route('sejour.index')}}">Mon compte</a></li><li><a href="/logout">Logout</a></li> @endauth
            </ul>
          </div>
        </div>
      </div>
    </div>
  </nav>
@endsection
