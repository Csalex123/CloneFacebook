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

			$('.dropdown-trigger').dropdown();
		});


		
	</script>
</head>
<body>
	<?php include('menu.php')?>


	<div class="conteiner">
		<div class="row">
			<!-- Conteiner do lado esquerdo -->
			<div class="col s3" >

				<div class="card-panel">
					<h5> Conectando você com o Mundo! </h5>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi consequat gravida augue vel faucibus. Vivamus at mollis dolor. Donec molestie leo vitae massa consectetur mattis. Morbi facilisis laoreet sem, eu eleifend est mattis a. Fusce ac pretium lacus. Praesent placerat ut libero a varius. Etiam posuere mollis faucibus. Suspendisse cursus consequat mauris in dapibus. Proin vitae tellus non est rutrum finibus.</p>

					<p>Vestibulum id vulputate orci. Ut ultricies, risus pharetra egestas imperdiet, magna tellus luctus ante, bibendum pharetra augue felis </p>
				</div>
			</div>
			

			
			<!-- Conteiner do meio -->
			<div class="col s6">

				<div class="card-panel">
					<h5> Conectando você com o Mundo! </h5>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi consequat gravida augue vel faucibus. Vivamus at mollis dolor. Donec molestie leo vitae massa consectetur mattis. Morbi facilisis laoreet sem, eu eleifend est mattis a. Fusce ac pretium lacus. Praesent placerat ut libero a varius. Etiam posuere mollis faucibus. Suspendisse cursus consequat mauris in dapibus. Proin vitae tellus non est rutrum finibus.</p>

					<p>Vestibulum id vulputate orci. Ut ultricies, risus pharetra egestas imperdiet, magna tellus luctus ante, bibendum pharetra augue felis </p>
				</div>

			</div>
			



			<!-- Conteiner do lado direito -->
			<div class="col s3">
				<div class="card-panel">
					<h5> Todos os seus amigos </h5>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi consequat gravida augue vel faucibus. Vivamus at mollis dolor. Donec molestie leo vitae massa consectetur mattis. Morbi facilisis laoreet sem, eu eleifend est mattis a. Fusce ac pretium lacus. Praesent placerat ut libero a varius. Etiam posuere mollis faucibus. Suspendisse cursus consequat mauris in dapibus. Proin vitae tellus non est rutrum finibus.</p>


				</div>
			</div>
		</div>

		
	</div>









	<?php include('rodape.php')?>

	<!--JavaScript at end of body for optimized loading-->
	<script type="text/javascript" src="materialize/js/materialize.min.js"></script>
</body>
</html>