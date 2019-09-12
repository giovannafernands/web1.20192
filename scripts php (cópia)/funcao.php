<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php 

					$v1= $_GET["f"];
					$v2= $_GET["g"];
echo "<h2>Valores recebidos: $v1 e $v2</h2>";
echo "O valor absoluto de $v2 é ". abs($v2);
echo "<br>O valor de $v1 <sup>$v2</sup> é  	". pow($v1, $v2);
echo "<br> A raiz de $v1 é " .sqrt($v1);
echo "<br> O valor de $v2 arredondado é " . round($v2);//ceil, floor
	 ?>
</body>
</html>