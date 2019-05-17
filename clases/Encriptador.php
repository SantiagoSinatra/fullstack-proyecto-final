<?php
class Encriptador{
    static public function encriptarPass($password){ //esta en static porque sino hay que instanciar la clase.
        return password_hash($password, PASSWORD_DEFAULT);
    }
}