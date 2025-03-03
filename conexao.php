<?php

$usuario = 'root';
$senha = '123456';
$database = 'usuarios loja2';
$host = 'localhost';

$mysqli = new mysqli($host, $usuario, $senha, $database);

if($mysqli->error) {
    die("Falha ao conectar ao banco de dados: " . $mysqli->error);
}


?>