<?php
//codigo para conectarse con Base de datos MYSQL
// los parametros de entrada son host(servidor), usuario, contraseña y base de datos
//creamos la variable conex
$conex=mysqli_connect('localhost','id1745935_root','helios','id1745935_ventok');
//valida si esta correcta la conexion y muestra el mensaje
if($conex){ 
//echo "Conexion Correcta!";
}
else{ echo "error en la conexion!";}
?>