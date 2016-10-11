@extends('layouts.company')
@section('body')
<div class="container">
    <div class="row">

        <div class="col-md-10 col-md-offset-1">

            <div class="panel panel-info">
                <div class="panel-heading">
                  <h3 class="panel-title">Registra ahora tu empresa</h3>
                </div>
                <div class="well">
                <div class="panel-body">
					<p>Selecciona ahora entre los mejores perfiles que postulan directamente a tus vacantes o busca el mejor talento en nuestra amplia base de datos de currículums . En EncuentratuEmpleo hacemos que tu proceso de selección sea rápido y efectivo</p>
                    <h3 class="text-center"><u><b>Datos de la empresa</b></u></h3><br>
					{!! Form::open(array('route' => 'company_register_save', 'class' => 'form-horizontal', 'files' => true)) !!}
                    <fieldset>
                      <div class="form-group">
                        <label for="inputEmail" class="col-lg-4 control-label">Nombre comercial de la empresa:</label>
                        <div class="col-lg-6">
                          <input type="text" class="form-control" id="input-date-picker" name="name" placeholder="" value="{{ old('name') }}">
                          @if ($errors->has('name'))
                              <span class="help-block">
                                  <strong>{{ $errors->first('name') }}</strong>
                              </span>
                          @endif
                        </div>
                      </div>
				      <div class="form-group">
                        <label for="inputEmail" class="col-lg-4 control-label">Razón social registrada en SAT:</label>
                        <div class="col-lg-6">
                          <input type="text" class="form-control" id="input-date-picker" name="name_sat" placeholder="" value="{{ old('name_sat') }}">
                          @if ($errors->has('name_sat'))
                              <span class="help-block">
                                  <strong>{{ $errors->first('name_sat') }}</strong>
                              </span>
                          @endif
                        </div>
                      </div>
				      <div class="form-group">
                        <label for="inputEmail" class="col-lg-4 control-label">RFC de la empresa:</label>
                        <div class="col-lg-6">
                          <input type="text" class="form-control" id="input-date-picker" name="rfc" placeholder="" value="{{ old('rfc') }}">
                          @if ($errors->has('rfc'))
                              <span class="help-block">
                                  <strong>{{ $errors->first('rfc') }}</strong>
                              </span>
                          @endif
                        </div>
                      </div>
					  <div class="form-group">
                        <label for="select" class="col-lg-4 control-label">Pais:</label>
                        <div class="col-lg-6">
                          {{ Form::select('country',$countries, '146', ['class' => 'form-control']) }}
                        </div>
                      </div>
				      <div class="form-group">
                        <label for="inputEmail" class="col-lg-4 control-label">Estado/Ciudad:</label>
                        <div class="col-lg-6">
                          <input type="text" class="form-control" id="input-city" name="city" placeholder="" value="{{ old('city') }}">
                          @if ($errors->has('city'))
                              <span class="help-block">
                                  <strong>{{ $errors->first('city') }}</strong>
                              </span>
                          @endif
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="numDni" class="col-lg-4 control-label">Direccion:</label>
                        <div class="col-lg-6">
                          <input type="text" class="form-control" id="input-direction" name="direction" value="{{ old('direction') }}">
                          @if ($errors->has('direction'))
                              <span class="help-block">
                                  <strong>{{ $errors->first('direction') }}</strong>
                              </span>
                          @endif
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="select" class="col-lg-4 control-label">Giro empresarial:</label>
                        <div class="col-lg-6">
                          {{ Form::select('type',array('0' => 'Seleccione',
						  'Agricultura / Pesca / Ganadería' => 'Agricultura / Pesca / Ganadería',
						  'Construcción / obras' => 'Construcción / obras',
						  'Educación' => 'Educación',
						  'Energía' => 'Energía',
						  'Entretenimiento / Deportes' => 'Entretenimiento / Deportes'),
						  old('type'), ['class' => 'form-control']) }}
                          @if ($errors->has('type'))
                              <span class="help-block">
                                  <strong>{{ $errors->first('type') }}</strong>
                              </span>
                          @endif
                        </div>
                      </div>
					  <div class="form-group">
                        <label for="numDni" class="col-lg-4 control-label">Nro trabajadores:</label>
                        <div class="col-lg-6">
                          <input type="number" class="form-control" id="input-worker" name="number_worker" value="{{ old('number_worker') }}">
                          @if ($errors->has('number_worker'))
                              <span class="help-block">
                                  <strong>{{ $errors->first('number_worker') }}</strong>
                              </span>
                          @endif
                        </div>
                      </div>
						<h3 class="text-center"><u><b>Tipo de empresa</b></u></h3><br>
                      <div class="form-group">
                        <label for="inputEmail" class="col-lg-4 control-label">Tipo:</label>
                        <div class="col-lg-8">
                          <label class="radio-inline">
							<input type="radio" name="typology" value="Empleador directo"> Empleador directo
						  </label>
						  <label class="radio-inline">
							<input type="radio" name="typology" value="Agencia de reclutamiento"> Agencia de reclutamiento
						  </label>
						  <label class="radio-inline">
							<input type="radio" name="typology" value="Servicios temporales"> Servicios temporales
						  </label>
                          @if ($errors->has('typology'))
                              <span class="help-block">
                                  <strong>{{ $errors->first('typology') }}</strong>
                              </span>
                          @endif
                        </div>
                      </div>
						<div class="form-group">
                               <label for="inputPeriodInit" class="col-lg-4 control-label">Descripción de la empresa:</label>
                                <div class="col-lg-6">
                                    <textarea name="description" class="form-control" rows="3" id="textArea">{{ old('description') }}</textarea>
                                </div>
                        </div>
						<div class="form-group">
							<label for="numDni" class="col-lg-4 control-label">Página web de la empresa:</label>
							<div class="col-lg-6">
							  <input type="text" class="form-control" id="input-direction" name="web" value="{{ old('web') }}">
							  @if ($errors->has('web'))
								  <span class="help-block">
									  <strong>{{ $errors->first('web') }}</strong>
								  </span>
							  @endif
							</div>
						</div>
						<div class="form-group">
                            <label class="col-lg-4 control-label" for="focusedInput">Inserta el logo de la empresa:</label>
                            
                            <div class="col-lg-6">
								<input type="file" class="form-control" id="input-picture" name="logo" >
                                @if ($errors->has('logo'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('logo') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                      <h3 class="text-center"><u><b>Datos de persona de contacto</b></u></h3><br>
                      <div class="form-group">
                        <label for="numDni" class="col-lg-4 control-label">Nombre Completo:</label>
                        <div class="col-lg-6">
                          <input type="text" class="form-control" id="input-direction" name="contact_name" value="{{ old('contact_name') }}">
                          @if ($errors->has('contact_name'))
                              <span class="help-block">
                                  <strong>{{ $errors->first('contact_name') }}</strong>
                              </span>
                          @endif
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="select" class="col-lg-4 control-label">Cargo:</label>
                        <div class="col-lg-6">
                          {{ Form::select('position',array('0' => 'Seleccione',
						  'Presidente' => 'Presidente',
						  'Director' => 'Director',
						  'Gerente' => 'Gerente',
						  'Jefe' => 'Jefe',
						  'Coordinador' => 'Coordinador',
						  'Analista' => 'Analista'),
						  old('position'), ['class' => 'form-control']) }}
                          @if ($errors->has('type'))
                              <span class="help-block">
                                  <strong>{{ $errors->first('position') }}</strong>
                              </span>
                          @endif
                        </div>
                      </div>
					  <div class="form-group">
                        <label for="numDni" class="col-lg-4 control-label">Teléfono fijo de la empresa:</label>
                        <div class="col-lg-6">
                          <input type="text" class="form-control" id="input-direction" name="phone" value="{{ old('phone') }}">
                          @if ($errors->has('phone'))
                              <span class="help-block">
                                  <strong>{{ $errors->first('phone') }}</strong>
                              </span>
                          @endif
                        </div>
                      </div>
					  <div class="form-group">
                        <label for="numDni" class="col-lg-4 control-label">Celular:</label>
                        <div class="col-lg-6">
                          <input type="text" class="form-control" id="input-direction" name="cellphone" value="{{ old('cellphone') }}">
                          @if ($errors->has('cellphone'))
                              <span class="help-block">
                                  <strong>{{ $errors->first('cellphone') }}</strong>
                              </span>
                          @endif
                        </div>
                      </div>

                      <div class="form-group">
                        <div class="col-lg-4 col-lg-offset-4">
                          <button type="submit" class="btn btn-warning btn-lg">Registrar</button>
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
