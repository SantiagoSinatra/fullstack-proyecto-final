<?php

/**
 * NO FUNCIONA PORQUE NO LO ENVIAMOS EN REGISTRO.PHP
 */
class Query{
		

		public static function insertarEnDB($datoAGuardar){
		global $pdo;

    	$consulta = $pdo->prepare("insert INTO user(name_user,email,password,pic_user,perfil) 
		 VALUES(:name,:email,:pass,:pic,:perfil)");
		$consulta->bindValue(":name", $datoAGuardar["nombreUsuario"]); 
		$consulta->bindValue(":email", $datoAGuardar["emailUsuario"]);
		$consulta->bindValue(":pass", $datoAGuardar["passUsuario"]);
		$consulta->bindValue(":pic", $datoAGuardar["avatarUsuario"]);
		$consulta->bindValue(":perfil", $datoAGuardar["perfilUsuario"]);

		try {
		$consulta ->execute();	
		} catch (Exception $e) {
			var_dump($e->getMessage()); /*para que el desarrollador vea q error. sii php*/
			echo "Hubo un error al insertar el dato"; exit;
		}
    }

}

?>