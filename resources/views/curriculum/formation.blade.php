@extends('layouts.client')
@section('body')
<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-1">
            <div class="list-group">
                <a href="#" class="list-group-item">
                        <span class="badge">
                            <span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
                        </span>
                    <b>1. Registro</b>
                </a>
                <a href="{{ route('curriculum_personal_date_show') }}" class="list-group-item">
                        <span class="badge">
                            <span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
                        </span>
                    <b>2. Datos Personales</b>
                </a>
                <a href="{{ route('curriculum_formation_show') }}" class="list-group-item active">
                        <span class="badge">
                            <span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
                        </span>
                    <b>3. Formacion</b>
                </a>
                <a href="{{ route('curriculum_experience_show') }}" class="list-group-item">
                         <span class="badge">
                            <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                        </span>
                    4. Experiencia
                </a>
                <a href="{{ route('curriculum_language_show') }}" class="list-group-item">
                        <span class="badge">
                            <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                        </span>
                    5. Idiomas
                </a>
                <a href="{{ route('curriculum_knowledge_show') }}" class="list-group-item">
                        <span class="badge">
                            <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                        </span>
                    6. Conocimientos
                </a>
                <a href="{{ route('curriculum_preference_show') }}" class="list-group-item">
                        <span class="badge">
                            <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                        </span>
                    7. Preferencias Laborales
                </a>
                <a href="{{ route('curriculum_profile_show') }}" class="list-group-item">
                        <span class="badge">
                            <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                        </span>
                    8. Perfil Profesional
                </a>
            </div>
        </div>
        <div class="col-md-6">
          <div class="panel panel-info">
              <div class="panel-heading">
                <h3 class="panel-title">3. Formacion Profesional</h3>
              </div>
              <div class="well">
              <div class="panel-body">
                <div class="col-md-4 col-md-offset-1">
                  <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#myModal">
                    <span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span>    Agregar formacion
                  </button>
                </div>
                  <div class="col-md-4 col-md-offset-1">
                      <a href="{{ route('curriculum_experience_show') }}" class="btn btn-success">Siguiente  <span class="glyphicon glyphicon-circle-arrow-right" aria-hidden="true"></span></a>
                  </div>
              </div>
              </div>
          </div>

          @foreach ($formations as $formation)
          <div class="panel panel-success">
          <div class="panel-heading">
            <h3 class="panel-title">{{$formation->educational_establishment }}</h3>
          </div>
          <div class="panel-body">
              <form class="form-horizontal">
              <fieldset>
                <div class="form-group">
                  <label for="inputEmail" class="col-lg-4 control-label">Centro Educativo:</label>
                  <div class="col-lg-8">
                    <input type="text" class="form-control" id="input-establishment" name="educational_establishment" disabled value="{{$formation->educational_establishment }}">
                  </div>
                </div>
                <div class="form-group">
                  <label for="select" class="col-lg-4 control-label">Nivel de estudio:</label>
                  <div class="col-lg-8">
                    <input type="text" class="form-control" id="input-establishment" name="level_study" disabled value="{{$formation->level_study }}">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail" class="col-lg-4 control-label">Area de Estudio:</label>
                  <div class="col-lg-8">
                    <input type="text" class="form-control" id="input-establishment" name="area_study" disabled value="{{$formation->area_study }}">

                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail" class="col-lg-4 control-label">Estado:</label>
                  <div class="col-lg-8">
                    <input type="text" class="form-control" id="input-establishment" name="state" disabled value="{{$formation->state }}">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPeriodInit" class="col-lg-4 control-label">Fecha Inicio:</label>
                  <div class="col-lg-8">
                    <input type="text" class="form-control date-picker" id="input-establishment" name="period_study_init" disabled value="{{$formation->period_study_init }}">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPeriodInit" class="col-lg-4 control-label">Fecha Final:</label>
                  <div class="col-lg-8">
                    <input type="text" class="form-control date-picker" id="input-establishment" name="period_study_end" disabled value="{{$formation->period_study_end }}" >
                  </div>
                </div>

              </fieldset>
              </form>
            </div>
          </div>
          @endforeach
        </div>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  {!! Form::open(array('route' => 'curriculum_formation_save', 'class' => 'form-horizontal')) !!}
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Agregar Formacion</h4>
      </div>
      <div class="modal-body">

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
              <label for="select" class="col-lg-4 control-label">Nivel de estudio:</label>
              <div class="col-lg-8">
                {{ Form::select('level_study',array('0' => 'Seleccione', 'Educación Básica Primaria' => 'Educación Básica Primaria', 'Educación Básica Secundaria' => 'Educación Básica Secundaria', 'Bachillerato / Educación Media' => 'Bachillerato / Educación Media', 'Educación Técnico/Profesional' => 'Educación Técnico/Profesional', 'Universidad' => 'Universidad', 'Postgrado' => 'Postgrado'), old('level_study'), ['class' => 'form-control']) }}
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
                    <input type="radio" name="state" id="inlineRadio1" value="Culminado"> Culminado
                  </label>
                  <label class="radio-inline">
                    <input type="radio" name="state" id="inlineRadio2" value="Cursando"> Cursando
                  </label>
                  <label class="radio-inline">
                    <input type="radio" name="state" id="inlineRadio3" value="Inconcluso"> Inconcluso
                  </label>
                @if ($errors->has('state'))
                    <span class="help-block">
                        <strong>{{ $errors->first('state') }}</strong>
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

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
        <button type="submit" class="btn btn-warning">Guardar</button>
      </div>
    </div>
  </div>
  {!! Form::close() !!}
</div>
@endsection
