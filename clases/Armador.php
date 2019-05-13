<?php
class Armador{

    public function armarUsuario($usuarioValidado)
    
    {
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
}
