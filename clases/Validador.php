<?php
require_once("control/autoloader.php");

class Validador{
    
    //FUNCIONANDO!!
    public function validacionUsuario($usuario, $origen){
          
        $errores = [];

        //Validacion en el Registro:
        if($origen == "registro"){

            //Limpieza de datos
            $nombreUsuario = trim($usuario->getNombreUsuario());
            $emailUsuario = trim($usuario->getEmailUsuario());
            $passUsuario = trim($usuario->getPassUsuario());
            $rePassUsuario = trim($usuario->getRePassUsuario());
            $avatarUsuario = $usuario->getAvatarUsuario();

            //Validacion
            if(empty($nombreUsuario)){
                $errores["nombreUsuario"] = "Ingrese un nombre";
            }elseif(strlen($nombreUsuario) < 4 ){
                $errores["nombreUsuario"] = "El nombre debe tener al menos 4 digitos";
            }

            if(empty($emailUsuario)){
                $errores["emailUsuario"] = "Ingrese un email";
            }
            if(empty($passUsuario)){
                $errores["passUsuario"] = "Ingrese una constraseña";
            }
            if(empty($rePassUsuario)){
                $errores["rePassUsuario"] = "Ingrese la constraseña nuevamente";
            }
            

            //Validacion Datos:
            if(empty($errores)){

                if(strlen($nombreUsuario) < 4 ){
                    $errores["nombreUsuario"] = "El nombre debe tener al menos 4 digitos";
                }

                if(!filter_var($emailUsuario, FILTER_VALIDATE_EMAIL)){
                    $errores["emailUsuario"] = "El email no es valido";
                }

                if(strlen($passUsuario) < 7){
                    $errores["passUsuario"] = "La contraseña debe tener al menos 7 digitos";
                }elseif(!preg_match("#[0-9]+#", $passUsuario)) {
                    $errores["passUsuario"] = "La contraseña debe contener al menos un numero";
                }elseif (!preg_match("#[A-Za-z]+#", $passUsuario)) {
                    $errores["passUsuario"] = "La contraseña debe contener al menos una letra";
                }elseif ($passUsuario != $rePassUsuario){
                    $errores["passUsuario"] = "Las contraseñas no coinciden";
                }

                if(pathinfo($avatarUsuario["name"], PATHINFO_EXTENSION) != "png" && pathinfo($avatarUsuario["name"], PATHINFO_EXTENSION) != "jpg"){
                    $errores["avatarUsuario"] = "La extension debe ser png o jpg";
                }

                if($avatarUsuario["error"] != 0){
                    $errores["avatarUsuario"] = "Debe subir una imagen";
                }elseif($avatarUsuario["error"] == 1){
                    $errores["avatarUsuario"] = "La imagen es muy grande";
                }
            }else{

            //Limpieza de datos:
            $emailUsuario = trim($usuario->getEmailUsuario());
            $passUsuario = trim($usuario->getPassUsuario());

            //Validacion Existencia:
            if(empty($emailUsuario)){
                $errores["emailUsuario"] = "Ingrese un email";
            }
            if(empty($passUsuario)){
                $errores["passUsuario"] = "Ingrese una constraseña";
            }
        }
    }
        return $errores;
    }

    //FUNCIONANDO!!!! x2!!!
    public function validarUsuarioEmailPass($usuario){
        $errores = [];
        $arrayUsuario = [
            "passUsuario" =>$usuario->getPassUsuario(),
            "emailUsuario" =>$usuario->getEmailUsuario()
        ];

        //Trae de queries el usuario y si es null es porque el mail ingresado no esta en la base de datos
        $passIntroducida = $arrayUsuario["passUsuario"];
        $passHasheada = Query::buscarPass($arrayUsuario);
        

        if (Query::buscarEmail($arrayUsuario) == null) {
            $errores["emailUsuario"] = "Email invalido";

        }else{
            $usuarioEncontrado = Query::buscarEmail($arrayUsuario);
            if (!password_verify($passIntroducida,$passHasheada)) {
                    $errores["passUsuario"] = "Los datos ingresados no coinciden";
            }

            //Esto es para pasarle el usuario entero al login 
            if(empty($errores)){
                $errores["usuarioEncontrado"] = $usuarioEncontrado;
            }
        }
        return $errores;
    }

    public function validarCookiesUsuario(){

        if (isset($_SESSION["emailUsuario"])) {
            return true;
        } elseif ( isset($_COOKIE["emailUsuario"])) {
            $_SESSION["emailUsuario"] = $_COOKIE["email"];
            return true;
        } else {
            return false;
        }

    }
}