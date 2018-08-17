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
    $preco = $_GET["x"];
	echo "O preço do produto é R$ ".number_format($preco,2);
	$preco += ($preco*10/100);
	echo "</br> >>> Novo preço com 10% de aumento: R$ ".number_format($preco,2);
	$aa = $_GET["aa"];
	echo "</br> >>> Ano atual: $aa";
	$aa--;
	echo "</br> >>> Ano anterior: $aa";
?>
</h3>
</div>
</div>
</body>
</html>