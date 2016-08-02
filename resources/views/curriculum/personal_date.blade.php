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
                          <input type="text" class="form-control" id="input-nacimiento" name="birth_date" placeholder="dd-mm-aaaaa">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="select" class="col-lg-4 control-label">Tipo Identificacion:</label>
                        <div class="col-lg-8">
                          <select class="form-control" id="select-td" name="type_dni">
                            <option value="0">Seleccione</option>
                            <option value="1">Cédula de identidad</option>
                            <option value="2">Cédula de extranjería</option>
                            <option value="3">Pasaporte</option>
                            <option value="4">NIF / NIT</option>
                          </select>
                          </select>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="inputEmail" class="col-lg-4 control-label">Nro Identificacion:</label>
                        <div class="col-lg-8">
                          <input type="text" class="form-control" id="input-nro-identificacion" name="num_dni">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="select" class="col-lg-4 control-label">Estado Civil:</label>
                        <div class="col-lg-8">
                          <select class="form-control" id="select-ms" name="marital_status">
                            <option value="0">Estado Civil</option>
                            <option value="1">Soltero(a)</option>
                            <option value="2">Casado(a)</option>
                            <option value="3">Separado(a)/Divorcia</option>
                            <option value="4">Viudo(a)</option>
                            <option value="5">Unión libre</option>
                          </select>
                          </select>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="inputEmail" class="col-lg-4 control-label">Telefono/Celular:</label>
                        <div class="col-lg-8">
                          <input type="text" class="form-control" id="input-telefono" name="phone">
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
                              <input type="checkbox" name='driver_license[]'> motocícletas
                            </label>
                          </div>
                          <div class="checkbox">
                            <label>
                              <input type="checkbox" name='driver_license[]'> vehículos para transporte de personas
                            </label>
                          </div>
                          <div class="checkbox">
                            <label>
                              <input type="checkbox" name='driver_license[]'> camiones de carga
                            </label>
                          </div>
                          <div class="checkbox">
                            <label>
                              <input type="checkbox" name='driver_license[]'> vehículos agrícolas
                            </label>
                          </div>
                          <div class="checkbox">
                            <label>
                              <input type="checkbox" name='driver_license[]'> vehículos industriales
                            </label>
                          </div>
                          <div class="checkbox">
                            <label>
                              <input type="checkbox" name='driver_license[]'> No tengo
                            </label>
                          </div>
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
