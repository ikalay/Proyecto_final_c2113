<?php include "funciones.php"; ?>

<?php require_once("connection.php");?>

<?php require_once("head.php");?>

<?php require_once("header.php");?>

<html>
	<head>
		<meta charset="utf-8">
	    <title>Agrega tu mascota</title>
	</head>
	<body>
		<h3>Formulario para Agregar una mascota</h3>
	  	
	  	<form action="operaciones_db.php" method="post">
		  	<!-- TYPE HIDDEN ENVÍA DATOS OCULTOS -->
			<input type="hidden" name="tipo_operacion" value="agregar"></p>
		  	<p>Nombre: <input type="text" name="nombre" size="40" ></p>
		  	<p>Apellido: <input type="text" name="apellido" size="40" ></p>
		  	<p>Email: <input type="varchar" name="email" size="40" ></p>
		  	<p>Direccion: <input type="varchar" name="direccion"></p>
			<p>Nombre Mascota: <input type="varchar" name="nombreMascota"></p>
			<p>Descripción Tarea: <input type="varchar" name="descripcionTarea"></p>
			<p>Residencia: <input type="text" name="residencia"></p>
			<p>Tipo Mascota: <input type="text" name="tipoMascota"></p>
			<p>Turno Tarea: <input type="text" name="turnoTarea"></p>
		  	<p>
		    	<input type="submit" value="agregar">
		    	<input type="reset" value="borrar">
		  	</p>
		</form>

	  	<p><a href="index.html">Volver al Portal</a></p>
	</body>

</html>



