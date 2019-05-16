<html>
<head>
<link rel="stylesheet" type="text/css" href="../../assets/css/csstelaprincipal.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">


<script defer src="https://code.getmdl.io/1.3.0/material.min.js">


function cancela(){
	

	
	
	
}



</script>



</head>
<body>



<div class="mdl-layout mdl-js-layout mdl-layout--fixed-drawer
            mdl-layout--fixed-header" style="overflow: hidden;">
			
  <header class="mdl-layout__header1">
    <div class="mdl-layout__header-row">
      <div class="mdl-layout-spacer"></div>
	  <span class="mensagem" >Olá Amanda!</span>
	  <a href="perfil" class="perfil" >Perfil</a>
	  <a href="logoff" class="logoff" >Logoff</a>
	  
	  
	  
	  
      <div class="mdl-textfield mdl-js-textfield mdl-textfield--expandable
                  mdl-textfield--floating-label mdl-textfield--align-right">
        <label class="mdl-button mdl-js-button mdl-button--icon"
               for="fixed-header-drawer-exp">
          <i class="material-icons">search</i>
		  
        </label>
        <div class="mdl-textfield__expandable-holder">
          <input class="mdl-textfield__input" type="text" name="sample"
                 id="fixed-header-drawer-exp">
        </div>
      </div>
    </div>
	
  </header>
  <div class="mdl-layout__drawer" style="margin-top: 64px;">
    <span class="mdl-layout-title">Clinica Veterinaria</span>
    <nav class="mdl-navigation">
	  <a class="mdl-navigation__link" href="">Início</a>
      <a class="mdl-navigation__link" href="">Cadastro de Clientes</a>
      <a class="mdl-navigation__link" href="">Cadastro de Animais</a>
      <a class="mdl-navigation__link" href="">Consultas</a>
      <a class="mdl-navigation__link" href="">Prontuario</a>
    </nav>
  </div>
	
	<main class="mdl-layout__content">
	<div class="">
	
	<div class = "mdl-grid">
    <div class = "mdl-cell mdl-cell--6-col graybox">
			   
 
<form action="cadastroanimalbanco.php" method="post">


<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
<input class="mdl-textfield__input" type="number" name="codigocliente" required 	id="sample3">
<label class="mdl-textfield__label" for="sample3">Código do cliente</label>
</div>


  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
    <input class="mdl-textfield__input" name="nomeanimal" required  type="text" id="sample3">
    <label class="mdl-textfield__label" for="sample3">Nome do animal</label>
  </div><br>
  SEXO:<br>	
<input type="radio" name="sexoanimal" required value="M">Macho<br>
<input type="radio" name="sexoanimal" required value="F">Fêmea<br>

  <br>
  Nascimento<br>
  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
    <input class="mdl-textfield__input" name="nascimentoanimal" required type="date" id="sample3">
    <label class="mdl-textfield__label" for="sample3"></label>
  </div>
  

   
   </div>
	
			   <div class = "mdl-cell mdl-cell--6-col graybox">
			   


    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
    <input class="mdl-textfield__input" name="raca" required type="text"  id="sample3">
    <label class="mdl-textfield__label" for="sample3">Raça</label>
  </div>
	<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
	<input class="mdl-textfield__input" name="peso" required type="number"  id="sample5" >
	<label class="mdl-textfield__label" for="sample5">Peso</label>

	</div>
			   
			   <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
					<input class="mdl-textfield__input" name="especie" required type="number"  id="sample3">
					<label class="mdl-textfield__label" for="sample3">Especie</label>
					</div>
				<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
				<textarea class="mdl-textfield__input" type="text" name="observacao" id="sample5" ></textarea>
				<label class="mdl-textfield__label" for="sample5">Observacoes</label>
						 
				</div><br>	   

<br>
<br>					
					
  
				
					
			   <input type="submit" value="Salvar" class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored">
  
		<input type="button" value="Cancelar" onclick="cancela()" class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored">

<?php
//se errar a senha mostrara essa mensagem:
$certo = isset($_GET['certo'])?$_GET['certo']:'';
if ($certo>0):

echo '<script language="javascript">';
echo 'alert("Cadastro realizado com sucesso")';
echo '</script>';
?>

<?php endif; ?>	  
  </div>
    

  
 
</div>
	
</form>
  </main>

	
</body>
</html>