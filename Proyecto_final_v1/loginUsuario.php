<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Ignacio Kalaydjian Martinez Trabajo Educacional">
    <title>Login Sistema Administracion Veterinaria</title>

<!-- Bootstrap core CSS -->
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
<!-- Custom styles for this template -->
<link href="./css/signin.css" rel="stylesheet">
</head>

<body class="text-center bg-light">
<!-- Aqui comienza mi form -->
        <form class="form-signin" action="adminUsuario.php" method="post">
              <img class="mb-4" src="./img/usuarios.jpg" alt="" width="102" height="102">
              <h1 class="h3 mb-3 font-weight-normal">Bienvenido a la Veterinaria!</h1>
              <label for="inputEmail" class="sr-only">Email / Usuario</label>
              <input type="email" id="inputEmail" name="inputEmail" class="form-control" placeholder="Email address" required autofocus>
              <label for="inputPassword" class="sr-only">Clave</label>
              <input type="password" id="inputPassword" name="inputPassword"class="form-control" placeholder="Password" required>
              <div class="checkbox mb-3">
              </div>
              <button class="btn btn-lg btn-primary btn-block" type="submit">Ingresar</button>
              <p class="mt-5 mb-3 text-muted"></a>Ignacio Kalaydjian M</a>| &copy; 2021-2022</p>
              
        </form>
</body>

</html>