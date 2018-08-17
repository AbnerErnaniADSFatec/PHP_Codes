<!DOCTYPE html>
<html lang = "pt-br">
<head>
<meta charset = "UTF-8">
<title>Variaveis</title>
<link rel = 'stylesheet' type = 'text/css' href = '_css/estilo.css'/>
</head>
<body>
<div id = 'titulo' >
<h1>Testanto PHP</h1>
</div>
<div id = 'code' >
<h2>
Código Saída:</br>
</h2>
<div id = 'cmd'>
<h3>
>>>
<?php
    echo "Sem referência A = 3 e B = A + 5:";
    $a = 3;
	$b = $a;
	$b += 5;
	echo "</br> >>> Valor Atual: $a e $b";
	echo "</br> >>> Com referência A = 3 e B = A + 5:";
	$a = 3;
	$b = &$a;
	$b += 5;
	echo "</br> >>> Valor Atual: $a e $b";
?>
</h3>
</div>
</div>
</body>
</html>