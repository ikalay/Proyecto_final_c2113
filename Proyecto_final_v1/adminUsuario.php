<?php require_once("connection.php");?>

<?php require_once("head.php");?>

<?php require_once("header.php");?>
    <center>
        <h1 class="mb-5 py-5">Bienvenido Cliente!</h1>
        <table class="table">
            <thead>
            <tr>
                <th scope="col" >Hola!</th>
                <th scope="col" >Su mascota</th>
                <th scope="col" >Servicio Contratado</th>
                <th scope="col" colspan="3">Descripcion</th>
            </tr>

            </thead>
            <tbody>
            <tr>
                <th scope="row">Viktor Hugo</th>
                <td>@Otto</td>
                <td>113</td>
                <td>Bañado y Corte</td>
                <td rowspan="1"><button type="button" class="btn btn-secondary btn col-4">Modificar</button></td>
                <td rowspan="1"><button type="button" class="btn btn-danger btn col-4">Eliminar</button></td>
            </tr>
            </tbody>
        </table>

        <div class="d-grid gap-3 d-md-flex ">
            <a href="index.html" class="btn btn-primary btn col-2">Desconectarse</a>
        </div>

    </center>
