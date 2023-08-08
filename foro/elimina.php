<html>
<head>
<title></title>
<body>
<?php
$id=$_get["id"];
echo"
<h2>Eliminar tema</h2>
<form method=post action=elimina2.php>
<input type=hidden name=idtema size=15 value=$idtema><br>
Clave:<input type=password name=clave size=20><br>
Usuario:<input type=text name=ci size=10><br>
<input type=submit value=eliminar>
</form>";
?>
</body>
</html> 