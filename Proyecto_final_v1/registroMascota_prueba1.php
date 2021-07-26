<?php include "funciones.php"; ?>

<?php require_once("connection.php");?>

<?php require_once("head.php");?>

<?php require_once("header.php");?>

<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="generator" content="">
    <title>Registro de Usuarios Nuevos</title>

    <!-- Bootstrap core de CSS -->
		<link href="./css/bootstrap.min.css" rel="stylesheet">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Customizacion del estilo de css brindado con la libreria de BS -->
    <link href="./css/form-validation.css" rel="stylesheet">
  </head>


  <body class="bg-light">

  <div class="py-5 text-center">
    <img class="d-block mx-auto mb-4" src="./img/usuarios.jpg" alt="" width="102" height="102">
    <h2>Formulario de Registro de nuevo usuario</h2>
    <p class="lead">El usario será confirmado por el Administrador del Sistema.</p>
  </div>

    <div class="col-md-12  text-center">
      <h4 class="mb-3">Usuario</h4>

        <!-- Aqui comienza mi Formulario -->

        <form  class="needs-validation" novalidate action="operaciones_db.php" method="post">
        <input type="hidden" name="tipo_operacion" value="agregar"></p>
        <div class="row">
          <div class="col-md-6 mb-3">
            <label for="firstName">Nombre</label>
            <input type="text" name="nombre" class="form-control" id="firstName" size="40" placeholder="Tu nombre" value="" required>
            <div class="invalid-feedback">
              Faltó ingresar el nombre.
            </div>
          </div>
          <div class="col-md-6 mb-3">
            <label for="lastName">Apellido</label>
            <input type="text" name="apellido" class="form-control" id="lastName" size="40" placeholder="Tu apellido" value="" required>
            <div class="invalid-feedback">
              Faltó ingresar el apellido.
            </div>
          </div>
        </div>

        <div class="mb-3">
          <label for="username">Nombre de Mascota</label>
          <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text">@</span>
            </div>
            <input type="text" name="nombreMascota" class="form-control" id="mascota" size="40" placeholder="Mascota" required>
            <div class="invalid-feedback" style="width: 100%;">
              Faltó ingresar nombre de mascota.
            </div>
          </div>
        </div>

        <div class="mb-3">
          <label for="email">Email: <span class="text-muted">(Optional)</span></label>
          <input type="text" nombre="email" class="form-control" id="email" size="40" placeholder="tumail@gmail.com">
          <div class="invalid-feedback">
            El Email parece inválido.
          </div>
        </div>

        <div class="mb-3">
          <label for="address">Dirección:</label>
          <input type="text" name="direccion" class="form-control" id="address" size="40" placeholder="Calle, n°, localidad..." required>
          <div class="invalid-feedback">
            Faltó ingresar el domicilio.
          </div>
        </div>

        <div class="row">
          <div class="col-md-5 mb-3">
            <label for="country">Mascota</label>
            <select class="custom-select d-block w-100" name="tipoMascota" id="country" size="40" required>
              <option value="">Seleccioná...</option>
              <option>Perro</option>
              <option>Gato</option>
              <option>Otro</option>
            </select>
            <div class="invalid-feedback">
              Seleccioná una opcion válida.
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <label for="state">Lugar de residencia</label>
            <select class="custom-select d-block w-100" name="residencia" id="state" size="40" required>
              <option value="">Seleccioná...</option>
              <option>Buenos Aires Provincia</option>
              <option>Buenos Aires Capital</option>			  
            </select>
            <div class="invalid-feedback">
              Seleccioná una localidad válida.
            </div>
          </div>
        </div>

        
        <hr class="mb-6">

        <h4 class="mb-3">Turno chequeo general </h4>

        <div class="row">
            <div class="col-md-6 mb-3">
              <label for="state">Turno</label>
              <select class="custom-select d-block w-100" name="turnoTarea" id="state" size="40" required>
                <option value="">Seleccioná...</option>
                <option>Mañana</option>
                <option>Tarde/Noche</option>			  
              </select>
              <div class="invalid-feedback">
                Seleccioná un turno valido. El mismo te será confirmado por Email.
              </div>
            </div>
          <div class="col-md-6 mb-3">
            <label for="cc-number">Descripcion Servicio para su Mascota</label>
            <input type="text" class="form-control" name="descripcionTarea id="cc-number" size="120" placeholder="" required>
            <div class="invalid-feedback">
              La descripcion es breve y obligatoria. Podes colocar aqui si tu mascota posee alguna enfermedad pre-existente.
            </div>
          </div>
        </div>

        <button class="btn btn-danger btn-lg btn-block"  value="Enviar" type="submit">Enviar</button>
        <button class="btn btn-danger btn-lg btn-block"  value="Borrar" type="reset">Borrar</button>

		</div>
</form>
    </div>
  </div>

<footer class="my-5 pt-5 text-muted text-center text-small">
    <p class="mb-1"></a>Ignacio Kalaydjian M</a>| &copy; 2021-2022</p>
    
</footer>

</div>
		<script src="./js/jquery.js"></script>
    <script src="./js/form-validation.js"></script></body>

</html>
