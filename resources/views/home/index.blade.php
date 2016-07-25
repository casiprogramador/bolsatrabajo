@extends('layouts.app')
@section('body')
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
      <a class="navbar-brand" href="#">Bolsa de Trabajo</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="menu-principal">

      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">Subir tu curriculum</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
  </nav>
  <div class="container">
    <div class="row">
      <div class="col-sm-12 col-md-9">
        <div class="jumbotron">
          <h2>El trabajo que buscas</h2>
          <p>Lo encontrar aqui</p>
        </div>
      </div>
      <div class="col-sm-12 col-md-3">
        <form class="form-horizontal">
          <fieldset>
            <legend>Ingresar a tu cuenta</legend>
            <div class="form-group">
              <label for="inputEmail" class="col-lg-2 control-label">Email</label>
              <div class="col-lg-10">
                <input type="text" class="form-control" id="inputEmail" placeholder="Email">
              </div>
            </div>
            <div class="form-group">
              <label for="inputPassword" class="col-lg-2 control-label">Password</label>
              <div class="col-lg-10">
                <input type="password" class="form-control" id="inputPassword" placeholder="Password">
              </div>
            </div>
            <div class="form-group">
              <div class="col-lg-10 col-lg-offset-2">
                <button type="submit" class="btn btn-info">Ingresar</button>
                <button type="reset" class="btn btn-danger">Registrarse</button>
              </div>
            </div>
          </fieldset>
        </form>
      </div>
    </div>
  </div>
@endsection
