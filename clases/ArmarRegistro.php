<?php
/**
 * 
 */
class ArmarRegistro
{
	
		public function armarUsuario($registro){
		$usuario = [
        "nombreDeUsuario"=>$registro->getNombre(),
        "emailDelUsuario"=>$registro->getEmail(),
        "passDelUsuario"=> Encriptador::hashPassword($registro->getPassword()),
        "perfilDelUsuario"=>1
    ];
    
    return $usuario;
	}
}
?>