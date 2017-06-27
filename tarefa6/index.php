<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<body bgcolor="#ffe6e6">
<div align="center">
<form method="post">
Digite a Medida do RAIO:
<input type="text" name="resultado" id="resultado">
<br>
Fórmula: C = 2 x PI x R;<br>
<input type="submit" name="submit" id="submit" value="Enviar">


<?php

echo "<br>";
if(isset($_REQUEST['submit']))
{
$resultado=$_REQUEST['resultado'];
if($resultado>0){
echo "Seu Raio:".$resultado;
echo "<br>Seu Perímetro";
echo (2*3.14*$resultado);
echo "<br>Seu Volume:";
$resultado2=pow($resultado,3);
echo (4*3.14*$resultado2)/3;
}
else{echo "Você não pode digitar número negativo";}
}

?>
</form></div>
</body>
