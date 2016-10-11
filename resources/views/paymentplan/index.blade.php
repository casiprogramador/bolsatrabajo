@extends('layouts.admin')
@section('body')
<div class="container">
	<div class="col-md-8 col-md-offset-2">
	<table class="table table-striped"> 
		<thead> 
			<tr> 
				<th>#</th> 
				<th>Nombre</th> 
				<th>Nro Publicacines</th> 
				<th>Descripcion</th> 
			</tr> 
		</thead> 
		<tbody> 
			@foreach ($paymentplans as $paymentplan)
			<tr> 
				<td>{{$paymentplan->id}}</th> 
				<td>{{$paymentplan->name}}</td> 
				<td>{{$paymentplan->number_publication}}</td> 
				<td>{{$paymentplan->description}}</td> 
			</tr>
			@endforeach
		</tbody> 
	</table>
	<a href="{{route('paymentplan_create')}}" class="btn btn-info" role="button">Crear Plan</a>
	</div>
</div>
@endsection
@section('css')
<link rel="stylesheet" href="{{ URL::asset('css/font-awesome.min.css') }}" />
@endsection

