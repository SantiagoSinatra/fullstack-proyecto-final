<?php
<<<<<<< HEAD
include_once("control/autoloader.php");
if($_POST){
    $usuarioLogueandose = new Usuario(null, $_POST["emailDelUsuario"], $_POST["passDelUsuario"], null, null, null);
    $errores = $validador->validacionUsuario($usuarioLogueandose, "Login");
    
=======
include_once("autoload.php");
if ($_POST) {
    $usuarioLogin = new Usuario($_POST["emailDelUsuario"],$_POST["passDelUsuario"]);

}
/*include_once("control/ss-funciones.php");
include_once("ss-helpers.php");
if ($_POST) {

    $errores = ssValidarDatos($_POST, "delLogin");
    if (count($errores) == 0) {
        $usuarioLogueandose = buscarSiExistePorEmail($_POST["emailDelUsuario"]);
        if ($usuarioLogueandose == null) {
            $errores["enEmail"] = "El usuario ingresado no existe.";
        } else {
            if (password_verify($_POST["passDelUsuario"], $usuarioLogueandose["passDelUsuario"]) === false) {
                $errores["enPassword"] = "Los datos no concuerdan.";
            } else {
                iniciarSesionDeUsuario($usuarioLogueandose, $_POST);
                if (validarCookiesDeUsuario()) {
                    header("location: bienvenida.php"); //en el formulario, el action lo dejo vacio para que recargue y controlo el redireccionamiento desde aca.
                    exit;
                } else {
                    header("location: ss-formulario.php");
                    exit;
                }
            }
        }
    }
>>>>>>> 95e7d7b2bc01a76de1dbe9a7c34edc723d30bb2d
}
*/

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
    <link rel="stylesheet" href="css/ss-login.css">

    <title>Login</title>
</head>

<body>
    <div class="container-fluid ss-contenedor-login">
        <nav class="row ss-nav-login">

            <!-- contenedor del nav -->
            <!-- <div class="container-nav-global">
                <?php /* include("nav-global.php");  */?>
            </div> -->

        </nav>
        <section class="row">
            <article class=" col-9 col-lg-3 ss-article-login-title">
                <h1 class="ss-h1-login-title">Iniciar Sesión</h1>
            </article>
        </section>


        <section class="row ss-section-login">

            <!-- avisador de errores -->
            <?php
            if (isset($errores)) : ?>
                <article class="col-9 col-lg-3 ss-article-login-errores mt-3 mb-3">
                    <ul class="ss-item-login-errores ss-no-decoration">
                        <?php
                        foreach ($errores as $key => $value) : ?>
                            <li><?= $value; ?></li>
                        <?php endforeach; ?>
                    </ul>
                </article>
            <?php endif; ?>


            <article class="col-9 col-lg-3 ss-article-login">
                <form action="" method="POST">
                    <div class="ss-item-login-global">
                        <input class="ss-input-login-global" name="emailDelUsuario" id="emailDelUsuario" type="text" value="<?= (isset($errores["emailDelUsuario"])) ? "" : persistirInputUsuario("emailDelUsuario"); ?>" placeholder="email">
                    </div>

                    <div class="ss-item-login-global mt-3">
                        <input class="ss-input-login-global" name="passDelUsuario" id="passDelUsuario" type="password" value="<?= (isset($errores["passDelUsuario"])) ? "" : persistirInputUsuario("passDelUsuario"); ?>" placeholder="contraseña">
                    </div>

                    <div class="ss-item-login-global">
                        <input name="recordarUsuario" id="recordarUsuario" type="checkbox" value="recordarUsuario">
                        <label class="ss-login-recordar">Recordarme</label>
                    </div>
                    <div class="ss-item-login-global">
                        <a class="ss-a-login" href="">Olvidaste tu contraseña? <br> Hacé click acá!</a>
                    </div>

                    <div class="ss-item-login-global">
                        <button class="ss-login-button-borrar" type="reset">Borrar</button>
                    </div>

                    <div class="ss-item-login-global">
                        <button class="ss-login-button-enter" type="submit">Entrar</button>
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



<!-- <?php
/* include_once("control/ss-funciones.php");
include_once("ss-helpers.php");
if ($_POST) {

    $errores = ssValidarDatos($_POST, "delLogin");
    if (count($errores) == 0) {
        $usuarioLogueandose = buscarSiExistePorEmail($_POST["emailDelUsuario"]);
        if ($usuarioLogueandose == null) {
            $errores["enEmail"] = "El usuario ingresado no existe.";
        } else {
            if (password_verify($_POST["passDelUsuario"], $usuarioLogueandose["passDelUsuario"]) === false) {
                $errores["enPassword"] = "Los datos no concuerdan.";
            } else {
                iniciarSesionDeUsuario($usuarioLogueandose, $_POST);
                if (validarCookiesDeUsuario()) {
                    header("location: bienvenida.php"); //en el formulario, el action lo dejo vacio para que recargue y controlo el redireccionamiento desde aca.
                    exit;
                } else {
                    header("location: ss-formulario.php");
                    exit;
                }
            }
        }
    }
}
 */
?> -->