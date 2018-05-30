<?php 

$erro = isset($_GET['erro']) ? $_GET['erro'] : 0;
$sucesso = isset($_GET['sucesso']) ? $_GET['sucesso'] : 0;

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Rede Alex</title>

	<link rel="stylesheet" type="text/css" href="css/index.css">

	<!--Import Google Icon Font-->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

	

	<!--Import materialize.css-->
	<link type="text/css" rel="stylesheet" href="materialize/css/materialize.min.css"  media="screen,projection"/>

	

	<!--Let browser know website is optimized for mobile-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>



	<!-- jquery - link cdn -->
	<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$('.sidenav').sidenav();
		});

		
	</script>
</head>

<body style="background: linear-gradient(rgba(207, 207, 207, .8), rgba(232, 232, 232, 0.1));">

	<nav class="blue">
		<div class="nav-wrapper">
			<a href="#!" class="brand-logo fontePadrao">&nbsp;&nbsp;&nbsp;&nbsp;Rede Alex</a>
			<a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
			<ul class="right hide-on-med-and-down blue">
				<li>&nbsp;&nbsp;</li>
				<li><input placeholder="E-mail" type="email" style="margin-right:  50px; background: white; height: 33px;"></li>
				<li>&nbsp;&nbsp;</li>
				<li><input placeholder="Senha" type="password"  style="background: white; height: 33px;"></li>
				<li>&nbsp;&nbsp;</li>
				<li><button id="btn_enviar" class="waves-effect waves-light  green btn " >Entrar </button></li>
				<li>&nbsp;&nbsp;</li>
			</ul>
		</div>

	</nav>

	<ul class="sidenav" id="mobile-demo">
		<li><a href="sass.html">Sass</a></li>
		<li><a href="badges.html">Components</a></li>
		<li><a href="collapsible.html">Javascript</a></li>
		<li><a href="mobile.html">Mobile</a></li>
	</ul>




	<div class="row" style="margin-top: 50px;">


		<!-- Coluna 1 -->
		<div class="col s6">
			<div class="row">	
				<div class="col s12">
					<div class="card-panel hoverable">
						<center>
							<img class="responsive-img " src="img/planodefundo4.png" >
						</center>
						<h5> Conectando você com o Mundo! </h5>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi consequat gravida augue vel faucibus. Vivamus at mollis dolor. Donec molestie leo vitae massa consectetur mattis. Morbi facilisis laoreet sem, eu eleifend est mattis a. Fusce ac pretium lacus. Praesent placerat ut libero a varius. Etiam posuere mollis faucibus. Suspendisse cursus consequat mauris in dapibus. Proin vitae tellus non est rutrum finibus.</p>

						<p>Vestibulum id vulputate orci. Ut ultricies, risus pharetra egestas imperdiet, magna tellus luctus ante, bibendum pharetra augue felis </p>

					</div>

				</div>
			</div>
		</div>
		<!-- Coluna 3 -->
		<div class="col s6">


			<div class="card-panel ">
				<?php  if ($erro == 1 ) {
					echo '<p style="color: red; font-size: 1.2em;" ><i class="material-icons left">clear</i>Já existe uma pessoa cadastrada com este E-mail</p>';
				}

				if ($sucesso == 1) {
					echo '<p style="color: green; font-size: 1.2em;" ><i class="material-icons left">check</i> Conta cadastrada com sucesso</p>';
				}
			 ?>


			<div class="row">
				<form class="col s12" action="registrar_usuario.php" method="post">
					<div class="row">
						<div class="input-field col s6" >
							<i class="material-icons prefix">account_circle</i>
							<input id="nome" name="nome" type="text" class="validate">
							<label for="nome" class="fontePadrao" style="color: black;">Nome</label>
						</div>
						<div class="input-field col s6">
							<input id="Sobrenome" name="sobrenome" type="text" class="validate">
							<label for="Sobrenome"  class="fontePadrao" style="color: black;">Sobrenome</label>
						</div>
					</div>
					<div class="row">
						<div class="input-field col s10">
							<input id="email" name="email" type="email" class="validate">
							<label for="email" style="color: black;">E-mail</label>
						</div>
					</div>

					<div class="row">
						<div class="input-field col s6">
							<input id="senha" name="senha" type="password" class="validate">
							<label for="senha"  class="fontePadrao" style="color: black;">Senha</label>
						</div>
					</div>

					<div class="row">
						<div class="input-field col s4">
							<input name="data_nascimento"  type="date" class="validate">
						</div>
					</div>

					<div class="row">
						<label>
							<input  name="sexo" value="M" type="radio" />
							<span>Masculino</span>
						</label>
						<label>
							<input  name="sexo" value="F" type="radio" />
							<span>Feminino</span>
						</label>
					</div><br>

					<div class="row">
						<label>
							<input type="checkbox" />
							<span  class="fontePadrao" style="color: black;">Aceite os termos</span>
						</label>
					</div>


					<div class="row">
						<button id="btn_enviar" type="submit" class="waves-effect waves-light btn green" style="float: right;">Cadastra-se </button>
					</div>

				</div>
			</form>
		</div>
	</div>
</div>
</div>


<?php include('rodape.php')?>

<!--JavaScript at end of body for optimized loading-->
<script type="text/javascript" src="materialize/js/materialize.min.js"></script>
</body>
</html>