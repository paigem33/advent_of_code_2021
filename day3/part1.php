<?php

include('input3.php');

// 000001100010 // 12

$new_array = [];

foreach($bits as $bit){
	$sub_bits = str_split($bit);
	array_push($new_array, $sub_bits);
}
$totals = [];

foreach($new_array as $array){
	foreach($array as $sub_index => $sub_array_item){
		if(!empty($totals[$sub_index][$sub_array_item])){
			$total = $totals[$sub_index][$sub_array_item];
		} else {
			$total = 0;
		}
		$totals[$sub_index][$sub_array_item] = $total + 1;
	}
}

$gamma_rate = '';
foreach($totals as $total){
	if($total[0] > $total[1]){
		$gamma_rate .= '0';
	} else {
		$gamma_rate .= '1';
	}
}

$decimal_gamma = bindec($gamma_rate);

$array_gamma = str_split($gamma_rate);

$epsilon_rate = '';
foreach($array_gamma as $char){
	if($char == '1'){
		$epsilon_rate .= '0';
	} else {
		$epsilon_rate .= '1';
	}
}

$decimal_epsilon = bindec($epsilon_rate);

echo $decimal_epsilon * $decimal_gamma;