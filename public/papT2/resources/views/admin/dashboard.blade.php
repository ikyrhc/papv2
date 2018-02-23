@extends('admin.master')

@section('content')

	<div class="col-lg-12">
		 <div id="page-heading">
			<ul class="breadcrumb">
			<li><a href="#/">Dashboard</a></li>
			<li class="active">Dashboard</li>
			</ul>

		</div>						
	</div>
	<div class="col-lg-6">
		<div class="cuadros-dash">
			<h3>Total de Registros: {{ $usuarios }}</h3>
			<h1>{{ $afiliados }} Afiliados -- {{ $prospectos }} Prospectos</h1>
		</div>
	</div>
	<div class="col-lg-6">
		<div class="cuadros-dash">
			<h3>Pagos Recibidos: {{ $transacciones }} - Total: ${{ $t_pagadas }} </h3>
			<h1>Hoy: {{ $t_nuevas }} - Total: ${{ $t_pagadas_hoy }}</h1>
		</div>
	</div>
	<div class="col-lg-6">
		<div class="cuadros-dash">
			<h3>Comisiones: {{ $t_comisiones }} - Total: ${{ $t_com_total }}	</h3>
			<h1>Hoy: {{ $t_com_hoy }} - Total: ${{ $t_com_hoy_total }}		</h1>
		</div>
	</div>
	<div class="col-lg-6">
		<div class="cuadros-dash">
			<h3>Retiros Solicitados</h3>
			<h1>{{ $t_com_colicitadas }} pendientes</h1>
		</div>
	</div>

@endsection	