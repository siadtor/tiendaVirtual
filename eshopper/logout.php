<?php 
session_start();
unset($_SESSION["USUARIO"]); 
unset($_SESSION["CARRITO"]);
session_destroy();
header("Location: index.php");
exit;
?>