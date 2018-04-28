<?php
include "config.php";
if ($mysqli->connect_errno) {
    echo "Falló la conexión a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}



$resultado = $mysqli->query("SELECT * FROM datachat ");

for ($num_fila = $resultado->num_rows - 1; $num_fila >= 0; $num_fila--) {
    $resultado->data_seek($num_fila);
    $fila = $resultado->fetch_assoc();
    echo "" . $fila['usuario'] . " :   " .$fila['mensaje'].  "\n";
    echo "<br>";
}
header('refresh:5; mensajes.php');

?>
