@extends('layouts.app')
  @section('header')
  <nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="/">
        <img src="{{ URL::asset('img/encuentratuempleo1.png') }}" alt="logo" />
      </a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="menu-principal">

      <ul class="nav navbar-nav navbar-right">
        @if (Auth::check())
        <li><a href="/client/curriculum/personal_date">Subir tu curriculum</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
            {{ Auth::user()->name }} <span class="caret"></span>
          </a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
          </ul>
        </li>
        @else
        <li><a href="/register">Registrate</a></li>
        @endif
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
  </nav>
  @endsection
