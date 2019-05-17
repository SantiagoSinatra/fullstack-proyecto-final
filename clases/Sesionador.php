<?php
require_once("control/autoloader.php");
//el sesionador administra las cookies de los usuarios y las variables de sesion. 
class Sesionador{
    public function iniciarSesionUsuario($usuarioLogueandose, $datosDelPost){
        
        $_SESSION["nombreUsuario"] = $usuarioLogueandose["nombreUsuario"];
        $_SESSION["emailUsuario"] = $usuarioLogueandose["emailUsuario"];
        $_SESSION["perfilDeUsuario"] = $usuarioLogueandose["perfilUsuario"];
        $_SESSION["avatarDelUsuario"] = $usuarioLogueandose["avatarUsuario"];

        if (isset($datosDelPost["recordarUsuario"])) {
            setcookie("emailUsuario", $datosDelPost["emailDelUsuario"], time() + 3600);
            setcookie("passUsuario", $datosDelPost["passDelUsuario"], time() + 3600);

        }
    }

    public function cerrarSesionUsuario(){
        session_start();
        session_destroy();
        setcookie("passDelUsuario", "", time()-1);
        header("location: index.php");
    }
}

/* function iniciarSesionDeUsuario($usuarioLogueandose, $datosDelPost)
{
    $_SESSION["nombreDeUsuario"] = $usuarioLogueandose["nombreDeUsuario"];
    $_SESSION["emailDelUsuario"] = $usuarioLogueandose["emailDelUsuario"];
    $_SESSION["perfilDeUsuario"] = $usuarioLogueandose["perfilDeUsuario"];
    $_SESSION["avatarDelUsuario"] = $usuarioLogueandose["avatarDelUsuario"];
    if (isset($datosDelPost["recordarUsuario"])) {
        setcookie("emailDelUsuario", $datosDelPost["emailDelUsuario"], time() + 3600);
        setcookie("passDelUsuario", $datosDelPost["passDelUsuario"], time() + 3600);
    }
} */