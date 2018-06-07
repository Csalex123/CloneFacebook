<?php 
session_start();

if (!isset($_SESSION['id_usuario'])) {
	header("Location: ../index.php?erro_login=1");


}




require_once('../conexao.php'); 

$id_usuario = $_SESSION['id_usuario'];
$deixar_seguir_id_usuario = $_POST['deixar_seguir_id_usuario'];


$sql = "DELETE FROM usuarios_seguidor where id_usuario = '$id_usuario' and seguindo_id_usuario = '$deixar_seguir_id_usuario'";

$query = mysqli_query($con, $sql);

if ($query) {
	echo "Deixado de seguir com sucesso";
}else{
	echo "Erro";
}



?>