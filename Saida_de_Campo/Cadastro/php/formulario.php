<?php

include_once("banco_de_dados.php"); 

	$nome = filter_input (INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
	$sexo = filter_input (INPUT_POST, 'sexo', FILTER_SANITIZE_STRING);
	$nascimento = filter_input (INPUT_POST, 'nascimento', FILTER_SANITIZE_STRING);
	$email = filter_input (INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
	$telefone = filter_input (INPUT_POST, 'telefone', FILTER_SANITIZE_STRING);
	$senha = filter_input (INPUT_POST, 'senha', FILTER_SANITIZE_STRING);
	
	$valores = "INSERT INTO informacoes (nome, sexo, nascimento, email, telefone, senha)
				VALUES ('$nome', '$sexo', '$nascimento', '$email', '$telefone', '$senha')";
	$resultado = mysqli_query ($conexao, $valores);
	
	if (mysqli_insert_id($conexao)){
		header("Location: ../../Cadastro.html");
	}else{
		header("Location: ../../Cadastro.html");
	}
	
?>