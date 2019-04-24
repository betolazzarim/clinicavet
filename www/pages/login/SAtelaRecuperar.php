<html> 

<head>

<title>CLINICA VETERINARIA MILU</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<link rel="stylesheet" type="text/css" href="style.css">

<script>

function recuperar(){
	
	javascript:window.location='SArecuperar.php';	
	
}

</script>



</head>

<body>

<center>


<form action=".php" method="post" >

<input type="image" src="animais.png" style="height:	200px" alt="Imagem">
<h1> RECUPERE SUA SENHA </h1>

<div class="content">

<br>

<input class="x"type="text"required placeholder="Insira seu usuario" id="TxtLogin" name="usuario"> 

<br>

<input class="x" type="email"required placeholder="Insira seu e-mail" id="TxtEmail" name="senha">

<br>
<input class="btcadastrar x" type="submit" value="Alterar sua senha">

<br>
<input class="btrecuperar x" type="button" onclick="recuperar()" value="Retornar ao menu inicial">

</div>
</center>

</form>


</body>

</html>