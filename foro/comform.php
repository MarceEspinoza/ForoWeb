<html>
<head><title> </title>
</head>
<body>
<h2> PUBLICAR COMENTARIOS </h2>
<?php
$idtema=$_get("idtema");
echo"<form method=post action=comguardar.php">
<input type=hidden name=ci size=10 value=$idtema><br>
C.I.:<input type=text name=ci size=10><br>
Clave:<input type=password name=clave size=20><br>
Contenido del comentario:<br>
<textarea name=contenido rows=5 cols=50>Escribe aquí...</textarea><br>
<input type=submit value=Comentar>
</form>
?>
</body>
</html>