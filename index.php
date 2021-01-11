<?php
include('./Class/Calculator.php');

//1 _ naudojama var_dump f-ja
function vd($var)
{
	echo "<pre>";
	var_dump($var);
	echo "</pre>";
}
?>
<!-- // 2 -->
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>class calculator</title>
</head>

<body>

	<?php

	// 3 _ sukuriamas naujas objektas
	$calculator = new Calculator(10, 50);

	echo '<h2>' . $calculator->add() . '</h2>';
	echo '<h2>' . $calculator->subtract() . '</h2>';
	echo '<h2>' . $calculator->multiply() . '</h2>';
	echo '<h2>' . $calculator->divide() . '</h2>';

	vd($calculator);
	?>

</body>

</html>