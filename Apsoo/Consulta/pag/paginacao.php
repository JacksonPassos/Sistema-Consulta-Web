<?php
$cod = $_GET['cod'];

switch ($cod){
	case '100';
	include 'formemailusuario.html';
		break;
	case '101';
		include 'formnumerocarteira.html';
		break;
	case '102';
		include 'formnumerocpf.html';
		break;
	case '103';
		include 'criarLogin.php';
		break;
	case '104';
		include 'recuperarSenha.html';
		break;
}