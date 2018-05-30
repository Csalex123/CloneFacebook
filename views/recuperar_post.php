<?php 

session_start();

if (!isset($_SESSION['id_usuario'])) {
	header("Location: ../index.php?erro_login=1");


}



require_once('../conexao.php'); 

$id_usuario = $_SESSION['id_usuario'];



$sql = "SELECT f.id_post, f.id_usuario, f.conteudo,  DATE_FORMAT(f.data_inclusao, '%d/%l/%Y %H:%i:%s') AS data_inclusao, u.nome, u.sobrenome";  
$sql .= " FROM post AS f JOIN usuarios AS u on (f.id_usuario = u.id_usuario)";
$sql .= " WHERE u.id_usuario = '$id_usuario' ORDER BY data_inclusao DESC";


$query = mysqli_query($con, $sql);

if ($query) {

	while($post = mysqli_fetch_assoc($query)){
		
		echo '<span><b>'.$post['nome'].'</b> - <small> '.$post['data_inclusao'].'</small></span>';
		echo "<br>";
		echo '<p>'.$post['conteudo'].'</p>';
		echo '<div style="float: right;">';
			echo '<button class="btn blue" style="margin-right: 5px;"><i class="left material-icons">thumb_up</i>Gostei</button>';
			echo '<button class="btn red"><i class="left material-icons">thumb_down</i>Não gostei</button>';
		echo '</div>';
		echo "<br><br>";
		echo "<a>Comentário</a>";
		
		echo "<br><br><br><br>";
	}

}else{  
	echo "Erro na execução da consulta";
}


?>