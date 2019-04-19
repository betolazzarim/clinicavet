<html>
<head>
<link rel="stylesheet" type="text/css" href="csstelaprincipal.css">
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
      <a class="mdl-navigation__link" href="">Prontuario</a>
    </nav>
  </div>
	
	<main class="mdl-layout__content">
	<div class="pront1">
	
	 <div class = "mdl-grid">
               <div class = "mdl-cell mdl-cell--6-col graybox">
			   
 
<form action="#">

  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
    <input class="mdl-textfield__input"  type="text" value="157" name="codigoanimal" id="sample3">
    <label class="mdl-textfield__label" for="sample3">Código Animal</label>
  </div>

  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
    <input class="mdl-textfield__input"  type="text" value="Thor" name="nome" id="sample3">
    <label class="mdl-textfield__label" for="sample3">Nome</label>
	
  </div>
  
 
    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
    <input class="mdl-textfield__input"  type="text" value="Pinscher" id="sample3">
    <label class="mdl-textfield__label" for="sample3">Raça</label>
  </div>
  
  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
    <input class="mdl-textfield__input"  type="text" value="23kg" id="sample3">
    <label class="mdl-textfield__label" for="sample3">Peso</label>
  </div>
  
  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
    <input class="mdl-textfield__input"  type="text" value="Masculino" id="sample3">
    <label class="mdl-textfield__label" for="sample3">Sexo</label>
  </div>
  
  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
    <input class="mdl-textfield__input"  type="data" value= "21/02/12"id="sample3">
    <label class="mdl-textfield__label" for="sample3">Nascimento</label>
  </div>
     <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
    <input class="mdl-textfield__input"  type="text" value="Leao" id="sample3">
    <label class="mdl-textfield__label" for="sample3">Espécie</label>
  </div>

  
 
 
	</form>
			   
			   </div>
               <div class = "mdl-cell mdl-cell--6-col graybox">
			   
			    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
				<input class="mdl-textfield__input"  type="text" value="423" id="sample3">
				<label class="mdl-textfield__label" for="sample3">Código do cliente</label>
				</div>
				<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
				<input class="mdl-textfield__input"  type="text" value="423" id="sample3">
				<label class="mdl-textfield__label" for="sample3">Código da consulta</label>
				</div>  
				<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
				<textarea class="mdl-textfield__input" type="text" id="sample5" ></textarea>
				<label class="mdl-textfield__label" for="sample5">Observacoes</label>
						 
				</div><br>
					
				<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
				<input class="mdl-textfield__input"  type="text" value="Dor de cabeça descontrolada" id="sample3">
				<label class="mdl-textfield__label" for="sample3">Receita</label>
				</div>
					
			   <button class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored">
  Salvar
</button>
		<button class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored">
  Cancelar
</button>	   
			   </div>
    </div>

  
 
</div>
	

  </main>

	
</body>
</html>