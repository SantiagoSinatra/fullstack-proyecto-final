<?php
include_once("control/funciones.php");
if ($_POST) {
	$errores = validar($_POST);
	if (count($errores) == 0) {
		$avatar = crearAvatar($_FILES);
		$registro = crearRegistro($_POST, $avatar);
		guardar($registro);
		header("location: loginposta.php");
	}
}
?>
<!DOCTYPE html>
<html>

<head>
	<title>FORMULARIO PARA REGISTRARSE</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width , initial-scale=1">
	<meta name="google-signin-client_id" content="YOUR_CLIENT_ID.apps.googleusercontent.com">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/styles-formulario.css">

</head>

<body class="l-body">
	<div class="container">
		<div class="container-nav-global">
			<?php include("nav-global.php"); ?>
		</div>
		<article class="col mt-5" class="article1">
			<div class="jumbotron">
				<section class="section1">
					<h1 class="h1">
						<font color="black">ELIBRARY</font>
						<font color="#e20079">.COM</font>
					</h1>
					<p class="lead">Tus utiles con un solo click.</p>
					<hr class="my-4">
				</section>
				<form class="caja" action="" method="POST" enctype="multipart/form-data">
					<div>
						<span class="span1">Holaaaaa</span>
						<input type="text" name="nombre" class="form-control" placeholder="Nombre de usuario" value="<?= (isset($errores["nombre"])) ? "" : persistir("nombre"); ?>">
						<?php if (isset($errores["nombre"])) :
							echo "<span class='span'>*" .
								$errores["nombre"] . "</span>";
						endif; ?>
					</div>
					<div>
						<input type="email" name="email" class="form-control" value="<?= (isset($errores["email"])) ? "" : persistir("email"); ?>" placeholder="Email">
						<?php if (isset($errores["email"])) :
							echo "<span class='span'>*" .
								$errores["email"] . "</span>";
						endif; ?>
					</div>
					<div>
						<input type="password" name="password" class="form-control" placeholder="Contraseña">
						<?php if (isset($errores["password"])) :
							echo "<span class='span'>*" .
								$errores["password"] . "</span>";
						endif; ?>
					</div>
					<div>
						<input type="password" name="repassword" class="form-control" placeholder="Repetir contraseña">
					</div>
					<section class="section2">
						<label class="btn btn-primary botonFoto">Seleccione foto de perfil
							<input name="avatar" style="display: none;" type="file" id="avatar" value="" placeholder="Seleccione foto de perfil" />
						</label>
						<?php if (isset($errores["avatar"])) :
							echo "<span class='span'><br>*" .
								$errores["avatar"] . "</span>";
						endif; ?>
						<br>
					</section>
					<button class="btn btn-primary btn" type="submit" name="button">Registrarse</button>
					<button class="btn btn-primary btn" type="reset" name="button">Reiniciar</button>


				</form>

			</div>
		</article>
		<article class="col" class="article2">
			<p id="or" align="center">OR</p>
			<div class="jumbotron">

				<button class="loginBtn loginBtn--facebook">
					Login with Facebook
				</button>

				<button class="loginBtn loginBtn--google">
					Login with Google
				</button>

		</article>
	</div>
</body>

</html>