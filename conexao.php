<?php 



$host = 'localhost';
$user = 'root';
$pwd = '';
$banco_de_dados	= 'facebook';


$con = mysqli_connect($host ,$user,$pwd,$banco_de_dados) or die("Erro ao conectar ao servidor: ".mysql_error());

//Caracteres UTF-8 Padrão
$con->set_charset("utf8");
 


?>