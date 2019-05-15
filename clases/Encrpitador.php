<?php 
class Encriptador{
    public function encriptarPass($unaPassword){
        return password_hash($unaPassword, PASSWORD_DEFAULT);
    }
}