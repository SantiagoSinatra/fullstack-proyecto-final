<?php
class DatabaseJSON extends Database {
    private $nombreArchivo;

    public function __construct($nombreArchivo){
        $this->nombreArchivo = $nombreArchivo; //nombre de la base de datos JSON.
    }

    public function getNombreArchivo(){
        return $this->nombreArchivo;
    }

    public function setNombreArchivo($nombreArchivo){
        $this->nombreArchivo = $nombreArchivo;
    }

    public function guardarUsuario($arrayUsuario){ //codifica el array que le llega a json
        $usuarioJson = json_encode($arrayUsuario);
        file_put_contents($this->nombreArchivo, $usuarioJson . PHP_EOL, FILE_APPEND);
    }

    public function leer(){}

    static public function abrirBaseDeDatos(){
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

    public function borrar(){}
    public function actualizar(){}
}