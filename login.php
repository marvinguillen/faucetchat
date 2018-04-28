<?php
	
	include "config.php";
	session_start();
	if (isset($_SESSION['user']))
	{
		echo "Hola " .$_SESSION['user']. ", ya ingresaste tus credenciales.";
		?>
			<a href="logout.php">Cerrar Session </a>
		<?php
	}
	else
	{
		//echo "Debes llenar el siguiente formulario de datos";
		?>
		<div class="container">
			<form method="post" action ="logeo.php">
				<div class ="container_interno_uno">
					Usuario: <input  type ="text" name ="user">
				</div><!--FIN DE CONTAINER_INTERNO_UNO-->
				<div class ="container_interno_dos">
					Password: <input  type ="password" name ="pass">
				</div><!--FIN DE DIV CONTAINER_INTERNO_DOS-->
				<input align="center" type="submit" name="enviar" value="Acceder">
			</form> <!--FIN DE FORMULARIO DE LOGEO.PHP-->
		</div><!--FIN DE DIV CONTAINER-->
		<?php
	}
	//FIN DE CONDICION SI EXISTE LA SESSION
?><!--FIN DE ETIQUETA PHP-->

