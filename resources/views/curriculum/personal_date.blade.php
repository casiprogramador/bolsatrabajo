@extends('layouts.client')
@section('body')
<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-1">
          <ul class="list-group">
            <li class="list-group-item">
              <span class="badge">
                <span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
              </span>
              <b>1. Registro</b>
            </li>
            <li class="list-group-item">
              <span class="badge">
                <span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
              </span>
              <b>2. Datos Personales</b>
            </li>
            <li class="list-group-item">
              <span class="badge">
                <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
              </span>
              3. Formacion
            </li>
            <li class="list-group-item">
              <span class="badge">
                <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
              </span>
              4. Perfil Profecional
            </li>
            <li class="list-group-item">
              <span class="badge">
                <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
              </span>
              5. Conocimientos
            </li>
          </ul>
        </div>
        <div class="col-md-6">

            <div class="panel panel-info">
                <div class="panel-heading">
                  <h3 class="panel-title">1. Datos Personales</h3>
                </div>
                <div class="well">
                <div class="panel-body">
                  {!! Form::open(array('route' => 'curriculum_personal_date_save', 'class' => 'form-horizontal')) !!}
                    <fieldset>
                      <div class="form-group">
                        <label for="inputEmail" class="col-lg-4 control-label">Fecha Nacimiento:</label>
                        <div class="col-lg-8">
                          <input type="text" class="form-control" id="input-nacimiento" name="birth_date" placeholder="dd-mm-aaaaa" value="{{ old('birth_date') }}">
                          @if ($errors->has('birth_date'))
                              <span class="help-block">
                                  <strong>{{ $errors->first('birth_date') }}</strong>
                              </span>
                          @endif
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="select" class="col-lg-4 control-label">Tipo Identificacion:</label>
                        <div class="col-lg-8">
                          {{ Form::select('type_dni',array('0' => 'Seleccione', '1' => 'Cédula de identidad', '2' => 'Cédula de extranjería', '3' => 'Pasaporte', '4' => 'NIF / NIT'), old('type_dni'), ['class' => 'form-control']) }}
                          @if ($errors->has('type_dni'))
                              <span class="help-block">
                                  <strong>{{ $errors->first('type_dni') }}</strong>
                              </span>
                          @endif
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="numDni" class="col-lg-4 control-label">Nro Identificacion:</label>
                        <div class="col-lg-8">
                          <input type="text" class="form-control" id="input-nro-identificacion" name="num_dni" value="{{ old('num_dni') }}">
                          @if ($errors->has('num_dni'))
                              <span class="help-block">
                                  <strong>{{ $errors->first('num_dni') }}</strong>
                              </span>
                          @endif
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="select" class="col-lg-4 control-label">Estado Civil:</label>
                        <div class="col-lg-8">
                          {{ Form::select('marital_status',array('0' => 'Seleccione', '1' => 'Soltero(a)', '2' => 'Casado(a)', '3' => 'Separado(a)/Divorciado(a)', '4' => 'Viudo(a)', '5' => 'Unión libre'), old('marital_status'), ['class' => 'form-control']) }}
                          @if ($errors->has('marital_status'))
                              <span class="help-block">
                                  <strong>{{ $errors->first('marital_status') }}</strong>
                              </span>
                          @endif
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="inputEmail" class="col-lg-4 control-label">Telefono/Celular:</label>
                        <div class="col-lg-8">
                          <input type="text" class="form-control" id="input-telefono" name="phone" value="{{ old('phone') }}">
                          @if ($errors->has('phone'))
                              <span class="help-block">
                                  <strong>{{ $errors->first('phone') }}</strong>
                              </span>
                          @endif
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="select" class="col-lg-4 control-label">Nacionalidad:</label>
                        <div class="col-lg-8">
                          {{ Form::select('nationality',$countries, '146', ['class' => 'form-control']) }}
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-lg-4 control-label">Licencia de conducir:</label>
                        <div class="col-lg-8">
                          <div class="checkbox">
                            <label>
                              <input type="checkbox" name='driver_license[]' value="motocicleta"> motocícletas
                            </label>
                          </div>
                          <div class="checkbox">
                            <label>
                              <input type="checkbox" name='driver_license[]' value="vehículos para transporte de personas"> vehículos para transporte de personas
                            </label>
                          </div>
                          <div class="checkbox">
                            <label>
                              <input type="checkbox" name='driver_license[]' value="camiones de carga"> camiones de carga
                            </label>
                          </div>
                          <div class="checkbox">
                            <label>
                              <input type="checkbox" name='driver_license[]' value="vehículos agrícolas"> vehículos agrícolas
                            </label>
                          </div>
                          <div class="checkbox">
                            <label>
                              <input type="checkbox" name='driver_license[]' value="vehículos industriales"> vehículos industriales
                            </label>
                          </div>
                          <div class="checkbox">
                            <label>
                              <input type="checkbox" name='driver_license[]' value="No tengo"> No tengo
                            </label>

                          </div>
                          @if ($errors->has('driver_license'))
                              <span class="help-block">
                                  <strong>{{ $errors->first('driver_license') }}</strong>
                              </span>
                          @endif
                        </div>
                      </div>
                      <div class="form-group">
                      <label class="col-lg-4 control-label">Dispones de vehículo:</label>
                      <div class="col-lg-8">
                        <div class="radio">
                          <label>
                            <input type="radio" name="vehicle" id="radio-v1" value="si" checked="">
                            Si
                          </label>
                        </div>
                        <div class="radio">
                          <label>
                            <input type="radio" name="vehicle" id="radio-v2" value="no">
                            No
                          </label>
                        </div>
                        @if ($errors->has('vehicle'))
                            <span class="help-block">
                                <strong>{{ $errors->first('vehicle') }}</strong>
                            </span>
                        @endif
                      </div>
                    </div>

                      <div class="form-group">
                        <div class="col-lg-4 col-lg-offset-4">
                          <button type="submit" class="btn btn-warning btn-lg">Siguiente</button>
                        </div>
                      </div>
                    </fieldset>
                  {!! Form::close() !!}
                </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
