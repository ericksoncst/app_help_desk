<?php 

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
	} else {
		header('Location: index.php?login=erro');
	}

?>