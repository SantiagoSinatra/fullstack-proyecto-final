<?php 
//esto es lo que va a hacer el formulario una vez que se realice el envio. 

require_once("control/autoloader.php");
if($_POST){
    $usuarioRegistrandose = new Usuario($_POST["nombreDeUsuario"], $_POST["emailDelUsuario"], $_POST["passDelUsuario"], $_POST["rePassDelUsuario"], $_FILES["avatarDelUsuario"], null);

    $errores = $validador->validacionUsuario($usuarioRegistrandose, "registro");
    if(count($errores)==0){
        // arma el array de usuario para pasarlo a MYSQL.
        $usuarioAConstruir = $armador -> armarUsuario($usuarioRegistrandose);
        //guarda el avatar del usuario. 
        $usuarioAConstruir["avatarUsuario"] = $armador -> armarAvatar($usuarioRegistrandose -> getAvatarUsuario());
        Query::insertarEnDB($usuarioAConstruir);

        /*// codifica el array a json.
        $jsonDatabase -> guardarUsuario($usuarioAConstruir);*/ 
        redirigirUsuario("ss-login.php"); //PHP Funcionando. Revision por Santi el 15/05/2019 


    }
}

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
    <div class="container-fluid ss-contenedor-registro" >
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
        <section class="row">
            <article class=" col-9 col-lg-3 ss-article-registro-title">
                <h1 class="ss-h1-registro-title">Registro</h1>
            </article>
        </section>
        <section class="row ss-section-formulario">
            <article class="col-9 col-lg-3 ss-article-registro-title">
                <form action="" method="POST" enctype="multipart/form-data">
                    <!-- post para que los datos vayan encriptados, enctype es el tipo de encripcion que se le va a hacer, y se pone multipart/form-data porque se van a mandar files (la foto del usuario) -->
                    <div class="col-12 ss-item-registro-global">
                        <input class="ss-input-registro-global" name="nombreDeUsuario" id="nombreDeUsuario" type="text" value="<?= (isset($errores["nombreDeUsuario"])) ? "" : persistirInputUsuario("nombreDeUsuario"); ?>" placeholder="ingrese un nombre">
                    </div>
                    <div class="col-12 ss-item-registro-global">
                        <input class="ss-input-registro-global" name="emailDelUsuario" id="emailDelUsuario" type="text" value="<?= (isset($errores["emailDelUsuario"])) ? "" : persistirInputUsuario("emailDelUsuario"); ?>" placeholder="ingrese un email">
                    </div>
                    <div class="col-12 ss-item-registro-global">
                        <input class="ss-input-registro-global" name="passDelUsuario" id="passDelUsuario" type="password" value="<?= (isset($errores["passDelUsuario"])) ? "" : persistirInputUsuario("passDelUsuario"); ?>" placeholder="ingrese una contraseña">
                    </div>
                    <div class="col-12 ss-item-registro-global">
                        <input class="ss-input-registro-global" name="rePassDelUsuario" id="rePassDelUsuario" type="password" value="<?= (isset($errores["rePassDelUsuario"])) ? "" : persistirInputUsuario("rePassDelUsuario"); ?>" placeholder="reingrese contraseña">
                    </div>
                    <div class="col-12 ss-item-registro-global">
                        <input class="col-12 ss-item-registro-global" name="avatarDelUsuario" type="file" value="">
                    </div>
                    <div class="col-12 ss-item-registro-global">
                        <button class="ss-registro-button-borrar" type="submit">Registrarme!</button>
                        <button class="ss-registro-button-enter" type="reset">Reiniciar</button>
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

<?php
/* require_once("ss-helpers.php");
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
} */
?>