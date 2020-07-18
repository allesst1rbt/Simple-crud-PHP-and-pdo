<?php

	require "conectar.php";
	require "services.php";
	require "model.php";
	$acao = isset($_GET['acao']) ? $_GET['acao'] : $acao;

	if($acao =='cadastrar') {
        $user = new User();
        $user->__set('nome', $_POST['nome']);
        $user->__set('email', $_POST['email']);
        $user->__set('telefone', $_POST['telefone']);
        $user->__set('objetivo', $_POST['objetivo']);
        $user->__set('descricao', $_POST['descricao']);
		$conexao = new Conexao();
        $Userservice = new UserService($conexao, $user);
		$Userservice->cadastro();
	header('Location: index.php?cadastro=1');
    }
    elseif($acao == 'recuperar'){
		$user = new User();
		$conexao = new Conexao();
		$Userservice = new UserService($conexao, $user);
        $Users = $Userservice->recuperar();
        
    }
	elseif ($acao == 'remover') {
		$user = new User();
		$user->__set('email',$_GET['email']);

		$conexao = new Conexao();
        $Userservice = new UserService($conexao, $user);
		$Userservice->remover();
		header('Location: configs.php');
	}
?>