<?php 
/**
 * 
 */
class DatabaseMYSQL extends Database
{
	
	static public function connection($host,$db_name,$user,$password,$port,$charset){
        try {
            $dsn = "mysql:host=".$host.";"."dbname=".$db_name.";"."port=".$port.";"."charset=".$charset;
            $baseDatos = new PDO($dsn,$user,$password);
            $baseDatos->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            return $baseDatos;
        } catch (PDOException $errores) {
            echo "No me pude conectar a la BD ". $errores->getmessage();
            exit;
        }
    }

    public function guardarUsuario(array $datoAGuardar){

    }

    public function leer(){

    }

    public function borrar(){

    }

    public function actualizar(){

    }

}

?>