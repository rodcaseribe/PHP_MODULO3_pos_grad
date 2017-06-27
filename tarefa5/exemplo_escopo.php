<html>
<head>
</head>
<body style="background-color:#E6E6FA">
</body>
</html>

<?php
class funcaoclass {
    const CONST_VALUE = 'VALOR FIXO';
}

$var1 = 'funcaoclass';
echo "<div align=center><font color=red>Chamando pelo nome da função<br></font>".$var1::CONST_VALUE."<br><br>";

echo "<font color=red>Acessando pela funcao</font><br>".funcaoclass::CONST_VALUE."</div>";
?>
