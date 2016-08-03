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
                  {!! Form::open(array('route' => 'curriculum_personal_date_save', 'class' => 'form-horizontal')) !!}
                    <fieldset>
                      
                    </fieldset>
                  {!! Form::close() !!}
                </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
