<?php

require_once("ss-helpers.php"); // archivo que sirve para tener funciones para debuggear. 
require_once("clases/Usuario.php");
require_once("clases/Validador.php");
require_once("clases/Armador.php");
require_once("clases/Database.php");
require_once("clases/DatabaseJSON.php");
require_once("clases/Encriptador.php");
require_once("clases/Sesionador.php");
require_once("clases/DatabaseMYSQL.php");
require_once("clases/Query.php");



$validador = new Validador();
$armador = new Armador();
$jsonDatabase = new DatabaseJSON("ss-usuarios.json");
$sesionador = new Sesionador();

if (PHP_OS=="WINNT") {
	$host= "localhost";
	$db="elibrary";
	$user="root";
	$password="";
	$port="3306";
	$charset="utf8mb4";
}else{
	$host= "localhost";
	$db="elibrary";
	$user="root";
	$password="";
	$port="8889";
	$charset="utf8mb4";
}

// pdo es la instancia de la base de datos
$pdo = DatabaseMYSQL::connection($host,$db,$user,$password,$port,$charset);


