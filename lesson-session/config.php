<?php 

	session_start();
	require_once "GoogleAPI/vendor/autoload.php";

	$googleClient = new Google_Client();
	$googleClient->setClientId("");
	$googleClient->setClientSecret("");

?>