@extends('layouts.client')
@section('body')
<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-1">
          <div class="alert alert-info">
            <p class="lead">
              <strong>Registrese como candidato</strong>
            </p><br>
            <ul>
              <li>El servicio es gratuito para personas que buscan empleo</li>
              <li>Podra postular a cientos de empleos en todo Mexico y encontrar trabajo rapidamente</li>
              <li>Sigue el estado de tus postulaciones</li>
            </ul>
          </div>
		  <div class="alert alert-success">
            <p class="lead">
              <strong>Registrese como empresa</strong>
            </p><br>
            <ul>
              <li>Recive cientos de  postulaciones de profecionales en todas la areas</li>
              <li>Conoce y escoje al mejor candidato para tu empresa</li>
              <li>Planes acordes al tamaño de tu empresa</li>
            </ul>
          </div>
        </div>
        <div class="col-md-6">
            <div class="panel panel-primary">
                <div class="panel-heading">
                  <h3 class="panel-title">Registro de usuario</h3>
                </div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
                        {{ csrf_field() }}
						
						<div class="form-group">
							<label for="select" class="col-lg-4 control-label">Registrarse como:</label>
							<div class="col-lg-6">
							  {{ Form::select('rol',array('0' => 'Seleccione', 'candidate' => 'Candidato', 'company' => 'Empresa'),'candidate', ['class' => 'form-control']) }}
							  @if ($errors->has('rol'))
								  <span class="help-block">
									  <strong>{{ $errors->first('rol') }}</strong>
								  </span>
							  @endif
							</div>
                        </div>
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Nombre</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}">

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">Email</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}">

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password">

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                            <label for="password-confirm" class="col-md-4 control-label">Confirmar Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation">

                                @if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-3 col-md-offset-4">
                                <button type="submit" class="btn btn-info">
                                    <i class="fa fa-btn fa-user"></i> Registrar
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
