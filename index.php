<?PHP
require_once "UsuarioNerd.php";



		$usuario = new UsuarioNerd();
			$usuario ->setNome("william");
			$usuario ->setSenha("");
				echo $usuario->login();
		$usuario= new UsuarioNerd();
		
		


?>