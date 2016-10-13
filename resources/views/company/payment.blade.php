@extends('layouts.company')
@section('body')
<div class="container">
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<div class="panel panel-success">
				<div class="panel-heading"><h3 class="text-center">{{$paymentplan->name}}</h3></div>
				<div class="panel-body">
					<table class="table table-condensed">
						<tr>
							<td><h4><b>Total Publicaciones:</b></h4></td>
							<td><h4 class="text-center">{{$paymentplan->number_publication}}</h4></td>
						</tr>
						<tr>
							<td><h4><b>Publicaciones realizadas:</b></h4></td>
							<td><h4 class="text-center">0</h4></td>
						</tr>
						<tr>
							<td><h4><b>Publicaciones disponibles:</b></h4></td>
							<td><h4 class="text-center">{{$paymentplan->number_publication}}</h4></td>
						</tr>
						<tr>
							<td><h4><b>Descripcion:</b></h4></td>
							<td><h5>{{$paymentplan->description}}</h5></td>
						</tr>
					</table>
				</div>

			</div>
		</div>
	</div>
</div>
@endsection
