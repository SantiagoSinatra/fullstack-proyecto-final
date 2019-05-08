<?php
require_once("autoload.php");
if ($_POST){
  $usuario = new Usuario($_POST["nombre"],$_POST["email"],$_POST["password"]);
  
  //$passwordEncriptado = password_hash($usuario->getPassword(),PASSWORD_DEFAULT);
  //dd($passwordEncriptado);
  $errores = $validar->validacionUsuario($usuario, $_POST["repassword"]);
  if(count($errores)==0){
    $registroUsuario = $registro->armarUsuario($usuario);
    $json->guardar($registroUsuario);
    redirect ("login.php");
  }
} 
/*require_once("ss-helpers.php");
include_once("control/ss-funciones.php");
if ($_POST) { //si ocurre un post hace lo de abajo
    $errores = ssValidarDatos($_POST, "delRegistro");
    if (count($errores) == 0) {
        $usuarioRegistrandose = buscarSiExistePorEmail($_POST["emailDelUsuario"]);
        if($usuarioRegistrandose != null){
            $errores["enEmail"]="El usuario ya existe.";
        }else{
            $avatarDelUsuario = armarAvatar($_FILES);
            $registro = armarRegistro($_POST, $avatarDelUsuario);
            guardarUsuario($registro);
            header("location:ss-login.php");
            exit;
        }
    }
}*/

?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- bootstrap css -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- css ss-formulario -->
    <link rel="stylesheet" href="css/ss-formulario.css">

    <title>Formulario de registro</title>
</head>

<body>
    <div class="container">
        <!-- contenedor del nav -->
        <div class="ss-container-nav-global">
            <?php // include("nav-global.php"); ?>
        </div>

        <!-- avisador de errores -->
        <?php
        if (isset($errores)) : ?>
            <ul>
                <?php
                foreach ($errores as $key => $value) : ?>
                    <li><?= $value; ?></li>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>

        <section class="row ss-section-formulario">
            <article class="col-12">
                <form action="" method="POST" enctype="multipart/form-data">
                    <!-- post para que los datos vayan encriptados, enctype es el tipo de encripcion que se le va a hacer, y se pone multipart/form-data porque se van a mandar files (la foto del usuario) -->
                    <div class="col-12 ss-item-formulario-global">
                        <label>Usuario:</label>
                        <input name="nombreDeUsuario" id="nombreDeUsuario" type="text" value="<?= (isset($errores["nombreDeUsuario"])) ? "" : persistirInputUsuario("nombreDeUsuario"); ?>" placeholder="ingrese un nombre">
                    </div>
                    <div class="col-12 ss-item-formulario-global">
                        <label>Email:</label>
                        <input name="emailDelUsuario" id="emailDelUsuario" type="text" value="<?= (isset($errores["emailDelUsuario"])) ? "" : persistirInputUsuario("emailDelUsuario"); ?>" placeholder="ingrese un email">
                    </div>
                    <div class="col-12 ss-item-formulario-global">
                        <label>Contraseña:</label>
                        <input name="passDelUsuario" id="passDelUsuario" type="password" value="<?= (isset($errores["passDelUsuario"])) ? "" : persistirInputUsuario("passDelUsuario"); ?>" placeholder="ingrese una contraseña">
                    </div>
                    <div class="col-12 ss-item-formulario-global">
                        <label>Confirmar Constraeña:</label>
                        <input name="rePassDelUsuario" id="rePassDelUsuario" type="password" value="<?= (isset($errores["rePassDelUsuario"])) ? "" : persistirInputUsuario("rePassDelUsuario"); ?>" placeholder="ingrese contraseña nuevamente">
                    </div>
                    <div class="col-12 ss-item-formulario-global">
                        <label>Foto de Usuario:</label>
                        <input name="avatarDelUsuario" type="file" value="">
                    </div>
                    <div class="col-12 ss-item-formulario-global">
                        <button type="submit">¡Registrarme!</button>
                        <button type="reset">Comenzar de nuevo..</button>
                    </div>
                </form>
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