<?php include "funciones.php"; ?>

<?php require_once("connection.php");?>

<?php require_once("head.php");?>

<?php require_once("header.php");?>

<?php

include "funciones.php";
$link_db = conexionDB();
//	SEGÚN EL VALOR tipo_operacion VERIFICO QUE OPERACIÓN HACER
$tipo = $_REQUEST['tipo_operacion'];

//	INSERT TAREA
if ($tipo == "agregar") {

    $nom = $_REQUEST['nombre'];
    $ape = $_REQUEST['apellido'];
    $ema = $_REQUEST['email'];
    $dir = $_REQUEST['direccion'];
    $nmas = $_REQUEST['nombreMascota'];
    $dt = $_REQUEST['descripcionTarea'];
    $resi = $_REQUEST['residencia'];
    $tipom = $_REQUEST['tipoMascota'];
    $ttar = $_REQUEST['turnoTarea'];


    $resultado = insertDB($link_db, $nom, $ape, $ema, $dir, $nmas, $dt, $resi, $tipom, $ttar);

    echo '<p><a href="registroMascota_prueba2.php">Volver al Formulario</a></p>';
}

//	UPDATE
if ($tipo == "editar") {
    echo 'agregar operacion editar';
    print '<pre>';
    print_r($_REQUEST);
    print '</pre>';
    echo '<p><a href="index.php">Volver al Inicio</a></p>';
}

//	DELETE
if ($tipo == "eliminar") {
    echo 'agregar operacion eliminar';
    print '<pre>';
    print_r($_REQUEST);
    print '</pre>';
    echo '<p><a href="index.php">Volver al Inicio</a></p>';
}
?>
