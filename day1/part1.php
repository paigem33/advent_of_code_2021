<?php 

include('input1.php');

// How many measurements are larger than the previous measurement?
$increased = 0;
$count = 0;
foreach($input_array1 as $depth){
	if($count != 0 && !empty($depth)){
		if($depth > $array[$count-1]){
			// is larger than previous 
			$increased++;
		}
	}
	$count++;
}

echo $increased;

