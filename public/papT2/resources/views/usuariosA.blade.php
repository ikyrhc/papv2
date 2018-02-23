<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Crear un usuario</title>
</head>
<body>
	<h1>Crear un usuario</h1>
	@if(count($errors) > 0)
		<div class="errors">
			<ul>
			@foreach($errors->all() as $error)
				<li>{{ $error }}</li>
			@endforeach
			</ul>
		</div>
	@endif
	<form action="/papT2/public/personal/crear" method="post">
		Usuario: <input type="text" name="usuario" value="{{old('usuario')}}">
		<br>
		Nombre: <input type="text" name="nom" value="{{old('nombre')}}">
		<br>
		A Pat: <input type="text" name="a_pat" value="{{old('a_pat')}}">
		<br>
		A Mat: <input type="text" name="a_mat" value="{{old('a_mat')}}">
		<br>
		F Nac: <input type="text" name="fe_nac" value="{{old('fe_nac')}}">
		<br>
		F Ing: <input type="text" name="fe_ing" value="{{old('fe_ing')}}">
		<br>
		<input type="submit" value="Crear">
		<input type="hidden" name="_token" value="{{ csrf_token() }}">
	</form>
</body>
</html>
