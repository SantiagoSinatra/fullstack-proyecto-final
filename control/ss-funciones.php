<?php
session_start(); //sesion start sirve para activar una sesion que me va a permitir guardar variables de sesion para usar en el sitio web.

function ssValidarDatos($datosEntrantes, $deDondeVienenLosDatos)
{
    $errores = []; //array vacio de errores que se va a ir llenando a medida que haya errores.
    if (isset($datosEntrantes["nombreDeUsuario"])) { //se fija que la variable datosEntrantes no sea nula.

        $nombreDeUsuario = trim($datosEntrantes["nombreDeUsuario"]); //guardo en una variable el trim de datos entrantes en la posicion nombre.
        if (empty($nombreDeUsuario)) { //se fija que la variable nombre de usuario no este vacia. 
            $errores["enNombre"] = "Ingrese un nombre.";
        }
    }

    $emailDelUsuario = trim($datosEntrantes["emailDelUsuario"]);

    if (empty($emailDelUsuario)) {
        $errores["enEmail"] = "Ingrese un email.";
    } elseif (!filter_var($emailDelUsuario, FILTER_VALIDATE_EMAIL)) { //valida el email del usuario con una validacion de PHP y se fija que este bien escrito.
        $errores["enEmail"] = "El email no es valido.";
    }

    $passDelUsuario = trim($datosEntrantes["passDelUsuario"]);

    if (empty($passDelUsuario)) {
        $errores["enPass"] = "Ingrese una contraseña.";
    } elseif (strlen($passDelUsuario) < 6) {
        $errores["enPass"] = "La contraseña debe tener como minimo 6 caracteres";
    } elseif (!preg_match("#[0-9]+#", $passDelUsuario)) {
        $errores["enPass"] = "La contraseña debe tener al menos un numero";
    } elseif (!preg_match("#[A-Za-z]+#", $passDelUsuario)) {
        $errores["enPass"] = "La contraseña debe tener al menos una letra";
    }

    if (isset($datosEntrantes["rePassDelUsuario"])) {
        $rePassDelUsuario = trim($datosEntrantes["rePassDelUsuario"]);


        if (empty($rePassDelUsuario)) {
            $errores["enRePass"] = "Ingrese nuevamente la password";
        } elseif ($passDelUsuario != $rePassDelUsuario) {
            $errores["enRePass"] = "Las contraseñas no coinciden";
        }
    }


    if ($deDondeVienenLosDatos == "delRegistro") {
        if ($_FILES["avatarDelUsuario"]["error"] != 0) { //si en el espacio error del files no hay un cero hace lo de abajo.
            $errores["enAvatar"] = "Debe subir una imagen";
        }
        $imgName = $_FILES["avatarDelUsuario"]["name"]; //nombre de del archivo imagen que trae el files.
        $imgExt = pathinfo($imgName, PATHINFO_EXTENSION);
        if ($imgExt != "png" && $imgExt != "jpg") {
            $errores["enAvatar"] = "La extension debe ser png o jpg";
        }
    }
    return $errores;
}

//arma un array del usuario que se registra y despues se va a guardar en el archivo json con otra funcion. 
function armarRegistro($datosDelUsuario, $avatarDelUsuario)
{
    $perfilDeUsuario = 0;

    if ($datosDelUsuario["nombreDeUsuario"] == "Daniel Fuentes") {
        $perfilDeUsuario = 3;
    } elseif ($datosDelUsuario["nombreDeUsuario"] == "Hernan Baravalle") {
        $perfilDeUsuario = 2;
    } elseif ($datosDelUsuario["nombreDeUsuario"] == "Administrador") {
        $perfilDeUsuario = 99;
    } else {
        $perfilDeUsuario = 1;
    }

    $usuario = [
        "nombreDeUsuario" => $datosDelUsuario["nombreDeUsuario"],
        "emailDelUsuario" => $datosDelUsuario["emailDelUsuario"],
        "passDelUsuario" => password_hash($datosDelUsuario["passDelUsuario"], PASSWORD_DEFAULT),
        "avatarDelUsuario" => $avatarDelUsuario,
        "perfilDeUsuario" => $perfilDeUsuario
    ];
    return $usuario;
}

//funcion para guardar el usuario en un json.
function guardarUsuario($usuarioCreado)
{
    $userEnJson = json_encode($usuarioCreado);
    file_put_contents('ss-usuarios.json', $userEnJson . PHP_EOL, FILE_APPEND);
}

