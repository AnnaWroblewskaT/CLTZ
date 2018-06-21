<?php

$numbers = [1,2,3,4,5];

print_r(smallNumbers($numbers));

function smallNumbers($numbers) {
	$count = count($numbers);
	$sum = array_sum($numbers);
	$middle = $sum/$count;
	$result = array();

	foreach($numbers as $number) {
		if ($number < $middle) {
			$result[]= $number;
		}
	}

	return $result;
}

?>
