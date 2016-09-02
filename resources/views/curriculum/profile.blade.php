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
                    <a href="{{ route('curriculum_preference_show') }}" class="list-group-item">
                        <span class="badge">
                            <span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
                        </span>
                        <b>7. Preferencias Laborales</b>
                    </a>
                    <a href="{{ route('curriculum_profile_show') }}" class="list-group-item active">
                        <span class="badge">
                            <span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
                        </span>
                        8. Perfil Profecional
                    </a>
                </div>
            </div>
            <div class="col-md-6">

                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h3 class="panel-title">8. Perfil Profecional</h3>
                    </div>
                    <div class="well">
                        <div class="panel-body">
                            {!! Form::open(array('route' => 'curriculum_profile_save', 'class' => 'form-horizontal','files' => true)) !!}
                            <fieldset>
                                <div class="form-group">
                                    <label class="control-label" for="focusedInput">Cargo o título breve del Currículum:</label>
                                    <input type="text" class="form-control" id="input-title" name="title" value="{{ old('title') }}" placeholder="Ej: Analista de Crédito y Riesgo">
                                    <div class="col-lg-8">

                                        @if ($errors->has('title'))
                                            <span class="help-block">
                                                  <strong>{{ $errors->first('title') }}</strong>
                                              </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label" for="focusedInput">Descripción breve de tu perfil profesional:</label>
                                    <textarea class="form-control" rows="6" id="textArea" name="description" placeholder="Ej: Amplia experiencia en la área financiera analista de Crédito (énfasis en el manejo, identificación, clasificación, análisis y evaluación de operaciones de crédito). Análisis y aplicación de políticas financieras para la toma de decisiones en productos financieros y riesgo crediticio.">{{ old('description') }}</textarea>
                                    <div class="col-lg-8">

                                        @if ($errors->has('description'))
                                            <span class="help-block">
                                                  <strong>{{ $errors->first('description') }}</strong>
                                              </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label" for="focusedInput">Fotografia:</label>
                                    <input type="file" class="form-control" id="input-picture" name="picture" >
                                    <div class="col-lg-8">

                                        @if ($errors->has('picture'))
                                            <span class="help-block">
                                                  <strong>{{ $errors->first('picture') }}</strong>
                                              </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-lg-4 col-lg-offset-4">
                                        <button type="submit" class="btn btn-warning btn-lg">Finalizar</button>
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
