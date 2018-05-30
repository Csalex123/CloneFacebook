<?php 

require_once('conexao.php'); // Incluindo a class de conexão.

$nome = addslashes($_POST['nome']);
$sobrenome = addslashes($_POST['sobrenome']);
$email = addslashes($_POST['email']);
$senha = addslashes(md5($_POST['senha']));
$data_nascimento = addslashes($_POST['data_nascimento']);
$sexo = addslashes($_POST['sexo']);


$consulta = mysqli_query($con, "SELECT * FROM usuarios WHERE email = '{$email}'") or print mysql_error();

if(mysqli_num_rows($consulta)>0) {
	header("Location: index.php?erro=1");
}else{

	$sql = "INSERT INTO usuarios (nome,  email, senha, sexo, data_nascimento, sobrenome) values ('$nome',  '$email', '$senha', '$sexo', '$data_nascimento', '$sobrenome')";

	$query = mysqli_query($con,$sql);

	if ($query) {
		header("Location: index.php?sucesso=1");
	}else{
		echo "Houve um erro. Tente novamente";
	}

}



?>