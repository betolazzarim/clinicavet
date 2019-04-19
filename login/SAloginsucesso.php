<html>
<head>

<title> CLINICA VETERINARIA </title>

</head>

<body>

<pre>
<?php 	

session_start();	
$usuario = isset($_SESSION["usuario"]) ? $_SESSION["usuario"] : $_POST["usuario"];
$senha = isset($_SESSION["senha"]) ? $_SESSION["senha"] : $_POST["senha"];
$idconectado = isset($_SESSION["usuarioinfo"]) ? $_SESSION["usuarioinfo"] : $idconectado;


$_SESSION["usuario"] = $usuario;
$_SESSION["senha"] = $senha;
$_SESSION["usuarioinfo"] = $idconectado;
echo "oi";
echo $usuario;
echo $senha;
echo $idconectado;


echo '<a href="SAlogout.php">Sair</a>';


?>
<pre>
</body>
</html>
	
	
	
	
	
	
	
	