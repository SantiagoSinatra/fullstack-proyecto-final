<?php

class Usuario{

    //Atributos de Usuario

    private $nombreUsuario;
    private $emailUsuario;
    private $passUsuario;
    private $rePassUsuario;
    private $avatarUsuario;
    private $perfilUsuario;
    
    //Metodos de Usuario

    //Constructor de Usuario
    public function __construct($nombreUsuario=null, $emailUsuario, $passUsuario, $rePassUsuario=null, $avatarUsuario=null, $perfilUsuario=null){
        $this->nombreUsuario = $nombreUsuario;
        $this->emailUsuario = $emailUsuario;
        $this->passUsuario = $passUsuario;
        $this->rePassUsuario = $rePassUsuario;
        $this->avatarUsuario = $avatarUsuario;
        $this->perfilUsuario = $perfilUsuario;
    }

    //Getters de Usuario
    public function getNombreUsuario(){
        return $this->nombreUsuario;
    }
    public function getEmailUsuario(){
        return $this->emailUsuario;
    }
    public function getPassUsuario(){
        return $this->passUsuario;
    }
    public function getRePassUsuario(){
        return $this->rePassUsuario;
    }
    public function getAvatarUsuario(){
        return $this->avatarUsuario;
    }
    public function getPerfilUsuario(){
        return $this->perfilUsuario;
    }

    //Setters de Usuario
    public function setNombreUsuario($unNombreUsuario){
        $this->nombreUsuario = $unNombreUsuario;
    }
    public function setEmailUsuario($unEmailUsuario){
        $this->emailUsuario = $unEmailUsuario;
    }
    public function setPassUsuario($unPassUsuario){
        $this->passUsuario = $unPassUsuario;
    }
    public function setAvatarUsuario($unAvatarUsuario){
        $this->avatarUsuario = $unAvatarUsuario;
    }
    public function setPerfilUsuario($unPerfilUsuario){
        $this->perfilUsuario = $unPerfilUsuario;
    }
}

?> 