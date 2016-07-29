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
                  <form class="form-horizontal">
                    <fieldset>
                      <div class="form-group">
                        <label for="inputEmail" class="col-lg-4 control-label">Fecha Nacimiento:</label>
                        <div class="col-lg-8">
                          <input type="text" class="form-control" id="input-nacimiento" placeholder="dd-mm-aaaaa">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="select" class="col-lg-4 control-label">Tipo Identificacion:</label>
                        <div class="col-lg-8">
                          <select class="form-control" id="select">
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
                          <input type="text" class="form-control" id="input-nro-identificacion">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="select" class="col-lg-4 control-label">Estado Civil:</label>
                        <div class="col-lg-8">
                          <select class="form-control" id="select">
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
                          <input type="text" class="form-control" id="input-telefono">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="select" class="col-lg-4 control-label">Nacionalidad:</label>
                        <div class="col-lg-8">
                          {{ Form::select('size',$countries, '146', ['class' => 'form-control']) }}
                        </div>
                      </div>


                      <div class="form-group">
                        <label for="textArea" class="col-lg-2 control-label">Textarea</label>
                        <div class="col-lg-10">
                          <textarea class="form-control" rows="3" id="textArea"></textarea>
                          <span class="help-block">A longer block of help text that breaks onto a new line and may extend beyond one line.</span>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-lg-2 control-label">Radios</label>
                        <div class="col-lg-10">
                          <div class="radio">
                            <label>
                              <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked="">
                              Option one is this
                            </label>
                          </div>
                          <div class="radio">
                            <label>
                              <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
                              Option two can be something else
                            </label>
                          </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="select" class="col-lg-2 control-label">Selects</label>
                        <div class="col-lg-10">
                          <select class="form-control" id="select">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                          </select>
                          <br>
                          <select multiple="" class="form-control">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                          </select>
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="col-lg-10 col-lg-offset-2">
                          <button type="reset" class="btn btn-default">Cancel</button>
                          <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                      </div>
                    </fieldset>
                  </form>
                </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
