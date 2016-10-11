@extends('layouts.admin')
@section('body')
<div class="container">
	<div class="col-md-8 col-md-offset-2">

		<div class="panel panel-info">
			<div class="panel-heading">
				<h3 class="panel-title">Nuevo Plan</h3>
			</div>
			<div class="well">
                <div class="panel-body">
                    <h3 class="text-center"><u><b>Datos del plan</b></u></h3><br>
					{!! Form::open(array('route' => 'paymentplan_store', 'class' => 'form-horizontal', 'files' => true)) !!}
                    <fieldset>
						<div class="form-group">
							<label for="inputEmail" class="col-lg-4 control-label">Nombre:</label>
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
							<label for="inputEmail" class="col-lg-4 control-label">Nro Publicaciones:</label>
							<div class="col-lg-6">
								<input type="text" class="form-control" id="input-date-picker" name="number_publication" placeholder="" value="{{ old('number_publication') }}">
								@if ($errors->has('number_publication'))
								<span class="help-block">
									<strong>{{ $errors->first('number_publication') }}</strong>
								</span>
								@endif
							</div>
						</div>
						<div class="form-group">
                            <label class="col-lg-4 control-label" for="focusedInput">Descripción:</label>
							<div class="col-lg-6">
                                <textarea class="form-control" rows="6" id="textArea" name="description" placeholder="">{{ old('description') }}</textarea>
								@if ($errors->has('description'))
								<span class="help-block">
									<strong>{{ $errors->first('description') }}</strong>
								</span>
								@endif
							</div>
						</div>
						<div class="form-group">
							<div class="col-lg-4 col-lg-offset-4">
								<button type="submit" class="btn btn-warning btn-lg">Guardar</button>
							</div>
						</div>
					</fieldset>
					{!! Form::close() !!}
                </div>
			</div>	
		</div>
	</div>
</div>
@endsection


