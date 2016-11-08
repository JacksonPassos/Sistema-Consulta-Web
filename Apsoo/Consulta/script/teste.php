<?php
include '../script/ConBanco.php';
conectaBaco();

$emaildigitado = "josimar.os23@gmail.com";
$senhadigitada = "ksa1124b";
$criptografada = crypt($senhadigitada);

$consulta = mysql_query("SELECT * FROM usuarios WHERE email = '$emaildigitado'") or die("erro ao selecionar");
$linha = mysql_fetch_assoc($consulta);

if ($linha['pws'] == crypt($senhadigitada,$linha['pws'])){
	echo "login ok";
}else{echo "login erro";}