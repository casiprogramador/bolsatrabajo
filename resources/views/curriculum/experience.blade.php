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
                    <a href="#" class="list-group-item">
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
                    <a href="{{ route('curriculum_experience_show') }}" class="list-group-item active">
                         <span class="badge">
                            <span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
                        </span>
                        <b>4. Experiencia</b>
                    </a>
                    <a href="{{ route('curriculum_language_show') }}" class="list-group-item">
                        <span class="badge">
                            <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                        </span>
                        5. Idiomas
                    </a>
                    <a href="#" class="list-group-item">
                        <span class="badge">
                            <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                        </span>
                        6. Conocimientos
                    </a>
                </div>

            </div>
            <div class="col-md-6">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h3 class="panel-title">4. Experiencia Laboral</h3>
                    </div>
                    <div class="well">
                        <div class="panel-body">
                            <div class="col-md-4 col-md-offset-1">
                                <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#myModal">
                                    <span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span>    Agregar Experiencia
                                </button>
                            </div>
                            <div class="col-md-4 col-md-offset-1">
                                <a href="{{ route('curriculum_language_show') }}" class="btn btn-success">Siguiente  <span class="glyphicon glyphicon-circle-arrow-right" aria-hidden="true"></span></a>
                            </div>
                        </div>
                    </div>
                </div>

                @foreach ($experiences as $experience)
                    <div class="panel panel-success">
                        <div class="panel-heading">
                            <h3 class="panel-title">{{$experience->company }}</h3>
                        </div>
                        <div class="panel-body">
                            <form class="form-horizontal">
                                <fieldset>
                                    <div class="form-group">
                                        <label for="inputEmail" class="col-lg-4 control-label">Empresa:</label>
                                        <div class="col-lg-8">
                                            <input type="text" class="form-control" id="input-establishment" name="company" disabled value="{{$experience->company }}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="select" class="col-lg-4 control-label">Pais:</label>
                                        <div class="col-lg-8">
                                            <input type="text" class="form-control" id="input-establishment" name="country" disabled value="{{$experience->country->name }}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputEmail" class="col-lg-4 control-label">Ciudad/Estado:</label>
                                        <div class="col-lg-8">
                                            <input type="text" class="form-control" id="input-establishment" name="city" disabled value="{{$experience->city }}">

                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputEmail" class="col-lg-4 control-label">Area/Sector:</label>
                                        <div class="col-lg-8">
                                            <input type="text" class="form-control" id="input-establishment" name="sector" disabled value="{{$experience->sector->name }}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputEmail" class="col-lg-4 control-label">Cargo:</label>
                                        <div class="col-lg-8">
                                            <input type="text" class="form-control" id="input-establishment" name="position" disabled value="{{$experience->position }}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputPeriodInit" class="col-lg-4 control-label">Fecha Inicio:</label>
                                        <div class="col-lg-8">
                                            <input type="text" class="form-control date-picker" id="input-establishment" name="period_study_init" disabled value="{{$experience->period_work_init }}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputPeriodInit" class="col-lg-4 control-label">Fecha Salida:</label>
                                        <div class="col-lg-8">
                                            <input type="text" class="form-control date-picker" id="input-establishment" name="period_study_end" disabled value="{{$experience->period_work_end }}" >
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputPeriodInit" class="col-lg-4 control-label">Funciones y logros:</label>
                                        <div class="col-lg-8">
                                            <textarea name="detail" class="form-control" rows="3" id="textArea" disabled>{{ $experience->detail }}</textarea>
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
        {!! Form::open(array('route' => 'curriculum_experience_save', 'class' => 'form-horizontal')) !!}
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Agregar Formacion</h4>
                </div>
                <div class="modal-body">

                    <fieldset>
                        <div class="form-group">
                            <label for="inputEmail" class="col-lg-4 control-label">Empresa:</label>
                            <div class="col-lg-8">
                                <input type="text" class="form-control" id="input-establishment" name="company" placeholder="" value="{{ old('company') }}">
                                @if ($errors->has('company'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('company') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="select" class="col-lg-4 control-label">Pais:</label>
                            <div class="col-lg-8">
                                {{ Form::select('country',$countries, '146', ['class' => 'form-control']) }}
                                @if ($errors->has('country'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('country') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail" class="col-lg-4 control-label">Ciudad/Estado:</label>
                            <div class="col-lg-8">
                                <input type="text" class="form-control" id="input-establishment" name="city" placeholder="" value="{{ old('city') }}">
                                @if ($errors->has('city'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('city') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="select" class="col-lg-4 control-label">Area/Sector:</label>
                            <div class="col-lg-8">
                                {{ Form::select('sector',$sectors, '1', ['class' => 'form-control']) }}
                                @if ($errors->has('sector'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('sector') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail" class="col-lg-4 control-label">Area:</label>
                            <div class="col-lg-8">
                                <input type="text" class="form-control" id="input-establishment" name="area" placeholder="" value="{{ old('area') }}">
                                @if ($errors->has('area'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('area') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail" class="col-lg-4 control-label">Cargo:</label>
                            <div class="col-lg-8">
                                <input type="text" class="form-control" id="input-establishment" name="position" placeholder="" value="{{ old('position') }}">
                                @if ($errors->has('position'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('position') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputPeriodInit" class="col-lg-4 control-label">Fecha Inicio:</label>
                            <div class="col-lg-8">
                                <input type="text" class="form-control date-picker" id="input-establishment" name="period_work_init" placeholder="" value="{{ old('period_work_init') }}">
                                @if ($errors->has('period_work_init'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('period_work_init') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputPeriodInit" class="col-lg-4 control-label">Fecha Salida:</label>
                            <div class="col-lg-8">
                                <input type="text" class="form-control date-picker" id="input-establishment" name="period_work_end" placeholder="" value="{{ old('period_work_end') }}">
                                @if ($errors->has('period_work_end'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('period_work_end') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail" class="col-lg-4 control-label">Funciones y logros:</label>
                            <div class="col-lg-8">
                                <textarea name="detail" class="form-control" rows="3" id="textArea"></textarea>
                                <span class="help-block">Ingrese los objetivos, funciones o logros obtenidos</span>
                                @if ($errors->has('detail'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('detail') }}</strong>
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
