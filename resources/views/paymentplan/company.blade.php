@extends('layouts.admin')
@section('body')
<div class="container">
	<div class="col-md-8 col-md-offset-2">

		<div class="panel panel-info">
			<div class="panel-heading">
				<h3 class="panel-title">Asignacion de plan</h3>
			</div>
			<div class="well">
                <div class="panel-body">
                    <h3 class="text-center"><u><b>Asignar plan a una empresa</b></u></h3><br>
					{!! Form::open(array('route' => 'paymentplan_company_store', 'class' => 'form-horizontal', 'files' => true)) !!}
                    <fieldset>
						<div class="form-group{{ $errors->has('company') ? ' has-error' : '' }}">
							<label class="col-sm-4 control-label">Empresa:</label>
							<div class="col-sm-6">
								{{ Form::select('company',$companies, old('company'), ['class' => 'form-control input-sm']) }}
								@if ($errors->has('company'))
								<span class="help-block">
									<strong>{{ $errors->first('company') }}</strong>
								</span>
								@endif
							</div>
						</div>
						<div class="form-group{{ $errors->has('paymentplan') ? ' has-error' : '' }}">
							<label class="col-sm-4 control-label">Plan:</label>
							<div class="col-sm-6">
								{{ Form::select('paymentplan',$paymentplans, old('paymentplan'), ['class' => 'form-control input-sm']) }}
								@if ($errors->has('paymentplan'))
								<span class="help-block">
									<strong>{{ $errors->first('paymentplan') }}</strong>
								</span>
								@endif
							</div>
						</div>
						<div class="form-group">
							<div class="col-lg-4 col-lg-offset-4">
								<button type="submit" class="btn btn-warning">Asignar</button>
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



