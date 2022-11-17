<?php

$usuario = 'edu';
$senha = '123456';
$database = 'apple';
$host = 'localhost';



$mysqli = new mysqli($host, $usuario, $senha, $database);


if ($mysqli->error){
    die ("Falha ao conectar " . $mysqli->error);
}


?>