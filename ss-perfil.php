<?php
include_once("control/ss-funciones.php");
if(!isset($_SESSION["emailDelUsuario"])){
    header("location:ss-formulario.php");
    exit;
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
    <!-- css -->
    <link rel="stylesheet" href="css/ss-perfil.css">

    <title>Tu Perfil!</title>
</head>
<body>
    <div class="container">
         <!-- contenedor del nav -->
         <div class="container-nav-global">
            <?php include("nav-global.php"); ?>
        </div>
        <section class="row ss-section-perfil">
            <article class="col-12 ss-perfil">
                <img class="ss-img-perfil" src="avatares/<?=$_SESSION["avatarDelUsuario"];?>" alt="error-imagen-de-avatar">
                <div class="ss-text">
                    <h4><?=$_SESSION["nombreDeUsuario"];?></h4>
                    <p>usuario de elibrary</p>
                </div>
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