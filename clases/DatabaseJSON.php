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
    public function borrar(){}
    public function actualizar(){}
}