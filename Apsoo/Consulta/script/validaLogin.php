<?php
$tipoFormulario = $_POST ['form'];

switch ($tipoFormulario) {
	case '1' :
		login1();
		break;
	case '2' :
		login2();
		break;
	case '3' :
		login3();
		break;
}
function login1() {
	echo "conectando com o banco de dados 01";
	$inputEmail 	= $_POST['inputEmail'];
	include 'marcarConsulta.html';
	$inputPassword 	= $_POST['inputPassword'];
	echo $inputEmail." ".$inputPassword;
}
function login2() {
	echo "conectando com o banco de dados 02";
	include 'marcarConsulta.html';
	$inputCarteira	= $_POST['inputCarteira'];
	$dNascimento	= $_POST['dNascimento'];
}
function login3() {
	echo "conectando com o banco de dados 03";
	include 'marcarConsulta.html';
	$inputCpf 		= $_POST['inputCpf'];
	$dNascimento	= $_POST['dNascimento'];


}