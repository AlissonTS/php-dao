<?php

	require_once("config.php");

	/* Retorna um usuário
	$usuario = new Usuario();
	$usuario->loadById(1);
	echo $usuario; */

	/* Carrega a lista de usuários
	$lista = Usuario::getList();
	echo json_encode($lista); */

	/* Carrega uma lista de usuários buscando pelo login
	$search = Usuario::search("root");
	echo json_encode($search); */

	/* Carrega um usuário usando um login e a senha
	$usuario = new Usuario();
	$usuario->login("root", "123");
	echo $usuario; */

	/* Criando novo usuário
	$aluno = new Usuario("aluno2", "aluno2Senha");
	$aluno->insert();
	echo $aluno; */

	$usuario = new Usuario();

	$usuario->loadById(6);

	$usuario->update("Professor", "123");

	echo $usuario;
?>