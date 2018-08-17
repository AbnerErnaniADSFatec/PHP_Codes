<!DOCTYPE html>
<html lang = "pt-br">
<head>
<meta charset = "UTF-8">
<title>Vetores</title>
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
    $array_1 = array(1,2,3);
	print_r($array_1);
	echo "</br>";
	var_dump($array_1);
	echo $array_1[0];
    $array_2 = array( "foo" => "bar", "bar" => "foo");
	$x = $array_2["foo"];
	echo "</br>";
	echo $x;
	unset($array_2[0]);
	unset($array_2);
	//var_dump($array_2);
?>
</h3>
</div>
</div>
</body>
</html>