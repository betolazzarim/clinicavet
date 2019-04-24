<pre>
<?php

function funcaodelete($pScript){
	
	
$con = mysqli_connect("localhost", "root", "root", "bancoclinicavet");

$dados = mysqli_query($con, $pScript) or die(mysqli_error($con));
	
$deletou = mysqli_affected_rows($con);

mysqli_close($con);

return $deletou;

//funcaodelete("DELETE FROM orcamento WHERE nome = '{$nome}'");
}


function funcaoselect($pScript){

$con = mysqli_connect("localhost", "root", "root", "bancoclinicavet");	
$arrOrc = array();

$dados = mysqli_query($con, $pScript) or die(mysqli_error($con));

while($linha = mysqli_fetch_array($dados, MYSQLI_ASSOC)){
	array_push($arrOrc,$linha);
	
}	
	return $arrOrc;
}	
	
// retorno deve ser array


function funcaoupdate($pScript){
	
	
$con = mysqli_connect("localhost", "root", "root", "bancoclinicavet");
$dado = mysqli_query ($con, $pScript) or die (mysqli_error($con));
$update = mysqli_affected_rows($con);
mysqli_close ($con);
	
return $update;
	
	
}//retorno deve ser quantas linhas foram afetadas


function funcaoinsert($pScript){
	
	$con = mysqli_connect ("localhost", "root", "root", "bancoclinicavet");
	$dado = mysqli_query ($con, $pScript) or die (mysqli_error($con));
	$insert = mysqli_affected_rows($con);
	mysqli_close ($con);
	
	return $insert;
	
	
}

?>
</pre>