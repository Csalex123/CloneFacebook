<?php 
session_start();

require_once('../conexao.php');

$usuario = $_POST['email'];
$senha = md5($_POST['senha']);


$sql = "SELECT * FROM usuarios where email = '$usuario' and  senha = '$senha' LIMIT 1 ";

$resultado = mysqli_query($con, $sql);

if ($resultado) {

	$array_de_dados = mysqli_fetch_assoc($resultado);
	

	if (isset($array_de_dados)) {
		$_SESSION['id_usuario'] = $array_de_dados['id_usuario'];
		$_SESSION['email'] = $array_de_dados['email'];
		$_SESSION['nome'] = $array_de_dados['nome'];
		$_SESSION['sobrenome'] = $array_de_dados['sobrenome'];
		$_SESSION['data_nascimento'] = $array_de_dados['data_nascimento'];

		header("Location: ../views/home.php");

	}else{
		header("Location: ../index.php?erro_login=1");
	}

}else{

	echo "Erro na execução da consulta, favor entrar em contato com o admin do site";

}


?>