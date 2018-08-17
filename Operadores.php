<!DOCTYPE html>
<html lang = "pt-br">
<head>
<meta charset = "UTF-8">
<title>Operadores</title>
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
    $n1 = 3;
	$n2 = 2;
	$s = $n1 + $n2;
	$sb = $n1 - $n2;
	$m = $n1 * $n2;
	$d = $n1 / $n2;
	$md = $n1 % $n2;
    echo " $n1 + $n2 = ".$s;
	echo "<br/> >>> $n1 - $n2 = ".$sb;
	echo "<br/> >>> $n1 * $n2 = ".$m;
	echo "<br/> >>> $n1 / $n2 = ".$d;
	echo "<br/> >>> $n1 % $n2 = ".$md;
?>
</h3>
</div>
</div>
</body>
</html>