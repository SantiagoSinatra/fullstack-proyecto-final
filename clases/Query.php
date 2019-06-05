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

    public static function buscarDatosUsuario($datoABuscar){
    	global $pdo;
    	$emailUsuario = $datoABuscar["email"];
		$consulta = $pdo->prepare("select * from user where email like :email");
		$consulta->bindValue(":email","%".$emailUsuario."%");
		try {
			$consulta->execute();
			$datosUsuario = $consulta->fetch(PDO::FETCH_ASSOC);
		} catch (Exception $e) {
			var_dump($e->getMessage()); 
			echo "Hubo un error al buscar el dato"; 
			exit;
		}
		return $datosUsuario;
	}
    

    public static function buscarEmail($datoABuscar){
		global $pdo;
		$emailUsuario = $datoABuscar["emailUsuario"];
		$consulta = $pdo->prepare("select email from user where email like :email");
		$consulta->bindValue(":email","%".$emailUsuario."%");
		try {
			$consulta->execute();
			$emailEncontrado = $consulta->fetch(PDO::FETCH_ASSOC);
		} catch (Exception $e) {
			var_dump($e->getMessage()); 
			echo "Hubo un error al buscar el dato"; 
			exit;
		}
		return $emailEncontrado;
	}

	public static function buscarPass($datoABuscar){
	global $pdo;
		$emailUsuario = $datoABuscar["emailUsuario"];
		$consulta = $pdo->prepare("select password from user where email like :email ");
		$consulta->bindValue(":email","%".$emailUsuario."%");
		try {
			$consulta ->execute();
			$passEncontrada = $consulta->fetch(PDO::FETCH_ASSOC);
		}catch (Exception $e){
			var_dump($e->getMessage());
			echo "Hubo un error al buscar los datos"; 
			exit;
		}
    
		return $passEncontrada["password"];
	}



}

?>