<?php 
include "funciones.php";
$link_db = conexionDB();
	
$idCliente = $_REQUEST['idCliente'];
$query = "SELECT * FROM clientes WHERE idCliente=$id_cliente";
$result = mysqli_query($link_db,$query);

//	EL MÉTODO mysqli_fetch_assoc() ES IDEAL PARA OBTENER 1 SOLO REGISTRO Y NO IMPLEMENTAR UN BUCLE
$registro = mysqli_fetch_assoc($result);

?>

<?php require_once("connection.php");?>

<?php require_once("head.php");?>

<?php require_once("header.php");?>

<center>

            <h3>Lista de Tareas</h3>
            <form action="operaciones_db.php" method="post">
		  	<!-- TYPE HIDDEN ENVÍA DATOS OCULTOS -->
		  	<input type="hidden" name="tipo_operacion" value="editar">
		  	<!-- ENVIO EL ID PARA EL WHERE DEL UPDATE -->
			<input type="hidden" name="idCliente" value="<?php echo $registro['idCliente'];?>">

		  	<p>Nombre: <input type="text" name="nombre" size="40" required value="<?php echo $registro['nombre'];?>"></p>
		  	<p>Email: <input type="text" name="email" size="40" required value="<?php echo $registro['email'];?>"></p>
		  	<p>Mascota: <input type="text" name="nombeMascota" size="40" required value="<?php echo $registro['nombreMascota'];?>"></p>
		  	<p>Servicio Mascota: <input type="text" name="descripcionTarea" value="<?php echo $registro['descripcionTarea'];?>"></p>
		  	<p>
		    	<input type="submit" value="Actualizar">
		    	<input type="reset" value="Resetar campos">
		  	</p>
		</form>


        <div class="d-grid gap-3 d-md-flex ">
            <button href="tareaNueva" type="button" class="btn btn-primary btn col-2 ">Tarea Nueva</button>
            <a href="index.html" class="btn btn-primary btn col-2">Desconectarse</a>
        </div>

</center>







