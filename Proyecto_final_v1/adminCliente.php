<?php include "funciones.php"; ?>

<?php require_once("connection.php");?>

<?php require_once("head.php");?>

<?php require_once("header.php");?>

<center>
    
        <h1 class="mb-5 py-5">Panel administracion Veterinaria</h1>

        <?php
        //	LLAMO EL MÉTODO QUE ESTA EN EL ARCHIVO "funciones.php"
        $link_db = conexionDB();

        $query = "SELECT * FROM clientes;";
        $result = mysqli_query($link_db, $query);
        ?>
        <hr>
        <h3>Lista de Tareas</h3>
        <table class="table" border="1">
        <thead>
            <tr style="background-color: gray;">
                <th scope="col">Nº</th>
                <th scope="col">Nombre</th>
                <th scope="col">Email</th>
                <th scope="col">Mascota</th>
                <th scope="col">Descripcion</th>
            </tr>
            <tbody>
            <?php while ($fila = mysqli_fetch_array($result)) { ?>
                <tbody>
                <tr>
                    <td><?php echo $fila['idCliente']; ?></td>
                    <td><?php echo $fila['nombre']; ?></td>
                    <td><?php echo $fila['email']; ?></td>
                    <td><?php echo $fila['nombreMascota']; ?></td>
                    <td><?php echo $fila['descripcionTarea']; ?></td>
                    <td>

                    <!-- PRUEBA CON OTROS BOTONES QUE NO LINKEAN -->

                        <td rowspan="1"><button type="button" class="btn btn-secondary btn col-5" href="tareaEditar.php <?php echo $fila['idCliente']; ?>">EDITAR</button>
                        <a href="tareaEditar.php?id=<?php echo $fila['idCliente']; ?>">EDITAR</a>
                        </td>
                        <td rowspan="1"><button type="button" class="btn btn-danger btn col-5" href="tareaEliminar.php <?php echo $fila['idCliente']; ?>">ELIMINAR</button>
                        <a href="tareaEliminar.php?id=<?php echo $fila['idCliente']; ?>">ELIMINAR</a>
                        </td>
                        
                    </td>
                </tr>
                </tbody>
                
                <?php
            }
            mysqli_free_result($result);
            mysqli_close($link_db);
            ?>
        </table>

        <div class="d-grid gap-3 d-md-flex ">
            <button href="tareaNueva.php" type="button" class="btn btn-primary btn col-2 ">Turno Nuevo</button>
            <a href="index.html" class="btn btn-primary btn col-2">Desconectarse</a>
        </div>

</center>







