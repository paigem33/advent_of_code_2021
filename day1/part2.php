<?php 

include('input1.php');

// 199  A      
// 200  A B    
// 208  A B C  
// 210    B C D
// 200  E   C D
// 207  E F   D
// 240  E F G  
// 269    F G H
// 260      G H
// 263        H

// A (199, 200, 208); their sum is 199 + 200 + 208 = 607. 
// B (200, 208, 210); its sum is 618.

// do a loop, and get next two values and add to current item 
// store last value in a variable to overwrite each time
// if new total is greater than that value, increase goes up by one

// $test = [
// 	199, 200, 208, 210, 200, 207, 240, 269, 260, 263
// ];

$increased = 0;
$previous_total = 0;
foreach($input_array1 as $key => $depth){
	if($key != 0 && !empty($input_array1[$key + 2]) && !empty($input_array1[$key + 1])){
		$total = $depth + $input_array1[$key + 1] + $input_array1[$key + 2];
		if($total > $previous_total){
			$increased++;
		}
		$previous_total = $total;
	}
}

echo $increased;