<?php
require_once("ss-helpers.php");
require_once ("clases/Usuario.php");
require_once("clases/Validador.php");
require_once("clases/ArmarRegistro.php");
require_once("clases/BaseDatos.php");
require_once("clases/BaseJSON.php");
require_once("clases/Encriptador.php");

$validar = new Validador();
$registro = new ArmarRegistro();
$json = new BaseJSON("usuarios.json");

?>