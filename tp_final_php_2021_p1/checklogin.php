<div class="container">

<center>
    
        

        <h1 class="mb-2 py-5">Verificacion de identidad</h1>

<?php

require_once("connection.php");

require_once("head.php");

require_once("header.php");

echo $_POST['inputEmail'] . "<BR>";
echo $_POST['inputPassword'] . "<BR>";

require("basededatos.php");

$NuevaConexion = new conectarse();
$NuevaConexion->conecta();

$query = "select * from usuarios where  usuario = '" . $_POST['inputEmail'] .
                                        "' and  clave = " . $_POST['inputPassword'];
echo $query;
$result = $NuevaConexion->ejecutar($query);      
$row_cnt = $result->num_rows;

echo "<BR>". "Cantidad de usuarios encontrados: ";
echo $row_cnt ;

?>

<div class="md-flex ">
            <a href="adminCliente.php" class="btn btn-primary btn col-2">Continuar</a>

            </div>

</center>

