<?php 
include 'conecta_banco';

// session_start inicia a sessão
session_start();

// as variáveis login e senha recebem os dados digitados na página anterior 

$login = $_POST['login'];
$senha = $_POST['password']; 
 
 // as próximas 3 linhas são responsáveis em se conectar com o bando de dados.

$con = mysql_connect("localhost", "root", "123456") or print mysql_error(); //die ("Sem conexão com o servidor"); 
$select = mysql_select_db("server");

$result = mysql_query("SELECT * FROM `usuarios` WHERE `login` = '$login' AND `senha`= '$senha'");


if(mysql_num_rows ($result) > 0 ) { 

$_SESSION['login'] = $login; 
$_SESSION['password'] = $senha;
header('location:admin_gerente/index.html'); 

 } 
	else
 	{
	  unset ($_SESSION['login']);
	  unset ($_SESSION['password']); 
	  header('location:login.php'); 
	} 


?>

