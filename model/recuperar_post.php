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
		
		echo '<h5 style="font-size: 22px;">'.$post['nome'].' - <small style="font-size: 11px;"> '.$post['data_inclusao'].'</small></h5>';
		
		echo '<p>'.$post['conteudo'].'</p>';
		echo "<br> <br>";
	}

}else{
	echo "Erro na execução da consulta";
}


?>