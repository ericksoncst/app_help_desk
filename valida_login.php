<?php 

	session_start();


	$usuario_autenticado = false;

	$usuarios_app = array(
		array('email' => 'adm@teste.com.br', 'senha' => '123456'),
		array('email' => 'user@teste.com.br', 'senha' => '123456')
	);

	// echo '<pre>';
	// print_r($usuarios_app);
	// echo '<pre>';

	foreach ($usuarios_app as $user) {
		
		if ($user['email'] == $_POST['email'] && $user['senha'] == $_POST['senha']) {
			$usuario_autenticado = true;
		} 
	}

	if ($usuario_autenticado) {
		echo 'Usuário autenticado com sucesso!';
		$_SESSION['autenticado'] = 'SIM';
		$_SESSION['valor1'] = 'X';
		$_SESSION['valor3'] = 'Y';
		header('Location: home.php');
	} else {
		$_SESSION['autenticado'] = 'NAO';
		header('Location: index.php?login=erro');
	}

?>