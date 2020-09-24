<?php
	$login = "mariana";
	$senha = "123";

	if(isset($_POST["enviar"])){
		if($_POST["login"] == $login && $_POST["senha"] == $senha){
			echo "Login efetuado com sucesso";
		}
		else{
			echo "Login ou senha inválido";
		}
	}

?>
