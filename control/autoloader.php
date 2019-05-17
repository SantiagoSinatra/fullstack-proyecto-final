<?php
require_once("ss-helpers.php"); // archivo que sirve para tener funciones para debuggear. 
require_once("clases/Usuario.php");
require_once("clases/Validador.php");
require_once("clases/Armador.php");
require_once("clases/Database.php");
require_once("clases/DatabaseJSON.php");
require_once("clases/Encriptador.php");
require_once("clases/Sesionador.php");

$validador = new Validador();
$armador = new Armador();
$jsonDatabase = new DatabaseJSON("ss-usuarios.json");
$sesionador = new Sesionador();