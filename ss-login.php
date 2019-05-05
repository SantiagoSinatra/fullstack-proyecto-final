<?php
include_once("control/ss-funciones.php");
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
    <div class="container">
        <!-- contenedor del nav -->
        <div class="ss-container-nav-global">
            <?php //include("nav-global.php"); ?>
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
        <section class="row ss-section-login">
            <article class="col-12">
                <form action="" method="POST">
                    <div class="ss-item-login-global">
                        <label>Email:</label>
                        <input name="emailDelUsuario" id="emailDelUsuario" type="text" value="<?= (isset($errores["emailDelUsuario"])) ? "" : persistirInputUsuario("emailDelUsuario"); ?>" placeholder="ingrese su email">
                    </div>

                    <div class="ss-item-login-global">
                        <label>Contraseña:</label>
                        <input name="passDelUsuario" id="passDelUsuario" type="password" value="<?= (isset($errores["passDelUsuario"])) ? "" : persistirInputUsuario("passDelUsuario"); ?>" placeholder="ingrese su contraseña">
                    </div>

                    <div class="ss-item-login-global">
                        <input name="recordarUsuario" id="recordarUsuario" type="checkbox" value="recordarUsuario">
                        <label>Recordarme</label>
                        <a href="">Olvidaste tu contraseña? Hacé click acá!</a>
                    </div>

                    <div class="ss-item-login-global">
                        <button class="btn-buttom btn-primary" type="submit">Entrar</button>

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