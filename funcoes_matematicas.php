<!DOCTYPE html>
<html lang = "pt-br">
<head>
<meta charset = "UTF-8">
<title>Funções Matemáticas</title>
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
    $n1 = 2;
	$n2 = 9;
	$n3 = 3.14159;
	$n4 = '24';
	echo "Valores Recebidos $n1, $n2, $n3 e a string $n4: ";
    echo "<br/> >>> abs($n1 + $n2) = ".abs($n1 - $n2);
	echo "<br/> >>> pow($n1, $n2) = ".pow($n2, $n1);
	echo "<br/> >>> sqrt($n2) = ".sqrt($n2);
	echo "<br/> >>> round($n3) = ".round($n3);
	echo "<br/> >>> intval($n3) = ".intval($n3);
	echo "<br/> >>> number_format('$n4') = ".number_format($n4);
?>
</h3>
</div>
</div>
</body>
</html>