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
                  <h3 class="panel-title">1. Formacion Profecional</h3>
                </div>
                <div class="well">
                <div class="panel-body">
                  <div class="col-md-4 col-md-offset-3">
                    <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#myModal">
                      <span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span>    Agregar formacion
                    </button>
                  </div>
                </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Agregar Formacion</h4>
      </div>
      <div class="modal-body">
        {!! Form::open(array('route' => 'curriculum_formation_save', 'class' => 'form-horizontal')) !!}
          <fieldset>
            <div class="form-group">
              <label for="inputEmail" class="col-lg-4 control-label">Centro Educativo:</label>
              <div class="col-lg-8">
                <input type="text" class="form-control" id="input-establishment" name="educational_establishment" placeholder="" value="{{ old('educational_establishment') }}">
                @if ($errors->has('educational_establishment'))
                    <span class="help-block">
                        <strong>{{ $errors->first('educational_establishment') }}</strong>
                    </span>
                @endif
              </div>
            </div>
            <div class="form-group">
              <label for="select" class="col-lg-4 control-label">Tipo Identificacion:</label>
              <div class="col-lg-8">
                {{ Form::select('level_study',array('0' => 'Seleccione', '1' => 'Educación Básica Primaria', '2' => 'Educación Básica Secundaria', '3' => 'Bachillerato / Educación Media', '4' => 'Educación Técnico/Profesional', '5' => 'Universidad', '6' => 'Postgrado'), old('level_study'), ['class' => 'form-control']) }}
                @if ($errors->has('level_study'))
                    <span class="help-block">
                        <strong>{{ $errors->first('level_study') }}</strong>
                    </span>
                @endif
              </div>
            </div>
            <div class="form-group">
              <label for="inputEmail" class="col-lg-4 control-label">Area de Estudio:</label>
              <div class="col-lg-8">
                <input type="text" class="form-control" id="input-establishment" name="area_study" placeholder="" value="{{ old('area_study') }}">
                @if ($errors->has('area_study'))
                    <span class="help-block">
                        <strong>{{ $errors->first('area_study') }}</strong>
                    </span>
                @endif
              </div>
            </div>
            <div class="form-group">
              <label for="inputEmail" class="col-lg-4 control-label">Estado:</label>
              <div class="col-lg-8">
                  <label class="radio-inline">
                    <input type="radio" name="state" id="inlineRadio1" value="1"> Culminado
                  </label>
                  <label class="radio-inline">
                    <input type="radio" name="state" id="inlineRadio2" value="2"> Cursando
                  </label>
                  <label class="radio-inline">
                    <input type="radio" name="state" id="inlineRadio3" value="3"> Inconcluso
                  </label>
                @if ($errors->has('vehicle'))
                    <span class="help-block">
                        <strong>{{ $errors->first('vehicle') }}</strong>
                    </span>
                @endif
              </div>
            </div>
            <div class="form-group">
              <label for="inputPeriodInit" class="col-lg-4 control-label">Fecha Inicio:</label>
              <div class="col-lg-8">
                <input type="text" class="form-control date-picker" id="input-establishment" name="period_study_init" placeholder="" value="{{ old('period_study_init') }}">
                @if ($errors->has('period_study_init'))
                    <span class="help-block">
                        <strong>{{ $errors->first('period_study_init') }}</strong>
                    </span>
                @endif
              </div>
            </div>
            <div class="form-group">
              <label for="inputPeriodInit" class="col-lg-4 control-label">Fecha Final:</label>
              <div class="col-lg-8">
                <input type="text" class="form-control date-picker" id="input-establishment" name="period_study_end" placeholder="" value="{{ old('period_study_end') }}">
                @if ($errors->has('period_study_end'))
                    <span class="help-block">
                        <strong>{{ $errors->first('period_study_end') }}</strong>
                    </span>
                @endif
              </div>
            </div>

          </fieldset>
        {!! Form::close() !!}
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-warning">Guardar</button>
      </div>
    </div>
  </div>
</div>
@endsection
