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
              <div class="col-md-12 col-md-offset-0 heading2 animate-box">
                <h2>{{ $sejour["libelle"] }} Tour</h2>
              </div>
              <div class="row">
                <div class="col-md-12 animate-box">
                  <div class="room-wrap">
                    <div class="row">
                      <?php foreach ($sejour->photos as $key => $value): ?>
                      <div class="col-md-6 col-sm-6">
                        <div class="room-img" style="background-image: url({{ $value['url'] }});"></div>
                      </div>
                      <?php endforeach; ?>
                      <div class="col-md-6 col-sm-6">
                        <div class="desc">
                          <span class="day-tour">Day 1</span>
                          <h2>{{ $sejour->destination->ville }} , {{ $sejour->destination->pays }}</h2>
                          <p>{{ $sejour->description }}</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-12 animate-box">
                  <div class="room-wrap">
                    <div class="row">
                      <div class="col-md-6 col-sm-6">
                        <div class="room-img" style="background-image: url(/images/tour-2.jpg);"></div>
                      </div>
                      <div class="col-md-6 col-sm-6">
                        <div class="desc">
                          <span class="day-tour">Day 2</span>
                          <h2>Thailand</h2>
                          <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-md-12 animate-box">
                  <div class="room-wrap">
                    <div class="row">
                      <div class="col-md-6 col-sm-6">
                        <div class="room-img" style="background-image: url(/images/tour-3.jpg);"></div>
                      </div>
                      <div class="col-md-6 col-sm-6">
                        <div class="desc">
                          <span class="day-tour">Day 3</span>
                          <h2>Boracay, Philippines</h2>
                          <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-md-12 animate-box">
                  <div class="room-wrap">
                    <div class="row">
                      <div class="col-md-6 col-sm-6">
                        <div class="room-img" style="background-image: url(/images/tour-4.jpg);"></div>
                      </div>
                      <div class="col-md-6 col-sm-6">
                        <div class="desc">
                          <span class="day-tour">Day 4</span>
                          <h2>Tokyo, Japan</h2>
                          <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-md-12 animate-box">
                  <div class="room-wrap">
                    <div class="row">
                      <div class="col-md-6 col-sm-6">
                        <div class="room-img" style="background-image: url(/images/tour-5.jpg);"></div>
                      </div>
                      <div class="col-md-6 col-sm-6">
                        <div class="desc">
                          <span class="day-tour">Day 5</span>
                          <h2>Paris, Italy</h2>
                          <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-md-12 animate-box">
                  <div class="room-wrap">
                    <div class="row">
                      <div class="col-md-6 col-sm-6">
                        <div class="room-img" style="background-image: url(/images/tour-6.jpg);"></div>
                      </div>
                      <div class="col-md-6 col-sm-6">
                        <div class="desc">
                          <span class="day-tour">Day 6</span>
                          <h2>Greece</h2>
                          <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-12 animate-box text-center">
                  <p><a href="#" class="btn btn-primary">Book Now!</a></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- SIDEBAR-->
      <div class="col-md-3">
        <div class="sidebar-wrap">
          <div class="side search-wrap animate-box">
            <h3 class="sidebar-heading">Find your hotel</h3>
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
                <h3 class="sidebar-heading">Categories</h3>
                <form method="post" class="colorlib-form-2">
                   <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">
                      <h4 class="place">Apartment</h4>
                    </label>
                   </div>
                   <div class="form-check">
                      <input type="checkbox" class="form-check-input" id="exampleCheck1">
                      <label class="form-check-label" for="exampleCheck1">
                      <h4 class="place">Hotel</h4>
                    </label>
                   </div>
                   <div class="form-check">
                      <input type="checkbox" class="form-check-input" id="exampleCheck1">
                      <label class="form-check-label" for="exampleCheck1">
                      <h4 class="place">Hostel</h4>
                    </label>
                   </div>
                   <div class="form-check">
                      <input type="checkbox" class="form-check-input" id="exampleCheck1">
                      <label class="form-check-label" for="exampleCheck1">
                      <h4 class="place">Inn</h4>
                    </label>
                   </div>
                   <div class="form-check">
                      <input type="checkbox" class="form-check-input" id="exampleCheck1">
                      <label class="form-check-label" for="exampleCheck1">
                      <h4 class="place">Villa</h4>
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
          <div class="side animate-box">
            <div class="row">
              <div class="col-md-12">
                <h3 class="sidebar-heading">Facilities</h3>
                <form method="post" class="colorlib-form-2">
                   <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">
                      <h4 class="place">Airport Transfer</h4>
                    </label>
                   </div>
                   <div class="form-check">
                      <input type="checkbox" class="form-check-input" id="exampleCheck1">
                      <label class="form-check-label" for="exampleCheck1">
                      <h4 class="place">Resto Bar</h4>
                    </label>
                   </div>
                   <div class="form-check">
                      <input type="checkbox" class="form-check-input" id="exampleCheck1">
                      <label class="form-check-label" for="exampleCheck1">
                      <h4 class="place">Restaurant</h4>
                    </label>
                   </div>
                   <div class="form-check">
                      <input type="checkbox" class="form-check-input" id="exampleCheck1">
                      <label class="form-check-label" for="exampleCheck1">
                      <h4 class="place">Swimming Pool</h4>
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
