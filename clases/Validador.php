<?php
/**
 * 
 */
class Validador
{
	
public function validacionUsuario($usuario,$repassword){
	$errores=[];
	$nombre = trim($usuario->getNombreDeUsuario());
	
    if(isset($nombre)){
        if(empty($nombre)){
            $errores["nombreDeUsuario"]= "El campo nombre no debe estar vacio";
        }
    }

    $email = trim($usuario->getEmailDelUsuario());
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $errores["emailDelUsuario"]="Email invalido";
    }
    $password= trim($usuario->getPassDelUsuario());
    if(isset($repassword)){
        $repassword= trim($repassword);
    }
    
    if(empty($password)){
        $errores["passDelUsuario"]= "Escribe una contraseña";
    }elseif (strlen($password)<6) {
        $errores["passDelUsuario"]="La contraseña debe tener como mínimo 6 caracteres";
    }
    if(isset($repassword)){
        if ($password != $repassword) {
            $errores["repassword"]="Las contraseñas no coinciden";
        }
    }
    
   

    return $errores;
	}
}
}
?>