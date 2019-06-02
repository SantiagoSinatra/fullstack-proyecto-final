<?php
class Armador{

    public function armarUsuario($usuarioValidado){

        $perfilUsuario = 0;

        if ($usuarioValidado->getNombreUsuario() == "Daniel Fuentes") {
            $perfilUsuario = 3;
        } elseif ($usuarioValidado->getNombreUsuario() == "Hernan Baravalle") {
            $perfilUsuario = 2;
        } elseif ($usuarioValidado->getNombreUsuario() == "Administrador") {
            $perfilUsuario = 99;
        } else {
            $perfilUsuario = 1;
        }

        $arrayUsuario = [
            "nombreUsuario" => $usuarioValidado->getNombreUsuario(),
            "emailUsuario" => $usuarioValidado->getEmailUsuario(),
            "passUsuario" => Encriptador::encriptarPass($usuarioValidado->getPassUsuario()),
            "avatarUsuario" => $usuarioValidado->getAvatarUsuario(),
            "perfilUsuario" => $perfilUsuario
        ];

        return $arrayUsuario;
    }

    public function armarAvatar($avatarUsuario){
        $idUsuario = uniqid();
        $imgName = $avatarUsuario["name"]; //busca en el $FILES el nombre de la imagen.
        $imgExt = pathinfo($imgName, PATHINFO_EXTENSION); //busca la extension
        $origenImagen = $avatarUsuario["tmp_name"]; //guardo el origen de la imagen en una variable
        $destinoParaGuardar = dirname(__DIR__); //armo la ruta donde voy a guardar la imagen
        $destinoParaGuardar = $destinoParaGuardar . "/avatares/";
        $destinoParaGuardar = $destinoParaGuardar . $idUsuario;
        $destinoParaGuardar = $destinoParaGuardar . "." . $imgExt;
        move_uploaded_file($origenImagen, $destinoParaGuardar); //muevo la imagen a la ruta deseada
        $avatarUsuario = $idUsuario . "." . $imgExt; //le pongo el nombre y le concateno la extension
        return $avatarUsuario;

    }
}
