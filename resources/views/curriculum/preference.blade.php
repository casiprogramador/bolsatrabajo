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
                    <a href="{{ route('curriculum_formation_show') }}" class="list-group-item">
                        <span class="badge">
                            <span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
                        </span>
                        <b>3. Formacion</b>
                    </a>
                    <a href="{{ route('curriculum_experience_show') }}" class="list-group-item">
                         <span class="badge">
                            <span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
                        </span>
                        <b>4. Experiencia</b>
                    </a>
                    <a href="{{ route('curriculum_language_show') }}" class="list-group-item">
                        <span class="badge">
                            <span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
                        </span>
                        <b>5. Idiomas</b>
                    </a>
                    <a href="{{ route('curriculum_knowledge_show') }}" class="list-group-item">
                        <span class="badge">
                            <span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
                        </span>
                        <b>6. Conocimientos</b>
                    </a>
                    <a href="{{ route('curriculum_preference_show') }}" class="list-group-item active">
                        <span class="badge">
                            <span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
                        </span>
                        <b>7. Preferencias Laborales</b>
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
                        <h3 class="panel-title">7. Preferencias Laborales</h3>
                    </div>
                    <div class="well">
                        <div class="panel-body">
                            {!! Form::open(array('route' => 'curriculum_preference_save', 'class' => 'form-horizontal')) !!}
                            <fieldset>
                                <div class="form-group">
                                    <label for="inputEmail" class="col-lg-4 control-label">Situacion Actual:</label>
                                    <div class="col-lg-8">
									    {{ Form::select('current_situation',array('Activo' => 'Activo', 'Desempleado' => 'Desempleado'), old('current_situation'), ['class' => 'form-control']) }}
                                        @if ($errors->has('current_situation'))
                                            <span class="help-block">
                                  <strong>{{ $errors->first('current_situation') }}</strong>
                              </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="numDni" class="col-lg-4 control-label">Puesto de trabajo deseado:</label>
                                    <div class="col-lg-8">
                                        <input type="text" class="form-control" id="work-place" name="work_place" value="{{ old('work_place') }}">
                                        @if ($errors->has('work_place'))
                                            <span class="help-block">
                                  <strong>{{ $errors->first('work_place') }}</strong>
                              </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="salarioMinimo" class="col-lg-4 control-label">Salario Minimo:</label>
                                    <div class="col-lg-8">
                                        <input type="text" class="form-control" id="input-salario" name="minimum_wage" value="{{ old('minimum_wage') }}" placeholder="10000">
                                        @if ($errors->has('minimum_wage'))
                                            <span class="help-block">
                                  <strong>{{ $errors->first('minimum_wage') }}</strong>
                              </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="salarioMinimo" class="col-lg-4 control-label">Ciudad/Estado:</label>
                                    <div class="col-lg-8">
                                        <input type="text" class="form-control" id="input-ciudad" name="state" value="{{ old('state') }}">
                                        @if ($errors->has('state'))
                                            <span class="help-block">
                                  <strong>{{ $errors->first('state') }}</strong>
                              </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-4 control-label">Disponibilidad para viajar:</label>
                                    <div class="col-lg-8">
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="travel" id="radio-v1" value="1" checked="">
                                                Si
                                            </label>
                                        </div>
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="travel" id="radio-v2" value="0">
                                                No
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-4 control-label">Disponibilidad para cambiar de residencia:</label>
                                    <div class="col-lg-8">
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="move" value="1" checked="">
                                                Si
                                            </label>
                                        </div>
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="move" value="0">
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
