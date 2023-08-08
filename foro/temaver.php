<html>
<head>
  <title></title>
</head>
<body>
<?php
	include("menu.html");
?>
<h2>LISTA DE TEMAS</h2>
<link rel="shortcut icon" href="favicon.ico">
<?php
include("conexion.php");
$consulta=mysql_query("select*from temas,usuario where temas.ci=usuario.ci");
$n=mysql_num_rows($consulta);
echo"Existen $n temas para comentar<br>";
for($i=1;$i<=$n;$i++)
{
$fila=mysql_fetch_array($consulta);
$titulo=$fila["titulo"];
$fecha=$fila["fecha"];
$nom=$fila["nom"];
$idtema=$fila["idtema"];
$con=mysql_query("select count(*)from comentarios where idtema='idtema'");
$nc=mysql_num_rows($con);
echo"$titulo<br>Publicado por:$nom $nbsp;$nbsp;$nbsp;Fecha:$fe$nbsp;$nbsp;$nbsp;
<a href='comform.php?idtema=$idtema'>Comentar</a>&nbps;($nc)<br><br>";
echo"<a href='elimina.php'target='_self'><img src='ico.ico'border='0'/></a><br>";
};
?>
</body>
</html>