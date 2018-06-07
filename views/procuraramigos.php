<?php  

if(!isset($_SESSION)) { 
	session_start(); 
} 

if (!isset($_SESSION['id_usuario'])) header("location: ../index.php?erro_falha=1");

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


		$(function (){

			//Se o btn foi clicado
			$("#btn_procurar").click( function(){
				var valor_input = $("#txt_nome").val();
				
				//verificar se o campo de texto possui caracteres
				if (valor_input.length > 0) {

					$.ajax({
						url: '../model/get_pessoa.php',
						method: "post",
						data: $('form').serialize(),

						success: function (data){
							$('#txt_nome').val('');
							$('#lista_de_amigos').html(data);


							$(".btn_seguir").click( function(){
								var id_usuario = $(this).data('id_usuario');
								$('#seguir_'+id_usuario).hide();
								$('#deixar_seguir'+id_usuario).show();

								$.ajax({
									url: '../model/seguir.php',
									method: 'post',
									data: {seguir_id_usuario : id_usuario},
									success: function (data){
										
									}

								});

								
							});

							$(".btn_deixar_seguir").click( function(){
								var id_usuario = $(this).data('id_usuario');

								$.ajax({
									url: '../model/deixar_seguir.php',
									method: 'post',
									data: {deixar_seguir_id_usuario : id_usuario},
									success: function(data){
										
									}
								});

								$('#deixar_seguir'+id_usuario).hide();
								$('#seguir_'+id_usuario).show();
								
							});
							
						}
					}); 
				}

			});

			
		});
	</script>

</head>
<body>
	<?php include('menu.php')?>


	<div class="conteiner">
		<div class="row">
			<!-- Conteiner do lado esquerdo -->
			<div class="col s3 "></div>

			<!-- Conteiner do meio -->
			<div class="col s6 ">
				<!-- Formulário de post -->
				<div class="card-panel">
					<div>
						<div class="row">
							<form class="col s12">
								<p style="font-size: 16px;" class="fontePadrao">Olá, <?php 
								$nome = $_SESSION['nome'];
								$sobrenome = $_SESSION['sobrenome'];
								echo "<b>$nome $sobrenome! </b> Procurando por novos amigos? "; 
								?></p>


								<div class="row center">
									<div class="input-field col s9">

										<!-- formulário -->
										<form >
											<textarea id="txt_nome" name="nome"  class="materialize-textarea" required="" maxlength="1000"></textarea>
											<label for="txt_nome"><i class="left material-icons">mode_edit</i>Por quem está procurando?</label>
										</div>
									</form>
									<div class="input-field col s3">
										<button type="button" id="btn_procurar" class="btn blue">procurar</button>
									</div>

								</div>
							</form>
						</div>
					</div>
				</div>
				<!-- Fim do Formulário de post -->

				<div class="card-panel">
					<h5 class="center-align"> Lista de pessoas </h5>
					<!-- os posts vão ser impresso aqui -->
					<div id="lista_de_amigos">



					</div>
				</div>

			</div>



			<!-- Conteiner do lado direito -->
			<div class="col s3 "></div>

		</div>


	</div>









	<?php include('rodape.php')?>

	<!--JavaScript at end of body for optimized loading-->
	<script type="text/javascript" src="materialize/js/materialize.min.js"></script>
</body>
</html>