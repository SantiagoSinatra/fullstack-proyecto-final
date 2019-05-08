<?php

class BaseJSON extends BaseDatos{
    private $nombreArchivo;

    public function __construct($nombreArchivo){
        $this->nombreArchivo = $nombreArchivo;
    }

    public function getNombreArchivo(){
        return $this->nombreArchivo;
    }

    public function setNombreArchivo($nombreArchivo){
        $this->nombreArchivo = $nombreArchivo;
    }

    public function guardar($registro){
        $jsusuario = json_encode($registro);
        file_put_contents($this->nombreArchivo ,$jsusuario. PHP_EOL, FILE_APPEND);
    }

    public function leer(){
        function abrirBaseDeDatos(){
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
    }

    public function actualizar(){
        function armarRegistroOlvide($datos){
            $usuarios = abrirBaseDatos();
            
            foreach ($usuarios as $key=>$usuario) {
                
                if($datos["email"]==$usuario["email"]){
                    //Esta línea se las comente para que a futuro puedan probar si la clave nueva la van a grabar coorectamente, la idea es verla antes de hashearla.
                    //$usuario["password"]= $datos["password"];
                    $usuario["password"]= password_hash($datos["password"],PASSWORD_DEFAULT);
                    $usuarios[$key] = $usuario;    
                }
                $usuarios[$key] = $usuario;    
        }    }
            
    }

    public function borrar(){
        function borrarRegistro($datos){
            $usuarios = abrirBaseDeDatos();
                
            //Esto se los coloque para que sepan que con esta función podemos borrar un archivo
            unlink("ss-usuarios.json");
            foreach ($usuarios as  $usuario) {
                $jsusuario = json_encode($usuario);
                file_put_contents('ss-usuarios.json',$jsusuario. PHP_EOL,FILE_APPEND);
            }
         
        }
    }
    
}






?>