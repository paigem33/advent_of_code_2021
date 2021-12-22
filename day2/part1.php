<?php 

include('input2.php');

$depth = 0;
$position = 0;

foreach ($directions as $direction){
	$amount = preg_replace('/\D/', '', $direction);
	if(strpos($direction, 'forward') !== false){
		$position += $amount;
	} else if(strpos($direction, 'up') !== false){
		$depth -= $amount;
	} else if(strpos($direction, 'down') !== false){
		$depth += $amount;
	}
}

echo $depth * $position;