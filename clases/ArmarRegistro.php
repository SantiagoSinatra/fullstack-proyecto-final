<?php
/**
 * 
 */
class ArmarRegistro
{
	
		public function armarUsuario($registro){
		$usuario = [
        "nombreDeUsuario"=>$registro->getNombreDeUsuario(),
        "emailDelUsuario"=>$registro->getEmailDelUsuario(),
        "passDelUsuario"=> Encriptador::encriptarPass($registro->getPassDelUsuario()),
        "perfilDelUsuario"=>1
    ];
    
    return $usuario;
	}
	// public function armarAvatar
}
?>