<?php

$servidor		=		"localhost";
$user			=		"root";
$pass			=		"";
$banco			=		"med_system_db";

function conectaBaco(){
	mysql_connect("localhost","root","") or print (mysql_error());
	mysql_select_db("med_system_db") or print (mysql_erro());
	
}

function fechaBanco(){
	mysql_close();
}
