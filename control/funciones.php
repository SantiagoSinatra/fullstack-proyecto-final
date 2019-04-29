<?php
function dd($valor){
    echo "<pre>";
        var_dump($valor);
        exit;
    echo "</pre>";
}

function validar($datos){
    $errores = [];
    
    $nombre = trim($datos["nombre"]);
    if (empty($nombre)){
        $errores["nombre"]="Complete su nombre";
    }
    $email = trim($datos["email"]);
    $emailExistente = buscarEmail($email);
    if(empty($email)){
        $errores["email"]="Complete su email";
    }elseif (!filter_var($email,    FILTER_VALIDATE_EMAIL)){
        $errores["email"]="Email  inválido";
    }elseif (count($emailExistente)!= 0) {
        $errores["email"]="Este email ya existe";
    }
    $password = trim($datos["password"]);
    $repassword = trim($datos["repassword"]);
    if(empty($password)){
        $errores["password"] = "Introduzca su contraseña";
    }elseif (strlen($password)<6) {
        $errores["password"] = "La contraseña debe tener mínimo seis caracteres";
    }elseif ($password != $repassword) {
        $errores["repassword"]= "No coinciden las contraseñas";
    }
    if(isset($_FILES)){
        if($_FILES["avatar"]["error"] !=UPLOAD_ERR_OK){
            $errores["avatar"]="Seleccione una foto";
        }
        $nombre = $_FILES["avatar"]["name"];
        $ext = pathinfo($nombre,PATHINFO_EXTENSION);
        if($ext != "jpg" && $ext != "png" && $ext != "jpeg" && $ext != "PNG" && $ext != "JPEG" && $ext != "JPG"){
            $errores["avatar"]="Seleccione un foto";
        }
    }

return $errores;
}

function persistir($campo){
    if(isset($_POST[$campo])){
        return $_POST[$campo];
    }
}
function crearAvatar($imagen){
    $nombre = $imagen["avatar"]["name"];
    $ext = pathinfo($nombre,PATHINFO_EXTENSION);
    $archivoOrigen = $imagen["avatar"]["tmp_name"];
    $archivoDestino = dirname(__DIR__);
    $archivoDestino = $archivoDestino."/img/";
    $archivoDestino = $archivoDestino.uniqid().".".$ext;
    move_uploaded_file($archivoOrigen,$archivoDestino);
    return $archivoDestino;
}


function crearRegistro($datos,$imagen){
    $usuario = [
        "nombre"=>$datos["nombre"],
        "email"=>$datos["email"],
        "password"=> password_hash($datos["password"],PASSWORD_DEFAULT),
        "avatar"=>$imagen
    ];
    return $usuario;
}

function guardar($usuario){
    $jsusuario = json_encode($usuario);
    file_put_contents("usuarios.json", $jsusuario . PHP_EOL ,FILE_APPEND);
}

function buscarEmail($email){

    $usuarios = abrirBaseDatos();
    
    foreach ($usuarios as  $usuario) {
        if($email === $usuario["email"]){
            $emailRepetido = "1";
        }
    }
    return $emailRepetido;
}


function abrirBaseDatos(){
    $baseDatosJson= file_get_contents("usuarios.json");
    $baseDatosJson = explode(PHP_EOL,$baseDatosJson);
    array_pop($baseDatosJson);
    foreach ($baseDatosJson as  $usuarios) {
        $arrayUsuarios[]= json_decode($usuarios,true);
    }
    return $arrayUsuarios;
}