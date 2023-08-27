<?php
require_once "conexion.php";
$nombre = filter_input(INPUT_POST,'nombre');
$password = filter_input(INPUT_POST,'password');

$sqlt ="INSERT INTO usuario (nombre,password) VALUES ('$nombre','$password');";
$stmt = Conexion::conectar()->prepare($sqlt);
$stmt -> execute();