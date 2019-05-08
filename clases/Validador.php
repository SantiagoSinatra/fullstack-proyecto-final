<?php
/**
 * 
 */
class Validador
{
	
	public function armarUsuario($registro){
		$usuario = [
        "nombre"=>$registro->getNombre(),
        "email"=>$registro->getEmail(),
        "password"=> Encriptar::hashPassword($registro->getPassword()),
        "perfil"=>1
    ];
    
    return $usuario;
	}

	//public function armarAvatar
}
?>