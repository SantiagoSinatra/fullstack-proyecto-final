<!DOCTYPE html>
<html>

<head>
	<title>FORMULARIO PARA REGISTRARSE</title>
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
			<?php include("nav-global.php"); ?>
		</div>

		<div class="row">
			<section class="jumbotron col-11 ss-section-login">
				<article class="ss-article-titulo-login">
					<h1 class="ss-titulo-login"> elibrary<span class="ss-titulo-login-com">.com</span></h1>
					<h2 class="ss-subtitulo-login">Tus utiles con un solo click.</h2>
					<hr>
				</article>
				<article class="ss-article-loguearse-login">
					<form class="caja" action="home.php" method="post">
						<div class="password">
							<input type="email" class="form-control" placeholder="Email">
						</div>
						<div class="password">
							<input type="password" class="form-control" placeholder="Contraseña">
						</div>

						<button class="btn btn-primary btn" type="submit" name="button">Iniciar sesión</button>
						<button class="btn btn-primary btn" type="reset" name="button">Reiniciar</button>

					</form>
				</article>
			</section>
		</div>

		<section class="col" class="ss-section-external-logins">
			<h6 class="ss-or-login"> or </h6>
			<article class="jumbotron">

				<button class="loginBtn loginBtn--facebook">
					Login with Facebook
				</button>

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