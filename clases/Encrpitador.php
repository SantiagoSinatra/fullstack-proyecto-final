<?php 
class Encriptar{
    public function encriptarPass($unaPassword){
        return password_hash($unaPassword, PASSWORD_DEFAULT);
    }
}