function abrirBaseDeDatos()
{
    if (file_exists("ss-usuarios.json")) { // se fija si existe el file o directory que le pasemos.
        $baseDatosEnJson = file_get_contents("ss-usuarios.json"); // devuelve el contenido de un file en forma de string.
        $baseDatosEnJson = explode(PHP_EOL, $baseDatosEnJson); // toma el string y lo convierte en un array json de varios string.
        array_pop($baseDatosEnJson); //saca el ultimo item que esta vacio por defecto.
        foreach ($baseDatosEnJson as $usuarios) {
            $baseDatosArray[] = json_decode($usuarios, true); // va decodificando los strings y devuelve un array de strings normales. 
        }
        return $baseDatosArray;
    } else {
        return null;
    }
}

function buscarSiExistePorEmail($inputEmail)
{
    $usuariosEnDB = abrirBaseDeDatos();
    if ($usuariosEnDB !== null) {
        foreach ($usuariosEnDB as $usuario) {
            if ($inputEmail == $usuario["emailDelUsuario"]) {
                return $usuario;
            }
        }
    } else {
        return null;
    }
}

//funcion para persistir lo que pone el usuario. 
function persistirInputUsuario($campoAPersistir)
{
    if (isset($_POST[$campoAPersistir])) {
        return $_POST[$campoAPersistir];
    }
}

//funcion para guardar la imagen que se submitea por files, en donde yo quiero y con el nombre que yo quiero. 
function armarAvatar($fileSubmitteada)
{
    $avatarDelUsuario = uniqid(); //genero un id unico para guardar con ese id la imagen mas adelante. 
    $imgName = $fileSubmitteada["avatarDelUsuario"]["name"]; //busco el nombre de la imagen.
    $imgExt = pathinfo($imgName, PATHINFO_EXTENSION); //extraigo la extension que viene con el nombre de la imagen. 
    $origenDeLaImagen = $fileSubmitteada["avatarDelUsuario"]["tmp_name"]; //guardo el origen de la imagen para moverla mas adelante
    $destinoParaGuardarla = dirname(__DIR__); //comienzo a armar la ruta donde quiero guardar la imagen, primero busco el directorio de la imagen. 
    $destinoParaGuardarla = $destinoParaGuardarla . "/avatares/"; // con el punto se concatenan cosas. Le concateno la carpeta donde quiero que se guarde
    $destinoParaGuardarla = $destinoParaGuardarla . $avatarDelUsuario; //le concateno el id que genere al principio. 
    $destinoParaGuardarla = $destinoParaGuardarla . "." . $imgExt; //le concateno la extension.
    move_uploaded_file($origenDeLaImagen, $destinoParaGuardarla); //muevo la imagen a la nueva ubicacion. 
    $avatarDelUsuario = $avatarDelUsuario . "." . $imgExt;
    return $avatarDelUsuario;
}

//funcion para armar las variables de sesion que me pueden ser utiles en el sitio y las cookies de recuerdame si el usuario puso para ser recordado. 
function iniciarSesionDeUsuario($usuarioLogueandose, $datosDelPost)
{
    $_SESSION["nombreDeUsuario"] = $usuarioLogueandose["nombreDeUsuario"];
    $_SESSION["emailDelUsuario"] = $usuarioLogueandose["emailDelUsuario"];
    $_SESSION["perfilDeUsuario"] = $usuarioLogueandose["perfilDeUsuario"];
    $_SESSION["avatarDelUsuario"] = $usuarioLogueandose["avatarDelUsuario"];
    if (isset($datosDelPost["recordarUsuario"])) {
        setcookie("emailDelUsuario", $datosDelPost["emailDelUsuario"], time() + 3600);
        setcookie("passDelUsuario", $datosDelPost["passDelUsuario"], time() + 3600);
    }
}

//funcion que valida la variable de sesion email para ver si el usuario se logueo y si no, valida las cookies para ver si el usuario habia querido ser recordado cuando se logueo. 
function validarCookiesDeUsuario()
{
    if (isset($_SESSION["emailDelUsuario"])) {
        return true;
    } elseif ( isset($_COOKIE["emailDelUsuario"])) {
        $_SESSION["emailDelUsuario"] = $_COOKIE["email"];
        return true;
    } else {
        return false;
    }
}
