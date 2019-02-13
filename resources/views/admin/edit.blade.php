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

<!-- page content -->
<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>Ajout d'un nouveau voyage</h3>
      </div>
      @if (session('stored'))
        {{ session('stored') }}
      @endif
      <div class="title_right">
        <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
          <div class="input-group">
            <input type="text" class="form-control" placeholder="Search for...">
            <span class="input-group-btn">
              <button class="btn btn-default" type="button">Go!</button>
            </span>
          </div>
        </div>
      </div>
    </div>
    <div class="clearfix"></div>
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>Informations</h2>
            <ul class="nav navbar-right panel_toolbox">
              <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
              </li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="#">Settings 1</a>
                  </li>
                  <li><a href="#">Settings 2</a>
                  </li>
                </ul>
              </li>
              <li><a class="close-link"><i class="fa fa-close"></i></a>
              </li>
            </ul>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
            <br />
            <form action="{{ route('sejour.update',['sejour' => $sejour->id]) }}" method="POST" id="form1" data-parsley-validate class="form-horizontal form-label-left">
              @csrf
              @method("PUT")
              @if ($errors->has('libelle'))
                {{ $errors->first('libelle') }}
              @endif
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="travel-label">Libelle<span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input name="libelle" type="text" id="travel-label" required="required" value="{{ $sejour->libelle }}" class="form-control col-md-7 col-xs-12">
                </div>
              </div>
              @if ($errors->has('description'))
                {{ $errors->first('description') }}
              @endif
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="travel-label">Description<span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input name="description" type="text" id="travel-label" required="required" value="{{ $sejour->description }}" class="form-control col-md-7 col-xs-12">
                </div>
              </div>

              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Pays</label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <select name="pays" class="select2_group form-control">
                      <option value="FR" @if ($sejour->pays == "FR") selected @endif>France</option>
                      <option value="US" @if ($sejour->pays == "US") selected @endif>US</option>
                      <option value="UK" @if ($sejour->pays == "UK") selected @endif>UK</option>
                  </select>
                </div>
              </div>

              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Disponibilite</label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <div id="dispo" class="btn-group" data-toggle="buttons">
                    <label @if ($sejour->disponibilite == '1') class="btn btn-primary active" @else class="btn btn-default" @endif data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                      <input type="radio" name="disponibilite" value="1"> Oui
                    </label>
                    <label @if ($sejour->disponibilite == '1') class="btn btn-default"" @else class="btn btn-primary active" @endif data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                      <input type="radio" name="disponibilite" value="0"> Non
                    </label>
                  </div>
                </div>
              </div>
              @if ($errors->has('dure'))
                {{ $errors->first('dure') }}
              @endif
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="date-begin">Dure<span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" name="dure" value="{{ $sejour->dure }}" id="date-begin" required="required" class="form-control col-md-7 col-xs-12">
                </div>
              </div>
              @if ($errors->has('cout'))
                {{ $errors->first('cout') }}
              @endif
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="date-begin">Cout<span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" name="cout" id="date-begin" value="{{ $sejour->cout }}" required="required" class="form-control col-md-7 col-xs-12">
                </div>
              </div>


              <div class="ln_solid"></div>
              <div class="form-group">
                <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                  <button class="btn btn-primary" type="button">Cancel</button>
                  <button type="submit" class="btn btn-success">Submit</button>
                </div>
              </div>

            </form>
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
