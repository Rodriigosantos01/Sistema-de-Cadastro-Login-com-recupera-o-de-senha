<?php 
	session_start();
if (!$_SESSION['logado']){
	header("location: index.php");
} 

echo $_SESSION['msg'];
	unset($_SESSION['msg']);
?>
<p><a href="logout.php">sair<a></p>
