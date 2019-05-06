<?php 
include_once("control/ss-funciones.php");
include_once("ss-helpers.php");
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
    <link rel="stylesheet" href="css/ss-index.css">

    <title>Elibrary | Tus utiles con un solo click</title>

</head>

<body>
    <!-- contenedor gral -->
    <div class="container-fluid p-0 ss-background-main">
        <!-- contenedor del nav -->
        <div class="container-nav-global">
            <?php include("nav-global.php"); ?>
        </div>
        <!-- carousel -->
        <div class="mb-3">
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="img/test1.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="img/test2.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="img/test3.jpg" class="d-block w-100" alt="...">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
        <!-- fin carousel -->

        <div class="row ml-2 mr-2 pb-3">
            <section class="col-12 col-xl-6 ss-section-ofertas">
                <div class="ss-background-ofertas">
                    <h2 class="ss-titulo-section-ofertas">¡Oferta por tiempo limitado!</h2>
                    <div class="row mt-3">
                        <article class="col-6 col-md-3">
                            <img src="img/ofertas-lapiz-pizzini-1.jpg" class="ss-imagenes-ofertas rounded mx-auto d-block" alt="">
                            <h3 class="ss-titulo-article-ofertas">Lapiz Pizzini 0.5mm<br>$79.99</h3>
                        </article>
                        <article class="col-6 col-md-3">
                            <img src="img/ofertas-minas-pizzini-2.jpg" class="ss-imagenes-ofertas rounded mx-auto d-block" alt="">
                            <h3 class="ss-titulo-article-ofertas">Minas Pizzini 0.5mm<br>$49.99</h3>
                        </article>
                        <article class="col-6 col-md-3">
                            <img src="img/ofertas-tablero-plantec-3.jpg" class="ss-imagenes-ofertas rounded mx-auto d-block" alt="">
                            <h3 class="ss-titulo-article-ofertas">Tablero Plantec<br>$1299.99</h3>
                        </article>
                        <article class="col-6 col-md-3">
                            <img src="img/ofertas-regla-plantec-4.jpg" class="ss-imagenes-ofertas rounded mx-auto d-block" alt="">
                            <h3 class="ss-titulo-article-ofertas">Regla Plantec Aluminio<br>$299.99</h3>
                        </article>
                    </div>
                    <h2 class="ss-titulo-section-ofertas">Precio Total: $1729.99!</h2>
                </div>
            </section>
            <section class="col-12 col-xl-6 ss-section-categorias">
                <div class="ss-background-productos">
                    <h2 class="ss-titulo-categorias">Nuestros Productos</h2>
                    <div class="row">
                        <article class="col-12 col-md-4 col-xl-6 ss-categoria-escolares ss-categoria-global-properties">
                            <h3 class="ss-articulos-categorias ">Escolares</h3>
                        </article>
                        <article class="col-12 col-md-4 col-xl-6 ss-categoria-dibujo ss-categoria-global-properties">
                            <h3 class="ss-articulos-categorias ">Dibujo Tecnico</h3>
                        </article>
                        <article class="col-12 col-md-4 col-xl-6 ss-categoria-oficina ss-categoria-global-properties">
                            <h3 class="ss-articulos-categorias ">Articulos de Oficina</h3>
                        </article>
                        <article class="col-12 col-md-4 col-xl-6 ss-categoria-mayorista ss-categoria-global-properties">
                            <h3 class="ss-articulos-categorias ">Ventas por Mayor</h3>
                        </article>
                        <article class="col-12 col-md-4 col-xl-6 ss-categoria-indumentaria ss-categoria-global-properties">
                            <h3 class="ss-articulos-categorias ">Indumentaria</h3>
                        </article>
                        <article class="col-12 col-md-4 col-xl-6 ss-categoria-inclusivos ss-categoria-global-properties">
                            <h3 class="ss-articulos-categorias ">Productos Inclusivos</h3>
                        </article>
                    </div>
                </div>
            </section>
            <section class="col-12 ss-section-map mt-4">
                <div class="ss-background-mapa">
                <article class="col-12">
                    <h2 class="ss-titulo-mapa">Local Principal</h2>
                </article>
                <article class="col-12 ss-map-container">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3286.1859350917925!2d-58.44583248415778!3d-34.548847362105256!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bcb436f18dc22f%3A0x36090a5d367889c6!2sAv.+Monroe+860%2C+Buenos+Aires!5e0!3m2!1ses!2sar!4v1556395708130!5m2!1ses!2sar" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
                </article>
                </div>
            </section>
        </div>

    </div> <!-- fin contenedor gral -->


</body>

<!-- scripts que usa bootstrap -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<!-- ===squb=== -->

</html>