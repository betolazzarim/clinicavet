<html> 

<head>

<title>CLINICA VETERINARIA MILU</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="style.css">

<script>

function recuperar(){
	
	javascript:window.location='SAtelaRecuperar.php';	
	
}

</script>



</head>

<body>

<center>

<?php
$idconectado = 0;


session_start();	


$idconectado = isset($_SESSION["usuarioinfo"]) ? $_SESSION["usuarioinfo"] : $idconectado;

if($idconectado != 0){
	
	header('Location: SAloginsucesso.php');
	
}
	
?>


<form action="SAloginvalidacao.php" method="post" >

<input type="image" src="animais.png" style="height:	200px" alt="Imagem">
<h1> CLINICA VETERINARIA </h1>

<div class="content">

<br>

<input class="x"type="text"required placeholder="Usuario" id="TxtLogin" name="usuario"> 

<br>

<input class="x" type="password"required placeholder="Senha" id="TxtSenha" name="senha">

<br>
<input class="btcadastrar x" type="submit" value="Logar">

<br>
<input class="btrecuperar x" type="button" onclick="recuperar()" value="Recuperar senha">

<?php
//se errar a senha mostrara essa mensagem:
$erro = isset($_GET['erro'])?$_GET['erro']:'';
if ($erro == 1):
?>
<div class="alert alert-danger" role="alert">
<strong>OPS!</strong>
Seu usuário e/ou senha não estão corretos.
</div>
<?php endif; ?>	

</div>
</center>

</form>







</body>

</html>