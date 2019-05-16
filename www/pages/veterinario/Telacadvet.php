<html>
<head>
<link rel="stylesheet" type="text/css" href="../../assets/css/csstelaprincipal.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
<script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>

<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

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
  <div class="mdl-layout__drawer" style="    margin-top: 64px;">
    <span class="mdl-layout-title">Clinica Veterinaria</span>
    <nav class="mdl-navigation">
	  <a class="mdl-navigation__link" href="">Início</a>
      <a class="mdl-navigation__link" href="">Cadastro de Clientes</a>
      <a class="mdl-navigation__link" href="">Cadastro de Animais</a>
      <a class="mdl-navigation__link" href="">Consultas</a>
      <a class="mdl-navigation__link" href="">Prontuário</a>
    </nav>
  </div>

	<main class="mdl-layout__content">
	<div class="">

	 <div class = "mdl-grid" >
               <div class = "mdl-cell mdl-cell--6-col graybox">



<form action="cadastrovetbanco.php" method="post">




  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
    <input class="mdl-textfield__input" name="nomevet" required  type="text" id="sample3">
    <label class="mdl-textfield__label" for="sample3">Nome do veterinário</label>
  </div>
  <br>
  <br>
  <br>
  <br>

			   <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
					<input class="mdl-textfield__input" name="email" required type="email"  id="sample3">
					<label class="mdl-textfield__label" for="sample3">Email</label>
					</div>




   </div>

			   <div class = "mdl-cell mdl-cell--6-col graybox">




					<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
						<input class="mdl-textfield__input" maxlength="10" name="crmv" type="number" required id="sample5" >
						<label class="mdl-textfield__label" for="sample5">CRMV</label>

					</div>

	  <br>
  <br>
  <br>
  <br>

					<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
						<input class="mdl-textfield__input" name="celular" required type="number" id="sample5" >
						<label class="mdl-textfield__label" for="sample5">Celular</label>
					</div>
<br>

				  <br>
  <br>
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