<?php
    include_once("control/ss-funciones.php");
    include_once("ss-helpers.php");
    if(!validarCookiesDeUsuario()){
        header("location:ss-login.php");
        exit;
    }
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="refresh" content="10, url=index.php">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- bootstrap css -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- css -->
    <link rel="stylesheet" href="css/bienvenida.css">

    <title>Bienvenido al Sitio!</title>
</head>

<body>
    <div class="container-fluid">

        <section class="row">
            <article class="col-12 ss-article-bienvenida">
                <h2>Bienvenido al Sitio!</h2>
                <h3>Usted sera redirigido en 10 segundos...</h3>
            </article>
        </section>

    </div>


</body>

</html>