<?php
    class Usuario{
        private $nombreDeUsuario;
        private $emailDelUsuario;
        private $passDelUsuario;
        private $rePassDelUsuario;
        private $avatarDelUsuario;
        private $perfilDelUsuario;

        //constructor de Usuario.
        public function __construct($nombreDeUsuario=null, $emailDeUsuario, $passDelUsuario=null, $rePassDelUsuario=null, $avatarDelUsuario=null, $perfilDelUsuario=null){
            $this->nombreDeUsuario = $nombreDeUsuario;
            $this->emailDeUsuario = $emailDeUsuario;
            $this->passDelUsuario = $nombreDeUsuario;
            $this->rePassDelUsuario = $rePassDelUsuario;
            $this->avatarDelUsuario = $avatarDelUsuario;
            $this->perfilDelUsuario = $perfilDelUsuario;
        }

        //getters del Usuario.
        public function getNombreDeUsuario(){
            return $this->nombreDeUsuario;
        }

        public function getEmailDeUsuario(){
            return $this->emailDeUsuario;
        }

        public function getPassDelUsuario(){
            return $this->passDelUsuario;
        }

        public function getAvatarDelUsuario(){
            return $this->avatarDelUsuario;
        }

        public function getPerfilDelUsuario(){
            return $this->perfilDelUsuario;
        }

        public function setEmailDeUsuario($unEmail){
            $this->emailDeUsuario = $unEmail;
        }

        public function setPassDelUsuario($unaPass){
            $this->passDelUsuario = $unaPass;
        }

        public function setPerfilDelUsuario($unValorNumerico){
            $this->perfilDelUsuario = $unValorNumerico;
        }

        //faltaria un set para el avatar del usuario. 

}