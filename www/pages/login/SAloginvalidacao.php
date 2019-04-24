<html>
<head>

<title> CLINICA VETERINARIA  </title>

</head>

<body>

<pre>
<?php 	


	include_once("../../includes/database.php");
	
	$usuario = $_POST["usuario"];
	$senha = $_POST["senha"];
	$conectou = 0;
	$idconectado = 0;
	
	$ArrayLogin = funcaoselect("SELECT * FROM administradores");
	
	

	
	

	
	foreach($ArrayLogin as $key => $value){
		if($value['usuario'] == $usuario & $value['senha'] == $senha){
			$idconectado = $value['id'];
			$conectou = 1;

		}
		
	}
	
	if($conectou == 1){
		
		
	session_start();	
	$usuario = isset($_SESSION["usuario"]) ? $_SESSION["usuario"] : $_POST["usuario"];
	$senha = isset($_SESSION["senha"]) ? $_SESSION["senha"] : $_POST["senha"];
	$idconectado = isset($_SESSION["usuarioinfo"]) ? $_SESSION["usuarioinfo"] : $idconectado;


	$_SESSION["usuario"] = $usuario;
	$_SESSION["senha"] = $senha;
	$_SESSION["usuarioinfo"] = $idconectado;
		

		header('Location: SAloginsucesso.php');
			
		
				
	}else{
		
		echo "Usuario ou senha não correspondem<br>";
		header('Location: ../../index.php?erro=1');
	}

?>

<pre>	
</body>
</html>
	
	
	
	
	
	
	
	