<?php
$ci=$_post["ci"];
$clave=$_post["clave"];
$tit=$_post["tit"];
include("conexion.php");
$con=mysql_query("select*from usuarios where ci='$ci'and clave='$clave'and tipo=Admin");
$n=mysql_num_rows($con);
if($n==0){echo"usuario o clave incorrectos o no tiene permiso de publicación";}
else
{$idtema="T".rand(1,9).rand(1,9).rand(1,9);
$fecha=date("y-m-d");
$con=mysql_query("insert into temas(idtema,titulo,fecha,ci)value('$idtema','$titulo','$fecha','$ci')");
//header("location:foro.php");
};
?>