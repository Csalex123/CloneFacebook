<?php 
session_start();

if (!isset($_SESSION['id_usuario'])) {
	header("Location: ../index.php?erro_login=1");


}


require_once('../conexao.php'); 

$id_usuario = $_SESSION['id_usuario'];
$seguir_id_usuario = $_POST['seguir_id_usuario'];


$sql = "INSERT INTO usuarios_seguidor (id_usuario, seguindo_id_usuario) values ('$id_usuario',  '$seguir_id_usuario')";

$query = mysqli_query($con, $sql);

if ($query) {
	echo "Seguido com sucesso";
}else{
	echo "Erro";
}




?>