<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Pagina de Teste</title>
</head>

<?php  session_start();

if((!isset ($_SESSION['login']) == true) and (!isset ($_SESSION['password']) == true)) 
{ 

unset($_SESSION['login']);
unset($_SESSION['password']); 
header('location:login.php'); 

} 

$logado = $_SESSION['login']; 

?>




<body>
</body>
</html>