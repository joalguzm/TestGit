<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Laravel PHP Framework</title>
	 
</head>
<body>
	<div class="welcome">
		
	<form method="POST" action="<?php if(isset($persona)) echo '../editarPersona/'.$persona->id; else echo './action'; ?>">
		<input name="nombre" placeholder="nombre" value="<?php if(isset($persona)) echo $persona->nombre; ?>">
		<input name="apellido" placeholder="apellido" value="<?php if(isset($persona)) echo $persona->apellido; ?>">
		<input type="submit" value="<?php if(isset($persona)) echo 'Editar'; else echo 'Ingresar'; ?>">
	</form>	
	</div>
</body>
</html>