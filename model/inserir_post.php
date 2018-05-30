<?php 
session_start();

require_once('../conexao.php'); 

$id_usuario = $_SESSION['id_usuario'];
$post = addslashes($_POST['txt_post']);

$sql = "INSERT INTO post (id_usuario, conteudo) values ('$id_usuario',  '$post')";
$query = mysqli_query($con, $sql);

if ($query) {
	echo "Post incluido com sucesso";
}else{
	echo "Erro";
}


?>