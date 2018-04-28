


<?php

include "config.php";
	session_start();
	if(isset($_SESSION['user']))
	{
	?>
	<form method="post" action="promen.php">
	<div class="container1">
		
		<div class ="containner_interno" >

							<iframe src="mensajes.php" name "iframe" width="700" height="400">
								
							</iframe><!--FIN DE FRAME-->
		</div><!--FIN DE CONTAINER_INTERNO-->
		<div class="container_texto">
						<input type ="text" size = " 90" name="mensaje">
						<button type="submit" name ="enviar">
							Enviar Mensaje
						</button><!--FIN DE BUTTON DE MENSAJE ENVIAR-->
			<div class="container_usuariocon">
					Estas conectado como 
					<?php

					 echo " " .$_SESSION['user']. " ";  
					?>
			</div><!--FIN DE CONTAINER_USUARIOCON-->
		</div>
		


	</div><!--FIN DE DIV CONTAINER1-->
	</form><!--FIN DE FORM PROMEN.PHP-->
	<?php
	}
	else
	{
		echo "Debes iniciar session para poder utilizar el chat";
		?>
		<a href="login.php"> Click aqui</a>;
		<?php
	}
?>







