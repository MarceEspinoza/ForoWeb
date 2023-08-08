<?php
$ci=$_post["ci"];
$nom=$_post["nom"];
$sexo=$_post["sexo"];
$clave=$_post["clave"];
$clave2=$_post["clave2"];
$tipo="Regular"
$freg=Date("Y-m-d");
if($clave==$clave2)
	{
		include("conexion.php");
		$consulta=mysql_query("insert into usuarios(ci,nom,sexo,clave,tipo,freg)
		values('$ci','$nom,'$sexo','$clave','$tipo','$freg')");
		header("location:temaver.php");
	}
else
	{
		echo"Claves no coinciden";
		echo"<a href=usureg.php> Volver </a>";
	}	
?>