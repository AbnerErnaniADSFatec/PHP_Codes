<!DOCTYPE html>
<html lang = "pt-br">
<head>
<meta charset = "UTF-8">
<title>Estrutura Condicional</title>
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
    $a = $_GET['x'];
	$b = $_GET['y'];
	if( $a < $b ){
		echo "$a < $b";
	}else{
		echo "$a >= $b";
	}
	$maior = $a>$b?$a:$b;
	echo "</br> >>> Maior = $maior";
?>
</h3>
</div>
</div>
</body>
</html>