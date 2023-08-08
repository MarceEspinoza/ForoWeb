<?php
$idtema=$_post["idtema"];
$ci=$_post["ci"];
$clave=$_post["clave"];
//echo"$idtema $ci $clave";
//verificar que el usuario existe
include("conexiom.php");
$con=mysql_query("select*from usuario where ci='$ci'and clave='$clave'");
$n=mysql_num_rows($con);
if($n==1)
{
//verificar que este usuario publico el tema
$con2=mysql_query("select* from temas where idtema='$idtema' and ci='$ci'");
$n2=mysql_num_rows($con2);
if($n2==1)
{
$con3=mysql_query("delete from temas where idtema='$idtema'");
$con4=mysql_query("delete from comentarios where idtema='$idtema'");
else{
echo"Usted no publico el tema"
};
};
?>