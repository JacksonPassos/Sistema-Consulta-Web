<?php
include 'Conbanco.php';
conectaBaco();
$firstname 		= $_POST['firstname'];
$lastname 		= $_POST['lastname'];
$youremail 		= $_POST['youremail'];
$reenteremail 	= $_POST['reenteremail'];
$cpf 			= $_POST['cpf'];
$carteira		= $_POST['carteira'];
$password 		= $_POST['password'];
$dia 			= $_POST['dia'];
$mes 			= $_POST['mes'];
$ano 			= $_POST['ano'];
$sex 			= $_POST['sex'];
$dtaNascimento 		= $dia."/".$mes."/".$ano;

$query = "INSERT INTO `usuarios`(
		`nome`,
		`sobrenome`,
		`email`,
		`cpf`,
		`carteira`,
		`pws`,
		`sexo`,
		`dnascimento`
		) 
		VALUES (
		'".$firstname."',
		'".$lastname."',
		'".$youremail."',
		'".$cpf."',
		'".$carteira."',
		'".$password."',
		'".$sex."',
		'".$dtaNascimento."')
		";

$inserir = mysql_query($query);

if ($inserir){
	echo "dados inserirdos";
}else {
	echo "erro";
}