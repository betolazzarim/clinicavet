<pre>
<?php



	$nomevet = $_POST["nomevet"];
	$emailvet = $_POST["email"];
	$crmv = $_POST["crmv"];
	$celvet = $_POST["celular"];

	
	
	
	
	$connect = mysqli_connect ("localhost", "root", "root", "bancoclinicavet");
	$dados = mysqli_query ($connect, "INSERT INTO veterinarios VALUES(NULL, '{$nomevet}', '{$emailvet}', '{$crmv}', '{$celvet}')");
	$inserir = mysqli_affected_rows($connect);
	
	mysqli_close($connect);






?>
</pre>