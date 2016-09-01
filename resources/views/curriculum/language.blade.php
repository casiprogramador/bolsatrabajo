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
                    <a href="{{ route('curriculum_language_show') }}" class="list-group-item active">
                        <span class="badge">
                            <span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
                        </span>
                        5. Idiomas
                    </a>
                    <a href="{{ route('curriculum_knowledge_show') }}" class="list-group-item">
                        <span class="badge">
                            <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                        </span>
                        6. Conocimientos
                    </a>
                    <a href="{{ route('curriculum_knowledge_show') }}" class="list-group-item">
                        <span class="badge">
                            <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                        </span>
                        7. Preferencias Laborales
                    </a>
                    <a href="{{ route('curriculum_profile_show') }}" class="list-group-item">
                        <span class="badge">
                            <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                        </span>
                        8. Perfil Profecional
                    </a>
                </div>

            </div>
            <div class="col-md-6">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h3 class="panel-title">5. Idiomas</h3>
                    </div>
                    <div class="well">
                        <div class="panel-body">
                            <div class="col-md-4 col-md-offset-1">
                                <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#myModal">
                                    <span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span>    Agregar Idioma
                                </button>
                            </div>
                            <div class="col-md-4 col-md-offset-1">
                                <a href="{{ route('curriculum_knowledge_show') }}" class="btn btn-success">Siguiente  <span class="glyphicon glyphicon-circle-arrow-right" aria-hidden="true"></span></a>
                            </div>
                        </div>
                    </div>
                </div>

                @foreach ($language_skills as $language_skill)
                    <div class="panel panel-success">
                        <div class="panel-heading">
                            <h3 class="panel-title">{{$language_skill->language->name  }}</h3>
                        </div>
                        <div class="panel-body">
                            <form class="form-horizontal">
                                <fieldset>
                                    <div class="form-group">
                                        <label for="inputEmail" class="col-lg-4 control-label">Idioma:</label>
                                        <div class="col-lg-8">
                                            <input type="text" class="form-control" id="input-establishment" name="language" disabled value="{{$language_skill->language->name }}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="select" class="col-lg-4 control-label">Nivel:</label>
                                        <div class="col-lg-8">
                                            <input type="text" class="form-control" id="input-establishment" name="level" disabled value="{{$language_skill->level }}">
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
        {!! Form::open(array('route' => 'curriculum_language_save', 'class' => 'form-horizontal')) !!}
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Agregar Idioma</h4>
                </div>
                <div class="modal-body">

                    <fieldset>
                        <div class="form-group">
                            <label for="select" class="col-lg-4 control-label">Idioma:</label>
                            <div class="col-lg-8">
                                {{ Form::select('language',$language, '1', ['class' => 'form-control']) }}
                                @if ($errors->has('language'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('language') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail" class="col-lg-4 control-label">Nivel:</label>
                            <div class="col-lg-8">
                                {{ Form::select('level',array('0' => 'Seleccione','Basico' => 'Basico', 'Intermedio' => 'Intermedio','Avanzado' => 'Avanzado','Nativo' =>'Nativo'),0, ['class' => 'form-control']) }}
                                @if ($errors->has('level'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('level') }}</strong>
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
