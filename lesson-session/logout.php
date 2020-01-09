<?php
 
// Inicia a sessão
session_start();
 
// Muda o valor de logged_in para false
$_SESSION['logged_in'] = false;
 
// Finaliza a sessão
session_destroy();
 
// Retorna para a index.php
header('Location: index.php');