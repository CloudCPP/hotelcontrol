<?php
session_start();
require_once('login.class.php');
/*if($_SESSION['logado']){
	
	// logar
}*/
?>
<html>
<head>
<title> HotelControl</title>
<style>

</style>
</head>
<body>
<form method="get">
login: <input type="text" /><br />
senha: <input type="password" />
<input type="submit" />

</form>
</body>
</html>