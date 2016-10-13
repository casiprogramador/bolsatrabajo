@extends('layouts.company')
@section('body')
<div class="container">
	<div class="row"> 
		<div class="col-sm-4 col-md-3">
			<div class="thumbnail"> 
				<a href="{{route('company_register_show')}}"><p class="text-center"><i class="fa fa-industry fa-5x"></i></p></a>
				<div class="caption"> 
					<a href="{{route('company_register_show')}}"><h4 class="text-center">Editar Datos</h4> </a>
					<p class="text-center">Edita lo datos de tu empresa en cualquier momento.</p>
				</div> 
			</div> 
		</div>
		<div class="col-sm-4 col-md-3">
			<div class="thumbnail"> 
				<a href=""><p class="text-center"><i class="fa fa-file-text fa-5x"></i></p></a>
				<div class="caption"> 
					<a href=""><h4 class="text-center">Administrar Ofertas</h4> </a>
					<p class="text-center">Administra todas tus oferta de trabajo de tu empresa.</p>
				</div> 
			</div> 
		</div> 
		<div class="col-sm-4 col-md-3">
			<div class="thumbnail"> 
				<a href=""><p class="text-center"><i class="fa fa-users fa-5x"></i></p></a>
				<div class="caption"> 
					<a href=""><h4 class="text-center">Administrar Postulaciones</h4> </a>
					<p class="text-center">Administra todas la postulaciones enviadas de tus ofertas de trabajo</p>
				</div> 
			</div> 
		</div>
		<div class="col-sm-4 col-md-3">
			<div class="thumbnail"> 
				<a href="{{route('company_payment')}}"><p class="text-center"><i class="fa fa-money fa-5x"></i></p></a>
				<div class="caption"> 
					<a href="{{route('company_payment')}}"><h4 class="text-center">Planes Suscrito</h4> </a>
					<p class="text-center">Administra los planes que estas inscrito</p>
				</div> 
			</div> 
		</div>
	</div>
</div>
@endsection
@section('css')
  <link rel="stylesheet" href="{{ URL::asset('css/font-awesome.min.css') }}" />
@endsection