<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Todos los usuarios</title>
</head>
<body>
	<?php foreach ($personales as $personal): ?>
		<p>
			
		<br>
			usuario: <?= $personal['usuario'] ?>
		</p>
		<br>
			nombre: <?=$personal['nom']?>
		</p>
		<br>
			a paterno: <?=$personal['a_pat']?>
		</p>
		<br>
			a materno: <?=$personal['a_mat']?>
		</p>
	<?php endforeach ?>
</body>
</html>
