<?php
session_start(); //sesion start sirve para activar una sesion que me va a permitir guardar variables de sesion para usar en el sitio web.

function ssValidarDatos($datosEntrantes, $deDondeVienenLosDatos){
    $errores=[]; //array vacio de errores que se va a ir llenando a medida que haya errores.
    if(isset($datosEntrantes["nombreDeUsuario"])){ //se fija que la variable datosEntrantes no sea nula.

        $nombreDeUsuario = trim($datosEntrantes["nombreDeUsuario"]); //guardo en una variable el trim de datos entrantes en la posicion nombre.
        if(empty($nombreDeUsuario)){ //se fija que la variable nombre de usuario no este vacia. 
            $errores["enNombre"]= "Ingrese un nombre.";
        }
    }

    $emailDelUsuario = trim($datosEntrantes["emailDelUsuario"]);
    
    if(empty($emailDelUsuario)){
        $errores["enEmail"]="Ingrese un email.";

    }elseif(!filter_var($emailDelUsuario, FILTER_VALIDATE_EMAIL)){ //valida el email del usuario con una validacion de PHP y se fija que este bien escrito.
        $errores["enEmail"]="El email no es valido.";
    }
    
    $passDelUsuario = trim($datosEntrantes["passDelUsuario"]);

    if(empty($passDelUsuario)){
        $errores["enPass"]="Ingrese una contraseña.";

    }elseif(strlen($passDelUsuario)<6){
        $errores["enPass"]="La contraseña debe tener como minimo 6 caracteres";

    }elseif(!preg_match("#[0-9]+#",$passDelUsuario)){
        $errores["enPass"]="La contraseña debe tener al menos un numero";
    }

    $rePassDelUsuario = trim($datosEntrantes["rePassDelUsuario"]);

    if(empty($rePassDelUsuario)){
        $errores["enRePass"]="Ingrese nuevamente la password";
    } elseif($passDelUsuario != $rePassDelUsuario){
        $errores["enRePass"]="Las contraseñas no coinciden";
    }

    if ($deDondeVienenLosDatos == "delRegistro"){
        if($_FILES["avatarDelUsuario"]["error"]!=0){ //si en el espacio error del files no hay un cero hace lo de abajo.
            $errores["enAvatar"]="Debe subir una imagen";
        }
        $imgName = $_FILES["avatarDelUsuario"]["name"]; //nombre de del archivo imagen que trae el files.
        $imgExt = pathinfo($imgName, PATHINFO_EXTENSION);
        if($imgExt != "png" && $imgExt != "jpg"){
            $errores["enAvatar"]="La extension debe ser png o jpg";
        }
    }
    return $errores;
}

//funcion para persistir lo que pone el usuario. 
function persistirInputUsuario($campoAPersistir){
    if(isset($_POST[$campoAPersistir])){
        return $_POST[$campoAPersistir];
    }
}