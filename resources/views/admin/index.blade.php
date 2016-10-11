@extends('layouts.admin')
@section('body')
<div class="container">
	<div class="row"> 
		<div class="col-sm-4 col-md-3">
			<div class="thumbnail"> 
				<a href=""><p class="text-center"><i class="fa fa-money fa-5x"></i></p></a>
				<div class="caption"> 
					<a href="{{route('paymentplan_index')}}"><h4 class="text-center">Crear Planes</h4> </a>
					<p class="text-center">Administra los planes para tus clientes</p>
				</div> 
			</div> 
		</div>
		<div class="col-sm-4 col-md-3">
			<div class="thumbnail"> 
				<a href="{{route('paymentplan_company')}}"><p class="text-center"><i class="fa fa-industry fa-5x"></i></p></a>
				<div class="caption"> 
					<a href="{{route('paymentplan_company')}}"><h4 class="text-center">Asignar Planes a empresa</h4> </a>
					<p class="text-center">Asigna los planes creados a las empresas inscritas.</p>
				</div> 
			</div> 
		</div>
	</div>
</div>
@endsection
@section('css')
  <link rel="stylesheet" href="{{ URL::asset('css/font-awesome.min.css') }}" />
@endsection

