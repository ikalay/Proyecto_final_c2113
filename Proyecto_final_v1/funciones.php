<?php

/**
 * [conexionDB description]
 * @param  boolean $debug [muestra en pantalla el estado]
 * @return [type]         [description]
 */
function conexionDB($debug = false){
	$host = "localhost";
	$puerto = "3306";
	$usr = "root";
	$psw = "";
	$db = "veterinaria1";
	$tbl = "clientes"; // OPCIONAL

	if(!($link = mysqli_connect($host.":".$puerto,$usr,$psw,))){
		echo "<p style='background-color: red;'><strong>Error al conectarse a MySQL</strong><p>";
		exit();
	}else{
		if($debug)
			echo "<p style='background-color: green;'><strong>Conexión a MySQL exitosa</strong><p>";
	}

	if(!mysqli_select_db($link,$db)){
		echo "<p style='background-color: red;'><strong>Error: la Base de Datos no se encuentra</strong><p>";
		exit();
	}else{
		if($debug)
			echo "<p style='background-color: green;'><strong>Base de Datos Seleccionada</strong><p>";
	}
	//	UTILIZARLO PARA CORRECIÓN DE ACENTOS (algunos casos)
	mysqli_query($link,"SET NAMES 'utf8'");
	
	//	DEVUELVO EL OBJETO QUE CONTIENE LA CONEXIÓN
	return $link;
}


function insertDB($link, $nom, $ape, $ema, $dir, $nmas, $dt, $resi, $tipom, $ttar){
	$query = "INSERT INTO clientes (nombre, apellido, email, direccion, nombreMascota, descripcionTarea, residencia, tipoMascota, turnoMascota) 
	VALUES ('$nom','$ape','$ema', '$dir','$nmas','$dt','$resi','$tipom','$ttar');";

	if(!mysqli_query($link,$query)){
		echo "<p style='background-color: red;'><strong>Error al insertar datos en la tabla Clientes</strong><p>";
		$ban = 0;
	}else{
		echo "<p style='background-color: green;'><strong>Se agregaron los datos en la tabla Clientes</strong><p>";
		$ban = 1;
	}
	mysqli_close($link);

	return $ban;
}
?>



