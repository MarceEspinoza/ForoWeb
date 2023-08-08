<?php
$idtema=$_post["idtema"];
$ci=$_post["ci"];
$clave=$_post["clave"];
$contenido=$_post["cont"];
$idcom='C'.rand(1,9).rand(1,9).rand(1,9).rand(1,9).rand(1,9).rand(1,9).rand(1,9).rand(1,9).rand(1,9);
$fechacom=date("y-m-d");
$e='1';
include("conexion.php");
$consulta=mysql_query("insert into comentarios(idcom,contenido,fechacom,ci,idtema,e)values('$idcom','$contenido','$fechacom','$ci','$idtema','$e')");
header("location:temaver.php");
?>