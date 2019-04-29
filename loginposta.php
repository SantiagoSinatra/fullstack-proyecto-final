<?php
include_once("control/funciones.php");
if($_POST){
  
  $errores= validar($_POST,"login");
  if(count($errores)==0){
    $usuario = buscarEmail($_POST["email"]);
    if($usuario == null){
      $errores["email"]="Usuario no existe";
    }else{
      if(password_verify($_POST["password"],$usuario["password"])===false){
        $errores["password"]="Error en los datos verifique";
      }
    }
    seteoUsuario($usuario,$_POST);
    if (validarUsuario()) {
      header("location: home.php");
      exit;
    }else {
      header("location: formulario.php");
      exit;
    }
  }

}
?>

<!DOCTYPE html>
<html>

<head>
	<title>LOGIN</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width , initial-scale=1">
	<meta name="google-signin-client_id" content="YOUR_CLIENT_ID.apps.googleusercontent.com">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/loginposta.css">

</head>

<body>
	<div class="container ss-propiedades-del-container">
		<div class="container-nav-global">
			<?php include("nav-global.php");
			?>
		</div>

<<<<<<< HEAD
<<<<<<< HEAD
			<div class="row text-center col-12">
			
				<form class="px-4 py-3" method="POST" action="bienvenida.php">
					<div class="form-group">
					<label class="emailtxt" for="exampleDropdownFormEmail1">Email address</label>
					<input type="email" class="form-control" name="email" id="exampleDropdownFormEmail1" placeholder="email@example.com">
					</div>
					<div class="form-group">
					<label for="exampleDropdownFormPassword1">Password</label>
					<input type="password" name="password" class="form-control" id="exampleDropdownFormPassword1" placeholder="Password">
					</div>
					<div class="form-check">
					<input type="checkbox" class="form-check-input" id="dropdownCheck">
					<label class="form-check-label" for="dropdownCheck">
						Remember me
					</label>
					</div>
					<button type="submit" class="btn btn-primary">Sign in</button>
				</form>
				<div class="dropdown-divider"></div>
				<a class="dropdown-item" href="#">New around here? Sign up</a>
				<a class="dropdown-item" href="#">Forgot password?</a>
			</div>
			<hr>
			<section class="col" class="ss-section-external-logins">
				<h6 class="ss-or-login"> or </h6>
				<article class="jumbotron text-center">

					<button class="loginBtn loginBtn--facebook">
						Login with Facebook
					</button>
=======
=======
>>>>>>> 6324eab5f5573dd25f9e6f5d5d6dd845f628d8b6
		<?php include_once("control/funciones.php");
		if ($_POST) {
			$errores = validar($_POST);
			if (count($errores) == 0) {
				$usuario = buscarEmail($_POST["Email"]);
				if ($usuario == null) {
					$errores["Email"] = "Usuario no encontrado";
				}
			}
		}
		if (password_verify($_POST["password"], $usuario["password"]) == false) {
			$errores["password"] = "Contraseña incorrecta";
		}
		SitioUsuario($usuario, $_POST);
		if (ValidarUsuario()) {
			header("location : home.php");
		} else {
			header("location : loginposta.php");
		}
		exit;

		?>

		<div class="row">
			<section class="jumbotron col-11 ss-section-login">
				<article class="ss-article-titulo-login">
					<h1 class="ss-titulo-login"> elibrary<span class="ss-titulo-login-com">.com</span></h1>
					<h2 class="ss-subtitulo-login">Tus utiles con un solo click.</h2>
					<hr>
				</article>
				<article class="ss-article-loguearse-login">
					<form class="caja" action="home.php" method="post">
						<div>
							<input type="email" class="form-control" placeholder="Email">
						</div>
						<div>
							<input type="password" name="password" class="form-control" placeholder="Contraseña">
						</div>
>>>>>>> 6324eab5f5573dd25f9e6f5d5d6dd845f628d8b6

					<button class="loginBtn loginBtn--google">
						Login with Google
					</button>

				</article>
			</section>
	</div>
</body>
<!-- scripts que usa bootstrap -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<!-- ===squb=== -->

</html>