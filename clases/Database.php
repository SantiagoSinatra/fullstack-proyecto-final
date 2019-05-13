<?php
abstract class Database{
    abstract public function guardarUsuario(array $datoAGuardar);
    abstract public function leer();
    abstract public function borrar();
    abstract public function actualizar();
}