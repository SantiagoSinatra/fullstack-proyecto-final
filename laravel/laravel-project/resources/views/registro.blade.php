@extends('layouts.default')
@section('content')
<link rel="stylesheet" href="css/registro.css" />
 <div class="container-fluid ss-contenedor-registro" >
  <br>
  <br>
        <!-- avisador de errores -->
        
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
                        <input class="ss-input-registro-global" name="nombreDeUsuario" id="nombreDeUsuario" type="text" value="" placeholder="ingrese un nombre">
                    </div>
                    <div class="col-12 ss-item-registro-global">
                        <input class="ss-input-registro-global" name="emailDelUsuario" id="emailDelUsuario" type="text" value="" placeholder="ingrese un email">
                    </div>
                    <div class="col-12 ss-item-registro-global">
                        <input class="ss-input-registro-global" name="passDelUsuario" id="passDelUsuario" type="password" value="" placeholder="ingrese una contraseña">
                    </div>
                    <div class="col-12 ss-item-registro-global">
                        <input class="ss-input-registro-global" name="rePassDelUsuario" id="rePassDelUsuario" type="password" value="" placeholder="reingrese contraseña">
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
@endsection