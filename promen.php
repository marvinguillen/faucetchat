<?php

	include "config.php";
		session_start();
	if(isset($_POST['enviar']))
	{
		$user	=	$_SESSION['user'];
		$mensaje	= 	$_POST['mensaje'];
		echo " hola"  .$_SESSION['user']. " " .$_POST['mensaje']. "";
		try{
		$mysqli->query("INSERT INTO datachat (usuario,mensaje) VALUES ('$user', '$mensaje')");
		}
		 catch (Exception $e) {
		 	echo "Error de insercion de la data";

		 }

		
		header("location: index.php"); 
	}
	else{
		echo "Error";
	}
	?>