@extends('layouts.client')
@section('body')
  <div class="container">
    <div class="row">
      <div class="col-sm-12 col-md-9">
        <div class="jumbotron">
          <h2>El trabajo que buscas</h2>
          <p>Lo encontrar aqui</p>
        </div>
      </div>
      <div class="col-sm-12 col-md-3">
        <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
          {!! csrf_field() !!}
          <fieldset>
            <legend>Ingresar a tu cuenta</legend>
            <div class="form-group">
              <label for="inputEmail" class="col-lg-2 control-label">Email</label>
              <div class="col-lg-10">
                <input type="text" class="form-control" id="inputEmail" name="email" placeholder="Email" value="{{ old('email') }}">
                @if ($errors->has('email'))
                    <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
              </div>
            </div>
            <div class="form-group">
              <label for="inputPassword" class="col-lg-2 control-label">Password</label>
              <div class="col-lg-10">
                <input type="password" class="form-control" id="inputPassword" placeholder="Password" name="password">
                @if ($errors->has('password'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
              </div>
            </div>
            <div class="form-group">
              <div class="col-lg-10 col-lg-offset-2">
                <button type="submit" class="btn btn-info">Ingresar</button>
                <a href="/client/register" class="btn btn-danger">Registrarse</a>
              </div>
            </div>
          </fieldset>
        </form>
      </div>
    </div>
  </div>
@endsection
