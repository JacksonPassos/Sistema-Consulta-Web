<?php
include '../script/ConBanco.php';
conectaBaco ();

$tipoFormulario = $_POST ['form'];

switch ($tipoFormulario) {
	case '1' :
		login1 ();
		break;
	case '2' :
		login2 ();
		break;
	case '3' :
		login3 ();
		break;
}
function login1() {
<<<<<<< HEAD
	echo "conectando com o banco de dados 01";
	$inputEmail 	= $_POST['inputEmail'];
	include 'marcarConsulta.php';
	$inputPassword 	= $_POST['inputPassword'];
	echo $inputEmail." ".$inputPassword;
}
function login2() {
	echo "conectando com o banco de dados 02";
	include 'marcarConsulta.php';
	$inputCarteira	= $_POST['inputCarteira'];
	$dNascimento	= $_POST['dNascimento'];
}
function login3() {
	echo "conectando com o banco de dados 03";
	include 'marcarConsulta.php';
	$inputCpf 		= $_POST['inputCpf'];
	$dNascimento	= $_POST['dNascimento'];


=======
	$inputEmail = $_POST ['inputEmail'];
	$inputPassword = $_POST ['inputPassword'];
	$consulta = mysql_query ( "SELECT * FROM usuarios WHERE email = '$inputEmail'" ) or die ( "erro ao selecionar" );
	$linha = mysql_fetch_assoc ( $consulta );
	if ($inputEmail == $linha ['email'] and $linha ['pws'] == crypt ( $inputPassword, $linha ['pws'] )) {
		header ( "location:../pag/marcarConsulta.php" );
	}
}
function login2() {
	$inputCarteira = $_POST ['inputCarteira'];
	$dNascimento = $_POST ['dNascimento'];
	
	$consulta = mysql_query ( "SELECT * FROM usuarios WHERE carteira = '$inputCarteira'" ) or die ( "erro ao selecionar" );
	$linha = mysql_fetch_assoc ( $consulta );
	if ($inputCarteira == $linha ['carteira'] and $dNascimento == $linha ['dnascimento']) {
		header ( "location:../pag/marcarConsulta.php" );
	}
}
function login3() {
	$inputCpf = $_POST ['inputCpf'];
	$dNascimento = $_POST ['dNascimento'];
	$consulta = mysql_query ( "SELECT * FROM usuarios WHERE cpf = '$inputCpf'" ) or die ( "erro ao selecionar" );
	$linha = mysql_fetch_assoc ( $consulta );
	if ($inputCpf == $linha ['cpf'] and $dNascimento == $linha ['dnascimento']) {
		print 'ok';
		header ( "location:../pag/marcarConsulta.php" );
	}
>>>>>>> 4faac9693dce72d52727f2d998d7350f2caa1ce5
}
