<pre>
<?php



	$nomeanimal = $_POST["nomeanimal"];
	$raca = $_POST["raca"];
	$nascimentoanimal = $_POST["nascimentoanimal"];
	$peso = $_POST["peso"];
	$sexoanimal = $_POST["sexoanimal"];
	$observacao = $_POST["observacao"];
	$codigocliente = $_POST["codigocliente"];
	$especie = $_POST["especie"];
	
	
	
	
	$connect = mysqli_connect ("localhost", "root", "root", "bancoclinicavet");
	$dados = mysqli_query ($connect, "INSERT INTO animais VALUES(NULL, '{$raca}', '{$nascimentoanimal}', '{$nomeanimal}', '{$peso}', '{$sexoanimal}', '{$observacao}', '{$codigocliente}', '{$especie}')");
	$inserir = mysqli_affected_rows($connect);
	
	mysqli_close($connect);






?>
</pre>