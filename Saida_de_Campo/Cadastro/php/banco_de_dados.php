<?php

$servidor = "localhost";
$usuario = "root";
$senha = "";
$bd = "cadastro";

$conexao = mysql_connect($servidor, $usuario, $senha, $bd);

if ($conexao->connect_error){
	echo "Falha na conexão";
}

?>