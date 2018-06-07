<?php 
session_start();

if (!isset($_SESSION['id_usuario'])) {
	header("Location: ../index.php?erro_login=1");


}
require_once('../conexao.php'); 

$id_usuario = $_SESSION['id_usuario'];
$nome = $_POST['nome'];

$sql = "SELECT u. *,  us.id_usuario_seguidor FROM usuarios as u ";
$sql .= "LEFT JOIN usuarios_seguidor as us ON (u.id_usuario = us.seguindo_id_usuario AND us.id_usuario = '$id_usuario' ) ";
$sql .= "WHERE u.nome LIKE '%$nome%' AND u.id_usuario <> '$id_usuario'";  




$query = mysqli_query($con, $sql); 

$valor_de_usuario = mysqli_fetch_array($query);

if ($valor_de_usuario == null) {
	
	echo '<p>Não existem ninguém com o nome '.'<b>'.$nome.'</b>'.'.</p>';
	
}else{

	if ($query) {

		while($usuarios = mysqli_fetch_assoc($query)){


			$esta_seguindo_usuario_sn = isset($usuarios['id_usuario_seguidor']) && !empty($usuarios['id_usuario_seguidor']) ? 'S' : 'N';


			echo '<p style="font-size: 18px;"><strong>'.ucfirst($usuarios['nome']).'</strong><small style="font-size: 14px;"> - '.$usuarios['email'].'</small></p><br>';

			$btn_seguir_display = "block";
			$btn_deixar_seguir_display = "block";

			if ($esta_seguindo_usuario_sn == 'N') {
				$btn_deixar_seguir_display = 'none';

			}else{
				$btn_seguir_display = 'none';
			}

			echo '<button type="button" class="waves-effect waves-light btn blue btn_seguir" id="seguir_'.$usuarios['id_usuario'].'" data-id_usuario="'.$usuarios['id_usuario'].'" style="display: '.$btn_seguir_display.' ;"> <i class="material-icons left">add</i>Adicionar</button>';

			echo '<button  type="button" class="waves-effect waves-light btn red btn_deixar_seguir" id="deixar_seguir'.$usuarios['id_usuario'].'" data-id_usuario="'.$usuarios['id_usuario'].'" style="display: '.$btn_deixar_seguir_display.';"><i class="material-icons left">close</i>Desfazer amizade</button>';

			echo "<br>";
			echo "<hr>";

		}
	}
}





?>